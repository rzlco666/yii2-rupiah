<?php

namespace rzlco666\logic;

use yii\base\Widget;

require_once 'kata.php';

class Rupiah extends Widget
{
    public static function rupiah_format($nominal)
    {
        if ($nominal === 0) {
            return "Rp 0,-";
        } elseif ($nominal === '') {
            return "Rp 0,-";
        } elseif ($nominal === null) {
            return "Rp 0,-";
        } else {
            return "Rp " . number_format($nominal, 0, ',', '.') . ",-";
        }
    }

    public static function terbilang($nominal, $style)
    {
        if ($nominal < 0) {
            $hasil = "minus " . trim(kata($nominal));
        } else {
            $hasil = trim(kata($nominal));
        }

        switch ($style) {
            case 1:
                // mengubah semua karakter menjadi huruf besar
                $hasil = strtoupper($hasil);
                break;
            case 2:
                // mengubah karakter pertama dari setiap kata menjadi huruf besar
                $hasil = ucwords($hasil);
                break;
            case 3:
                // mengubah karakter pertama menjadi huruf besar
                $hasil = ucfirst($hasil);
                break;
        }
        return $hasil;
    }
}