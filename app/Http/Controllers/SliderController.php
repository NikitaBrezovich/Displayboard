<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class SliderController extends Controller
{
    public function index() {
        $sliders = Slider::with(['slides'])->get();
        return view('displayboard.index')->with(compact('sliders'));
    }

    public function add() {
        $slides = Slide::all();

        return view('displayboard.add')->with(compact('slides'));
    }

    public function store(Request $request) {
        $slides = $request->get('slides');
        $request = $request->except(['slides']);
        $slider = new Slider($request);
        $slider->save();
        $slider->slides()->sync($slides);$slider->slides()->sync($slides);
        return redirect()->route('displayboard.index');
    }

    public function edit($id) {
        $slider = Slider::find($id);
        $slides = Slide::all();
        return view('displayboard.edit')->with(compact('slider', 'slides'));
    }

    public function update(Request $request, $id) {
        $slider = Slider::find($id);
        $slides = $request->get('slides');
        $request = $request->except(['slides']);
        $slider->update($request);
        $slider->slides()->sync($slides);
        return redirect()->route('displayboard.index');
    }

    public function delete ( $slider) {
        Slider::find($slider)->slides()->sync([]);
        $slider = Slider::destroy($slider);
        return redirect()->route('displayboard.index');
    }

    public function show ($id) {
        $slider = Slider::with(['slides' => function($q) {
            $q->where('slides.active', '=', 1);
        }])->find($id);
        return view('welcome')->with(compact('slider'));
    }

    public function activate($id) {
        $slider = Slider::find($id);
        $slider->active = '1';
        $slider->save();
        return redirect()->route('displayboard.index');
    }

    public function deactivate($id) {
        $slider = Slider::find($id);
        $slider->active = '0';
        $slider->save();
        return redirect()->route('displayboard.index');
    }

    public function updatedSince(Request $request, $id) {
        $reload = false;
        $lastSync = $request->get('last_sync');
        $lastSyncDate = Carbon::parse($lastSync);
        $updatedSlides = Slide::where('updated_at', '>=', $lastSyncDate)->get();
        if($updatedSlides->count()) {
            $reload = true;
        };

        return response()->json(['reload' => $reload]);
    }
}
