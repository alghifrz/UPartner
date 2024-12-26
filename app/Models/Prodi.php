<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prodi extends Model
{
    protected $table = 'prodi';

    use HasFactory;

    // Tentukan kolom-kolom yang dapat diisi
    protected $fillable = ['prodi_name'];

    // Relasi ke mahasiswa
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
