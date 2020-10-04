<?php

class Prodotto {
  public $categoria;
  public $marca;
  public $prodotto;
  public $prezzo;

  public function __construct($_categoria, $_marca, $_prodotto){
    $this->categoria = $_categoria;
    $this->marca = $_marca;
    $this->prodotto = $_prodotto;
  }

  public function setPrezzo($_prezzo){
    return $this->prezzo = $_prezzo;
  }

  public function getPrezzo(){
    !(empty($this->prezzo)) || die('Non puoi fare il calcolo');
    return $this->prezzo;
  }

}
