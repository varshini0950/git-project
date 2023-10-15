<html>
<head>
<title> Nutrition Result</title>
</head>
<body>
<h1>
<?php

$e=$_POST['exercise'];
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
$diff = $total_calories -$i ;
                    echo ("<p style='font-size:30px'>  Net Calorie = $diff cal</br> </p>");


?>
</h1>
</body>                     
</html>                                          
