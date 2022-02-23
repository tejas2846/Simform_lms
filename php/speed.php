<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/design.css?v=<?php echo time();?>">
    <link rel="shortcut icon" href="./img/logo_icon.jpg" type="image/x-icon">
    <title>Speed Conversion!!!</title>
</head>
<?php
if (isset($_POST["submit"])) {
//Access The input here from here
    $unit1 = $_POST['unit1'];
    $unit2 = $_POST['unit2'];
//Mph to fps
    if ($unit1 == "mph" && $unit2 == "fps") {
        $_POST['output'] = ($_POST["input"]) * 1.467;
    }
//Mph to mps
    else if ($unit1 == "mph" && $unit2 == "mps") {
        $_POST['output'] = $_POST["input"] / 2.237;
    }
//mph to kph
    else if ($unit1 == "mph" && $unit2 == "kph") {
        $_POST['output'] = ($_POST["input"]) * 1.609;
    }
//fps to mph
    else if ($unit1 == "fps" && $unit2 == "mph") {
        $_POST['output'] = $_POST["input"] / 1.467;
    }
//fps to mps
    else if ($unit1 == "fps" && $unit2 == "mps") {
        $_POST['output'] = $_POST["input"] / 3.281;
    }
//fps to kph
    else if ($unit1 == "fps" && $unit2 == 'kph') {
        $_POST['output'] = ($_POST["input"]) * 1.097;
    }
//mps to mph
    else if ($unit1 == "mps" && $unit2 == 'mph') {
        $_POST['output'] = ($_POST["input"]) * 2.237;
    }
//mps to fps
    else if ($unit1 == "mps" && $unit2 == 'fps') {
        $_POST['output'] = ($_POST["input"]) * 3.281;
    }
//mps to kph
    else if ($unit1 == "mps" && $unit2 == 'kph') {
        $_POST['output'] = ($_POST["input"]) * 3.6;
    }
//kph to mph
    else if ($unit1 == "kph" && $unit2 == 'mph') {
        $_POST['output'] = ($_POST["input"]) / 1.609;
    }
//kph to fps
    else if ($unit1 == "kph" && $unit2 == 'fps') {
        $_POST['output'] = ($_POST["input"]) / 1.097;
    }
//kph to mps
    else if ($unit1 == "kph" && $unit2 == 'mps') {
        $_POST['output'] = ($_POST["input"]) / 3.6;
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
<caption>Speed Measurement Conversion</caption>
<tr>
<td><label for="from">From: </label></td>
<td><input step=any min="-9999999999" max="9999999999" required type="number" value="<?php if (isset($_POST['input'])) {echo $_POST['input'];}?>" name="input" id="input"> </td>
<td>
<select  name="unit1" id="from">
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "mph") {
    echo 'selected="selected"';
}
?>value="mph" >Miles Per Hour</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "fps") {
    echo 'selected="selected"';
}
?>value="fps">Foot Per Second</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "mps") {
    echo 'selected="selected"';
}
?>value="mps">Meter Per Second</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "kph") {
    echo 'selected="selected"';
}
?>value="kph">Kilometer Per Hour</option>
</select>
</td>
</tr>
<tr>
<td><label for="To">To: </label> </td>
<td><input type="text" value="<?php if (isset($_POST['output'])) {echo $_POST['output'];}?> " name="output" id="output" disabled></td>
<td>
<select   name="unit2" id="to">
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "mph") {
    echo 'selected="selected"';
}
?>value="mph">Miles Per Hour</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "fps") {
    echo 'selected="selected"';
}
?> value="fps">Foot Per Second</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "mps") {
    echo 'selected="selected"';
}
?>value="mps">Meter Per Second</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "kph") {
    echo 'selected="selected"';
}
?>value="kph">Kilometer Per Hour</option>
</select>
</td>
</tr>
<tr>
<td> <input  type="submit" value="Convert" id="submit" name="submit"></td>
</tr>
<tr>
<td><button><a href="./index.php">Back</a></button> </td>
</tr>
</table>
</form>
</div>
</body>
</html>