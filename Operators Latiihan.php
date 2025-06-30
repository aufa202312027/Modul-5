<?php
$umur = 18;              // Umur 18, memenuhi syarat >= 17
$sudah_punya_sim = true; // Sudah punya SIM, ubah dari false ke true

if ($umur >= 17 && $sudah_punya_sim == true) {
    echo "Anda boleh mengemudi.";
} else {
    echo "Anda tidak boleh mengemudi.";
}
?>