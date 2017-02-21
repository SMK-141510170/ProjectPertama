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
<div class="col-md-9">
	<div class="panel panel-primary">
		<div class="panel-heading"><center><h3>Data Kategori Lembur</h3></center></div>
			<div class="panel-body">
            <div class="col-md-6">
                <a href="{{url('/kategori_lembur/create')}}"class="btn btn-success form-control">Tambah Data Kategori Lembur</a><br><br>
                {{$kategori_lembur->links()}}
            </div>
            <div class="col-md-6">
                <div class="form-group"><center>
                    <form action="{{url('/kategori_lembur')}}/?name=name">
                    <input type="text" name="name" placeholder="Cari">
                    <input class="btn btn-sm btn-primary" type="submit" value="Cari" /></form>
                </center></div>
            </div>
				
                
				<table class="table table-bordered">
					<thead>
        				<tr class="bg-info">
        					<th><center>No</center></th>
        					<th><center>Kode Lembur</center></th>
							<th><center>Jabatan</center></th>
							<th><center>Golongan</center></th>
							<th><center>Besaran Uang</center></th>
        					<th colspan="3"><center>Action</center></th>
        				</tr>
    				</thead>
    				<tbody>
        			@php
        			$no=1;
        			@endphp
        			@foreach($kategori_lembur as $kategori_lemburs)
		<tr><center>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$kategori_lemburs->kode_lembur}}</center></td>
			<td><center>{{$kategori_lemburs->jabatanModel->nama_jabatan}}</center></td>
			<td><center>{{$kategori_lemburs->golonganModel->nama_golongan}}</center></td>
			<td><center>{{$kategori_lemburs->besaran_uang}}</center></td>
			
		<td><center><a href="{{route('kategori_lembur.edit',$kategori_lemburs->id)}}" class="btn btn-warning">Edit</a></center></td>	
		</td>
		<td><center>
                                {!!Form::open(['method'=>'DELETE','route'=>['kategori_lembur.destroy',$kategori_lemburs->id]])!!}
        						<input type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini ?');"value="Hapus"> 
        						{!!Form::close()!!}</center>
                            </td>
		</tr>
		</div>
		@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@endsection