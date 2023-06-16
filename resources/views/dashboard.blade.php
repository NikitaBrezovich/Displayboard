@extends('layouts.app')
@section('content')
<div class="m-12 p-12 bg-white">
  <div class="row table-responsive"> 
    <table class="table">
      <thead>
        <tr>
          <td class="col">
            ID
          </td>
          <td class="col">
            Eventname
          </td> 
          <td class="col text-right" style="padding-right: 5rem">
            <div>
              Actions
            </div>
            
          </td>
        </tr>
      </thead>  
      <tbody>
        @foreach($slides as $slide) 
        <tr>
          <td>{{$slide->id}}</td>
          <td>{{$slide->eventname}}</td>
          <td class="text-right">
            <a href="{{route('edit', $slide->id)}}" class="btn">Bearbeiten</a>
            <a href="{{route('delete', $slide->id)}}" class="btn btn-danger" onclick="return confirm('Wirklich löschen?')">Entfernen</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="col text-right">
     <a href="{{route('add')}}" class="btn btn-success" style="margin-right: 1.75rem">+ Hinzufügen</a> 
    </div>
  </div>
</div>
@endsection