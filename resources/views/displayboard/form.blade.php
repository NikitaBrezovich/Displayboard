<div class="form-floating my-6 col-12" >
    <input type="text" class="form-control" name="name" required value="{{$slider->name ?? ''}}">
    <label for="floatingPassword">Name</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck2" name="active" value="1">
    <label class="custom-control-label" for="customCheck2">Active</label>
</div>
<div class="form-floating my-6 col-12" >
    <select  class="form-select" name="slides[]" multiple>
        @foreach ($slides as $slide)
            <option value="{{ $slide->id }}" @if(isset($slider)) @foreach($slider->slides as $p) @if($slide->id == $p->id)selected="selected"@endif @endforeach @endif>
                {{ $slide->eventname }}
            </option>
        @endforeach
    </select>
</div>
<div class="my-6 text-center ">
    <button class="btn btn-success">Speichern</button>
</div>
@if (isset($slider))
<a href="{{route('displayboard.delete', $slider->id)}}" class="btn btn-danger" onclick="return confirm('Wirklich löschen?')">Entfernen</a>
@endif
<div class="my-6">
    * required
</div>
