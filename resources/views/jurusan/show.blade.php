@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>DETAIL JURUSAN</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>NAMA JURUSAN</th>
                        <td>{{ $jurusan->nama }}</td>
                    </tr>
                    <tr>
                        <th>JENJANG</th>
                        <td>{{ $jurusan->jenjang }}</td>
                    </tr>
                </table>
                <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
