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
                    <div class="panel-heading"><h3><center>Edit Data Kategori Lembur</center></h3> </div>
                    <div class="panel-body">

                {!! Form::model($kategori_lembur,['method'=>'PATCH','route'=>['kategori_lembur.update',$kategori_lembur->id]])!!}
                   <div class="form-group">
                        {!! Form::label('Kode Lembur', 'Kode Lembur') !!}
                        {!! Form::text('kode_lembur',null,['class'=>'form-control']) !!}<br>
                          @if ($errors->has('kode_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_lembur') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('Jabatan', 'Jabatan') !!}
                        <select class="form-control" name="jabatan_id">
                        @foreach ($jabatan as $jabatans)
                            <option value='{!!$jabatans->id!!}'>{!!$jabatans->nama_jabatan!!}
                            </option>
                        @endforeach
                        </select><br>
                    </div>

                     <div class="form-group">
                        {!! Form::label('Golongan', 'Golongan') !!}
                        <select class="form-control" name="golongan_id">
                        @foreach ($golongan as $golongans)
                            <option value='{!!$golongans->id!!}'>{!!$golongans->nama_golongan!!}
                            </option>
                        @endforeach
                        </select><br>
                    </div>

                    <div class="form-group">
                         {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
                            {!! Form::text('besaran_uang',null,['class'=>'form-control', 'required']) !!}<br>
                                     @if ($errors->has('besaran_uang'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('besaran_uang') }}</strong>
                                                </span>
                                     @endif
                    </div>

                    <div class="form-group">
                        {!! Form::submit('SIMPAN', ['class' => 'btn btn-success form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
