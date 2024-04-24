<?php

require_once '../../lsp/case2/kendaraanbbm.php';

class Mobil implements KendaraanBBM {
    public function menggunakanBBM(): void {
        echo "Mobil menggunakan bahan bakar bensin atau solar.\n";
    }
}

?>