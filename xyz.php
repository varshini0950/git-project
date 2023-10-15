<html>
<head>
<title> BMI </title>

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
?>
</h1>
 </body>
 </html>
