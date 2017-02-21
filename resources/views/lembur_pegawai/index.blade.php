@extends('layouts/app')
@section('content')
<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
                <h3>MENU UTAMA</h3><div class="panel-body" align="center">
                    
                    <a class="btn btn-primary form-control" href="{{url('jabatan')}}">Jabatan</a><br><br>
                    <a class="btn btn-success form-control" href="{{url('golongan')}}">Golongan</a><br><br>
                    <a class="btn btn-danger form-control" href="{{url('kategori_lembur')}}">Kategori Lembur</a><br><br>
                    <a class="btn btn-success form-control" href="{{url('tunjangan')}}">Tunjangan</a><br><br>
                    <a class="btn btn-warning form-control" href="{{url('pegawai')}}">Pegawai</a><br><br>
                    <a class="btn btn-primary form-control" href="{{url('lemburpegawai')}}">Lembur Pegawai</a><br><br>
                    <a class="btn btn-warning form-control" href="{{url('tunjanganpegawai')}}">Tunjangan Pegawai</a><br><br>
                    <a class="btn btn-danger form-control" href="{{url('penggajian')}}">Penggajian</a>  
                </div>
            </center>
        </div>
    </div>
</div>
<center><h1>Data lembur pegawai</h1></center>
<hr>
<div class="col-md-11">
<table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->

<tr class="danger">

<a href="{{url('/lembur_pegawai/create')}}"class="btn btn-primary form-control">Tambah Data</a>
<br><br>
	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th><center>kode lembur </center></th>
		<th colspan="2">Nip Dan Nama Pegawai</th>
		<th colspan="2">jabatan dan golongan</th>
		<th><center>jumlah jam</center></th>
		
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($lembur_pegawai as $lembur_pegawais)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$lembur_pegawais->kode_lembur_id}}</td>
			<td>{{$lembur_pegawais->pegawaiModel->nip}}
			<td>{{$lembur_pegawais->pegawaiModel->user->name}}</td>
			<td>{{$lembur_pegawais->pegawaiModel->jabatanModel->nama_jabatan}}</td>
			<td>{{$lembur_pegawais->pegawaiModel->golonganModel->nama_golongan}}</td>
			<td>{{$lembur_pegawais->jumlah_jam}}</td>
			
		<td><a href="{{route('lembur_pegawai.edit',$lembur_pegawais->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['lembur_pegawai.destroy',$lembur_pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection