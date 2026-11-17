<?php

namespace App\Http\Controllers;

use App\Models\KategoriDiecast;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kategoriList = KategoriDiecast::withCount('diecasts')
            ->orderBy('id', 'asc')
            ->get();

        return view('kategori.index', compact('kategoriList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255', 'unique:kategori_diecast,nama'],
        ]);

        KategoriDiecast::create($validated);

        return redirect()->route('kategori.index')->with('success', 'Kategori baru berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriDiecast $kategori): RedirectResponse
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255', 'unique:kategori_diecast,nama,'.$kategori->id],
        ]);

        $kategori->update($validated);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriDiecast $kategori): RedirectResponse
    {
        $nama = $kategori->nama;
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', "Kategori '{$nama}' berhasil dihapus!");
    }
}
