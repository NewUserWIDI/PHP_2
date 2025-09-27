<?php

function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Widiii<br>"; //Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br>";
}

//memanggil fungsi yang sudah dibuat
perkenalan();

?>

<?php

function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Widiii<br>"; //Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br>";
}

//memanggil fungsi yang sudah dibuat
perkenalan();
echo "<hr>"; // Tambahkan garis pemisah agar outputnya jelas
perkenalan(); // Panggilan kedua

?>
<?php
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Widiii<br>"; //Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br>";
}

//memanggil fungsi yang sudah dibuat
perkenalan();
echo "<hr>"; // Tambahkan garis pemisah agar outputnya jelas
perkenalan(); // Panggilan kedua
?>

<?php
// membuat fungsi baru dengan parameter
function perkenalanDenganNama($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalanDenganNama("Handana", "Hallo");
echo "<hr>";

$saya = "Widiii";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalanDenganNama($saya, $ucapanSalam);
?>
<?php
// fungsi dengan parameter default
function perkenalanDefault($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/><br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalanDefault("Hamdana", "Hallo");

echo "<hr>";

$saya = "Widiii";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>
<?php
// fungsi 
function hitungUmur($thn_Lahir, $thn_Sekarang){
    $umur = $thn_Sekarang - $thn_Lahir;
    return $umur; 
}

echo "Umur saya adalah ". hitungUmur(1988, 2023) ."tahun"
?>

<?php
// membuat fungsi 
function hitungUmur($thn_Lahir, $thn_Sekarang){
    $umur = $thn_Sekarang - $thn_Lahir;
    return $umur; 
}
function perkenalan ($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo "Saya berusia ".hitungUmur(1988, 2023)." tahun<br>";
    echo "Senang berkenalan dengan anda<br>";
}
// pemanggilan fungsi perkenalan
perkenalan("Widi"); 
?>
<?php
for ($i=1; $i <=25; $i++){
    echo "Perulangan ke-{$i} <br>";
}
?>

<?php
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
    // Panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>
