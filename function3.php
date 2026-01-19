<?php
// 1. Membuat Function dengan Return Value
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas; // Mengirimkan hasil kembali ke pemanggil
}

// 2. Memanggil fungsi dan menyimpannya dalam variabel
$hasil = hitungLuasPersegi(5);

// 3. Menampilkan hasilnya
echo "Luas persegi dengan sisi 5 adalah: " . $hasil;
?>