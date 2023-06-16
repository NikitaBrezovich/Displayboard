@extends('layouts.app')
@section('content')
<div class="bg-white m-12 p-12 d-flex flex-column align-items-center">
    <h2>Slide Creator</h2>
    <form action="{{route('store')}}" method="post" >
        @csrf
    @include('slider.form')
    </form>
</div>
@endsection
