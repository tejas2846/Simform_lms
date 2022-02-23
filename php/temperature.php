<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css?v=<?php echo time();?>">
    <title>Temperature Conversion!!!</title>
</head>
<?php
if (isset($_POST["submit"])) {
//Access The input here
    $unit1 = $_POST['unit1'];
    $unit2 = $_POST['unit2'];
//Celsius To Kelvin
    if ($unit1 == "c" && $unit2 == "k") {
        $_POST['output'] = ($_POST["input"]) + 273.15;
    }
//Celsius to Fahrenheit
    else if ($unit1 == "c" && $unit2 == "fh") {
        $_POST['output'] = ($_POST["input"] * 9 / 5) + 32;
    }
//Kelvin To Celsius
    else if ($unit1 == "k" && $unit2 == "c") {
        $_POST['output'] = ($_POST["input"]) - 273.15;
    }
//Kelvin To Fahrenheit
    else if ($unit1 == "k" && $unit2 == "fh") {
        $_POST['output'] = (($_POST["input"] - 273.15) * (9 / 5)) + 32;
    }
//Fahrenheit To Celsius
    else if ($unit1 == "fh" && $unit2 == "c") {
        $_POST['output'] = ($_POST["input"] - 32) * (5 / 9);
    }
//Fahrenheit To Kelvin
    else if ($unit1 == "fh" && $unit2 == 'k') {
        $_POST['output'] = ($_POST["input"] - 32) * (5 / 9) + 273.15;
    }
//Both value of unit is same
    else if ($unit1 == $unit2) {
        $_POST['output'] = ($_POST["input"]);
    }

}
?>
<body>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table>
<caption>Temperature Measurement Conversion<caption>
<tr>
<td><label for="from">From: </label></td>
<td><input step=any required min="-9999999999" max="9999999999" type="number" value="<?php if (isset($_POST['input'])) {echo $_POST['input'];}?>" name="input" id="input"> </td>
<td>
<select  name="unit1" id="from">
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "c") {
    echo 'selected="selected"';
}
?>value="c" >Celsius</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "k") {
    echo 'selected="selected"';
}
?>value="k">Kelvin</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "fh") {
    echo 'selected="selected"';
}
?>value="fh">Fahrenheit</option>
</select>
</td>
</tr>
<tr>
<td><label for="To">To: </label> </td>
<td><input type="text" value="<?php if (isset($_POST['output'])) {echo $_POST['output'];}?> " name="output" id="output" disabled></td>
<td>
<select   name="unit2" id="to">
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "c") {
    echo 'selected="selected"';
}
?>value="c">Celsius</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "k") {
    echo 'selected="selected"';
}
?> value="k">Kelvin</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "fh") {
    echo 'selected="selected"';
}
?>value="fh">Fahrenheit</option>
</select>
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