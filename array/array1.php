<?php
$ar_buah = ["Semangka", "Mangga", "Pisang", "Sirsak"];

// Memanggil array
echo "Buah ke-2 adalah {$ar_buah[2]}";

// Mencetak jumlah array
echo "<br>Jumlah array: " . count($ar_buah);

// Mencetak seluruh buah
echo '<br> Seluruh buah <ol>';
foreach ($ar_buah as $_buah) {
    echo '<li>' . $_buah . '</li>';
}
echo '</ol>';

// Menambahkan buah
$ar_buah[] = "Nanas";

// Hapus buah index ke-1
unset($ar_buah[1]);

// Ubah index ke-4 menjadi Melon
$ar_buah[4] = "Melon";

// Mencetak seluruh buah dengan indexnya
echo '<ul>';
foreach ($ar_buah as $ak => $av) {
    echo "<li>Index: $ak - Nama buah: $av</li>";
}
echo '</ul>';
?>
