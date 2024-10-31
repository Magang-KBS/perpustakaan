<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{

    use HasFactory;

    protected $table = 'pengarang';
    protected $fillable = ['nama_pengarang', 'no_telepon', 'email'];
    public function buku()
    {
        return $this->hasMany(Buku::class, 'pengarang_id');
    }
}
