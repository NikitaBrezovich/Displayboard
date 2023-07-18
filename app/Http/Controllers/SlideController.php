<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Slide;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;
use Symfony\Component\HttpFoundation\Request;
use \Bkwld\Cloner\Cloneable;

class SlideController extends Controller
{
    public function index() {
        $slides = Slide::with(['sliders'])->get();
        return view('slides.index')->with(compact('slides'));
    }

    public function dashboard() {
        $slides = Slide::with(['sliders'])->get();
        return view('dashboard')->with(compact('slides'));
    }

    public function add() {
       $sliders = Slider::all();
       return view('slides.add')->with(compact('sliders'));
    }

    public function store(Request $request) {
        $attributes = $request->except(['image']);
        unset($attributes["sliders"]);
        $slide = new Slide($attributes);
        $image = $request->file('image');
        if(isset($image)) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $filename = date('YmdHi') . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $filename);
            $slide->image_path = $filename;
        };
        $slide->save();
        if(empty($slide->eventname)) {
            $slide->update(['eventname'=>'Event' . '_' . $slide->id]);
        };
        $sliders = $request->get('sliders');
        $request = $request->except(['sliders']);
        $slide->sliders()->sync($sliders);
        return redirect()->route('dashboard');
    }

    public function edit($id) {
        $slide = Slide::find($id);
        $sliders = Slider::all();
        return view('slides.edit')->with(compact('slide', 'sliders'));
    }

    public function update(Request $request, $id) {
        $slide = Slide::find($id);
        $image = $request->file('image');
        $sliders = $request->get('sliders');
        if(isset($image)) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $filename = date('YmdHi') . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $filename);
            $slide->image_path = $filename;
        } else {
            $slide->image_path = null;
        }
        $request = $request->except(['image', 'sliders']);
        $slide->update($request);
        $slide->sliders()->sync($sliders);
        return redirect()->route('dashboard');
    }

    public function activate($id) {
        $slide = Slide::find($id);
        $slide->active = '1';
        $slide->save();
        return redirect()->route('dashboard');
    }

    public function deactivate($id) {
        $slide = Slide::find($id);
        $slide->active = '0';
        $slide->save();
        return redirect()->route('dashboard');
    }



    public function delete($slide) {
        Slide::find($slide)->sliders()->sync([]);
        $slide = Slide::destroy($slide);
        return redirect()->route('dashboard');
    }

    public function duplicate($id) {
        $slide = Slide::find($id);
        $newSlide = $slide->duplicate();
        $newSlide->created_at = Carbon::now();
        $newSlide->eventname = $slide->eventname . '_Kopie';
        $newSlide->save();
        return redirect()->route('dashboard');


    }
}
