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

}