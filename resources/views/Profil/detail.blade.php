@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h4></h4>
                        <p></p>
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{$profil->nama}}</td>
                                </tr>
                                <tr>
                                    <td>Usia</td>
                                    <td>{{$profil->usia}}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>{{$profil->tempat_lahir}}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>{{$profil->tanggal_lahir}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{$profil->jenis_kelamin}}</td>
                                </tr>
                                <tr>
                                    <td>Hobi</td>
                                    <td>{{$profil->hobi}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection