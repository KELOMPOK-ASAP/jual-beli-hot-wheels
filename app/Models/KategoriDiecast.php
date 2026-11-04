<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriDiecast extends Model
{
    use HasFactory;

    protected $table = 'kategori_diecast';

    protected $fillable = [
        'nama',
    ];

    public function diecasts(): HasMany
    {
        return $this->hasMany(Diecast::class, 'kategori_id');
    }
}

