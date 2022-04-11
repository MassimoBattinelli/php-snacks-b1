<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack</title>
</head>

<body>
<?php
/*
## Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60
*/

// $team1 = ['Napoli', 'Milan', 'Inter', 'Fiorentina', 'Manchester', 'Liverpool', 'Lazio', 'Roma'];

// $basketMatches = [];

// for ($i = 0; $i < count($team1); $i++) {

//     if ($i < (count($team1) - 1)) {
//         $indexSecondTeam = $i+1;
//     } else {
//         $indexSecondTeam = 0;
//     }

//     $randomTeam1Score = rand(1, 100);
//     $randomTeam2Score = rand(1, 100);
//     $basketMatches[] = [
//         "team1" => $team1[$i],
//         "team2" => $team1[$indexSecondTeam],
//         "team1Score" => $randomTeam1Score,
//         "team2Score" => $randomTeam2Score
//     ];

//     echo '<p>' . $basketMatches[$i]['team1'] . ' - ' . $basketMatches[$i]['team2'] . ' | ' . $basketMatches[$i]['team1Score'] . '-' . $basketMatches[$i]['team2Score'] . '</p>';
// }

## Snack 2
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
*/

// extract($_GET);

// $pattern = '/(?<=\@).*\./';

// if ((strlen($name) > 3) && preg_match($pattern, $mail) && is_numeric($age)) {
//     echo '<div>Accesso riuscito</div>';
// } else {
//     echo '<div>Accesso negato</div>';
// } -->

## Snack 4

$randomNumbers = [];

while (count($randomNumbers) < 15) {
    $randomNumber = rand(1, 100);
    if(!in_array($randomNumber, $randomNumbers)) {
        $randomNumbers[] = $randomNumber;
        echo $randomNumber . '<br>';
    }
}

## Snack 5

$portanza = "La portanza è definita come la forza aerodinamica agente in direzione perpendicolare alla direzione del vento che investe il profilo e permette al velivolo di alzarsi in volo. Essa è positiva se orientata verso l'alto. La portanza è generata dalla differenza di pressione fra la parte inferiore e quella superiore di un velivolo. Allo sviluppo della portanza può contribuire tutto il velivolo, ma il contributo maggiore è dovuto all'ala. La particolare forma del profilo alare permette di avere una differenza di velocità del fluido fra l'estradosso o dorso (parte superiore dell'ala) e l'intradosso o ventre (parte inferiore dell'ala). Conoscendo il coefficiente di portanza di un profilo (o di un corpo) è possibile risalire alla portanza";

$paragraphsArr = explode('. ', $portanza);

foreach ($paragraphsArr as &$value) {
    echo '<p>' . $value . '</p>';
}
