<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with('mahasiswa', 'matakuliah')->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = Matakuliah::all();
        return view('nilai.create', compact('mahasiswas', 'matakuliahs'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'mahasiswa_id' => 'required',
            'matakuliah_id' => 'required',
            'nilai_harian' => 'required|numeric',
            'nilai_uts' => 'required|numeric',
            'nilai_akhir' => 'required|numeric',
            'grade' => 'required|max:2',
        ]);

        Nilai::create($request->all());

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil ditambahkan.');
    }

    public function show($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilai.show', compact('nilai'));
    }

    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = Matakuliah::all();
        return view('nilai.edit', compact('nilai', 'mahasiswas', 'matakuliahs'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'mahasiswa_id' => 'required',
            'matakuliah_id' => 'required',
            'nilai_harian' => 'required|numeric',
            'nilai_uts' => 'required|numeric',
            'nilai_akhir' => 'required|numeric',
            'grade' => 'required|max:2',
        ]);

        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus.');
    }
}
