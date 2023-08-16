@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>EDIT DATA MATAKULIAH</h2>
        <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">NAMA MATAKULIAH</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $matakuliah->nama }}" required>
            </div>
            <div class="form-group">
                <label for="semester">SEMESTER</label>
                <input type="number" class="form-control" id="semester" name="semester" value="{{ $matakuliah->semester }}" required>
            </div>
            <div class="form-group">
                <label for="sks_teori">SKS TEORI</label>
                <input type="number" class="form-control" id="sks_teori" name="sks_teori" value="{{ $matakuliah->sks_teori }}" required>
            </div>
            <div class="form-group">
                <label for="sks_praktikum">SKS PRAKTIKUM</label>
                <input type="number" class="form-control" id="sks_praktikum" name="sks_praktikum" value="{{ $matakuliah->sks_praktikum }}" required>
            </div>
            <div class="form-group">
                <label for="jurusan_id">JURUSAN</label>
                <select class="form-control" id="jurusan_id" name="jurusan_id" required>
                    @foreach ($jurusans as $jurusan)
                        <option value="{{ $jurusan->id }}" {{ $matakuliah->jurusan_id === $jurusan->id ? 'selected' : '' }}>{{ $jurusan->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
