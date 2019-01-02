<?php
require_once 'utils/Calculator.php';
$html="";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['estimated_car_value'], $_POST['tax_percentage'], $_POST['instalments'])) {
    $estimated_car_value = (int) $_POST['estimated_car_value'];
    $tax_percentage = (int) $_POST['tax_percentage'];
    $instalments = (int) $_POST['instalments'];
    $calculate = new Calculate($estimated_car_value,$tax_percentage,$instalments);
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Simple Car InsuranceCalculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">
<div class="row align-items-center h-100">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Estimated value of the car (100 - 100 000 EUR): <input type="number" name="estimated_car_value" value=""
                                                               required>
        <br><br>

        Tax percentage (0 - 100%): <input type="number" name="tax_percentage" value="">
        <br><br>

        Number of instalments(1-12): <select name="instalments">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">Audi</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
</div>
  </div>


</body>
</html>