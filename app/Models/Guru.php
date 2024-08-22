<?php

namespace App\Models;

use App\Models\gapSilabus;
use App\Models\gap_pelaksanaan;
use App\Models\nilai02;
use App\Models\totalSilabus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $fillable = ['id', 'nama', 'kelamin', 'alamat'];

   
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'guru_id', 'id');
    }
    public function total()
    {
        return $this->hasMany(total::class, 'guru_id', 'id');
    }
   
}