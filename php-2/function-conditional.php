<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f4f4f9;
        color: #333;
    }
    h1 {
        text-align: center;
        color: #444;
    }
    h3 {
        margin-top: 30px;
        color: #555;
    }
    .output {
        margin: 10px 0;
        padding: 10px;
        background: #e8f0fe;
        border-left: 4px solid #2196f3;
        border-radius: 4px;
    }
</style>
</head>
<body>
<h1>Berlatih Function PHP</h1>
<?php
echo "<h3>Soal No 1: Greetings</h3>";
/**
 * Soal No 1
 * Membuat fungsi greetings() untuk menyapa peserta
 */
function greetings($name) {
    echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
}
// Menjalankan fungsi greetings
echo "<div class='output'>";
greetings("Bagas");
greetings("Wahyu");
greetings("Abduh");
echo "</div>";

echo "<h3>Soal No 2: Reverse String</h3>";
/**
 * Soal No 2
 * Membuat fungsi reverseString() untuk membalikkan string
 */
function reverseString($string) {
    $reversed = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    echo "$string => $reversed<br>";
}
// Menjalankan fungsi reverseString
echo "<div class='output'>";
reverseString("Abdul");
reverseString("Garuda Cyber Institute");
reverseString("We Are GC-Ins Developer");
echo "</div>";

echo "<h3>Soal No 3: Palindrome</h3>";
/**
 * Soal No 3
 * Membuat fungsi palindrome() untuk mengecek apakah string adalah palindrome
 */
function palindrome($string) {
    $reversed = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    if ($string === $reversed) {
        echo "$string => true<br>";
    } else {
        echo "$string => false<br>";
    }
}
// Menjalankan fungsi palindrome
echo "<div class='output'>";
palindrome("civic");
palindrome("nababan");
palindrome("jambaban");
palindrome("racecar");
echo "</div>";

echo "<h3>Soal No 4: Tentukan Nilai</h3>";
/**
 * Soal No 4
 * Membuat fungsi tentukan_nilai() untuk memberikan penilaian berdasarkan angka
 */
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik<br>";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik<br>";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup<br>";
    } else {
        return "Kurang<br>";
    }
}
// Menjalankan fungsi tentukan_nilai
echo "<div class='output'>";
echo tentukan_nilai(98);
echo tentukan_nilai(76);
echo tentukan_nilai(67);
echo tentukan_nilai(43);
echo "</div>";
?>
</body>
</html>