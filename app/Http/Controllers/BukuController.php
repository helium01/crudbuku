<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Menampilkan daftar buku
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    // Menampilkan form untuk membuat buku baru
    public function create()
    {
        return view('buku.create');
    }

    // Menyimpan buku baru ke dalam database
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'deskripsi' => 'required',
            'tahun_terbit' => 'required|integer',
        ]);

        Buku::create($data);

        return redirect()->route('buku.index');
    }

    // Menampilkan detail buku
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    // Menampilkan form untuk mengedit buku
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    // Mengupdate buku dalam database
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'deskripsi' => 'required',
            'tahun_terbit' => 'required|integer',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($data);

        return redirect()->route('buku.index');
    }

    // Menghapus buku dari database
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index');
    }
}
