@extends('dashboard')
@section('dashboard_content')
    <div class="m-12 p-12 bg-white">
        <div class="row table-responsive">
            <table class="table">
                <thead>
                    <tr style="width:100px">
                        <td class="col-1 mr-5">
                            ID
                        </td>
                        <td class="col-2 mr-5">
                            Eventname
                        </td>
                        <td class="col-3 mr-5">
                            Displayboard
                        </td>
                        <td>
                            Activity
                        </td>
                        <td class="col-6 text-right mr-5">
                            Actions
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $slide)
                        <tr>
                            <td class="{{ $slide->active === 0 ? 'text-secondary' : '' }}">{{ $slide->id }}</td>
                            <td class="{{ $slide->active === 0 ? 'text-secondary' : '' }}">{{ $slide->eventname }}</td>
                            <td class="{{ $slide->active === 0 ? 'text-secondary' : '' }}">
                                {{ implode(', ', $slide->sliders->pluck('name')->toArray()) }}</td>
                            <td class="{{ $slide->active === 0 ? 'text-secondary' : '' }}">
                                @if ($slide->active === 1)
                                    active
                                @else
                                    inactive
                                @endif
                            </td>
                            <td class="col text-right" style="">
                                <div class="btn-group">
                                    @if ($slide->active === 1)
                                        <a href="{{ route('slide.deactivate', $slide->id) }}" class="btn btn-danger d-flex"
                                            onclick="return confirm('Wirklich deaktivieren?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                                <path
                                                    d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                                <path
                                                    d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                                            </svg>
                                        </a>
                                    @else
                                        <a href="{{ route('slide.activate', $slide->id) }}" class="btn btn-success"
                                            onclick="return confirm('Wirklich aktivieren?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                        </a>
                                    @endif
                                    <a class="{{ $slide->active === 0 ? 'text-secondary' : '' }} btn btn-warning text-white d-flex"
                                        href="{{ route('slide.edit', $slide->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                    <a class="{{ $slide->active === 0 ? 'text-secondary' : '' }} btn btn-secondary text-white d-flex"
                                        href="{{ route('slide.duplicate', $slide->id) }}"
                                        onclick="return confirm('Wirklich duplizieren?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none">
                                            <g id="style=linear">
                                                <g id="copy">
                                                    <path id="rec"
                                                        d="M17.8333 18C20.1345 18 22 16.0972 22 13.75V5.25C22 2.90279 20.1345 1 17.8333 1H11.1667C8.86548 1 7 2.90279 7 5.25"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path id="rec_2"
                                                        d="M2 10.25C2 7.90279 3.86548 6 6.16667 6H12.8333C15.1345 6 17 7.90279 17 10.25V18.75C17 21.0972 15.1345 23 12.8333 23H6.16667C3.86548 23 2 21.0972 2 18.75V10.25Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col text-right">
                <a href="{{ route('slide.add') }}" class="btn btn-success big" style="margin-right: 1.75rem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                        <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"></path>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"></path>
                    </svg>
                    Hinzufügen ++++
                </a>
            </div>
        </div>
    </div>
@endsection
