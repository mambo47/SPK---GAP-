<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class total extends Model
{
    use HasFactory;

    protected $table = 'total';
    protected $primaryKey = 'id';
    protected $fillable = ['guru_id', 'kri_id', 'ncf', 'nsf', 'total'];
    

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
    public function kategori_Kriteria()
    {
        return $this->belongsTo(kategori_Kriteria::class, 'kategori_kriteria_id');
    }
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class ,'kri_id');
    }
    
}
