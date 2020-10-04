<?php

require_once 'prodotto.php';

class Pc extends Prodotto {
  public $processore;
  public $ram;
  public $vga;
  public $storage;

  public function __construct($_processore, $_ram, $_vga){
    $this->processore = $_processore;
    $this->ram = $_ram;
    $this->vga = $_vga;
  }

  



}

 ?>
