@extends('dashboard')
@section('dashboard_content')
<div class="bg-white m-12 p-12 d-flex flex-column align-items-center row">
    <h2 class="col-12 text-center">Displayboard Editor</h2>
    <form action="{{route('displayboard.update', $slider->id)}}" method="post"  enctype="multipart/form-data" >
        @csrf
        @include('displayboard.form')
</form>
</div>
@endsection
