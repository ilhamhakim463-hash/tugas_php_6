<?php
// 1. Membuat Function dengan Kondisi (if-else)
function cekKelulusan($nilai) {
    if ($nilai >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

// 2. Cara Menggunakannya
$nilaiBudi = 80;
$hasilBudi = cekKelulusan($nilaiBudi);

echo "Nilai: $nilaiBudi <br>";
echo "Status: " . $hasilBudi;

echo "<hr>";

// Contoh jika tidak lulus
$nilaiAndi = 60;
echo "Nilai: $nilaiAndi <br>";
echo "Status: " . cekKelulusan($nilaiAndi);
?>