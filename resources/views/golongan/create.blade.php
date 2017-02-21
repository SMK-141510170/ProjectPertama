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
        <div class="col-md-8">
            <div class="panel panel-success">
                <div class="panel-heading"><h1><center>Tambah Golongan</center></h1></div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'golongan']) !!}
                        <div class="col-md-12">
                            {!! Form::label('Kode Golongan', 'Kode Golongan') !!}
                            {!! Form::text('kode_golongan',null,['class'=>'form-control']) !!}<br>
                            @if ($errors->has('kode_golongan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kode_golongan') }}</strong>
                                </span>
                            @endif
                        </div>
                    <div class="col-md-12">
                        {!! Form::label('Nama Golongan', 'Nama Golongan') !!}
                        {!! Form::text('nama_golongan',null,['class'=>'form-control']) !!}<br>
                        @if ($errors->has('nama_golongan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_golongan') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}<br>
                        @if ($errors->has('besaran_uang'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('besaran_uang') }}</strong>
                            </span>
                        @endif
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
