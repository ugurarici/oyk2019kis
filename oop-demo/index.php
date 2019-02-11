<?php

// require_once "classes/KuruTemizleme.php";
// require_once "classes/EveKuruTemizleme.php";

//  yukarıdaki gibi her sınıfı require ile çekmek yerine
//  bir sınıfa erişilmeye çalışıp da sınıf bulunamazsa
//  otomatik yükleme yapacak bir fonksiyon tanımlayabiliriz
function myAutoloader($className)
{
    require_once "classes/$className.php";
}

//  bizim için otomatik yükleme işlemini yapmasını istediğimiz
//  fonksiyonumuzu, sınıf bulunamadığında tetiklenmesi için kaydederiz
spl_autoload_register('myAutoloader');

try{
    $temizlikci = new EveKuruTemizleme;
    $temizlikci->setEveTeslim(false);
    $temizlikci->setCamasir("pantolon");
    $temizlikci->temizle();
} catch(Exception $e) {
    echo $e->getMessage();
}
