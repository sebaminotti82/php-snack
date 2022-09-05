<?php
   /*PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */


$nome = $_GET['nome'];
$mail = $_GET['mail'];
$eta  = $_GET['eta'];

if((strlen($nome)>3)&&(filter_var($mail, FILTER_VALIDATE_EMAIL))&&(is_numeric($eta))){
   echo' mail valida';
   echo "<h5>"."il Tuo Nome:"." ".$nome." "."la Tua Mail:"." ".$mail." "."la Tua Eta'"." ".$eta."</h5>";
   
}  else {
    echo'hai inserito dati non validi';
}


?>

 
