
@include('form-script')
@section('header')
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="{{ URL::asset('/img/icon1.png') }}" alt="Label" width="30" height="25" class="bi me-2">
                <span class="fs-4">Wabsolute GMBH</span>
            </a>
            <span class="fs-4 ">
                <p class="mb-0">Unsere Events</p>
                <button class="btn btn-link rounded-pill p-0 text-decoration-none text-dark " type="button" onclick="formToggle()">Login (Admin)</button>
            </span>
    </header>
</div>
@yield('form-script')
@endsection