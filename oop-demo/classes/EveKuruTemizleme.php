<?php

class EveKuruTemizleme extends KuruTemizleme
{
    private $evdenAlinsinMi = true;
    private $eveTeslimEdilsinMi = true;

    public function __construct()
    {
        echo "Eve";
        parent::__construct();
    }

    public function __destruct()
    {
        echo "Eve";
        parent::__destruct();
    }


    public function setEvdenAlma($durum)
    {
        $this->evdenAlinsinMi = $durum;
    }

    public function setEveTeslim($durum)
    {
        $this->eveTeslimEdilsinMi = $durum;
    }

    private function evdenAl()
    {
        echo $this->camasir . " evden alındı<br>";
    }

    private function eveTeslimEt()
    {
        echo $this->camasir . " eve teslim edildi<br>";
    }

    public function temizle()
    {
        if($this->evdenAlinsinMi)
            $this->evdenAl();

        parent::temizle();

        if($this->eveTeslimEdilsinMi)
            $this->eveTeslimEt();
    }
}