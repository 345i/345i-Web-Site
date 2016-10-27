<?php
include 'header.php';

?>

<?php
	$nome = $_POST ['nome'];
	$cognome = $_POST ['cognome'];
	$email = $_POST ['email'];
    //salvo i dati se l'email non é presente
 	$file = file_get_contents ("listaemail.csv");
       $pos = strpos ($file,$email);
       if($pos === false){
		  $miofile = fopen("listaemail.csv", "a") or die ("Impossibile aprire il file.");
		  fwrite ($miofile, $nome . ";" . $cognome . ";" . $email . ";" . "\n");
		  fclose ($miofile);
		  include 'div2.php';
	  }	   
	 else{
		 include 'div3.php';
	 }
?>