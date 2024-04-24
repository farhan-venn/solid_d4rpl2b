<?php

require_once '../../lsp/case2/kendaraanlistrik.php';

class MobilListrik implements KendaraanListrik {
    public function menggunakanBaterai(): void {
        echo "Mobil listrik menggunakan baterai untuk tenaga.\n";
    }
}