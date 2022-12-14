<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknologi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_teknologi','gambar'];

    protected $primaryKey = 'id_teknologi';

    public function teknologi()
    {
        return $this->hasOne('App\Models\Isiteknologi', 'id_teknologi');
    }
}
