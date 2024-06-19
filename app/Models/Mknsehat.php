<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mknsehat extends Model
{
    use HasFactory;
    protected $table = 'mknsehats';
    protected $primaryKey = 'id_mknsehat';
    public $incrementing = true;
    protected $fillable = ['nama_makanan', 'jenis_makanan', 'jumlah_makanan', 'kalori_makanan', 'bahan_makanan','gambar'];
    public $timestamps = false; // 
}
