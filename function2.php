<?php
// 1. Membuat Function dengan parameter $nama
function sapa($nama) {
    echo "Halo, " . $nama;
}

// 2. Memanggil Function dengan memberikan argumen nama
sapa("Budi"); 

echo "<br>"; // Baris baru agar rapi

// Kamu juga bisa memanggilnya berkali-kali dengan nama berbeda
sapa("Don Corleone"); 
?>