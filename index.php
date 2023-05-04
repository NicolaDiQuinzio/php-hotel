<?php 
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'image' => 'https://source.unsplash.com/random/?hotel,beautilf,view',
        
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'image' => 'https://source.unsplash.com/random/?hotel,future',
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'image' => 'https://source.unsplash.com/random/?hotel,sidesee',
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'image' => 'https://source.unsplash.com/random/?hotel,beautiful,sight',
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'image' => 'https://source.unsplash.com/random/?hotel,milan',
    ],
    [
        'name' => 'Hotel Splendido',
        'description' => 'Hotel Splendido Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 6.2,
        'image' => 'https://source.unsplash.com/random/?hotel,splendid,view',
    ],
    [
        'name' => 'Hotel Mediterraneo',
        'description' => 'Hotel Mediterraneo Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 2.5,
        'image' => 'https://source.unsplash.com/random/?hotel,mediterranean',
    ],
    [
        'name' => 'Hotel Esplanade',
        'description' => 'Hotel Esplanade Descrizione',
        'parking' => false,
        'vote' => 2,
        'distance_to_center' => 3.8,
        'image' => 'https://source.unsplash.com/random/?hotel,esplanade',
    ],
    [
        'name' => 'Hotel Royal',
        'description' => 'Hotel Royal Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 1.7,
        'image' => 'https://source.unsplash.com/random/?hotel,royal',
    ],
    [
        'name' => 'Hotel Oceano',
        'description' => 'Hotel Oceano Descrizione',
        'parking' => false,
        'vote' => 3,
        'distance_to_center' => 12.1,
        'image' => 'https://source.unsplash.com/random/?hotel,ocean',
    ],
    [
        'name' => 'Hotel Paradise',
        'description' => 'Hotel Paradise Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 8.3,
        'image' => 'https://source.unsplash.com/random/?hotel,paradise',
    ],
    [
        'name' => 'Hotel Vista Mare',
        'description' => 'Hotel Vista Mare Descrizione',
        'parking' => true,
        'vote' => 5,
        'distance_to_center' => 3.5,
        'image' => 'https://source.unsplash.com/random/?hotel,sea,view',
    ],
    [
        'name' => 'Hotel Moderno',
        'description' => 'Hotel Moderno Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 4.9,
        'image' => 'https://source.unsplash.com/random/?hotel,modern',
    ],
    [
        'name' => 'Hotel Miramare',
        'description' => 'Hotel Miramare Descrizione',
        'parking' => false,
        'vote' => 2,
        'distance_to_center' => 1.8,
        'image' => 'https://source.unsplash.com/random/?hotel,beach',
    ],
    [
        'name' => 'Hotel Roma',
        'description' => 'Hotel Roma Descrizione',
        'parking' => false,
        'vote' => 3,
        'distance_to_center' => 0.5,
        'image' => 'https://source.unsplash.com/random/?hotel,roma',
    ],
    [
        'name' => 'Hotel Tropicale',
        'description' => 'Hotel Tropicale Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 15.2,
        'image' => 'https://source.unsplash.com/random/?hotel,tropical',
    ],
    [
        'name' => 'Hotel Montagna',
        'description' => 'Hotel Montagna Descrizione',
        'parking' => true,
        'vote' => 5,
        'distance_to_center' => 20,
        'image' => 'https://source.unsplash.com/random/?hotel,mountain',
    ],
    [
        'name' => 'Hotel Lago',
        'description' => 'Hotel Lago Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 7.9,
        'image' => 'https://source.unsplash.com/random/?hotel,lake',
    ],
    [
        'name' => 'Hotel Fiore',
        'description' => 'Hotel Fiore Descrizione',
        'parking' => false,
        'vote' => 4,
        'distance_to_center' => 3.1,
        'image' => 'https://source.unsplash.com/random/?hotel,flower',
    ],

];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php-hotel</title>
</head>
<body>


<table class="table">
<thead>
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Parking</th>
    <th>Vote</th>
    <th>Distance to center (km)</th>
  </tr>
</thead>
<tbody>
  <?php foreach ($hotels as $hotel) { ?>
    <tr>
      <td><?php echo $hotel['name']; ?></td>
      <td><?php echo $hotel['description']; ?></td>
      <td><?php echo ($hotel['parking'] ? 'Yes' : 'No'); ?></td>
      <td><?php echo $hotel['vote']; ?></td>
      <td><?php echo $hotel['distance_to_center']; ?></td>
    </tr>
  <?php } ?>
</tbody>
</table>
</body>
</html>