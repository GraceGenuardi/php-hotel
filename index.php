<?php

// elenco hotel-array
$hotels = [
    [
        "name" => "Hotel Belvedere",
        "description" => "Hotel Belvedere is located in the heart of the city, just a few steps from the main square.",
        "city" => "Rome",
        "country" => "Italy",
        "price_per_night" => 120
    ],
    [
        "name" => "Grand Hotel",
        "description" => "Grand Hotel is a luxury hotel located in the historic center of Florence.",
        "city" => "Florence",
        "country" => "Italy",
        "price_per_night" => 300
    ],
    [
        "name" => "Hotel Plaza",
        "description" => "Hotel Plaza is a modern hotel located in the financial district of Milan.",
        "city" => "Milan",
        "country" => "Italy",
        "price_per_night" => 150
    ]
];

//1-Stampare in pagina la lista hotel

foreach ($hotels as $hotel): 
    
  ?>
     <h2><?= $hotel['name'] ?></h2>
      <p><?= $hotel['description'] ?></p>
      <h3><?= $hotel['city'] ?></h3>
      <p><?= $hotel['country'] ?></p>
      <h4>Prezzo a notte: <?= $hotel['price_per_night'] ?>€</h4>
  
  <?php
  endforeach;


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL PHP</title>
  <link rel="stylesheet" href="./css/app.css">
</head>

<body>



</body>

</html>