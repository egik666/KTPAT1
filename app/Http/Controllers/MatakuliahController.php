<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::with('jurusan')->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        $jurusans = Jurusan::all();
        return view('matakuliah.create', compact('jurusans'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|max:50',
            'semester' => 'required|integer',
            'sks_teori' => 'required|integer',
            'sks_praktikum' => 'required|integer',
            'jurusan_id' => 'required',
        ]);

        Matakuliah::create($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function edit($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $jurusans = Jurusan::all();
        return view('matakuliah.edit', compact('matakuliah', 'jurusans'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|max:50',
            'semester' => 'required|integer',
            'sks_teori' => 'required|integer',
            'sks_praktikum' => 'required|integer',
            'jurusan_id' => 'required',
        ]);

        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Data matakuliah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil dihapus.');
    }
}
