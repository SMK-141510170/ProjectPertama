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
                    <div class="panel-heading"><h3><center>Edit Data Tunjangan</center></h3> </div>
                    <div class="panel-body">

                {!! Form::model($tunjangan,['method'=>'PATCH','route'=>['tunjangan.update',$tunjangan->id]])!!}
                   <div class="col-md-12">
                        {!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
                        {!! Form::text('kode_tunjangan',null,['class'=>'form-control']) !!}<br>
                          @if ($errors->has('kode_tunjangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_tunjangan') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="col-md-6">
                        {!! Form::label('Jabatan', 'Jabatan') !!}
                        <select class="form-control" name="jabatan_id">
                        @foreach ($jabatan as $jabatans)
                            <option value='{!!$jabatans->id!!}'>{!!$jabatans->nama_jabatan!!}
                            </option>
                        @endforeach
                        </select><br>
                    </div>

                     <div class="col-md-6">
                        {!! Form::label('Golongan', 'Golongan') !!}
                        <select class="form-control" name="golongan_id">
                        @foreach ($golongan as $golongans)
                            <option value='{!!$golongans->id!!}'>{!!$golongans->nama_golongan!!}
                            </option>
                        @endforeach
                        </select><br>
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('Status', 'Status') !!}
                        <select class="form-control" name="status">
                            <option name="status">Sudah Menikah</option>
                            <option name="status">Belum Menikah</option>
                        
                        </select><br>
                    </div>
                    <div class="col-md-12">
                         {!! Form::label('Jumlah Anak', 'Jumlah Anak') !!}
                            {!! Form::text('jumlah_anak',null,['class'=>'form-control', 'required']) !!}<br>
                                     @if ($errors->has('jumlah_anak'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('jumlah_anak') }}</strong>
                                                </span>
                                     @endif
                    </div>

                    <div class="col-md-12">
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
