<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class webcontroller extends Controller
{
    public function index(){
   	 
		return view('webcoba');
}
}