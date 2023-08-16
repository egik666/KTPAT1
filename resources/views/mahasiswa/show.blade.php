@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>DETAIL MAHASISWA</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>NIM</th>
                        <td>{{ $mahasiswa->nim }}</td>
                    </tr>
                    <tr>
                        <th>NAMA</th>
                        <td>{{ $mahasiswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>ALAMAT</th>
                        <td>{{ $mahasiswa->alamat }}</td>
                    </tr>
                    <tr>
                        <th>JENIS KELAMIN</th>
                        <td>{{ $mahasiswa->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    </tr>
                </table>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
