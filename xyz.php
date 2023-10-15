<html>
<head>
<title> Nutrition Result</title>
</head>
<body>
<h1>
<?php

$a=$_POST['inp1'];
$b=$_POST['inp2'];
$c= $b * $b;
$d= $a / $c;

if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
echo ("<p style='font-size:30px'>Gender: $gender</p>");}
else{
echo ("<p style='font-size:30px'>Gender not selected</p>");
}
$p=$_POST['inp5'];
echo ("<p style='font-size:30px'>Age: $p years<br></p>");
echo ("<p style='font-size:30px'>BMI: $d years<br></p>");

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




