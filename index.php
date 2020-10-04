<?php

require_once 'classes/prodotto.php';
require_once 'classes/pc.php';

$pc1 = new pc('desktop','HP','PC',);
$pc1-> setPrezzo(250);
var_dump($pc1);












// $stanzaSingola = new Stanza('102',1); // Istanza
// var_dump($stanzaSingola);
// $stanzaSingola->prezzo = '50';
// echo $stanzaSingola->calcolaPrezzo(5); /

 ?>
