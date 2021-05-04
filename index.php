<?php 
  // variabili
  $matches = [
    [
      "squadraCasa" => "Olimpia Milano",
      "squadraOspite" => "Cantu",
      "puntiSquadraCasa" => "55",
      "puntiSquadraOspite" => "60",
    ],
    [
      "squadraCasa" => "Trieste",
      "squadraOspite" => "Brindisi",
      "puntiSquadraCasa" => "70",
      "puntiSquadraOspite" => "80",
    ],
  ];

  // metodi su variabili
  foreach ($matches as $match) {
    echo $match["squadraCasa"] . " - " . $match["squadraOspite"] . " | " . $match["puntiSquadraCasa"] . " - " . $match["puntiSquadraOspite"] . "\n";
  }
?>
