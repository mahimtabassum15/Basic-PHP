<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    $tasks = [
        "laundry"=>"Damiel",
        "trash"=>"Frida",
        "vacuum"=>"Basse",
        "dishes"=>"Balla"
    ];
    // echo count($tasks);
    sort($tasks);
    
    print_r($tasks);
    echo ("<br>");
    $fruits=["Mango","Banana","Cherry","Litchi"];
    array_push($fruits, "Lemon");
    print_r($fruits);

    ?>
    
</body>
</html>