<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rarity;

class RarityController extends Controller
{
    public function RarityIndex(){
        $data = rarity::get();
        return view('rarity-List',compact('data'));
    }
}
