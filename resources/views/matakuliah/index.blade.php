@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>DMATAKULIAH</h2>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">TAMBAH DATA MATAKULIAH</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NAMAM</th>
                    <th>SEMESTER</th>
                    <th>SKS TEORI</th>
                    <th>SKS PRAKTIKUM</th>
                    <th>JURUSAN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliah as $matkul)
                    <tr>
                        <td>{{ $matkul->nama }}</td>
                        <td>{{ $matkul->semester }}</td>
                        <td>{{ $matkul->sks_teori }}</td>
                        <td>{{ $matkul->sks_praktikum }}</td>
                        <td>{{ $matkul->jurusan->nama }}</td>
                        <td>
                            <a href="{{ route('matakuliah.show', $matkul->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('matakuliah.edit', $matkul->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $matkul->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
