<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Slide;
use Symfony\Component\HttpFoundation\Request;

class SlideController extends Controller
{
    public function index() {
        $slides = Slide::all();
        return view('welcome')->with(compact('slides'));
    }

    public function dashboard() {
        $slides = Slide::all();
        return view('dashboard')->with(compact('slides'));
    }

    public function add() {
        return view('slider.add');
    }

    public function store(Request $request) {
        $slide = new Slide($request->all());
        $slide->save();
        return redirect()->route('dashboard');   
    }
    
    public function edit($id) {
        $slide = Slide::find($id);
        return view('slider.edit')->with(compact('slide'));
    }

    public function update(Request $request, $id) {
        $slide = Slide::find($id);
        $slide->eventname = $request->get('eventname');
        $slide->col_name_1 = $request->get('col_name_1');
        $slide->col_1 = $request->get('col_1');
        $slide->col_name_2 = $request->get('col_name_2');
        $slide->col_2 = $request->get('col_2');
        $slide->col_name_3 = $request->get('col_name_3');
        $slide->col_3 = $request->get('col_3');
        $slide->qr = $request->get('qr');
        $slide->image_path = $request->get('image_path');
        $slide->save();
        return redirect()->route('dashboard');   
    }

    public function delete($slide) {
        $slide = Slide::destroy($slide);
        return redirect()->route('dashboard');   
    }
}