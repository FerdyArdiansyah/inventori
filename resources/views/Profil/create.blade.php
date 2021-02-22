@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card  ">
                    <div class="card-body">
                        <form action="{{route('profil.store')}}" method="post">
                        @csrf

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Usia</label>
                                <input type="text" name="usia" id="usia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Hobi</label>
                                <input type="text" name="hobi" id="hobi" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-outline-info btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
