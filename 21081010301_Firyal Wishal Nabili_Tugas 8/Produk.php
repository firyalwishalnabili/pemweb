<?php
  class Produk {
    public  $judul, 
            $diskon,
            $harga;
    
    public function __construct($judul, $diskon = 0, $harga = 0){
      $this->judul = $judul;
      $this->diskon = $diskon;
      $this->harga = $harga;
    }

    public function getInfoProduk(){
      $str = "{$this->judul} | Diskon : {$this->diskon} , Total : (Rp. {$this->harga})";
      
      return $str;
    }
  }

  class CetakInfoProduk{
    public function cetak(Produk $produk){
      $str = "{$produk->judul}  | {$produk->diskon} (Rp. {$produk->harga})";
      return $str;
    }
  }
?>