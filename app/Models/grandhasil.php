<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\totalSilabus;
use App\Models\total_Kbm;
use App\Models\total_pelak;
use App\Models\total_Penilaian;
use App\Models\total_perencanaan;
use App\Models\total_rpp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grandhasil extends Model
{
    use HasFactory;
    protected $table = 'grandhasil';
    protected $fillable = ['guru_id','grandhasil'];
    
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}