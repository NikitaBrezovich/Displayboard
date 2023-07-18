<!--Displayboard-->
<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="false" data-bs-theme="light" data-bs-interval="5000" data-bs-pause="false" style="position:relative; z-index: 1;" >
    <div class="carousel-indicators d-flex flex-column" style="top: -100px; left: 62px; right: 973px; margin-left:0%">
        @foreach($slider->slides as $index=>$slide)
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{$index}}" aria-label="Slide {{$index + 1}}" class="{{ $index === 0 ? 'active' : '' }}" style="width: 5px; height: 25px;"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($slider->slides as $index => $slide)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="height:100vh">
            <div class="row text-white" style="position:relative;">
                @if(isset($slide->image_path))
                <img src="{{ url('img\/' . $slide->image_path) }}" alt="">
                @else
                <img src="https://fons.pibig.info/uploads/posts/2023-06/thumbs/1686049336_fons-pibig-info-p-polnostyu-chernii-fon-vkontakte-4.jpg" alt="">
                @endif
                <div class="" style="height:100vh; position: absolute; left: 0px;  top: 0px;  background: rgba(0,0,0,0.7); ">
                    @if($slide->type === 'event')
                        @include('slides.types.event')
                    @elseif($slide->type === 'info')
                        @include('slides.types.info')
                    @elseif($slide->type === 'greeting')
                        @include('slides.types.greeting')
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
