<?php
  include 'Produk.php';
  ///////////////////////////////////////CLASS CDMusic

  class CDMusic extends Produk{
    public $artis,
           $genre,
           $ubahdiskon,
           $ubahharga;

    public function __construct($judul, $diskon, $harga,
    $artis, $genre){

      parent::__construct($judul, $diskon, $harga);

      $this->artis = $artis;
      $this->genre = $genre;
      $ubahdiskon = $diskon * 0.05;
      $this->diskon = $diskon + $ubahdiskon;
      $ubahharga = $harga * 0.1;
      $this->harga = $harga + $ubahharga - $diskon;
    }

    public function getInfoProduk(){
      $str = "CDMusic : " . parent::getInfoProduk() . " By : {$this->artis} ({$this->genre}).";
      return $str; 
    }
  }

  $music1 = new CDMusic("Perfect", 0, 50000, "One Direction", "Pop");
  $music2 = new CDMusic("Moonlight", 5000, 45000, "Chase Atlantic", "RnB");
  $music3 = new CDMusic("Yoru Ni Kakeru", 0, 34000, "YOASOBI", "JPop");
  $music4 = new CDMusic("TT", 5000, 81000, "TWICE", "KPop");
  $music5 = new CDMusic("Secret Garden", 0, 76000, "IU", "KPOP");
  
  echo $music1->getInfoProduk();
  echo "<br>";
  echo $music2->getInfoProduk();
  echo "<br>";
  echo $music3->getInfoProduk();
  echo "<br>";
  echo $music4->getInfoProduk();
  echo "<br>";
  echo $music5->getInfoProduk();
  echo "<br>";
?>