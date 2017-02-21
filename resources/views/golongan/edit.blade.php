@extends('layouts.app')
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

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-warning">
                <div class="panel-heading"><center><h1>Edit Golongan</h1></center></div>
                <div class="panel-body">
                    {!! Form::model($golongan,['method'=>'PATCH','route'=>['golongan.update',$golongan->id]]) !!}
                    <div class="col-md-12">
                    <label>Kode Golongan</label>
                        <input type="text" name="kode_golongan" class="form-control" value="{{$golongan->kode_golongan}}"><br>
                        <span>
                            {{$errors->first('kode_golongan')}}
                        </span>
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('Nama Golongan', 'Nama Golongan') !!}
                        <input type="text" name="nama_golongan" class="form-control" value="{{$golongan->nama_golongan}}"><br>
                        <span>
                            {{$errors->first('nama_golongan')}}
                        </span>
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
                        <input type="text" name="besaran_uang" class="form-control" value="{{$golongan->besaran_uang}}"><br>
                        <span>
                            {{$errors->first('besaran_uang')}}
                        </span>
                    </div>
                    <div class="col-md-12">
                        {!! Form::submit('SIMPAN', ['class' => 'btn btn-success form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
