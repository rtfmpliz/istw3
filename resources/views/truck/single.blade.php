@extends('layouts.app')
@section('content')
<h2> {{$truck->nopol}} </h2>
<br>Merk : {{$truck->merk}}</br>
<br>Tonase : {{$truck->tonase}} ton</br>
<br>Panjang : {{$truck->panjang}} m</br>
<br>Lebar : {{$truck->lebar}} m</br>
<br>created : {{$truck->created_at}}</br>
@stop
