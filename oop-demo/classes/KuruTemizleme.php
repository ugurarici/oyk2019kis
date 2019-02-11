<?php

class KuruTemizleme
{
    //  KuruTemizlemeci bir çamaşır alarak bunun üstünde yıkama
    //  işlemleri uygulayacaktır
    protected $camasir;
    const yikanabilirCamasirlar = [
        "pantolon",
        "gömlek",
        "elbise",
        "ceket"
    ];

    public function __construct()
    {
        echo "KuruTemizleme'ye hoşgeldiniz!<br>";
    }

    public function __destruct()
    {
        echo "KuruTemizleme'yi tercih ettiğiniz için teşekkürler!<br>";
    }

    public function setCamasir($disaridanGelenCamasir)
    {
        if(!in_array($disaridanGelenCamasir, self::yikanabilirCamasirlar))
            throw new Exception("Bu çamaşırız biz yıkayamayız :(");
        $this->camasir = $disaridanGelenCamasir;
    }

    public function temizle()
    {
        $this->yikama();
        $this->kurulama();
        $this->utuleme();
    }

    private function yikama()
    {
        echo $this->camasir . " yıkandı<br>";
    }

    private function utuleme()
    {
        echo $this->camasir . " ütülendi<br>";
    }

    private function kurulama()
    {
        echo $this->camasir . " kurulandı<br>";
    }
}