<?php
namespace App\Lib;

class Common
{
    public static function getDatetimeNow()
    {
        $datetime = date('c');
        return $datetime;
    }
}