<!DOCTYPE html>
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

$team1 = ['Napoli', 'Milan', 'Inter', 'Fiorentina', 'Manchester', 'Liverpool', 'Lazio', 'Roma'];

$basketMatches = [];

for ($i = 0; $i < count($team1); $i++) {

    if ($i < (count($team1) - 1)) {
        $indexSecondTeam = $i+1;
    } else {
        $indexSecondTeam = 0;
    }

    $randomTeam1Score = rand(1, 100);
    $randomTeam2Score = rand(1, 100);
    $basketMatches[] = [
        "team1" => $team1[$i],
        "team2" => $team1[$indexSecondTeam],
        "team1Score" => $randomTeam1Score,
        "team2Score" => $randomTeam2Score
    ];

    echo '<p>' . $basketMatches[$i]['team1'] . ' - ' . $basketMatches[$i]['team2'] . ' | ' . $basketMatches[$i]['team1Score'] . '-' . $basketMatches[$i]['team2Score'] . '</p>';
}

