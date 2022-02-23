<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/design.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="./img/logo_icon.jpg" type="image/x-icon">
    <title>Area Conversion!!!</title>
</head>
<?php
if (isset($_POST["submit"])) {
//Access The input here
    $unit1 = $_POST['unit1'];
    $unit2 = $_POST['unit2'];
//Sq kilometre to Sq Metre
    if ($unit1 == "sk" && $unit2 == "sm") {
        $_POST['output'] = ($_POST["input"]) * (1e+6);
    }
//Sq kilometre to Sq.foot
    else if ($unit1 == "sk" && $unit2 == "sf") {
        $_POST['output'] = ($_POST["input"]) * (1.076e+7);
    }
//Sq kilometre to Sq.Yard
    else if ($unit1 == "sk" && $unit2 == "sy") {
        $_POST['output'] = ($_POST["input"]) * (1.196e+6);
    }
//Sq kilometre to Sq.inch
    else if ($unit1 == "sk" && $unit2 == "si") {
        $_POST['output'] = ($_POST["input"]) * (1.55e+9);
    }
//Sq kilometer to Hectare
    else if ($unit1 == "sk" && $unit2 == "h") {
        $_POST['output'] = ($_POST["input"]) * 100;
    }
//Sq Kilometer to Acre
    else if ($unit1 == "sk" && $unit2 == "a") {
        $_POST['output'] = ($_POST["input"]) * 247.105;
    }
//Sq Meter to Sq.kilometer
    else if ($unit1 == "sm" && $unit2 == "sk") {
        $_POST['output'] = ($_POST["input"]) / (1e+6);
    }
//Sq.Meter To Sq.foot
    else if ($unit1 == "sm" && $unit2 == 'sf') {
        $_POST['output'] = ($_POST["input"]) * 10.764;
    }
//Sq.Meter To Sq.Yard
    else if ($unit1 == "sm" && $unit2 == 'sy') {
        $_POST['output'] = ($_POST["input"]) * 1.196;
    }
//Sq.Meter To Sq.inch
    else if ($unit1 == "sm" && $unit2 == 'si') {
        $_POST['output'] = ($_POST["input"]) * 1550;
    }
//Sq.Meter To Hectare
    else if ($unit1 == "sm" && $unit2 == 'h') {
        $_POST['output'] = ($_POST["input"]) / 10000;
    }
//Sq.Meter to Acre
    else if ($unit1 == "sm" && $unit2 == "a") {
        $_POST['output'] = ($_POST["input"]) / 4047;
    }
//Sq.foot To Sq.Kilometer
    else if ($unit1 == "sf" && $unit2 == 'sk') {
        $_POST['output'] = ($_POST["input"]) / (1.076e+7);
    }
//Sq.foot to Sq.meter
    else if ($unit1 == "sf" && $unit2 == 'sm') {
        $_POST['output'] = ($_POST["input"]) / 10.764;
    }
//Sq.foot to Sq.yard
    else if ($unit1 == "sf" && $unit2 == 'sy') {
        $_POST['output'] = ($_POST["input"]) / 9;
    }
//Sq.foot to Sq.inch
    else if ($unit1 == "sf" && $unit2 == 'si') {
        $_POST['output'] = ($_POST["input"]) * 144;
    }
//Sq.foot to Hectare
    else if ($unit1 == "sf" && $unit2 == 'h') {
        $_POST['output'] = ($_POST["input"]) / 107639;
    }
//Sq.foot to Acre
    else if ($unit1 == "sf" && $unit2 == "a") {
        $_POST['output'] = ($_POST["input"]) / (43560);
    }
//Sq.Yard to Sq.kilo
    else if ($unit1 == "sy" && $unit2 == 'sk') {
        $_POST['output'] = ($_POST["input"]) / (1.196e+6);
    }
//Sq.Yard to Sq.meter
    else if ($unit1 == "sy" && $unit2 == 'sm') {
        $_POST['output'] = ($_POST["input"]) / (1.196);
    }
//Sq.Yard to Sq.foot
    else if ($unit1 == "sy" && $unit2 == 'sf') {
        $_POST['output'] = ($_POST["input"]) * (9);
    }
//Sq.Yard to Sq.inch
    else if ($unit1 == "sy" && $unit2 == 'si') {
        $_POST['output'] = ($_POST["input"]) * (1296);
    }
//Sq.Yard to Hectare
    else if ($unit1 == "sy" && $unit2 == 'h') {
        $_POST['output'] = ($_POST["input"]) / (11960);
    }
//Sq.Yard to Acre
    else if ($unit1 == "sy" && $unit2 == 'a') {
        $_POST['output'] = ($_POST["input"]) / (4840);
    }
//Sq.Inch to Sq.kilo
    else if ($unit1 == "si" && $unit2 == 'sk') {
        $_POST['output'] = ($_POST["input"]) / (1.55e+9);
    }
//Sq.Inch to Sq.meter
    else if ($unit1 == "si" && $unit2 == 'sm') {
        $_POST['output'] = ($_POST["input"]) / (1550);
    }
//Sq.Inch to Sq.foot
    else if ($unit1 == "si" && $unit2 == 'sf') {
        $_POST['output'] = ($_POST["input"]) / (144);
    }
//Sq.Inch to Sq.yard
    else if ($unit1 == "si" && $unit2 == 'sy') {
        $_POST['output'] = ($_POST["input"]) / (1296);
    }
//Sq.Inch to Hectare
    else if ($unit1 == "si" && $unit2 == 'h') {
        $_POST['output'] = ($_POST["input"]) / (1.55e+7);
    }
//Sq.Inch to Acre
    else if ($unit1 == "si" && $unit2 == 'a') {
        $_POST['output'] = ($_POST["input"]) / (6.273e+6);
    }
//Hectare To Sq.kilo
    else if ($unit1 == "h" && $unit2 == 'sk') {
        $_POST['output'] = ($_POST["input"]) / (100);
    }
//Hectare To Sq.meter
    else if ($unit1 == "h" && $unit2 == 'sm') {
        $_POST['output'] = (int) ($_POST["input"]) * (10000);
    }
//Hectare to Sq.foot
    else if ($unit1 == "h" && $unit2 == 'sf') {
        $_POST['output'] = ($_POST["input"]) * (107639);
    }
//Hectare to Sq.yard
    else if ($unit1 == "h" && $unit2 == 'sy') {
        $_POST['output'] = ($_POST["input"]) * (11959.9);
    }
//Hectare to Sq.inch
    else if ($unit1 == "h" && $unit2 == 'si') {
        $_POST['output'] = ($_POST["input"]) * (1.55e+7);
    }
//Hectare to Acre
    else if ($unit1 == "h" && $unit2 == 'a') {
        $_POST['output'] = ($_POST["input"]) * (2.471);
    }
//Acre to Sq.kilo
    else if ($unit1 == "a" && $unit2 == 'sk') {
        $_POST['output'] = ($_POST["input"]) / (247);
    }
//Acre to Sq.meter
    else if ($unit1 == "a" && $unit2 == 'sm') {
        $_POST['output'] = ($_POST["input"]) * (4046.86);
    }
//Acre to Sq.foot
    else if ($unit1 == "a" && $unit2 == 'sf') {
        $_POST['output'] = ($_POST["input"]) * (43560);
    }
//Acre to Sq.Yard
    else if ($unit1 == "a" && $unit2 == 'sy') {
        $_POST['output'] = ($_POST["input"]) * (4340);
    }
//Acre to Sq.Inch
    else if ($unit1 == "a" && $unit2 == 'si') {
        $_POST['output'] = ($_POST["input"]) * (6.273e+6);
    }
//Acre to Hectare
    else if ($unit1 == "a" && $unit2 == 'h') {
        $_POST['output'] = ($_POST["input"]) / (2.471);
    }
//Both value of unit is same
    else if ($unit1 == $unit2) {
        $_POST['output'] =($_POST["input"]);
    }

}
?>
<body>
<div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table>
<caption>Area Measurement Conversion</caption>
<tr>
<td><label for="from">From: </label></td>
<td><input step=any required type="number"  min="-9999999999" max="9999999999"  value="<?php if (isset($_POST['input'])) {echo $_POST['input'];}?>" name="input" id="input"> </td>
<td>
<select  name="unit1" id="from">
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "sk") {
    echo 'selected="selected"';
}
?>value="sk" >Square KiloMetre</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "sm") {
    echo 'selected="selected"';
}
?>value="sm">Square Metre</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "sf") {
    echo 'selected="selected"';
}
?>value="sf">Square Foot</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "sy") {
    echo 'selected="selected"';
}
?>value="sy" >Square Yard</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "si") {
    echo 'selected="selected"';
}
?>value="si" >Square Inch</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "h") {
    echo 'selected="selected"';
}
?>value="h" >Hectare</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "a") {
    echo 'selected="selected"';
}
?>value="a" >Acre</option>
</select>
</td>
</tr>
<tr>
<td><label for="To">To: </label> </td>
<td><input type="text" value="<?php if (isset($_POST['output'])) {echo $_POST['output'];}?> " name="output" id="output" disabled></td>
<td>
<select   name="unit2" id="to">
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "sk") {
    echo 'selected="selected"';
}
?>value="sk">Square KiloMetre</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "sm") {
    echo 'selected="selected"';
}
?> value="sm">Square Metre</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "sf") {
    echo 'selected="selected"';
}
?>value="sf">Square Foot</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "sy") {
    echo 'selected="selected"';
}
?>value="sy" >Square Yard</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "si") {
    echo 'selected="selected"';
}
?>value="si" >Square Inch</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "h") {
    echo 'selected="selected"';
}
?>value="h">Hectare</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "a") {
    echo 'selected="selected"';
}
?>value="a" >Acre</option>
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