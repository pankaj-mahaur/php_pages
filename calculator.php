<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cal.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <title>Document</title>
</head>

<body>
    <div class="calculator">
        <div class="card">
            <form class="calculator_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input class="cal_input" required type="number" name="num01" placeholder="Number one">
                <select class="cal_option" name="operator" id="">
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                    <option value="modulus">%</option>
                    <option value="power">^</option>
                </select>

                <input class="cal_input" required type="number" name="num02" placeholder="Number two">
                <button class="cal">Calculate</button>

            </form>
            <div class="result">
                <?php
                // grab data from input
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
                    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
                    $operator = htmlspecialchars($_POST["operator"]);

                    // Error handlers
                    $errors = false;

                    if (empty($num01) || empty($num02) || empty($operator)) {
                        echo "<p class = 'calc-error'>Fill in all fields</p>";
                        $errors = true;
                    }

                    if (!is_numeric($num01) || !is_numeric($num02)) {
                        echo "<p class = 'calc-error'>Only write numbers!</p>";
                        $errors = true;
                    }

                    //calculate the number if no errors
                    if (!$errors) {
                        $value = 0;

                        switch ($operator) {
                            case "add":
                                $value = $num01 + $num02;
                                break;
                            case "subtract":
                                $value = $num01 - $num02;
                                break;
                            case "multiply":
                                $value = $num01 * $num02;
                                break;
                            case "divide":
                                if ($num02 == 0) {
                                    echo "<p class = 'calc-error'>Cannot divide by zero!</p>";
                                    $errors = true;
                                    break;
                                }
                                $value = $num01 / $num02;
                                break;
                            case "modulus":
                                if ($num02 == 0) {
                                    echo "<p class = 'calc-error'>Cannot modulus by zero!</p>";
                                    $errors = true;
                                    break;
                                }
                                $value = $num01 % $num02;
                                break;
                            default:
                                echo "<p class = 'calc-error'>Something went wrong</p>";
                        }
                        echo "<p class = 'calc-result'> Result = " . $value . "</p>";
                    }
                }








                ?>
            </div>
        </div>

    </div>

</body>

</html>