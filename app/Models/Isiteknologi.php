<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isiteknologi extends Model
{
    use HasFactory;
    protected $fillable = ['judul','judul_kecil','isi','gambar','id_teknologi'];
    protected $primaryKey = 'user_id';

    public function teknologi()
    {
        return $this->belongsTo('App\Models\Teknologi', 'id_teknologi');
    }
}
