<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\Diecast;
use App\Models\KategoriDiecast;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat User Admin Demo
        User::firstOrCreate(
            ['email' => 'admin@diecasthub.test'],
            [
                'name' => 'Admin DiecastHub',
                'password' => bcrypt('password123'),
            ]
        );

        // 2. Buat Data Kategori Diecast
        $kategoriMuscle = KategoriDiecast::firstOrCreate(['nama' => 'Muscle Car']);
        $kategoriJdm = KategoriDiecast::firstOrCreate(['nama' => 'JDM (Japanese Domestic Market)']);
        $kategoriSuper = KategoriDiecast::firstOrCreate(['nama' => 'Supercar & Exotic']);
        $kategoriClassic = KategoriDiecast::firstOrCreate(['nama' => 'Classic Vintage']);
        $kategoriOffroad = KategoriDiecast::firstOrCreate(['nama' => 'Off-Road & Rally']);

        // 3. Buat Data Diecast
        $skyline = Diecast::firstOrCreate(
            ['nama_diecast' => 'Nissan Skyline GT-R (R34) V-Spec II'],
            ['kategori_id' => $kategoriJdm->id, 'skala' => '1:64', 'stok' => 5, 'gambar' => 'skyline-r34.jpg']
        );

        $supra = Diecast::firstOrCreate(
            ['nama_diecast' => 'Toyota Supra MK4 RZ Twin Turbo'],
            ['kategori_id' => $kategoriJdm->id, 'skala' => '1:64', 'stok' => 4, 'gambar' => 'supra-mk4.jpg']
        );

        $charger = Diecast::firstOrCreate(
            ['nama_diecast' => '1969 Dodge Charger R/T 426 Hemi'],
            ['kategori_id' => $kategoriMuscle->id, 'skala' => '1:64', 'stok' => 6, 'gambar' => 'dodge-charger-1969.jpg']
        );

        Diecast::firstOrCreate(
            ['nama_diecast' => '1967 Ford Mustang Shelby GT500 "Eleanor"'],
            ['kategori_id' => $kategoriMuscle->id, 'skala' => '1:43', 'stok' => 3, 'gambar' => 'mustang-eleanor-1967.jpg']
        );

        Diecast::firstOrCreate(
            ['nama_diecast' => 'Porsche 911 GT3 RS (992)'],
            ['kategori_id' => $kategoriSuper->id, 'skala' => '1:43', 'stok' => 2, 'gambar' => 'porsche-911-gt3rs.jpg']
        );

        Diecast::firstOrCreate(
            ['nama_diecast' => 'Ferrari F40 Lightweight Edition'],
            ['kategori_id' => $kategoriSuper->id, 'skala' => '1:18', 'stok' => 1, 'gambar' => 'ferrari-f40.jpg']
        );

        Diecast::firstOrCreate(
            ['nama_diecast' => 'Mercedes-Benz 300 SL Gullwing 1954'],
            ['kategori_id' => $kategoriClassic->id, 'skala' => '1:18', 'stok' => 2, 'gambar' => 'mercedes-300sl.jpg']
        );

        Diecast::firstOrCreate(
            ['nama_diecast' => 'Land Rover Defender 90 Heritage Trophy'],
            ['kategori_id' => $kategoriOffroad->id, 'skala' => '1:64', 'stok' => 8, 'gambar' => 'defender-90.jpg']
        );

        // 4. Buat Data Anggota Komunitas
        $budi = Anggota::firstOrCreate(
            ['email' => 'budi@diecasthub.test'],
            ['nama' => 'Budi Santoso', 'no_hp' => '081234567890']
        );

        $amanda = Anggota::firstOrCreate(
            ['email' => 'amanda@diecasthub.test'],
            ['nama' => 'Amanda Putri', 'no_hp' => '087812345678']
        );

        $rizky = Anggota::firstOrCreate(
            ['email' => 'rizky@diecasthub.test'],
            ['nama' => 'Rizky Pratama', 'no_hp' => '085678901234']
        );

        // 5. Buat Riwayat Peminjaman Sampel
        Peminjaman::firstOrCreate(
            [
                'diecast_id' => $skyline->id,
                'anggota_id' => $budi->id,
                'tanggal_pinjam' => now()->subDays(3),
            ],
            [
                'tanggal_kembali' => null, // Belum kembali
            ]
        );

        Peminjaman::firstOrCreate(
            [
                'diecast_id' => $charger->id,
                'anggota_id' => $amanda->id,
                'tanggal_pinjam' => now()->subDays(7),
            ],
            [
                'tanggal_kembali' => now()->subDays(1), // Sudah kembali
            ]
        );
    }
}
