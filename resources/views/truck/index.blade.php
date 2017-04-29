@extends('layouts.app')
@section('content')
<h3> Daftar Truck : </h3>
@if(count($trucks))
<ul>
@foreach($trucks as $truck)
<li> <a href={{action('TruckController@single',[$truck->id])}}>{{$truck->nopol}}</a></li>
@endforeach
</ul>
@endif

@stop
