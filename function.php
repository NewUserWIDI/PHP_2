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
