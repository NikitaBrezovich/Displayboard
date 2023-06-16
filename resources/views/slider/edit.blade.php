@extends('layouts.app')
@section('content')
<div class="bg-white m-12 p-12 d-flex flex-column align-items-center">
    <h2>Slide Editor</h2>
    <form action="{{route('update',$slide->id)}}" method="post" >
        @csrf
    @include('slider.form')
</form>
</div>
@endsection
