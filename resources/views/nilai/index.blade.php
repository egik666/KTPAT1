@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>NILAI</h2>
        <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">TAMBAH DATA NILAI</a>
        <table class="table">
            <thead>
                <tr>
                    <th>MAHASISWA</th>
                    <th>MATAKULIAH</th>
                    <th>NILAI HARIAN</th>
                    <th>NILAI UTS</th>
                    <th>NILAI AKHIR</th>
                    <th>GRADE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $n)
                    <tr>
                        <td>{{ $n->mahasiswa->nama }}</td>
                        <td>{{ $n->matakuliah->nama }}</td>
                        <td>{{ $n->nilai_harian }}</td>
                        <td>{{ $n->nilai_uts }}</td>
                        <td>{{ $n->nilai_akhir }}</td>
                        <td>{{ $n->grade }}</td>
                        <td>
                            <a href="{{ route('nilai.show', $n->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('nilai.edit', $n->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('nilai.destroy', $n->id) }}" method="POST" style="display: inline;">
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
