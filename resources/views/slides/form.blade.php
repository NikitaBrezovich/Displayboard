<style>
    .hide{
        display:none;
    }
    .hide.show{
        display: block;
    }
    .hide-div{
        display:none;
    }
    .hide-div.show-div{
        display: block;
    }
</style>
<div class="row">
    <div class="input-group my-6 col-4">
        <label class="input-group-text" for="inputGroupSelect02">Type</label>
        <select name="type" class="form-select" id="type-select">
            <option value="event" {{isset($slide) && $slide->type === 'event' ? 'selected' : ''}}>Event</option>
            <option value="info" {{isset($slide) && $slide->type === 'info' ? 'selected' : ''}}>Information</option>
            <option value="greeting" {{isset($slide) && $slide->type === 'greeting' ? 'selected' : ''}}>Begrüßung</option>
        </select>
    </div>
</div>
<div class="{{isset($slide) && $slide->type === 'info' ? 'show-div' : ''}} hide-div info">
    <div class="input-group my-6">
        <span class="input-group-text" id="basic-addon1">Eventname</span>
        <input type="text" class="form-control" name="eventname" value="{{$slide->eventname ?? 'Event'}}" placeholder="Eventname" aria-label="Eventname" aria-describedby="basic-addon1">
    </div>
    <div class="input-group my-6 col-4">
        <label class="input-group-text" for="inputGroupSelect01">Layout</label>
        <select name="layout" class="form-select" id="template-select">
            <option value="1" {{isset($slide) && $slide->layout === '1' ? 'selected' : ''}}>1-Spaltig</option>
            <option value="2" {{isset($slide) && $slide->layout === '2' ? 'selected' : ''}}>2-Spaltig</option>
            <option value="3" {{isset($slide) && $slide->layout === '3' ? 'selected' : ''}}>3-Spaltig</option>
        </select>
    </div>
    <div class="input-group my-6 hide show 1 2 3">
        <span class="input-group-text" id="basic-addon1">Column 1 Name</span>
        <input style="width:514px" type="text" class="form-control" name="col_name_1" value="{{$slide->col_name_1 ?? ''}}" aria-label="Column 1 Name" aria-describedby="basic-addon1">
    </div>
    <div class="input-group my-6 hide show 1 2 3">
        <span class="input-group-text">Column 1 Text</span>
        <textarea style="width:514px" class="form-control" aria-label="Column 1 Text" name="col_1" value="{{$slide->col_1 ?? ''}}"></textarea>
    </div>
    <div class="input-group my-6 {{isset($slide) && ($slide->layout === '2' || $slide->layout ==='3') ? 'hide show' : 'hide'}} 2 3 ">
        <span class="input-group-text" id="basic-addon1">Column 2 Name</span>
        <input style="width:514px" type="text" class="form-control" name="col_name_2" value="{{$slide->col_name_2 ?? ''}}" aria-label="Column 2 Name" aria-describedby="basic-addon1">
    </div>
    <div class="input-group my-6 {{isset($slide) && ($slide->layout === '2' || $slide->layout ==='3') ? 'hide show' : 'hide'}} 2 3">
        <span class="input-group-text">Column 2 Text</span>
        <textarea style="width:514px" class="form-control" aria-label="Column 2 Text" name="col_2" value="{{$slide->col_2 ?? ''}}"></textarea>
    </div>
    <div class="input-group my-6 {{isset($slide) && $slide->layout === '3' ? 'hide show' : 'hide'}} 3">
        <span class="input-group-text" id="basic-addon1">Column 3 Name</span>
        <input style="width:514px" type="text" class="form-control" name="col_name_3" value="{{$slide->col_name_3 ?? ''}}" aria-label="Column 3 Name" aria-describedby="basic-addon1">
    </div>
    <div class="input-group my-6 {{isset($slide) && $slide->layout === '3' ? 'hide show' : 'hide'}} 3">
        <span class="input-group-text">Column 3 Text</span>
        <textarea style="width:514px" class="form-control" aria-label="Column 2 Text" name="col_3" value="{{$slide->col_3 ?? ''}}"></textarea>
    </div>
    <div class="form-floating my-6 ">
        @if(isset($slide) && !empty($slide->image_path))
            <div>Active Image</div>
            <img style='width: 200px' src="{{ url('img\/' . $slide->image_path) }}" alt="">
        @endif
    </div>
    <div class="input-group my-6">
        <label class="input-group-text" for="inputGroupFile01">Background Image</label>
        <input style="padding-top: 6px; padding-left: 6px; height: 100px" type="file" class="form-control" id="inputGroupFile01" name="image" value="{{isset($slide->image_path) ?? ''}}">
    </div>
</div>
<div class="{{isset($slide) && $slide->type === 'event' ? 'show-div' : ''}} hide-div event">
    <div class="input-group my-6">
        <span class="input-group-text" id="basic-addon1">Eventname</span>
        <input type="text" class="form-control" name="eventname" value="{{$slide->eventname ?? ''}}" placeholder="Eventname" aria-label="Eventname" aria-describedby="basic-addon1">
    </div>
    <div class="form-floating my-6 1-column">
        <input  type="text" class="form-control" id="floatingPassword" name="text"  value="{{$slide->text ?? ''}}">
        <label for="floatingPassword">Text *</label>
    </div>
    <div class="form-floating my-6 1-column">
        <input  type="date" class="form-control" id="floatingPassword" name="date"  value="{{$slide->date ?? ''}}">
        <label for="floatingPassword">Date</label>
    </div>
    <div class="form-floating my-6 1-column">
        <input  type="time" class="form-control" id="floatingPassword" name="time"  value="{{$slide->time ?? ''}}">
        <label for="floatingPassword">Time*</label>
    </div>
    <div class="form-floating my-6 1-column">
        <input  type="text" class="form-control" id="floatingPassword" name="place"  value="{{$slide->place ?? ''}}">
        <label for="floatingPassword">Place</label>
    </div>
    <div class="form-floating my-6 ">
        @if(isset($slide) && !empty($slide->image_path))
            <div>Active Image</div>
            <img style='width: 200px' src="{{ url('img\/' . $slide->image_path) }}" alt="">
        @endif
    </div>
    <div class="image form-floating my-6">
        <input class="form-control" type="file" id="formFile" name="image" value="{{isset($slide->image_path) ?? ''}}" >
        <label for="floatingPassword">Background Image</label>
    </div>
</div>
<div class="{{isset($slide) && $slide->type === 'greeting' ? 'show-div' : ''}} hide-div greeting">
    <div class="form-floating my-6 1-column">
        <input  type="text" class="form-control" id="floatingPassword" name="client_name" value="{{$slide->client_name ?? ''}}">
        <label for="floatingPassword">Name *</label>
    </div>
</div>
<div class="my-6 1-column" >
    <select name="sliders[]"  class="form-select" size="5" aria-label="size 3 select example" multiple>
        @foreach ($sliders as $slider)
            <option value="{{ $slider->id }}" @if(isset($slider)) @if(isset($slide)) @foreach($slide->sliders as $p) @if($slider->id == $p->id)selected="selected"@endif @endforeach @endif @endif>
                {{ $slider->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="active" value="{{isset($slide) && !$slide->active === 1 ? '0' : '1' }}" {{isset($slide) && $slide->active === 1 ? 'checked' : ''}} {{isset($slide) && $slide->active === 1 ? 'disabled' : ''}} id="{{isset($slide) ? 'flexCheckDisabled' : 'customCheck1'}}">
    <label class="custom-control-label" for="{{isset($slide) ? 'flexCheckDisabled' : 'customCheck1'}}">Active</label>
</div>
<div class="my-6 text-center d-flex">
    <button class="btn btn-success">Speichern</button>
    @if (isset($slide->id))
    <a href="{{route('slide.delete', $slide->id)}}" class="btn btn-danger" onclick="return confirm('Wirklich löschen?')">Entfernen</a>
    @endif
</div>
<div class="my-6">
    * required
</div>
