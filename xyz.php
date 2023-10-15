<html>
<head>
<title> Nutrition Result</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>

<?php

$a=$_POST['inp1'];
$b=$_POST['inp2'];
$c= $b * $b;
$d= $a / $c;
$p=$_POST['inp5'];
echo ("<p style='font-size:30px'>Age: $p years<br></p>");
if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
echo ("<p style='font-size:30px'>Gender: $gender</p>");}
else{
echo ("<p style='font-size:30px'>Gender not selected</p>");
}
echo ("<p style='font-size:30px'>BMI: $d BMI<br></p>");

$calories_per_gram = [
    'rice' => 1.42,
    'vegcurry' => 1.5,
    'nonvegcurry' => 2.5,
    'chapati' => 2.0,
    'sweets' => 4,
    'fruits' => 0.5,
];
$total_calories = 0;

    $rice = $_POST['rice'];
    $vegcurry =$_POST['vegcurry'];
    $nonvegcurry =$_POST['nonvegcurry'];
    $chapati = $_POST['chapati'];
    $sweets = $_POST['sweets'];
    $fruits = $_POST['fruits'];
    
    // Calculate total calories
    $total_calories = ($rice * $calories_per_gram['rice']) +
                      ($vegcurry * $calories_per_gram['vegcurry']) +
                      ($nonvegcurry * $calories_per_gram['nonvegcurry']) +
                     ($chapati * $calories_per_gram['chapati']) +
                     ($sweets * $calories_per_gram['sweets']) +
                     ($fruits * $calories_per_gram['fruits']);
                     echo (" <p style='font-size:30px'>Calorie Intake :$total_calories  cal</br> </p>");

$e=$_POST['exercise'];
$f=$_POST['inp3'];
if($e =="cycling")
{
$i= 16.66 * $f;
echo ("<p style='font-size:30px'>calories burnt:$i cal</br></p>");

}
if($e =="walking")
{
$i= 6.17 * $f;
echo ("<p style='font-size:30px'>calories burnt:$i cal</br></p>");
}
if($e =="yoga")
{
$i= 8.33 * $f;
echo ("<p style='font-size:30px'>calories burnt:$i cal</br></p>");
}
if($e =="jogging")
{
$i= 11.66 * $f;
echo ("<p style='font-size:30px'> calories burnt:$i cal</br></p>");
}

$diff = $total_calories -$i ;
echo ("<p style='font-size:30px'>  Net Calorie = $diff cal</br> </p>");


?>
</h1>
</body>                     
</html>                                          






