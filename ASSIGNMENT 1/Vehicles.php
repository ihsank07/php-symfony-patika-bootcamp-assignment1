<?php

#üst sınıf olarak taşıt sınıfı oluşturulur, tüm propertyler bu sınıfta kullanılır,nitelikYazdır fonksiyonu abstract çünkü farklı şekillerde kullanılacak
abstract class Vehicles {

public $plakaNo;
public $marka;
public $model;
public $tekerlekSayisi;
public $kanatAcikligi;

abstract public function nitelikYazdir()   ;

}

#araba alt sınıfı, gereken değerler constructta yazılır
class Car extends Vehicles {


function __construct($plakaNo,$marka,$model,$tekerlekSayisi){
$this->plakaNo = $plakaNo;
$this->marka = $marka;
$this->model = $model;
$this->tekerlekSayisi = $tekerlekSayisi;

}
public function nitelikYazdir(){
    return "<br><b>Araba</b> taşıtına ait öznitelikler şu şekildedir: <br>
    <b>Plaka No:</b>".$this->plakaNo."<br>".
    "<b> Marka: </b>".$this->marka."<br>".
    "<b> Model: </b>".$this->model  ."<br>".  
    "<b> Tekerlek Sayisi: </b>".$this->tekerlekSayisi."<br>";


}
}
#motor  alt sınıfı, gereken değerler constructta yazılır
class Motorcycle extends Vehicles{


function __construct($plakaNo,$marka,$model,$tekerlekSayisi){
    $this->plakaNo = $plakaNo;
    $this->marka = $marka;
    $this->model = $model;
    $this->tekerlekSayisi = $tekerlekSayisi;

}
public function nitelikYazdir(){
    return "<br><b>Motorsiklet</b> taşıtına ait öznitelikler şu şekildedir: <br>
     <b>Plaka No:</b>".$this->plakaNo."<br>".
    "<b> Marka: </b>".$this->marka."<br>".
    "<b> Model: </b>".$this->model  ."<br>".  
    "<b> Tekerlek Sayisi: </b>".$this->tekerlekSayisi."<br>";

}
}

#uçak  alt sınıfı, gereken değerler constructta yazılır
class Plane extends Vehicles { 
function __construct($marka,$model,$kanatAcikligi){
    
    $this->marka = $marka;
    $this->model = $model;
    $this->kanatAcikligi = $kanatAcikligi;

}

public function nitelikYazdir(){
    return "<br><b>Uçak</b> taşıtına ait öznitelikler şu şekildedir: <br>
     <b> Marka: </b>".$this->marka."<br>".
    "<b> Model: </b>".$this->model  ."<br>".  
    "<b> Kanat Açıklığı: </b>".$this->kanatAcikligi."<br>";
    
}
}

$bmw = new Car("07 plk 10 " ,"BMW", "316", "4" );
$harley = new Motorcycle("07 abv 123 " ,"harley", "iron", "2" );
$airbus = new Plane("airbus" , "A380", "80m" );

echo $bmw->nitelikYazdir();
echo $harley->nitelikYazdir();
echo $airbus->nitelikYazdir();

?>