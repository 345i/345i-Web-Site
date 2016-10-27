<?php
include 'header.php';
if($_SERVER['REQUEST_METHOD'] == "POST")
	include 'div2.php';
else
	include 'div1.php';
?>
</div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About us</h2><br>
      <h4>L'azienda 345-i è composta da 19 alunni appartenenti all'istituto Alessandro Volta. La scelta del nostro logo si riferisce agli anni scolastici in cui l'azienda nasce e si sviluppa, inoltre rappresenta i 345 modi per trasmettere l'informazione. La nostra azienda si occupa principalmente di advertising e online selling.</h4>
      <br>
      <p>Advertising è una forma di Marketing Communication che sponsorizza e promuove la vendita di un servizio, prodotto o idea.
Online Selling è la compravendita di prodotti o servizi online attraverso tecniche di mercato dedicate con l'up selling e cross selling.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon  glyphicon glyphicon-question-sign logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Goals</h2><br>
      <h4>Siamo un gruppo classe, da tempo abbiamo intrapreso questo percorso e tra di noi
si è ormai formato un rapporto di amicizia e di collaborazione che supera la
semplice condivisione di una stessa classe.<br><br>
<strong>MISSION: </strong>Offrire servizi on-time e on-premise per soddisfare i clienti.
Migliorare il modo di rapportarsi agli altri.
Costruire il nostro futuro su basi solide e innovative.</h4><br>
      <p><strong>VISION: </strong>Incrementare la nostra professionalità nel campo tecnologico.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <a href="almanacco.php"><h4>Web Consulting</h4></a>
      <p>Progettazione e implementazione di applicazioni web.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-usd logo-small"></span>
      <h4>Advertising</h4>
      <p>Fornire ai publisher strumenti per la monetizzazione.<br>
      Offrire alle aziende gli spazi adatti per veicolare la loro pubblicità.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon glyphicon-ok-sign logo-small"></span>
      <h4>Job Done</h4>
      <p>Applicazioni virali per il tuo "bisinissi"</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Rispettiamo l'ambiente.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Certified</h4>
      <p>In progress...</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Hard Work</h4>
      <p>Social and sentimental analysis.</p>
    </div>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contattaci, sarà un piacere risponderti.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Palermo, IT</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@345i.it</p>
    </div>
    <form action="submit.php" method="post" class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Testo" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="btn btn-default pull-right" value="Invia" type="submit">
        </div>
      </div>
    </form>
  </div>
</div>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$email = "<?php " . $_POST['email'] . " ?>";
	echo $email;
	$file_mail = fopen("email_list.php", "a+");
	fwrite($file_mail, $email . "\n");
	fclose($file_mail);
	$lines = file('email_list.php');
    $lines = array_unique($lines);
	file_put_contents('email_list.php', $lines);
	$headers = 'From: 345-I Co. <345-I@gmail.it>' . "\r\n";
	//mail($email, "Iscrizione alla newsletter", "La ringraziamo per essersi iscritto alla nostra newsletter. Buona giornata.", $headers);
}
?>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy 345-I Co.</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

