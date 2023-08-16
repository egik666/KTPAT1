@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>TAMBAH DATA JURUSAN</h2>
        <form action="{{ route('jurusan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">NAMA JURUSAN</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jenjang">JENJANG</label>
                <select class="form-control" id="jenjang" name="jenjang" required>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
@endsection

