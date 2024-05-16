<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";

// Code function di sini


// Hapus komentar untuk menjalankan code!
function greetings($nama){
    echo "halo $nama, Selamat Datang di Sanbercode! <br>";
}
greetings("Tika");
greetings("Widya");
greetings("Mia");


echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
function balik($kata){
    $panjangKata = strlen($kata);
    $Reverse = "";
    for ($i=$panjangKata-1; $i >= 0 ; $i--){
        $Reverse .= $kata[$i];
    }
    return $Reverse;
}
function reverseString($string){
    $revString = balik($string);
    echo $revString . "<br>";
}
reverseString("Tika");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");
echo "<br>";





echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($word){
    $reverseWord = balik($word);

    if ($reverseWord == $word){
        echo "$word : true <br>";
    } else {
        echo "$word : false <br>";
    }
}

palindrome("civic") ; 
palindrome("nababan") ; 
palindrome("jambaban"); 
palindrome("racecar"); 


echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai){
    if ($nilai>= 85 && $nilai <= 100){
        echo "$nilai => sangat baik <br>";

    } else if ($nilai >= 70 && $nilai <85){
        echo "$nilai => baik <br>";

    } else if ($nilai >= 60 && $nilai <85){
        echo "$nilai => cukup <br>";


    }else {
        echo "$nilai => kurang <br>";
    }
}


echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang


?>

</body>

</html>