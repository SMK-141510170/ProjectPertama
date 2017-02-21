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
		<div class="panel-heading"><center><h3>Data Data Tunjangan</h3></center></div>
			<div class="panel-body">
				<a href="{{url('/tunjangan/create')}}"class="btn btn-success form-control">Tambah Data Kategori Lembur</a><br><br>
				
				<table class="table table-bordered">
					<thead>
        				<tr class="bg-info">
        					<th><center>No</center></th>
        					<th><center>Kode Tunjangan</center></th>
							<th><center>Jabatan</center></th>
							<th><center>Golongan</center></th>
							<th><center>Status</center></th>
							<th><center>Jumlah Anak</center></th>
							<th><center>Besaran Uang</center></th>
        					<th colspan="3"><center>Action</center></th>
        				</tr>
    				</thead>
    				<tbody>
        			@php
        			$no=1;
        			@endphp
        			@foreach($tunjangan as $tunjangans)
		<tr>
			<td><center>{{$no++}}</center></td>
			<td><center>{{$tunjangans->kode_tunjangan}}</center></td>
			<td><center>{{$tunjangans->jabatanModel->nama_jabatan}}</center></td>
			<td><center>{{$tunjangans->golonganModel->nama_golongan}}</center></td>
			<td><center>{{$tunjangans->status}}</center></td>
			<td><center>{{$tunjangans->jumlah_anak}}</center></td>
			<td><center>{{$tunjangans->besaran_uang}}</center></td>


		<td><center><a href="{{route('tunjangan.edit',$tunjangans->id)}}"class="btn btn-warning">Edit</a></center></td>	
		</td>
		<td><center>
                                {!!Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$tunjangans->id]])!!}
        						<input type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini ?');"value="Hapus"> 
        						{!!Form::close()!!}</center>
                            </td>
		</tr>
		
		@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	





@endsection