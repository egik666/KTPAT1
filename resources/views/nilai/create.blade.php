@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>TAMBAH DATA NILAI</h2>
        <form action="{{ route('nilai.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="mahasiswa_id">MAHASISWA</label>
                <select class="form-control" id="mahasiswa_id" name="mahasiswa_id" required>
                    @foreach ($mahasiswas as $mahasiswa)
                        <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="matakuliah_id">MTAKULIAH</label>
                <select class="form-control" id="matakuliah_id" name="matakuliah_id" required>
                    @foreach ($matakuliahs as $matakuliah)
                        <option value="{{ $matakuliah->id }}">{{ $matakuliah->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nilai_harian">NILAI HARIAN</label>
                <input type="number" class="form-control" id="nilai_harian" name="nilai_harian" required>
            </div>
            <div class="form-group">
                <label for="nilai_uts">NILAI UTS</label>
                <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" required>
            </div>
            <div class="form-group">
                <label for="nilai_akhir">NILAI AKHIR</label>
                <input type="number" class="form-control" id="nilai_akhir" name="nilai_akhir" required>
            </div>
            <div class="form-group">
                <label for="grade">GRADE</label>
                <input type="text" class="form-control" id="grade" name="grade" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
