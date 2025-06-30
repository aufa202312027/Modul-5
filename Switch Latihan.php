<?php
$ukuran_baju = "L"; // Ubah nilainya untuk mencoba kasus lain

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Small dipilih.";
        break;
    case "M":
        echo "Ukuran Medium dipilih.";
        break;
    case "L":
        echo "Ukuran Large dipilih.";
        break;
    case "XL":
        echo "Ukuran Extra Large dipilih.";
        break;
    default:
        echo "Ukuran tidak dikenali.";
}
?>
