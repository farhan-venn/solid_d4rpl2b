<?php

require_once 'mahasiswa.php';
require_once 'mahasiswaview.php';

$mahasiswa = new Mahasiswa("2205047", "Mohammad Farhan Firdaus");

$view = new MahasiswaView();

$view->showMahasiswa($mahasiswa);