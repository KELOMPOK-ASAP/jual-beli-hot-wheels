<?php

namespace Tests\Feature;

use App\Models\Anggota;
use App\Models\Diecast;
use App\Models\KategoriDiecast;
use App\Models\Peminjaman;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DiecastTest extends TestCase
{
    use RefreshDatabase;

    public function test_welcome_page_is_accessible(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Hot Wheels');
    }

    public function test_diecast_catalog_page_is_accessible(): void
    {
        $kategori = KategoriDiecast::create(['nama' => 'JDM']);
        Diecast::create([
            'kategori_id' => $kategori->id,
            'nama_diecast' => 'Nissan Skyline R34',
            'skala' => '1:64',
            'stok' => 5,
        ]);

        $response = $this->get('/diecast');

        $response->assertStatus(200);
        $response->assertSee('Nissan Skyline R34');
        $response->assertSee('JDM');
        $response->assertSee('1:64');
    }

    public function test_diecast_and_kategori_relationship(): void
    {
        $kategori = KategoriDiecast::create(['nama' => 'Muscle Car']);
        $diecast = Diecast::create([
            'kategori_id' => $kategori->id,
            'nama_diecast' => '1969 Dodge Charger',
            'skala' => '1:64',
            'stok' => 3,
        ]);

        $this->assertEquals('Muscle Car', $diecast->kategori->nama);
        $this->assertTrue($kategori->diecasts->contains($diecast));
    }

    public function test_peminjaman_relationship(): void
    {
        $kategori = KategoriDiecast::create(['nama' => 'Supercar']);
        $diecast = Diecast::create([
            'kategori_id' => $kategori->id,
            'nama_diecast' => 'Ferrari F40',
            'skala' => '1:18',
            'stok' => 1,
        ]);

        $anggota = Anggota::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'no_hp' => '08123456789',
        ]);

        $peminjaman = Peminjaman::create([
            'diecast_id' => $diecast->id,
            'anggota_id' => $anggota->id,
            'tanggal_pinjam' => now(),
        ]);

        $this->assertEquals('Ferrari F40', $peminjaman->diecast->nama_diecast);
        $this->assertEquals('Budi Santoso', $peminjaman->anggota->nama);
        $this->assertTrue($anggota->peminjaman->contains($peminjaman));
        $this->assertTrue($diecast->peminjaman->contains($peminjaman));
    }
}
