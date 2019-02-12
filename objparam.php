<?php

$diziKisi = array(
    "ad" => "Uğur ARICI",
    "hobileri" => ["konuşmak", "yemek yemek"],
    "meslek" => "Danışman",
    "dogumYili" => 1993
);

class Kisi
{
    public $ad;
    public $hobileri;
    public $meslek;
    public $dogumYili ;
}

$objKisi = new Kisi;
$objKisi->ad = "Uğur ARICI";
$objKisi->hobileri = ["konuşmak", "yemek yemek"];
$objKisi->meslek = "Danışman";
$objKisi->dogumYili = 1993;

function dizideDegistir($kisiDizisi)
{
    $kisiDizisi['ad'] = "Uğurcum";
}

dizideDegistir($diziKisi);
echo $diziKisi['ad'];
echo "<hr>";

function objedeDegistir($kisiObjesi)
{
    $kisiObjesi->ad = "Uğurcum objesi";
}

objedeDegistir($objKisi);
echo $objKisi->ad;