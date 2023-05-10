<?php
  include 'Produk.php';
 ///////////////////////////////////////CLASS CDRack

  class CDRack extends Produk{
    public $capacity,
           $model,
           $ubahharga;

    public function __construct($judul, $diskon, $harga,
    $capacity, $model){

      parent::__construct($judul, $diskon, $harga);

      $this->capacity = $capacity;
      $this->model = $model;
      $ubahharga = $harga * 0.15;
      $this->harga = $harga + $ubahharga - $diskon;
    }
    public function getInfoProduk(){
      $str = "CDRack : " . parent::getInfoProduk() . "Kapasitas : {$this->capacity} ,  Model : {$this->model}.";
      return $str.
    }
  }

  $rak1 = new CDRack("Ikea Alloy", 0, 670000, 500, "16B");
  $rak2 = new CDRack("Swedenn Rack", 50000, 4500000, 1200, "9");
  $rak3 = new CDRack("Mitra Jaya", 0, 250000, 300, "BC");
  $rak4 = new CDRack("Ikea X Godzilla", 0, 2540000, 120, "WY65");
  $rak5 = new CDRack("Ikea Alloy", 10000, 890000, 900, "16C");
  
  echo $rak1->getInfoProduk();
  echo "<br>";
  echo $rak2->getInfoProduk();
  echo "<br>";
  echo $rak3->getInfoProduk();
  echo "<br>";
  echo $rak4->getInfoProduk();
  echo "<br>";
  echo $rak5->getInfoProduk();
  echo "<br>";
?>