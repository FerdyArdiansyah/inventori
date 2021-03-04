@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class=text-center>
            <P>
                <b>
                    <h3>inventori
                        <br>
                            Jl Cibitung
                        </h3>
                    <hr>
                </b>
            </P>
        </div>

        @if (request('tgl_awal'))
            <small>dari tanggal {{request('tgl_awal')}}
                    sampai tanggal {{request('tgl_akhir')}}
            </small>
        @endif

        <u>
            <h4>Laporan Suplier</h4>
        </u>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Suplier</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($suplier as $get)
                    <tr>
                        <td>{{$get->name}}</td>
                        <td>{{$get->alamat}}</td>
                        <td>{{$get->email}}</td>
                        <td>{{$get->phone}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Data tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection