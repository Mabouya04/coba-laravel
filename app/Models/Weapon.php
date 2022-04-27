<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    //protected $fillable = ['namaWeapon','tipe','excerpt','deskripsi'];
    protected $guarded = ['id'];

}

