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
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Register</h3> </div>
                    <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <div class="col-md-6">
                                <label for="name" >Nama Pegawai</label>
                                <input id="name" type="text" class="form-control" name="name" autofocus>

                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            </div>

                            <div class="col-md-6">
                                <label for="email" >E-MAIL</label>
                                <input id="email" type="email" class="form-control" name="email" autofocus>

                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            </div>

                             <div class="col-md-12">
                                <label >Type User</label>
                                   <select name="permision" class="col-md-12 form-control">
                                       <option>Admin</option>
                                       <option>HRD</option>
                                       <option>Bagian Administrasi</option>
                                       <option>Pegawai</option>
                                   </select>
                            </div>

                            <div class="col-md-6">
                                <label >Password</label>
                                    <input id="password" type="password" class="form-control" name="password" autofocus>

                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                            </div>

                            <div class="col-md-6">
                                <label >Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autofocus>
                            </div>
                        </div>
                    </div>
                <div>
            </div>
        </div>


        
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Tambah Data Pegawai</h3> </div>
                        <div class="panel-body">

                            <div class="col-md-12">
                                <label for="nip" >NIP Pegawai</label>
                                <input id="nip" type="text" class="form-control" name="nip" autofocus>

                                    <span class="help-block">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                            </div>

                            <div class="col-md-6">
                                <label for="Jabatan">Jabatan</label>
                                    <select class="col-md-6 form-control" name="jabatan_id">
                                        @foreach($jabatan as $datajabatan)
                                            <option  value="{{$datajabatan->id}}" >{{$datajabatan->nama_jabatan}}</option>
                                        @endforeach
                                    </select>
                                    <span>{{$errors->first('jabatan_id')}}</span>
                            </div>

                            <div class="col-md-6">
                                <label for="Jabatan">Golongan</label>
                                    <select class="col-md-6 form-control" name="golongan_id">
                                        @foreach($golongan as $datagolongan)
                                            <option  value="{{$datagolongan->id}}" >{{$datagolongan->nama_golongan}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">
                                        {{$errors->first('golongan_id')}}
                                    </span>
                            </div>

                            <div class="col-md-12">
                                <label >Foto Pegawai</label>
                                    <input type="file" class="form-control" name="foto" autofocus>

                                    @if ($errors->has('foto'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('foto') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="col-md-12" >
                                <button type="submit" class="btn btn-primary form-control">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

@endsection
