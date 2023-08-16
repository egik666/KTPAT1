@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>JURUSAN</h2>
        <a href="{{ route('jurusan.create') }}" class="btn btn-primary mb-3">TAMBAH DATA JURUSAN</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NAMA JURUSAN</th>
                    <th>JENJANG</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusans as $jurusan)
                    <tr>
                        <td>{{ $jurusan->nama }}</td>
                        <td>{{ $jurusan->jenjang }}</td>
                        <td>
                            <a href="{{ route('jurusan.show', $jurusan->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" style="display: inline;">
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
