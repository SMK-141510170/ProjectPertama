
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
                <div class="panel panel-success">
                    <div class="panel-heading"><h3><center>Tambah Kategori Lembur</center></h3></div>
                    <div class="panel-body">

                     {!! Form::open(['url' => 'kategori_lembur']) !!}
                    <div class="col-md-12">
                        {!! Form::label('Kode Lembur', 'Kode Lembur') !!}
                        {!! Form::text('kode_lembur',null,['class'=>'form-control']) !!}<br>
                          @if ($errors->has('kode_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur') }}</strong>
                                    </span>
                            @endif
                    </div>

                     <div class="col-md-12">
                     {!!Form::label('Jabatan','Jabatan')!!}
                        <select class="form-control" col-md-7 col-sx-12 name="jabatan_id">
                            @foreach ($jabatan as $jabatans)
                            <option value="{{$jabatans->id}}">{{ $jabatans->nama_jabatan}}</option>
                            @endforeach
                        </select><br>
                    </div>
                    

                      <div class="col-md-12">
                      {!!Form::label('Golongan','Golongan')!!}
                        <select class="form-control" col-md-7 col-sx-12 name="golongan_id">
                            @foreach ($golongan as $jabatans)
                            <option value="{{$jabatans->id}}">{{ $jabatans->nama_golongan}}</option>
                            @endforeach
                        </select><br>
                    </div>                    
                    <div class="col-md-12">
                        {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}<br>
                    </div>
                    @if ($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_uang') }}</strong>
                                    </span>
                    @endif
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
