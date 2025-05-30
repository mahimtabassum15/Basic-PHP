<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Variable Start-->
    <?php
    $name="Mahim Tabassum";
    $age=23;
    ?>
    <!-- Variable End-->

    <!-- Constant Start-->
    <?php
    define("SITE_NAME","MacroByte iT");
    echo SITE_NAME . "<br>";
    ?>
    <!-- Constant End-->

    <!-- Printing Output Start-->
    <?php
    echo "Hello, World!". "<br>";
    print "Welcome to PHP!". "<br>";

    ?>
    <!-- Printing Output End-->

    <!-- Arithmetic Operations Start-->
    <?php
    $a = 10;
    $b = 5;

    // Addition
    echo $a + $b . "<br>"; // 15

    // Subtraction
    echo $a - $b . "<br>"; // 5

    // Multiplication
    echo $a * $b . "<br>"; // 50

    // Division
    echo $a / $b . "<br>"; // 2
    ?>
    <!-- Arithmetic Operations End-->

    <!-- Printf Start-->
    <?php
    $price=50.45;
    printf("This Pen price is $price <br>")
    ?>
    <!-- Printf End-->

    <!-- sPrintf Start-->
    <?php
    $price = 45.50;
    $message = sprintf("The price is $%.2f", $price );
    echo $message ."<br>";
    ?>
    <!-- sPrintf End-->

    <!-- Conditional Statements Start -->
    <?php
    $score = 85;

    if ($score >= 90) {
        echo "Grade: A";
    } elseif ($score >= 80) {
        echo "Grade: B";
    } else {
        echo "Grade: C";
    }
    echo "<br>";
    ?>
    <!-- Conditional Statements End -->

    <!-- Nested Start  -->
    <?php
    $score = 92;

    if ($score >= 80) {
        if ($score >= 90) {
            echo "Excellent!";
        }
        else {
            echo "Very Good!";
            }
    } 
    else {
        echo "Try harder.";
    }
    
    echo "<br>";
    ?>
    
    <!-- Nested End  -->

    <!-- Ternery Operation Start  -->
    <?php
    $age = 20;
    echo ($age >= 18) ? "Adult" : "Minor";
    echo "<br>";
    ?>
    <!-- Ternery Operation End -->

    
    <!-- Nested Ternery Operation Start  -->
    <?php
    $score = 70;
    echo ($score >= 90) ? "A" :
        (($score >= 80) ? "B" :
        (($score >= 70) ? "C" : "Fail"));
    echo "<br>";
    ?>
    
    <!-- Nested Ternery Operation End  -->

    <!-- Statement Operation Start  -->
    <?php
    $day = "Tuesday";

    switch ($day) {
        case "Monday":
            echo "Start of the week";
            break;
        case "Tuesday":
            echo "Second day of the week";
            break;
        case "Friday":
            echo "Almost weekend!";
            break;
        default:
            echo "Another day";
    }
    echo "<br>";
    ?>

    <!-- Statement Operation End  -->



</body>
</html>