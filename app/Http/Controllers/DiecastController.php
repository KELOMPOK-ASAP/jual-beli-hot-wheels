<?php

namespace App\Http\Controllers;

use App\Models\Diecast;
use App\Models\KategoriDiecast;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DiecastController extends Controller
{
    public function index()
    {
        $diecastList = Diecast::with(['kategori', 'peminjaman.anggota'])
            ->orderBy('id', 'asc')
            ->get();

        $kategoriList = KategoriDiecast::withCount('diecasts')
            ->with(['diecasts' => function ($q) {
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

        // Structured JSON for client-side interactions and modals
        $diecastJsonData = $diecastList->mapWithKeys(function ($item) {
            $katNama = $item->kategori->nama ?? 'Umum';
            $price = 45000;
            if ($item->skala === '1:64') {
                if (str_contains(strtolower($katNama), 'jdm')) { $price = 75000; }
                elseif (str_contains(strtolower($katNama), 'muscle')) { $price = 55000; }
                elseif (str_contains(strtolower($katNama), 'supercar')) { $price = 85000; }
                elseif (str_contains(strtolower($katNama), 'off-road')) { $price = 50000; }
            } elseif ($item->skala === '1:43') {
                $price = 185000;
            } elseif ($item->skala === '1:18') {
                $price = 650000;
            }

            return [$item->id => [
                'id' => $item->id,
                'name' => $item->nama_diecast,
                'category' => $katNama,
                'scale' => $item->skala,
                'stock' => $item->stok,
                'price' => $price,
                'priceFormatted' => 'Rp ' . number_format($price, 0, ',', '.'),
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
}
