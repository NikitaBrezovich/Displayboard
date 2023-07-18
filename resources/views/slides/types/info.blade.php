<div class="row d-flex text-center">
    <div class="col-12 text-center py-5">
        <h2 class="fs-1">{{$slide->eventname}}</h2>
    </div>
</div>
@if($slide->layout == '1')
    @include('slides.templates.col1')
@elseif($slide->layout == '2')
    @include('slides.templates.col2')
@elseif($slide->layout == '3')
    @include('slides.templates.col3')
@endif


