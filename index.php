<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
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

 <div class="container">

   <div class="row">

    <div class="col-11">

      <table class="table table-striped table-dark">
        <thead>
          <tr>
             <th>Name:</th>
             <th>Description:</th>
             <th>City:</th>
             <th>Country:</th>
             <th>Price:</th>
         </tr>
       </thead>

       <tbody>

         <!-- 1-Stampare in pagina la lista hotel -->
          <?php foreach ($hotels as $hotel): ?>

              <tr>
                 <td><?= $hotel['name'] ?></td>
                 <td><?= $hotel['description'] ?></td>
                 <td><?= $hotel['city'] ?></td>
                 <td><?= $hotel['country'] ?></td>
                 <td><?= $hotel['price_per_night'] ?>€</td>
               </tr>

            <?php endforeach; ?>

        </tbody>
          
    </table>


    </div>


   </div>
 </div>



</body>

</html>