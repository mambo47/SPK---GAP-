<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tindaklanjut extends Model
{
    use HasFactory;
    protected $table = 'tindakan';
    protected $fillable = ['rank', 'ket'];
}
