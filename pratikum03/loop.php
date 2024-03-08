<?php 

// buat loop for 
for ($i=1; $i <= 10; $i++) { 
    // code looping
    echo $i . "<br>";
}

// buat loop array
$buah = ["anggur", "apel", "melon"];
// loop array
foreach ($buah as $b) {
    // code looping
    echo $b . "<br>";
}

?>
<?php 

// buat fungsi
function hitungUmur($thn_lahir){
    // code fungsi
    $thn_sekarang = 2023;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // tampilin umur
    # echo $umur;
    // kembaliin umur
    return $umur;
}

// panggil fungsi
echo "Umur saya adalah " . hitungUmur(2003);

?>