<?php

namespace App\Models;

use App\Models\kategori_kriteria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kriteria extends Model
{

    use HasFactory;
    protected $table = 'kriteria';
    protected $fillable = ['nama', 'keterangan'];
    public function kategori_kriteria()
    {
        return $this->HasMany(kategori_kriteria::class, 'kri_id', 'id');
    }
    public function total()
    {
        return $this->hasMany(total::class, 'kri_id', 'id');

    }
}