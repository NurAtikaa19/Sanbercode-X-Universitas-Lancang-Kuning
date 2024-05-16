<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1> Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    
    
            $Kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" ];
            print_r($Kids);
            echo "<br>";
            $Adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];

            print_r($Adults);
       
    echo "<h3> Soal 2</h3>";
    
    echo "Total kids : " . count($Kids);
    echo "<br>";
    echo "<ol>";
    echo "<li> $Kids[0] </li>";
    echo "<li> $Kids[1] </li>";
    echo "<li> $Kids[2] </li>";
    echo "<li> $Kids[3] </li>";
    echo "<li> $Kids[4] </li>";
    echo "<li> $Kids[5] </li>";
    

    echo "</ol>";

    echo "Total Adults : " . count($Adults);
    echo "<br>";
    echo "<ol>";
    echo "<li> $Adults[0] </li>";
    echo "<li> $Adults[1] </li>";
    echo "<li> $Adults[2] </li>";
    echo "<li> $Adults[3] </li>";
    echo "<li> $Adults[4] </li>";
    

    echo "</ol>";

echo "<h4> Soal 3 </h4>";

$KidsArr = [
    ["name" => "Mike Wheeler", "Age" => "12", "Aliases" => " Dungeon Master", "Status"=> "Alive"],

    ["name" => "Will Byers", "Age" => "12", "Aliases" => " Will the Wise", "Status"=> "Alive"],

    ["name" => "Jim Hopper", "Age" => "43", "Aliases" => " Chief Hopper", "Status"=> "Deceased"],

    ["name" => "Eleven", "Age" => "12", "Aliases" => " El", "Status"=> "Alive"],


];
echo "<pre>";
print_r($KidsArr);
echo "</pre>";
     
    ?>
</body>

</html>