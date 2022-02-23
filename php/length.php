<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/design.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="./img/logo_icon.jpg" type="image/x-icon">
    <title>Length Conversion!!!</title>
    <style>

    </style>
</head>
<?php
if (isset($_POST["submit"])) {
//Access The input here from here
    $unit1 = $_POST['unit1'];
    $unit2 = $_POST['unit2'];
//metre to centimeter
    if ($unit1 == "m" && $unit2 == "cm") {
        $_POST['output'] = ($_POST["input"]) * 100;
    }
//Metre to kilometre
    else if ($unit1 == "m" && $unit2 == "km") {
        $_POST['output'] = ($_POST["input"]) / 1000;
    }
//Metre to feet
    else if ($unit1 == "m" && $unit2 == "gm") {
        $_POST['output'] = ($_POST["input"]) * (3.28083);
    }
//Metre To Millimetre
    else if ($unit1 == "m" && $unit2 == "mm") {
        $_POST['output'] = ($_POST["input"]) * (1000);
    }
//Metre To Yard
    else if ($unit1 == "m" && $unit2 == "y") {
        $_POST['output'] = ($_POST["input"]) * (1.094);
    }
//Metre To Inch
    else if ($unit1 == "m" && $unit2 == "inch") {
        $_POST['output'] = ($_POST["input"]) * (39.37);
    }

//Centimetre To Metre
    else if ($unit1 == "cm" && $unit2 == "m") {
        $_POST['output'] = ($_POST["input"]) / 100;
    }
//Centimetre To Kilometre
    else if ($unit1 == "cm" && $unit2 == 'km') {
        $_POST['output'] = ($_POST["input"]) / 100000;
    }
//Centimetre To Feet
    else if ($unit1 == "cm" && $unit2 == 'gm') {
        $_POST['output'] = ($_POST["input"]) / (30.48);
    }
//Centimetre to Millimetre
    else if ($unit1 == "cm" && $unit2 == "mm") {
        $_POST['output'] = ($_POST["input"]) * (10);
    }
//Centimetre to YARD
    else if ($unit1 == "cm" && $unit2 == "y") {
        $_POST['output'] = ($_POST["input"]) / (91.44);
    }
//Centimetre to INCH
    else if ($unit1 == "cm" && $unit2 == "inch") {
        $_POST['output'] = ($_POST["input"]) / (2.54);
    }
//Kilometre To Metre
    else if ($unit1 == "km" && $unit2 == 'm') {
        $_POST['output'] = ($_POST["input"]) * 1000;
    }
//Kilometre To Centimetre
    else if ($unit1 == "km" && $unit2 == 'cm') {
        $_POST['output'] = ($_POST["input"]) * 100000;
    }
//Kilometre To Feet
    else if ($unit1 == "km" && $unit2 == 'gm') {
        $_POST['output'] = ($_POST["input"]) * (3280.84);
    }
//Kilometre to Millimetre
    else if ($unit1 == "km" && $unit2 == "mm") {
        $_POST['output'] = ($_POST["input"]) * (1e+6);
    }
//Kilometre to Yard
    else if ($unit1 == "km" && $unit2 == "y") {
        $_POST['output'] = ($_POST["input"]) * (1094);
    }
//Kilometre to Inch
    else if ($unit1 == "km" && $unit2 == "inch") {
        $_POST['output'] = ($_POST["input"]) * (39370);
    }
//Feet To Metre
    else if ($unit1 == "gm" && $unit2 == 'm') {
        $_POST['output'] = ($_POST["input"]) * (0.3048);
    }
//Feet To Centimetre
    else if ($unit1 == "gm" && $unit2 == 'cm') {
        $_POST['output'] = ($_POST["input"]) * (30.48);
    }
//Feet To Kilometre
    else if ($unit1 == "gm" && $unit2 == 'km') {
        $_POST['output'] = ($_POST["input"]) * (0.0003048);
    }
//Feet To Millimetre
    else if ($unit1 == "gm" && $unit2 == 'mm') {
        $_POST['output'] = ($_POST["input"]) * (304.8);
    }
//Feet To Yard
    else if ($unit1 == "gm" && $unit2 == 'y') {
        $_POST['output'] = ($_POST["input"]) / (3);
    }
//Feet To Inch
    else if ($unit1 == "gm" && $unit2 == 'inch') {
        $_POST['output'] = ($_POST["input"]) * (12);
    }
//Millimetre To Metre
    else if ($unit1 == "mm" && $unit2 == 'm') {
        $_POST['output'] = ($_POST["input"]) / (1000);
    }
//Millimetre To Centimetre
    else if ($unit1 == "mm" && $unit2 == 'cm') {
        $_POST['output'] = ($_POST["input"]) / (10);
    }
//Millimetre To Kilometre
    else if ($unit1 == "mm" && $unit2 == 'km') {
        $_POST['output'] = ($_POST["input"]) / (1000000);
    }
//Millimetre To Feet
    else if ($unit1 == "mm" && $unit2 == 'gm') {
        $_POST['output'] = ($_POST["input"]) / (305);
    }
//Millimetre To Yard
else if ($unit1 == "mm" && $unit2 == 'y') {
    $_POST['output'] = ($_POST["input"]) / (914);
}
//Millimetre To Inch
else if ($unit1 == "mm" && $unit2 == 'inch') {
    $_POST['output'] = ($_POST["input"]) / (25.4);
}
//Yard To Meter
else if ($unit1 == "y" && $unit2 == 'm') {
    $_POST['output'] = ($_POST["input"]) / (1.094);
}
//Yard To CentiMeter
else if ($unit1 == "y" && $unit2 == 'cm') {
    $_POST['output'] = ($_POST["input"]) *(91.44);
}
//Yard To Kilometer
else if ($unit1 == "y" && $unit2 == 'km') {
    $_POST['output'] = ($_POST["input"]) / (1094);
}
//Yard To Foot
else if ($unit1 == "y" && $unit2 == 'gm') {
    $_POST['output'] = ($_POST["input"]) * (3);
}
//Yard To Millimeter
else if ($unit1 == "y" && $unit2 == 'mm') {
    $_POST['output'] = ($_POST["input"]) * (914.4);
}
//Yard To Inch
else if ($unit1 == "y" && $unit2 == 'inch') {
    $_POST['output'] = ($_POST["input"]) * (36);
}
//Inch To Meter
else if ($unit1 == "inch" && $unit2 == 'm') {
    $_POST['output'] = ($_POST["input"]) / (39.37);
}
//Inch To CentiMeter
else if ($unit1 == "inch" && $unit2 == 'cm') {
    $_POST['output'] = ($_POST["input"]) * (2.54);
}
//Inch To Kilometer
else if ($unit1 == "inch" && $unit2 == 'km') {
    $_POST['output'] = ($_POST["input"]) / (39370);
}
//Inch To Millimitre
else if ($unit1 == "inch" && $unit2 == 'mm') {
    $_POST['output'] = ($_POST["input"]) *(25.4);
}
//Inch To Foot
else if ($unit1 == "inch" && $unit2 == 'gm') {
    $_POST['output'] = ($_POST["input"]) / (12);
}
//Inch To Yard
else if ($unit1 == "inch" && $unit2 == 'y') {
    $_POST['output'] = ($_POST["input"]) / (36);
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
<caption>Length Measurement Conversion</caption>
 <td><label for="from">From: </label></td>
 <td><input step=any required min="-9999999999" max="9999999999" type="number" value="<?php if (isset($_POST['input'])) {echo $_POST['input'];}?>" name="input" id="input"> </td>
 <td>
 <select  name="unit1" id="from">
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "m") {
    echo 'selected="selected"';
}
?>value="m" >Metre</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "cm") {
    echo 'selected="selected"';
}
?>value="cm">Centimetre</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "km") {
    echo 'selected="selected"';
}
?>value="km">Kilometer</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "gm") {
    echo 'selected="selected"';
}
?>value="gm" >Foot</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "mm") {
    echo 'selected="selected"';
}
?>value="mm" >MilliMetre</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "y") {
    echo 'selected="selected"';
}
?>value="y" >Yard</option>
<option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "inch") {
    echo 'selected="selected"';
}
?>value="inch" >Inch</option>
 </select>
 </td>
 </tr>
 <tr>
 <td><label for="To">To: </label> </td>
 <td><input type="text" value="<?php if (isset($_POST['output'])) {echo $_POST['output'];}?> " name="output" id="output" disabled></td>
 <td>
 <select   name="unit2" id="to">
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "m") {
    echo 'selected="selected"';
}
?>value="m">Metre</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "cm") {
    echo 'selected="selected"';
}
?> value="cm">Centimetre</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "km") {
    echo 'selected="selected"';
}
?>value="km">Kilometre</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "gm") {
    echo 'selected="selected"';
}
?>value="gm">Foot</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "mm") {
    echo 'selected="selected"';
}
?>value="mm" >Millimetre</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "y") {
    echo 'selected="selected"';
}
?>value="y" >Yard</option>
<option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "inch") {
    echo 'selected="selected"';
}
?>value="inch" >Inch</option>
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