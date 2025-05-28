<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Make Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num01" placeholder="Number-1" required>
        <select name="operator" required>
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="number" name="num02" placeholder="Number-2" required>
        <button type="submit">Calculate</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $operator = htmlspecialchars($_POST["operator"]);

        $errors = false;

        if (empty($num01) || empty($num02)) {
            echo "<p class='calc-error'>Fill in all fields!</p>";
            $errors = true;
        }

        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='calc-error'>Please enter valid numbers!</p>";
            $errors = true;
        }

        if (!$errors) {
            $value = 0;
            switch ($operator) {
                case "addition":
                    $value = $num01 + $num02;
                    break;
                case "subtraction":
                    $value = $num01 - $num02;
                    break;
                case "multiplication":
                    $value = $num01 * $num02;
                    break;
                case "division":
                    if ($num02 == 0) {
                        echo "<p class='calc-error'>Cannot divide by zero!</p>";
                        $errors = true;
                        break;
                    }
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p class='calc-error'>Something went wrong!</p>";
                    $errors = true;
                    break;
            }

            if (!$errors) {
                echo "<p class='calc-result'>Result = " . $value . "</p>";
            }
        }
    }
    ?>
</body>
</html>
