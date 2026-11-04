<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Diecast extends Model
{
    use HasFactory;

    protected $table = 'diecast';

    protected $fillable = [
        'kategori_id',
        'nama_diecast',
        'gambar',
        'skala',
        'stok',
    ];

    protected $appends = [
        'gambar_url',
    ];

    protected function casts(): array
    {
        return [
            'stok' => 'integer',
        ];
    }

    public function getGambarUrlAttribute(): string
    {
        if ($this->gambar && file_exists(public_path('images/hotwheels/' . $this->gambar))) {
            return asset('images/hotwheels/' . $this->gambar);
        }

        // Mapping fallback based on model name keywords
        $name = strtolower($this->nama_diecast);
        if (str_contains($name, 'skyline') || str_contains($name, 'r34')) {
            return asset('images/hotwheels/skyline-r34.jpg');
        }
        if (str_contains($name, 'supra')) {
            return asset('images/hotwheels/supra-mk4.jpg');
        }
        if (str_contains($name, 'charger')) {
            return asset('images/hotwheels/dodge-charger-1969.jpg');
        }
        if (str_contains($name, 'mustang') || str_contains($name, 'eleanor')) {
            return asset('images/hotwheels/mustang-eleanor-1967.jpg');
        }
        if (str_contains($name, 'porsche') || str_contains($name, 'gt3')) {
            return asset('images/hotwheels/porsche-911-gt3rs.jpg');
        }
        if (str_contains($name, 'ferrari') || str_contains($name, 'f40')) {
            return asset('images/hotwheels/ferrari-f40.jpg');
        }
        if (str_contains($name, 'mercedes') || str_contains($name, '300 sl')) {
            return asset('images/hotwheels/mercedes-300sl.jpg');
        }
        if (str_contains($name, 'defender') || str_contains($name, 'land rover')) {
            return asset('images/hotwheels/defender-90.jpg');
        }

        return asset('images/hotwheels/skyline-r34.jpg');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriDiecast::class, 'kategori_id');
    }

    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class, 'diecast_id');
    }
}
