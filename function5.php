<?php
// 1. Membuat Function yang memproses Array
function hitungTotalNilai($kumpulanNilai) {
    $total = 0; // Variabel penampung awal

    // Mengambil setiap angka di dalam array
    foreach ($kumpulanNilai as $n) {
        $total += $n; // Menambahkan nilai ke total (Sama dengan: $total = $total + $n)
    }

    return $total;
}

// 2. Membuat data Array
$daftarNilai = [80, 75, 90, 85, 100];

// 3. Memanggil fungsi dan menampilkan hasil
$hasilAkhir = hitungTotalNilai($daftarNilai);

echo "Daftar Nilai: " . implode(", ", $daftarNilai) . "<br>";
echo "<b>Total Seluruh Nilai: " . $hasilAkhir . "</b>";
?>