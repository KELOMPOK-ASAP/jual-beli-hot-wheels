<?php

namespace App\Http\Controllers;

use App\Models\Diecast;
use App\Models\KategoriDiecast;
use App\Models\Peminjaman;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DiecastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $diecastList = Diecast::with(['kategori', 'peminjaman.anggota'])
            ->orderBy('id', 'desc')
            ->get();

        $kategoriList = KategoriDiecast::withCount('diecasts')
            ->with(['diecasts' => function ($q): void {
                $q->select('id', 'kategori_id', 'stok');
            }])
            ->get();

        $skalaList = Diecast::select('skala')
            ->distinct()
            ->orderBy('skala')
            ->pluck('skala');

        $totalDiecast = $diecastList->count();
        $totalStok = $diecastList->sum('stok');
        $totalKategori = $kategoriList->count();
        $totalDipinjam = Peminjaman::whereNull('tanggal_kembali')->count();
        $totalTersedia = $totalStok;

        $diecastJsonData = $diecastList->mapWithKeys(function (Diecast $item): array {
            $katNama = $item->kategori->nama ?? 'Umum';

            return [$item->id => [
                'id' => $item->id,
                'name' => $item->nama_diecast,
                'category' => $katNama,
                'scale' => $item->skala,
                'stock' => $item->stok,
                'price' => $item->effective_harga,
                'priceFormatted' => $item->harga_formatted,
                'image' => $item->gambar_url,
            ]];
        });

        return view('diecast.index', compact(
            'diecastList',
            'kategoriList',
            'skalaList',
            'totalDiecast',
            'totalStok',
            'totalKategori',
            'totalDipinjam',
            'totalTersedia',
            'diecastJsonData'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $kategoriList = KategoriDiecast::orderBy('nama', 'asc')->get();

        return view('diecast.create', compact('kategoriList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama_diecast' => ['required', 'string', 'max:255'],
            'kategori_id' => ['required', 'exists:kategori_diecast,id'],
            'skala' => ['required', 'string', 'max:20'],
            'harga' => ['required', 'numeric', 'min:0'],
            'stok' => ['required', 'integer', 'min:0'],
            'gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,gif', 'max:2048'],
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/hotwheels'), $filename);
            $validated['gambar'] = $filename;
        }

        Diecast::create($validated);

        return redirect()->route('diecast.index')->with('success', 'Diecast Hot Wheels berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diecast $diecast): View
    {
        $kategoriList = KategoriDiecast::orderBy('nama', 'asc')->get();

        return view('diecast.edit', compact('diecast', 'kategoriList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diecast $diecast): RedirectResponse
    {
        $validated = $request->validate([
            'nama_diecast' => ['required', 'string', 'max:255'],
            'kategori_id' => ['required', 'exists:kategori_diecast,id'],
            'skala' => ['required', 'string', 'max:20'],
            'harga' => ['required', 'numeric', 'min:0'],
            'stok' => ['required', 'integer', 'min:0'],
            'gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,gif', 'max:2048'],
        ]);

        if ($request->hasFile('gambar')) {
            $defaultSeedImages = [
                'defender-90.jpg',
                'dodge-charger-1969.jpg',
                'ferrari-f40.jpg',
                'mercedes-300sl.jpg',
                'mustang-eleanor-1967.jpg',
                'porsche-911-gt3rs.jpg',
                'skyline-r34.jpg',
                'supra-mk4.jpg',
            ];

            if ($diecast->gambar && ! in_array($diecast->gambar, $defaultSeedImages, true)) {
                $oldPath = public_path('images/hotwheels/'.$diecast->gambar);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }

            $file = $request->file('gambar');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/hotwheels'), $filename);
            $validated['gambar'] = $filename;
        }

        $diecast->update($validated);

        return redirect()->route('diecast.index')->with('success', 'Data Diecast Hot Wheels berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diecast $diecast): RedirectResponse
    {
        $defaultSeedImages = [
            'defender-90.jpg',
            'dodge-charger-1969.jpg',
            'ferrari-f40.jpg',
            'mercedes-300sl.jpg',
            'mustang-eleanor-1967.jpg',
            'porsche-911-gt3rs.jpg',
            'skyline-r34.jpg',
            'supra-mk4.jpg',
        ];

        if ($diecast->gambar && ! in_array($diecast->gambar, $defaultSeedImages, true)) {
            $oldPath = public_path('images/hotwheels/'.$diecast->gambar);
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }
        }

        $nama = $diecast->nama_diecast;
        $diecast->delete();

        return redirect()->route('diecast.index')->with('success', "Diecast '{$nama}' berhasil dihapus!");
    }
}
