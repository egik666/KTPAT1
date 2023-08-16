@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>EDIT DATA MAHASISWA</h2>
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $mahasiswa->alamat }}" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">JENIS KELAMIN</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="L" {{ $mahasiswa->jenis_kelamin === 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $mahasiswa->jenis_kelamin === 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
