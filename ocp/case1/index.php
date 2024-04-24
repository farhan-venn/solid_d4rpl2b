<?php

require_once 'pembayarancustomer.php';
require_once 'debit.php';
require_once 'kredit.php';
require_once 'cash.php';

$pembayaranCustomer = new PembayaranCustomer();

$debit = new Debit();
$kredit = new Kredit();
$cash = new Cash();

$pembayaranCustomer->menerimaPembayaran($debit);
$pembayaranCustomer->menerimaPembayaran($kredit);
$pembayaranCustomer->menerimaPembayaran($cash);