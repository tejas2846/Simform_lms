<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css?v=<?php echo time();?>">
    <title>Volume Conversion!!!</title>
</head>
<?php
if (isset($_POST["submit"])) {
//Access The input here
    $unit1 = $_POST['unit1'];
    $unit2 = $_POST['unit2'];
//Liter To Milliliter
    if ($unit1 == "l" && $unit2 == "ml") {
        $_POST['output'] = ($_POST["input"]) * 1000;
    }
//Liter To Cubic Meter
    else if ($unit1 == "l" && $unit2 == "cm") {
        $_POST['output'] = ($_POST["input"]) * 0.001;
    }
//Liter To Cubic Centimeter
    else if ($unit1 == "l" && $unit2 == "cc") {
        $_POST['output'] = ($_POST["input"]) * 1000;
    }
//Millliliter To Liter
    else if ($unit1 == "ml" && $unit2 == "l") {
        $_POST['output'] = $_POST["input"] * 0.001;
    }
//Milliliter to Cubic Meter
    else if ($unit1 == "ml" && $unit2 == "cm") {
        $_POST['output'] = $_POST["input"] * 0.000001;
    }
//Milliliter to Cubic Centimeter
    else if ($unit1 == "ml" && $unit2 == 'cc') {
        $_POST['output'] = ($_POST["input"]);
    }
//Cubic Meter To Liter
    else if ($unit1 == "cm" && $unit2 == 'l') {
        $_POST['output'] = $_POST["input"] * 1000;
    }
//Cubic Meter To Milliliter
    else if ($unit1 == "cm" && $unit2 == 'ml') {
        $_POST['output'] = $_POST["input"] * 1000000;
    }
//Cubic Meter To Cubic Centimeter
    else if ($unit1 == "cm" && $unit2 == 'cc') {
        $_POST['output'] = $_POST["input"] * 1000000;
    }
//Cubic Centimeter To Liter
    else if ($unit1 == "cc" && $unit2 == 'l') {
        $_POST['output'] = $_POST["input"] * 0.001;
    }
//Cubic Centimeter To Milliliter
    else if ($unit1 == "cc" && $unit2 == 'ml') {
        $_POST['output'] = $_POST["input"];
    }
//Cubic Centimeter To Cubic Meter
    else if ($unit1 == "cc" && $unit2 == 'cm') {
        $_POST['output'] = $_POST["input"] * 0.000001;
    }
//Value Same
    else if ($unit1 == $unit2) {
        $_POST['output'] = ($_POST["input"]);
    }
}
?>
<body>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table>
    <caption>Volume Measurement Conversion</caption>
<tr>
<td><label for="from">From: </label></td>
<td><input step=any required type="number" value="<?php if (isset($_POST['input'])) {echo $_POST['input'];}?>" name="input" id="input"> </td>
<td>
<select  name="unit1" id="from">
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "l") {
    echo 'selected="selected"';
}
?>value="l" >Liter</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "ml") {
    echo 'selected="selected"';
}
?>value="ml">Milliliter</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "cm") {
    echo 'selected="selected"';
}
?>value="cm">Cubic Meter</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "cc") {
    echo 'selected="selected"';
}
?>value="cc">Cubic Centimeter</option>
</select>
</td>
</tr>
<tr>
<td><label for="To">To: </label> </td>
<td><input type="text" value="<?php if (isset($_POST['output'])) {echo $_POST['output'];}?> " name="output" id="output" disabled></td>
<td>
<select   name="unit2" id="to">
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "l") {
    echo 'selected="selected"';
}
?>value="l">Liter</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "ml") {
    echo 'selected="selected"';
}
?> value="ml">Milliliter</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "cm") {
    echo 'selected="selected"';
}
?>value="cm">Cubic Meter</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "cc") {
    echo 'selected="selected"';
}
?>value="cc">Cubic Centimeter</option></select>
</td>
</tr>
<tr>
<td> <input  type="submit" value="Convert" id="submit" name="submit"></td>
</tr>
<tr>
<td><button><a href="./index.php">Back</a></button></td>
</tr>
</table>
</form>
</div>
</body>
</html>