<?php

namespace App\Http\Controllers;
use App\Models\personne;

use Illuminate\Http\Request;

class listcontroller extends Controller
{
     public function index(){
        $data = personne::get();
         return $data;
     }
}
