@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Nilai</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>Mahasiswa</th>
                        <td>{{ $nilai->mahasiswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>Matakuliah</th>
                        <td>{{ $nilai->matakuliah->nama }}</td>
                    </tr>
                    <tr>
                        <th>Nilai Harian</th>
                        <td>{{ $nilai->nilai_harian }}</td>
                    </tr>
                    <tr>
                        <th>Nilai UTS</th>
                        <td>{{ $nilai->nilai_uts }}</td>
                    </tr>
                    <tr>
                        <th>Nilai Akhir</th>
                        <td>{{ $nilai->nilai_akhir }}</td>
                    </tr>
                    <tr>
                        <th>Grade</th>
                        <td>{{ $nilai->grade }}</td>
                    </tr>
                </table>
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
