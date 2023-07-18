@extends('dashboard')
@section('dashboard_content')
<div class="bg-white m-12 p-12 d-flex flex-column align-items-center">
    <h2>Displayboard Creator</h2>
    <form action="{{route('displayboard.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        @include('displayboard.form')
    </form>
</div>
@endsection
