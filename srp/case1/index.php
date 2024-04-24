<?php

require_once 'persegi.php';
require_once 'penghitungpersegi.php';

$persegi = new Persegi(5);

$penghitung = new PenghitungPersegi();
$luas = $penghitung->hitungLuas($persegi);

echo "Luas persegi dengan sisi 5 adalah: " . $luas;