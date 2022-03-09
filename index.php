<?php 

  $textToShow = "La parola segreta è Mellon.";

  echo $textToShow. "<br>";


  $textLength = 'La frase sopra è lunga '. strlen($textToShow). ' caratteri.';

  echo $textLength;

  //parola da inserire
  $parolaCens = $_GET["censura"];

  //variabile con il testo iniziale ($textToShow) + la parola inserita dall'utente tramite GET
  $newTextToShow = $textToShow. " Quella segreta è: " . $parolaCens;

  //variabile che contiene il testo con la parola inserita dall'utente censurata con gli asterischi
  $textReplace = str_replace($parolaCens, "***", $newTextToShow);


  echo "<br>". $textReplace;


  $finalTextLength = 'La frase sopra è lunga '. strlen($textToShow). ' caratteri.';

  echo "<br>". $finalTextLength;

?>