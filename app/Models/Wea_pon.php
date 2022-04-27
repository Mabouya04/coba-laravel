<?php

namespace App\Models;


class weapon
{
    private static $all_Weapons = [
        [
            "namaWeapon" => "M4A1",
            "slug"=> "m4a1",
            "tipe" => "Assault Rifle",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam accusamus, 
            reiciendis ratione laudantium qui cupiditate eaque sequi autem veniam, dolor consequatur 
            numquam cum ex. Voluptatum, repudiandae debitis? Tempora, ducimus culpa! Similique mollitia 
            libero exercitationem in, aperiam eveniet voluptatum reprehenderit harum dolorum consequuntur 
            minus cumque qui veniam quae recusandae voluptatibus, deleniti ipsum numquam, sint 
            accusantium tempora esse. Maiores corporis beatae magnam blanditiis. Nesciunt nostrum earum 
            ipsum eveniet illum optio perferendis amet repudiandae libero nobis, veniam magnam aliquid 
            numquam assumenda! Quisquam, fugiat!"
        ],
        [
            "namaWeapon" => "AK-47",
            "slug"=> "ak-47",
            "tipe" => "Assault Rifle",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam accusamus, 
            reiciendis ratione laudantium qui cupiditate eaque sequi autem veniam, dolor consequatur 
            numquam cum ex. Voluptatum, repudiandae debitis? Tempora, ducimus culpa! Similique mollitia 
            libero exercitationem in, aperiam eveniet voluptatum reprehenderit harum dolorum consequuntur 
            minus cumque qui veniam quae recusandae voluptatibus, deleniti ipsum numquam, sint 
            accusantium tempora esse. Maiores corporis beatae magnam blanditiis. Nesciunt nostrum earum 
            ipsum eveniet illum optio perferendis amet repudiandae libero nobis, veniam magnam aliquid 
            numquam assumenda! Quisquam, fugiat!"
        ]
    ];

    public static function all()
    {
        return collect(self::$all_Weapons);
    }

    public static function find($slug)
    {
        $weapons = static::all();
        return $weapons->firstWhere('slug', $slug);
    }
}
