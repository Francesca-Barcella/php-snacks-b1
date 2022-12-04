<?php 
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$array_matches = [
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospiti' => 'Cantu',
        'casa_punti' => 10,
        'ospiti_punti' => 20
    ],
    [
        'squadra_casa' => 'Bergamo',
        'squadra_ospiti' => 'Monza',
        'casa_punti' => 5,
        'ospiti_punti' => 15
    ],
    [
        'squadra_casa' => 'Pesaro',
        'squadra_ospiti' => 'San Donato',
        'casa_punti' => 10,
        'ospiti_punti' => 20
    ]
];

var_dump($array_matches);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1 Basket calendar</title>
</head>
<body>

<ul>
    <!-- apro php con < ? php - ciclo foareach - chiudo php con : ? > -->
  <?php foreach ($array_matches as $match) : ?>
    <li> <?php echo $match['squadra_casa'] . '-' . $match['squadra_ospiti']?> | <?php echo $match['casa_punti'] . '-' . $match['ospiti_punti'] ?></li>
    <!-- aprop php con < ? php - chiudo ciclo con  endfoareach - chiudo php con : ? > -->
  <?php endforeach; ?>
</ul>


</body>
</html>
