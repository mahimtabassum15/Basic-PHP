<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conditions & Control</h1>

    <?php
    $bool =true;
    $a=1;
    $b=4;

    // $result=match($a){
    //     10=>"Variable a is equal to ten!",
    //     2=>"Variable a is equal to two!",
    //     3=>"Variable a is equal to Three!",
    //     4=>"Variable a is equal to Four!",
    //     default=> "Non were a match",
    // };

    // echo $result;

    // if($a<$b | !$bool){
    //     echo"First Condition is true!";
    // }
    // else if ($a<$b && !$bool){
    //     echo"Second Condition is True!";
    // }
    // else if ($a<$b && !$bool){
    //     echo"Second Condition is True!";
    // }
    // else if ($a<$b && !$bool){
    //     echo"Second Condition is True!";
    // }
    // else{
    //     echo"None of the conditions were true";
    // }
    // switch($a){
    //     case 1:
    //         echo"The First case is correct!";
    //         break;
    //     case 2:
    //         echo"The second case is correct!";
    //         break;
    //         case 2:
    //             echo "The second case is correct!";
    //             break;
    //     default:
    //         echo "None of the conditions were true!";
    // }

    $result = match($a){
        1=>"Variable a is equal to one!",
        2=>"Variable a is equal to two!",
    };
    echo $result;
    ?>

</body>
</html>