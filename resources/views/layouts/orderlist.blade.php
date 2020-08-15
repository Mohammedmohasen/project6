@extends('layouts.app')
@section('content')
@if (count($order))
@foreach ($order as $item)
    <div class="well">  
     <h3>{{$item->name}}  <a href="{{$item->id}}" class="btn list-group-item-danger">  {{$item->phone}}     </a>  {{ $item->address}}   {{$item->total}}$</h3> 
    </div>
  @endforeach
@endif
<a href="/project6/projecthome" class="btn btn-primary">GoBack</a>
@endsection