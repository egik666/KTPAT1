@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>DETAIL MATAKULIAH</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>NAMA MATAKULIAH</th>
                        <td>{{ $matakuliah->nama }}</td>
                    </tr>
                    <tr>
                        <th>SEMESTER</th>
                        <td>{{ $matakuliah->semester }}</td>
                    </tr>
                    <tr>
                        <th>SKS TEORI</th>
                        <td>{{ $matakuliah->sks_teori }}</td>
                    </tr>
                    <tr>
                        <th>SKS PRAKTIKUM</th>
                        <td>{{ $matakuliah->sks_praktikum }}</td>
                    </tr>
                    <tr>
                        <th>JURUSAN</th>
                        <td>{{ $matakuliah->jurusan->nama }}</td>
                    </tr>
                </table>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
