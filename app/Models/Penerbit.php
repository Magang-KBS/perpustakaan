<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'tb_penerbit';
    protected $fillable = ['nama_penerbit', 'alamat', 'no_telp'];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'penerbit_id');
    }
}
