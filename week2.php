<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Number Classifier Start-->
    <?php
    $number=-7;
    if ($number>0){
        echo "Positive"."<br>";
    }
    elseif ($number<0){
        echo "Negative"."<br>";
    }
    else{
        echo "Zero";
    }

    echo ($number % 2 == 0)?"Even":"Odd" ."<br>";
    
    ?>
    <!-- Number Classifier End-->

    <!-- Simple Electricity Bill Calculator Start  -->

    <?php
    $units=1000;
    $rate=0;

    if ($units<= 50){
        $rate = $units*3.50;
    }
    elseif ($units <= 150){
        $rate = (50 * 3.50) + (($units - 50) * 4.00);
    }
    elseif ($units <=250){
        $rate = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
    }
    else{
        $rate = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
    }

    echo "Total bill for $units units = " . $rate;
    ?>
    <!-- Simple Electricity Bill Calculator End  -->

    <!-- Basic Authentication System Start -->

    <?php
    
    ?>

    <!-- Basic Authentication System End -->


</body>
</html>