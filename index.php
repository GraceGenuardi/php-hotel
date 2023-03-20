<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Completamente ristrutturato con materiali di alta qualità nel corso degli ultimi anni, Hotel Belvedere Scuol è collegato tramite corridoi al centro benessere Bogn Engiadina e a 4 ristoranti',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Central Park Resident 2022 Opening is a 4-star property situated in Bishkek. The accommodation features a 24-hour front desk, airport transfers, luggage storage space and free WiFi.',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare is set directly on the seafront. Breakfast is served on a spacious terrace with beautiful sea views, and free parking is available on site.',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista is set in the heart of Cavalese and offers beautiful views of the Lagorai Mountains. It features a modern wellness center with hot tub, sauna, and steam bath.',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Just a 10-minute walk from Verona Arena and Porta Nuova Station, Hotel Siena provides a convenient central location in Verona. It features elegant air-conditioned rooms with free Wi-Fi.',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

<!--2-Mostrare le informazioni con una tabella. -->

 <div class="container mt-5 pt-5">

    <h1 class="text-danger">Welcome to Italy!</h1>
    <h3 class="mb-5 text-success">Find the hotel that's right for you</h3>

   <div class="row">

    <div class="col-12">

      <table class="table table-striped table-dark">
        <thead>
          <tr>
             <th>Name:</th>
             <th>Description:</th>
             <th>Parking:</th>
             <th>Vote:</th>
             <th>Distance to the center:</th>
         </tr>
       </thead>

       <tbody>

         <!-- 1-Stampare in pagina la lista hotel -->
          <?php foreach ($hotels as $hotel): ?>

              <tr>
                 <td><?= $hotel['name'] ?></td>
                 <td><?= $hotel['description'] ?></td>
                 <td><?= $hotel['parking'] ?></td>
                 <td><?= $hotel['vote'] ?></td>
                 <td><?= $hotel['distance_to_center'] ?>km</td>
               </tr>

            <?php endforeach; ?>

        </tbody>
          
    </table>


    </div>


   </div>
 </div>



</body>

</html>