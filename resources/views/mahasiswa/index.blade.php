@extends('layouts.app')

@section('content')
    <h2>MAHASISWA</h2>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">TAMBAH DATA MAHASISWA</a>
    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td>{{ $mahasiswa->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
