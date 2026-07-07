<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    
    <form method="POST" action="">
        <input type="number" step="any" name="num1" placeholder="Enter first number" required>
        <select name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" step="any" name="num2" placeholder="Enter second number" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    function calculateResult($n1, $n2, $op) {
        switch ($op) {
            case 'add': return $n1 + $n2;
            case 'subtract': return $n1 - $n2;
            case 'multiply': return $n1 * $n2;
            case 'divide': return $n2 != 0 ? $n1 / $n2 : "Error: Div by zero";
            default: return "Invalid Operator";
        }
    }

    // Process Form Submission
    if (isset($_POST['calculate'])) {
        $result = calculateResult($_POST['num1'], $_POST['num2'], $_POST['operator']);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
