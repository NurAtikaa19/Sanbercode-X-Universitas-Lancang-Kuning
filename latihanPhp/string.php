<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>String</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";

        $kalimat1 = "PHP is never old";

        echo "Panjang string kalimat 1: " . strlen($kalimat1) . "<br>";
        echo "Panjang kata kalimat 1: " . str_word_count($kalimat1) . "<br>";
        
        echo "<h3> Soal No 2</h3>";
        
        $kalimat2 = "I love PHP";
        
        echo "kata pertama kalimat 2: " . substr($kalimat2, 0, 1) . "<br>";
        echo "kata kedua kalimat 2: " . substr($kalimat2, 2, 4) . "<br>";
        echo "kata ketiga kalimat 2: " . substr($kalimat2, 7, 3) . "<br>";
        
     

        echo "<h3> Soal No 3 </h3>";
        
        $kalimat3 = "PHP is old but sexy!";

        echo "Sebelum : " . $kalimat3 . "<br>";
        echo "Sesudah : " . str_replace("sexy!", "awesome", $kalimat3) . "<br>";
        
        // OUTPUT : "PHP is old but awesome"

    ?>
</body>
</html>