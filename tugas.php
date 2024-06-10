<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
echo "hello world";

echo "<br>";
echo "<br>";

$hello = "hello world";

for ($i = 1; $i <= 10; $i++){
    echo $hello, " ";
}
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . ". " . $hello . "\n";
}
$tahun = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

echo "<br>";
echo "<br>";
echo "1. " . $tahun[0] . "\n" ,"<br>";
echo "2. " . $tahun[1] . "\n","<br>";
echo "3. " . $tahun[2] . "\n","<br>";
echo "4. " . $tahun[3] . "\n","<br>";
echo "5. " . $tahun[4] . "\n","<br>";
echo "6. " . $tahun[5] . "\n","<br>";
echo "7. " . $tahun[6] . "\n","<br>";
echo "8. " . $tahun[7] . "\n","<br>";
echo "9. " . $tahun[8] . "\n","<br>";
echo "10. " . $tahun[9] . "\n","<br>";
echo "11. " . $tahun[10] . "\n","<br>";
echo "12. " . $tahun[11] . "\n","<br>";

$tahun2 = [
    ["January", "Tahun Baru"],
    ["February", "Imlek"],
    ["March", "Nyepi"],
    ["April", "Paskah"],
    ["May", "Hari Buruh"],
    ["June", "Hari Lahir Pancasila"],
    ["July", "Idul Adha"],
    ["August", "Hari Kemerdekaan"],
    ["September", "Muharram"],
    ["October", "Maulid Nabi"],
    ["November", "Hari Pahlawan"],
    ["December", "Natal"]
];

echo "<br>";

foreach ($tahun2 as $bulan) {
    echo $bulan[0] . " - " . $bulan[1] . "<br>";
}
echo "<br>";

function penjumlahan($a, $b) {
    return $a + $b;
}

function pengurangan($a, $b) {
    return $a - $b;
}

function perkalian($a, $b) {
    return $a * $b;
}

function pembagian($a, $b) {
    if ($b == 0) {
        return "Tidak bisa membagi dengan nol";
    }
    return $a / $b;
}

$a = 23;
$b = 2;

echo "Hasil penjumlahan $a dan $b adalah " . penjumlahan($a, $b) . ".\n";
echo "<br>";
echo "Hasil pengurangan $a dan $b adalah " . pengurangan($a, $b) . ".\n";
echo "<br>";
echo "Hasil perkalian $a dan $b adalah " . perkalian($a, $b) . ".\n";
echo "<br>";
echo "Hasil pembagian $a dan $b adalah " . pembagian($a, $b) . ".\n";

?>
</body>
</html>