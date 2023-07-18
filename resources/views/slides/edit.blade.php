@extends('dashboard')
@section('dashboard_content')
<div class="bg-white m-12 p-12 d-flex flex-column align-items-center">
    <h2>Slide Editor</h2>
    <form action="{{route('slide.update',$slide->id)}}" method="post"  enctype="multipart/form-data" >
        @csrf
    @include('slides.form')
</form>
</div>
@endsection
