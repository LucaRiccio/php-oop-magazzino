<?php

require_once 'classes/prodotto.php';
require_once 'classes/pc.php';

$pc1 = new pc('desktop','HP','PC',);
$pc1-> setPrezzo(250);
echo $pc1->getPrezzo();
var_dump($pc1);














 ?>
