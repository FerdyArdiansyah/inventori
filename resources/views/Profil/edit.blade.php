@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card  ">
                    <div class="card-body">
                        <form action="{{route('profil.update', $profil->id)}}" method="post">
                            @csrf
                                @method('PATCH')

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" value="{{$profil->nama}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input type="text" name="usia" id="usia" value="{{$profil->usia}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat lahir" value="{{$profil->tempat_lahir}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal lahir" value="{{$profil->tanggal_lahir}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis kelamin" value="{{$profil->jenis_kelamin}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="hobi">Hobi</label>
                                <input type="text" name="hobi" id="hobi" value="{{$profil->hobi}}" class="form-control">
                            </div>
                                <button class="btn btn-outline-info btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
