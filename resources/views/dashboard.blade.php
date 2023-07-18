@extends('layouts.app')
@section('navigation')
    @include('layouts.navigation')
@endsection
@section('content')
    @yield('dashboard_content')
    @include('scripts')
@endsection
