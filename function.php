<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number=-25.2;


    echo pow(21,2) . "<br>";
    echo sqrt(52) . "<br>";
    echo rand(1,100) . "<br>" ;

    $array=["apple","banana","orange","mango"];

    print_r(array_reverse($array));

    echo "<br>";

    $array1=["apple","banana","orange"];
    $array2=["lithci","Lemon","mango"];

    print_r(array_merge($array1,$array2));

    echo "<br>";

    echo date("Y-m-d H:i:s")."<br>";
    
    $date="2025-06-01 12:00:00";
    echo strtotime($date);
    echo time();
    ?>
</body>
</html>