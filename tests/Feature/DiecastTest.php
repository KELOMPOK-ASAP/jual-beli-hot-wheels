<?php

namespace Tests\Feature;

use App\Models\Anggota;
use App\Models\Diecast;
use App\Models\KategoriDiecast;
use App\Models\Peminjaman;
use App\Models\User;
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

    private function createAdmin(): User
    {
        return User::create([
            'name' => 'Admin Test',
            'email' => 'admintest_'.uniqid().'@example.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);
    }

    private function createRegularUser(): User
    {
        return User::create([
            'name' => 'User Test',
            'email' => 'usertest_'.uniqid().'@example.com',
            'password' => bcrypt('password123'),
            'role' => 'user',
        ]);
    }

    public function test_guest_is_redirected_to_login_when_accessing_admin_routes(): void
    {
        $response = $this->get('/diecast/create');
        $response->assertRedirect('/login');

        $kategoriResponse = $this->get('/kategori');
        $kategoriResponse->assertRedirect('/login');
    }

    public function test_regular_user_gets_forbidden_status_when_accessing_admin_routes(): void
    {
        $user = $this->createRegularUser();

        $response = $this->actingAs($user)->get('/diecast/create');
        $response->assertStatus(403);

        $kategoriResponse = $this->actingAs($user)->get('/kategori');
        $kategoriResponse->assertStatus(403);
    }

    public function test_admin_can_render_diecast_create_page(): void
    {
        $admin = $this->createAdmin();

        $response = $this->actingAs($admin)->get('/diecast/create');

        $response->assertStatus(200);
        $response->assertSee('Tambah Diecast Hot Wheels');
    }

    public function test_admin_can_store_new_diecast(): void
    {
        $admin = $this->createAdmin();
        $kategori = KategoriDiecast::create(['nama' => 'Off-Road & Rally']);

        $response = $this->actingAs($admin)->post('/diecast', [
            'nama_diecast' => 'Ford Bronco Custom 1975',
            'kategori_id' => $kategori->id,
            'skala' => '1:64',
            'harga' => 60000,
            'stok' => 10,
        ]);

        $response->assertRedirect('/diecast');
        $this->assertDatabaseHas('diecast', [
            'nama_diecast' => 'Ford Bronco Custom 1975',
            'kategori_id' => $kategori->id,
            'harga' => 60000,
            'stok' => 10,
        ]);
    }

    public function test_admin_can_render_diecast_edit_page(): void
    {
        $admin = $this->createAdmin();
        $kategori = KategoriDiecast::create(['nama' => 'JDM']);
        $diecast = Diecast::create([
            'kategori_id' => $kategori->id,
            'nama_diecast' => 'Mazda RX-7 FD3S',
            'skala' => '1:64',
            'harga' => 85000,
            'stok' => 3,
        ]);

        $response = $this->actingAs($admin)->get("/diecast/{$diecast->id}/edit");

        $response->assertStatus(200);
        $response->assertSee('Mazda RX-7 FD3S');
    }

    public function test_admin_can_update_diecast(): void
    {
        $admin = $this->createAdmin();
        $kategori = KategoriDiecast::create(['nama' => 'Classic']);
        $diecast = Diecast::create([
            'kategori_id' => $kategori->id,
            'nama_diecast' => 'VW Beetle 1965',
            'skala' => '1:64',
            'harga' => 50000,
            'stok' => 4,
        ]);

        $response = $this->actingAs($admin)->put("/diecast/{$diecast->id}", [
            'nama_diecast' => 'VW Beetle 1965 Sunroof Edition',
            'kategori_id' => $kategori->id,
            'skala' => '1:64',
            'harga' => 70000,
            'stok' => 2,
        ]);

        $response->assertRedirect('/diecast');
        $this->assertDatabaseHas('diecast', [
            'id' => $diecast->id,
            'nama_diecast' => 'VW Beetle 1965 Sunroof Edition',
            'harga' => 70000,
            'stok' => 2,
        ]);
    }

    public function test_admin_can_delete_diecast(): void
    {
        $admin = $this->createAdmin();
        $kategori = KategoriDiecast::create(['nama' => 'Supercar']);
        $diecast = Diecast::create([
            'kategori_id' => $kategori->id,
            'nama_diecast' => 'McLaren P1 GTR',
            'skala' => '1:64',
            'harga' => 95000,
            'stok' => 1,
        ]);

        $response = $this->actingAs($admin)->delete("/diecast/{$diecast->id}");

        $response->assertRedirect('/diecast');
        $this->assertDatabaseMissing('diecast', [
            'id' => $diecast->id,
        ]);
    }

    public function test_admin_can_manage_kategori_crud(): void
    {
        $admin = $this->createAdmin();

        // 1. Index
        $response = $this->actingAs($admin)->get('/kategori');
        $response->assertStatus(200);

        // 2. Store
        $storeResponse = $this->actingAs($admin)->post('/kategori', [
            'nama' => 'Batman Batmobile Series',
        ]);
        $storeResponse->assertRedirect('/kategori');
        $this->assertDatabaseHas('kategori_diecast', [
            'nama' => 'Batman Batmobile Series',
        ]);

        $kategori = KategoriDiecast::where('nama', 'Batman Batmobile Series')->firstOrFail();

        // 3. Update
        $updateResponse = $this->actingAs($admin)->put("/kategori/{$kategori->id}", [
            'nama' => 'Batman DC Comics Series',
        ]);
        $updateResponse->assertRedirect('/kategori');
        $this->assertDatabaseHas('kategori_diecast', [
            'id' => $kategori->id,
            'nama' => 'Batman DC Comics Series',
        ]);

        // 4. Destroy
        $destroyResponse = $this->actingAs($admin)->delete("/kategori/{$kategori->id}");
        $destroyResponse->assertRedirect('/kategori');
        $this->assertDatabaseMissing('kategori_diecast', [
            'id' => $kategori->id,
        ]);
    }

    public function test_authentication_login_and_logout_flow(): void
    {
        $admin = $this->createAdmin();

        // 1. Render login page
        $loginPage = $this->get('/login');
        $loginPage->assertStatus(200);
        $loginPage->assertSee('Masuk ke Akun');

        // 2. Login submit
        $loginSubmit = $this->post('/login', [
            'email' => $admin->email,
            'password' => 'password123',
        ]);
        $loginSubmit->assertRedirect('/diecast');
        $this->assertAuthenticatedAs($admin);

        // 3. Logout submit
        $logoutSubmit = $this->post('/logout');
        $logoutSubmit->assertRedirect('/diecast');
        $this->assertGuest();
    }
}
