


<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite.
Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e i
punti fatti dalla squadra in trasferta. Stampiamo a schermo tutte le
partite con questo schema, tenendo conto che il punteggio potrebbe non
essere disponibile
Olimpia Milano - Cantù | 55-60 -->


<?php

// Creazione Array Giornata Campionato
$dayCampionato = [

  // Creazione array Partita
  [
    "squadraCasa" => "Clippers",
    "squadraOspite"=> "Bulls",
    "puntiCasa"=> 80,
    "puntiOspiti"=> 67,
  ],
  [
    "squadraCasa" => "Lakers",
    "squadraOspite"=> "Sixsters",
    "puntiCasa"=> 103,
    "puntiOspiti"=> 95,
  ],
  [
    "squadraCasa" => "Timberwolwes",
    "squadraOspite"=> "Miami Heat",
  ],
]
?>

// ciclo foreach
<?php

foreach ($dayCampionato as $partita)
{

?>

<?php
?>

<li>

  <?php echo $partita["squadraCasa"]; ?>
  -
  <?php echo $partita["squadraOspite"]; ?>

  |

  <?php if (

      !empty($partita["puntiCasa"]) && !empty($partita["puntiOspiti"]))

      {
        ?>

       <?php echo $partita["puntiCasa"]; ?>
       -
       <?php echo $partita["puntiOspiti"];

     }
     else {

       ?>
       Partita mancante
       <?php

     }?>

   </li>

<?php
}
?>
