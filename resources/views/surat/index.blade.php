@extends('layouts.app')
@section('content')
<h3> Daftar Surat Masuk : </h3>

<table class="table table-hover table-bordered table-stripped">
<thead>
<tr>
<th>Pengirim</th>
<th>Tanggal Masuk</th>
<th>Jumlah Surat</th>
<th>Jenis Surat</th>
<th>No Resi</th>
<th>Kepada</th>
<th>Edit</th>
<th>Hapus</th>
</tr>
<tbody>

@if(count($surats))
<tr>
@foreach($surats as $surat)

<th> {{$surat->pengirim}}</th>
<th> {{$surat->tglmasuk}}</th>
<th> {{$surat->jumlah}}</th>
<th> {{$surat->jenis}}</th>
<th> {{$surat->noresi}}</th>
<th> {{$surat->kepada}}</th>
<th> <span class="glyphicon glyphicon-edit"> </span>Edit</th>
<th> <span class="glyphicon glyphicon-remove-sign"> </span>Delete</th>
@endforeach
</tr>
@endif
</table>
@stop
