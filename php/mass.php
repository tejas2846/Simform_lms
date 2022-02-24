<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./mig/logo_icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/design.css?v=<?php echo time(); ?>">
    <title>Mass Conversion!!!</title>
</head>
<?php
if (isset($_POST["submit"])) {
//Access The input here from here
    $unit1 = $_POST['unit1'];
    $unit2 = $_POST['unit2'];
//Gram to Kilogram
    if ($unit1 == "g" && $unit2 == "kg") {
        $_POST['output'] = ($_POST["input"]) / 1000;
    }
//Gram To Milligram
    else if ($unit1 == "g" && $unit2 == "mg") {
        $_POST['output'] = ($_POST["input"]) * 1000;
    }
//Gram To Ton
    else if ($unit1 == "g" && $unit2 == "tn") {
        $_POST['output'] = ($_POST["input"]) / (1e+6);
    }
//Gram To Pound
    else if ($unit1 == "g" && $unit2 == "pd") {
        $_POST['output'] = ($_POST["input"]) * (0.00220462);
    }
//Kilogram To Gram
    else if ($unit1 == "kg" && $unit2 == "g") {
        $_POST['output'] = ($_POST["input"]) * 1000;
    }
//Kilogram To MilliGram
    else if ($unit1 == "kg" && $unit2 == 'mg') {
        $_POST['output'] = ($_POST["input"]) * (1e+6);
    }
//Kilogram To Ton
    else if ($unit1 == "kg" && $unit2 == 'tn') {
        $_POST['output'] = ($_POST["input"]) / (1000);
    }
//Kilogram To Pound
    else if ($unit1 == "kg" && $unit2 == "pd") {
        $_POST['output'] = ($_POST["input"]) * (2.205);
    }
//Milligram To Gram
    else if ($unit1 == "mg" && $unit2 == 'g') {
        $_POST['output'] = ($_POST["input"]) / 1000;
    }
//Milligram To Kilogram
    else if ($unit1 == "mg" && $unit2 == 'kg') {
        $_POST['output'] = ($_POST["input"]) / (1e+6);
    }
//Millligram To Ton
    else if ($unit1 == "mg" && $unit2 == 'tn') {
        $_POST['output'] = ($_POST["input"]) / (1e+9);
    }
//Milligram To Pound
    else if ($unit1 == "mg" && $unit2 == "pd") {
        $_POST['output'] = ($_POST["input"]) / (453592);
    }
//Ton To Gram
    else if ($unit1 == "tn" && $unit2 == 'g') {
        $_POST['output'] = ($_POST["input"]) * (1e+6);
    }
//Ton To Kilogram
    else if ($unit1 == "tn" && $unit2 == 'kg') {
        $_POST['output'] = ($_POST["input"]) * (1000);
    }
//Ton To Milligram
    else if ($unit1 == "tn" && $unit2 == 'mg') {
        $_POST['output'] = ($_POST["input"]) * (1e+9);
    }
//Ton To Pound
    else if ($unit1 == "tn" && $unit2 == 'pd') {
        $_POST['output'] = ($_POST["input"]) * (2204.62);
    }

//Pound To Gram
    else if ($unit1 == "pd" && $unit2 == 'g') {
        $_POST['output'] = ($_POST["input"]) * (454);
    }
//Pound To Kilogram
    else if ($unit1 == "pd" && $unit2 == 'kg') {
        $_POST['output'] = ($_POST["input"]) / (2.205);
    }
//Pound To Miligram
    else if ($unit1 == "pd" && $unit2 == 'mg') {
        $_POST['output'] = ($_POST["input"]) * (453592);
    }
//Pound To Ton
    else if ($unit1 == "pd" && $unit2 == 'tn') {
        $_POST['output'] = ($_POST["input"]) / (2205);
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
<caption>Mass Measurement Conversion</caption>
<td><label for="from">From: </label></td>
 <td><input  required  step=any type="number"  value="<?php if (isset($_POST['input'])) {echo $_POST['input'];}?>" name="input" id="input"> </td>
 <td>
 <select  name="unit1" id="from">
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "g") {
    echo 'selected="selected"';
}
?>value="g" >Gram</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "kg") {
    echo 'selected="selected"';
}
?>value="kg">Kilogram</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "mg") {
    echo 'selected="selected"';
}
?>value="mg">MilliGram</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "tn") {
    echo 'selected="selected"';
}
?>value="tn" >Ton</option>
 <option <?php if (isset($_POST["unit1"]) && $_POST["unit1"] == "pd") {
    echo 'selected="selected"';
}
?>value="pd" >Pound</option>
 </select>
 </td>
 </tr>
 <tr>
 <td><label for="To">To: </label> </td>
 <td><input type="text" value="<?php if (isset($_POST['output'])) {echo $_POST['output'];}?> " name="output" id="output" disabled></td>
 <td>
 <select   name="unit2" id="to">
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "g") {
    echo 'selected="selected"';
}
?>value="g">Gram</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "kg") {
    echo 'selected="selected"';
}
?> value="kg">Kilogram</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "mg") {
    echo 'selected="selected"';
}
?>value="mg">Millligram</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "tn") {
    echo 'selected="selected"';
}
?>value="tn">Ton</option>
 <option <?php if (isset($_POST["unit2"]) && $_POST["unit2"] == "pd") {
    echo 'selected="selected"';
}
?>value="pd" >Pound</option>
 </select>
 </td>
 </tr>
 <tr>
 <td> <input  type="submit" value="Convert" id="submit" name="submit"></td>
 </tr>
 <tr>
<td> <button><a href="./index.php">Back</a></button></td>
</tr>
</table>
</form>
</div>
</body>
</html>