<?php
// Associative Array
$data_dosen = [
    "nama" => "Ir. ABADI NUGROHO, S.Kom., M.Kom.",
    "nidn" => "1104129002",
    "matkul" => "Pemrograman Web"
];

echo "Dosen Pengampu: " . $data_dosen["nama"] . "<br><br>";

// Indexed Array – Daftar teman sekelas
$teman_kelas = ["Aufa", "Annida", "Andi", "Rina", "Tono"];

// Menampilkan daftar teman menggunakan foreach
echo "Daftar Teman Sekelas:<br>";
foreach ($teman_kelas as $teman) {
    echo "- $teman<br>";
}
?>
