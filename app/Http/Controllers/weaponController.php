<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\weapon;

class weaponController extends Controller
{
    public function index(){
        return view('weapons',[
            "title" => "Weapons",
            "weapons" => Weapon::all()
        ]);
    }

    public function show(Weapon $weapon){
        return view('weapon',[
            "title" => "Weapon",
            "weapon" => $weapon
            ]);
    }
}
