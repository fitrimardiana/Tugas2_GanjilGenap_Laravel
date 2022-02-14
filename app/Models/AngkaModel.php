<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AngkaModel extends Model
{
    private static $a, $b;
    private static $arr =[];

    public static function cekAngka()
    {
        if (self::$a < self::$b)
        {
            for ($i = self::$a ; $i <= self::$b ; $i++)
            {
                ($i % 2 ==0) ? self::$arr["$i"] = "genap" : self::$arr["$i"] = "ganjil";
            }
        } else
        {
            for ($i = self::$a ; $i >= self::$b ; $i--)
            {
                ($i % 2 ==0) ? self::$arr["$i"] = "genap" : self::$arr["$i"] = "ganjil";
            }
        }
    }

    public static function getHasil()
    {
        return self::$arr;
    }
    
    public static function setAngka($a, $b)
    {
        self::$a = $a;
        self::$b = $b;
    }
}