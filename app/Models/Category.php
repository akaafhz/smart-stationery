<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use HasUuids; // Mengaktifkan pembuatan UUID otomatis untuk primary key

    protected $keyType = 'string';
    public $incrementing = false; // Memberitahu Laravel bahwa ID kita bukan angka 1,2,3 (auto-increment)

    // Mengizinkan kolom-kolom ini diisi data secara massal (Mass Assignment)
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
    ];

    // Fitur ini mengubah data angka 1/0 dari database menjadi true/false murni di PHP
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
