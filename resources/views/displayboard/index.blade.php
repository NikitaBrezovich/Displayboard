@extends('dashboard')
@section('dashboard_content')
<div class="m-12 p-12 bg-white">
  <div class="row table-responsive">
    <table class="table">
      <thead>
        <tr>
          <td class="col">
            ID
          </td>
          <td class="col">
            Name
          </td>
          <td class="col">
            Slide
          </td>
          <td class="col text-right" style="padding-right: 5rem">
            <div>
              Actions
            </div>
          </td>
        </tr>
      </thead>
      <tbody>
        @foreach($sliders as $slider)
        <tr>
          <td>{{$slider->id}}</td>
          <td>{{$slider->name}}</td>
          <td>{{ implode(', ', $slider->slides->pluck('eventname')->toArray()) }}</td>
          <td class="text-right">
            <a href="{{route('displayboard.edit', $slider->id)}}" class="btn">Bearbeiten</a>
            @if ($slider->active === 1)
            <a href="{{route('displayboard.deactivate', $slider->id)}}" class="btn btn-danger ml-3" onclick="return confirm('Wirklich deaktivieren?')">Deaktivieren</a>
            @else
            <a href="{{route('displayboard.activate', $slider->id)}}" class="btn btn-success ml-3 mr-2 px-3 " onclick="return confirm('Wirklich aktivieren?')">Aktivieren</a>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="col text-right">
     <a href="{{route('displayboard.add')}}" class="btn btn-success" style="margin-right: 1.75rem">+ Hinzufügen</a>
    </div>
  </div>
</div>
@endsection
