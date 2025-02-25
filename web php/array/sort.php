<?php
$ar_buah = ["a"=>"Apel", "m"=> "Mangga", "s"=>"Semangka", "n"=> "Nanas"];

echo '<ol>';
asort($ar_buah); // Mengurutkan array tanpa menghilangkan kunci
echo '<hr/>';

foreach ($ar_buah as $key => $value) {
    echo '<li>'.$key.' - ' .$value . '</li>';
}

echo '</ol>';
?>