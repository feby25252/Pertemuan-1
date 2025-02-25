<?php
// Array awal
$komponen = ["Mobo", "Processor", "Ram", "SSD", "GPU"];

// Menambahkan elemen baru
array_push($komponen, "PSU", "Casing"); // 'Cassing' mungkin typo

// Menampilkan hasil
echo "Setelah Push:<br>";
foreach ($komponen as $k) {
    echo "- $k<br>";
}
?>
