<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nilai', 'hitung', 'gap', 'guru_id', 'kategori_id'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
    public function kategori_Kriteria()
    {
        return $this->belongsTo(kategori_Kriteria::class, 'kategori_kriteria_id');
    }
    // public function total()
    // {
    //     return $this->hasMany(total::class, 'nilai_id', 'id');

    // }


}