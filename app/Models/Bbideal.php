<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbideal extends Model
{
    use HasFactory;
    protected $table = 'bbideals';
    protected $primaryKey = 'id_bbideal';
    public $incrementing = true;
    protected $fillable = ['jumlahbb', 'jenis_kelamin', 'jumlahideal', 'kategori', 'gambar'];
    public $timestamps = false; // Ini harusnya true karena ada timestamps di migration
}

