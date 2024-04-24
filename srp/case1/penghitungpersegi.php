<?php

require_once 'persegi.php';

class PenghitungPersegi
{
    public function hitungLuas(Persegi $persegi)
    {
        $luas = $persegi->getSisi() * $persegi->getSisi();
        return $luas;
    }
}