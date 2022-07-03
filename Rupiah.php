<?php

namespace rzlco666\logic;

use yii\base\Widget;
use NumberFormatter;

class Rupiah extends Widget
{
    public static function rupiah_format($nominal)
    {
        return "Rp " . number_format($nominal, 0, ',', '.').",-";
    }

    public static function terbilang($nominal)
    {
        $terbilang = new NumberFormatter('id-ID', NumberFormatter::SPELLOUT);
        return $terbilang->format($nominal);
    }
}