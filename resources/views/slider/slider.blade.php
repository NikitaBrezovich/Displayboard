<!--Slider-->
<div id="myCarousel" class="carousel slide carousel-size carousel-display " data-bs-ride="carousel"
    data-bs-theme="light">
    <div class="carousel-indicators mb-0">
        @foreach($slides as $index=>$slide)
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{$index}}" aria-label="Slide {{$index + 1}}" class="{{ $index === 0 ? 'active' : '' }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($slides as $index=>$slide)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <div class="row mx-5 mt-5 mb-4 p-5 feature bg-black text-white-50" style="background-image:url(../public/img/{{$slide->image_path}});width: 1400px; height: 600px;">
                <div>
                    <div class="row text-center">
                        <div class="col-12 text-center mb-3">
                            <h2 class="fs-1">{{$slide->eventname}}</h2>
                        </div>
                    </div>
                    <div class="row d-flex flex-row">
                        <div class="col-12 col-lg-4 p-2">
                            <h3 class="fs-2">{!! $slide->col_name_1 !!}</h3>
                            <p class="fs-3">{!! $slide->col_1 !!}</p>
                        </div>
                        <div class="col-12 col-lg-4 p-2">
                            <h3 class="fs-2">{!! $slide->col_name_2 !!}</h3>
                            <p class="fs-3">{!! $slide->col_2 !!}</p>
                        </div>
                        <div class="col-12 col-lg-4 d-flex flex-column p-2">
                            <h3 class="fs-2">{!! $slide->col_name_3 !!}</h3>
                            <p class="fs-3">{!! $slide->col_3 !!}</p>
                            @if(isset($slide->qr))
                            <div>
                                <img src="{!!$slide->qr!!}" alt="QR-Code to register" class="qrcode">                                
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
