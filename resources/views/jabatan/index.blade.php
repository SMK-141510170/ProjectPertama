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
                <div class="panel-heading"><center><h3>Data Jabatan</h3></center></div>

                <div class="panel-body">
                    <a href="{{url('/jabatan/create')}}"class="btn btn-success form-control">Tambah Data</a><br><br>
                    {{$jabatan->links()}}

                <table class="table table-bordered">
                

    <thead>
        <tr class="bg-info">
        <td><center>No</center></td>
        <td><center>Kode Jabatan</center></td>
        <td><center>Nama Jabatan</center></td>
        <td><center>Besaran Uang</center></td>
        <td colspan="3"><center>Action</center></td>
        </tr>
    </thead>
    <tbody>
        @php
        $no=1;
        @endphp
        @foreach($jabatan as $jabatans)
        <tr>
            <td><center>{{$no++}}</center></td>
            <td><center>{{$jabatans->kode_jabatan}}</center></td>
            <td><center>{{$jabatans->nama_jabatan}}</center></td>
            <td><center>{{$jabatans->besaran_uang}}</center></td>
            
        <td><center><a href="{{route('jabatan.edit',$jabatans->id)}}" class="btn btn-warning">Edit</a></center></td>   
        </td>
        <td><center>
                                {!!Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$jabatans->id]])!!}
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