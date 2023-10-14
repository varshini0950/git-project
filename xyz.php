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
echo ("<p style='font-size:40px'> BMI: $d</br></p>");
?>
</h1>
</body>                     
</html>                                          
