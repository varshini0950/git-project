<html>
<head>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>
<?php 
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
       ?>
</h1>
</body>
</html>
