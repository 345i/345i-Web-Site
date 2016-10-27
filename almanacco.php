<?php include 'header.php'; ?>
<div class="jumbotron text-center" <?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo " style=\"visibility:hidden\" ";}?> >
<h3 class="reg">  Calcola il tuo segno zodiacale inserendo i tuoi dati:</h3>
          <form class="navbar-form navbar-left" method="post">
            <div class="form-group" >
              <input type="text" placeholder="Cognome" class="form-control" name="cognome">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Nome" class="form-control" name="nome">
            </div>
			<div class="form-group">
              <input type="date" class="form-control" name="data">
            </div>
            <button type="submit" class="btn btn-success">Calcola</button>
          </form>
</div>
<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	  $me = date('m', strtotime($_POST["data"]));
	  $gn = date('d', strtotime($_POST["data"]));
	  $segno= "";
	
	  
	  //calcolo del segno zodiacale
   
       if( $me ==="03" && $gn >= 21 && $gn <=31 || $me === "04" && $gn > 0 && $gn <=20){
		   $segno = "Ariete";
	   }
 				
	   if( $me ==="04" && $gn >= 21 && $gn <=30 || $me === "05" && $gn > 0 && $gn <=20){
		   $segno= "Toro";
	   }  
	
	   if( $me === "05" && $gn >= 21 && $gn <=31 || $me === "06" && $gn > 0 && $gn <=21){
		   $segno= "Gemelli";
	   }

	   if( $me === "06" && $gn >= 22 && $gn <=30 || $me === "07" && $gn > 0 && $gn <=22){
		   $segno= "Cancro";
	   }
	  
	    if( $me === "07" && $gn >= 23 && $gn <=31 || $me === "08" && $gn > 0 && $gn <=23){
		   $segno = "Leone";
	   }
		
	   if( $me === "08" && $gn >= 24 && $gn <=31 || $me === "09" && $gn > 0 && $gn <=22){
		   $segno= "Vergine";
	   }
 		
	   if( $me === "09" && $gn >= 23 && $gn <=30 || $me ==="10" && $gn > 0 && $gn <=22){
		   $segno= "Bilancia";
	   }
	   
	   if( $me === "10" && $gn >= 23 && $gn <=31 || $me === "11" && $gn > 0 && $gn <=22){
		   $segno= "Scorpione";
	   }
	   
	    if( $me === "11" && $gn >= 23 && $gn <=30 || $me === "12" && $gn > 0 && $gn <=21){
		   $segno= "Sagittario";
	   }
	   
	   if( $me === "12" && $gn >= 22 && $gn <=31 || $me === "01" && $gn > 0 && $gn <=20){
		   $segno= "Capricorno";
	   }
	   
	   if( $me === "01" && $gn >= 21 && $gn <=31 || $me === "02" && $gn > 0 && $gn <=19){
		   $segno= "Acquario";
	   }
	   
	    if( $me === "02" && $gn >= 20 && $gn <=29 || $me === "03" && $gn > 0 && $gn <=20){
		    $segno= "Pesci";
	   }
	   
	     echo $segno;

  }
?>
<footer class="container-fluid text-center">
  <p>&copy 345-I Co.</p>
</footer>
</body>
</html>