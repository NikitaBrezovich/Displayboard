@extends('layouts.app')
@section('content')
<div style="position: relative;">
     @include('slides.slider')
     @include('sidebar.sidebar')
     @include('scripts')
     @include('sliderscripts')
</div>

@endsection
