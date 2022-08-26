<?php 
/*
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario.
 Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55 - 60
*/
  $squadre = [
      'nord'=>[
        'squadra_casa'=>'Milano',
        'squadra_ospiti'=>'Pavia',
        'punti_casa'=>79,
        'punti_ospiti'=>81
      ],
      'centro'=>[
        'squadra_casa'=>'Firenze',
        'squadra_ospiti'=>'Bologna',
        'punti_casa'=>93,
        'punti_ospiti'=>91
      ],
      'sud'=>[
        'squadra_casa'=>'Napoli',
        'squadra_ospiti'=>'Caserta',
        'punti_casa'=>73,
        'punti_ospiti'=>88
      ],
      'ovest'=>[
        'squadra_casa'=>'Genova',
        'squadra_ospiti'=>'Torino',
        'punti_casa'=>61,
        'punti_ospiti'=>74
      ],
      'est'=>[
        'squadra_casa'=>'Venezia',
        'squadra_ospiti'=>'Udine',
        'punti_casa'=>91,
        'punti_ospiti'=>74
      ],
  ];

  //estrapolo le chiavi del mio Array con il metodo array_keys() e me lo salvo in una variabile;

  $arrayKeys = array_keys($squadre);

  //creo un ciclo e stampo tutte le chiavi del mio array 
  for($i = 0; $i <count($arrayKeys); $i++) {
      echo " " .'<h4 style="color:red;font-size:20px;font-family:sans-serif;">'. $arrayKeys[$i] .'</h4>';
       $squadra = $squadre[$arrayKeys[$i]]; 
      echo '<li>'.$squadra['squadra_casa']." - ".$squadra['squadra_ospiti'] ."<span style=\"color:green;font-size:20px;\"><b>|</b></span>"." ".
      $squadra['punti_casa']."-".$squadra['punti_ospiti'];
      '</li>';
  }

?>