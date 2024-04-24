<?php

require_once 'Mobil.php';
require_once 'MobilListrik.php';

$mobil = new Mobil();
$mobilListrik = new MobilListrik();

echo "Mobil Actions:\n";
$mobil->menggunakanBBM();
echo "\nMobil Listrik Actions:\n";
$mobilListrik->menggunakanBaterai();