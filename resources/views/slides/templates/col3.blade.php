<div class="col-11 pl-12 d-flex " style="margin-left:100px ; ">
<div class="col-lg-4 px-4">
    <h3 class="fs-2 text-center mb-2">{!! $slide->col_name_1 !!}</h3>
    <p class="fs-4">{!! $slide->col_1 !!}</p>
</div>
<div class="col-lg-4 px-4">
    <h3 class="fs-2 text-center mb-2">{!! $slide->col_name_2 !!}</h3>
    <p class="fs-4">{!! $slide->col_2 !!}</p>
</div>
<div class="col-lg-4 px-4 d-flex flex-column ">
    <h3 class="fs-2 text-center mb-2">{!! $slide->col_name_3 !!}</h3>
    <p class="fs-4">{!! $slide->col_3 !!}</p>
    @if(isset($slide->qr))
    <div>
        <img src="{!!$slide->qr!!}" alt="QR-Code to register" class="qrcode">
    </div>
    @endif
</div>
</div>
