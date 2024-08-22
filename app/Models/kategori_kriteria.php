<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategori_kriteria extends Model
{

    use HasFactory;
    protected $table = 'kategori_kriteria';
    protected $fillable = ['nama','kode', 'keterangan', 'nilai_minimal', 'kri_id'];


    public function kriteria()
    {
        return $this->BelongsTo(Kriteria::class, 'kri_id');
    }
}