<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        form {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 40px;
            height: 40px;
            font-size: 18px;
        }

        select {
            width: 60px;
            height: 40px;
            font-size: 18px;
        }

        button {
            width: 80px;
            height: 40px;
            font-size: 18px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>Simple Calculator</h2>

    <form method="post" action="">
        <input type="number" name="num1" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if form is submitted

        // Get form data
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Perform calculation based on the selected operation
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                // Check if dividing by zero
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Cannot divide by zero';
                }
                break;
            default:
                $result = 'Invalid operation';
                break;
        }

        // Display the result
        echo '<h3>Result: ' . $result . '</h3>';
    }
    ?>
</body>

</html>