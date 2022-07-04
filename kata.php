<?php

function kata($nominal) {
    $nominal = abs($nominal);
    $angka = array("", "satu", "dua", "tiga", "empat", "lima",
        "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nominal <12) {
        $temp = " ". $angka[$nominal];
    } else if ($nominal <20) {
        $temp = kata($nominal - 10). " belas";
    } else if ($nominal <100) {
        $temp = kata($nominal/10)." puluh". kata($nominal % 10);
    } else if ($nominal <200) {
        $temp = " seratus" . kata($nominal - 100);
    } else if ($nominal <1000) {
        $temp = kata($nominal/100) . " ratus" . kata($nominal % 100);
    } else if ($nominal <2000) {
        $temp = " seribu" . kata($nominal - 1000);
    } else if ($nominal <1000000) {
        $temp = kata($nominal/1000) . " ribu" . kata($nominal % 1000);
    } else if ($nominal <1000000000) {
        $temp = kata($nominal/1000000) . " juta" . kata($nominal % 1000000);
    } else if ($nominal <1000000000000) {
        $temp = kata($nominal/1000000000) . " milyar" . kata(fmod($nominal,1000000000));
    } else if ($nominal <1000000000000000) {
        $temp = kata($nominal/1000000000000) . " trilyun" . kata(fmod($nominal,1000000000000));
    }
    return $temp;
}