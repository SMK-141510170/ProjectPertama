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
<center><h1>Data tunjangan pegawai</h1></center>
<hr>
<div class="col-md-11"></div>
<table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->
<table class="table table-default">
<tr class="danger">

<a href="{{url('/tunjangan_pegawai/create')}}"class="btn btn-primary form-control">Tambah Data</a><br><br>s

	<thead>
		<tr class="bg-info">
		<th><center>No</center></th>
		<th><center>Nip</center></th>
		<th><center>Nama pegawai</center></th>
		<th colspan="2">Jabatan dan Golongan</th>
		<th><center>Status</center></th>
		<th><center>Jumalah anak</center></th>
		<th><center>Besaran uang</center></th>
		<th colspan="2">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($tunjangan_pegawai as $tunjangan_pegawais)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->kode_tunjangan}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->nip}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->User->name}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->jabatanModel->nama_jabatan}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->golonganModel->nama_golongan}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->jumlah_anak}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->besaran_uang}}</td>
		<td><a href="{{route('tunjangan_pegawai.edit',$tunjangan_pegawais->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan_pegawai.destroy',$tunjangan_pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection