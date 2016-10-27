<?php include 'header.php'; ?>
<div class="jumbotron">
  <h1 class="text-center">Rispondi al nostro sondaggio!</h1>
</div>
<div class="container">
  <form method="post" class="form-group">
    <span>Per prima cosa inserisci la tua email</span>
    <input class="form-control" name="email" type="email" placeholder="Email" required>
	<br>
	<div class="text-center">
	<span><b>Rispondi alla domanda 1</b></span>
	<br>
	<input type="radio" id="1" name="domanda1" value="risposta1" class="hidden"><label class="pulsante btn" for="1">Risposta 1</label>
	<br>
	<input type="radio" id="2" name="domanda1" value="risposta2" class="hidden"><label class="pulsante btn" for="2">Risposta 2</label>
	<br>
	<input type="radio" id="3" name="domanda1" value="risposta3" class="hidden"><label class="pulsante btn" for="3">Risposta 3</label>
	<br>
	<input type="radio" id="4" name="domanda1" value="risposta4" class="hidden"><label class="pulsante btn" for="4">Risposta 4</label>
	<br>
	<span><b>Rispondi alla domanda 2</b></span>
	<br>
	<input type="radio" id="5" name="domanda2" value="risposta1" class="hidden"><label class="pulsante btn" for="5">Risposta 1</label>
	<br>
	<input type="radio" id="6" name="domanda2" value="risposta2" class="hidden"><label class="pulsante btn" for="6">Risposta 2</label>
	<br>
	<input type="radio" id="7" name="domanda2" value="risposta3" class="hidden"><label class="pulsante btn" for="7">Risposta 3</label>
	<br>
	<input type="radio" id="8" name="domanda2" value="risposta4" class="hidden"><label class="pulsante btn" for="8">Risposta 4</label>
	<br>
	<span><b>Rispondi alla domanda 3</b></span>
	<br>
	<input type="radio" id="9" name="domanda3" value="risposta1" class="hidden"><label class="pulsante btn" for="9">Risposta 1</label>
	<br>
	<input type="radio" id="10" name="domanda3" value="risposta2" class="hidden"><label class="pulsante btn" for="10">Risposta 2</label>
	<br>
	<input type="radio" id="11" name="domanda3" value="risposta3" class="hidden"><label class="pulsante btn" for="11">Risposta 3</label>
	<br>
	<input type="radio" id="12" name="domanda3" value="risposta4" class="hidden"><label class="pulsante btn" for="12">Risposta 4</label>
	<br>
	<span><b>Rispondi alla domanda 4</b></span>
	<br>
	<input type="radio" id="13" name="domanda4" value="risposta1" class="hidden"><label class="pulsante btn" for="13">Risposta 1</label>
	<br>
	<input type="radio" id="14" name="domanda4" value="risposta2" class="hidden"><label class="pulsante btn" for="14">Risposta 2</label>
	<br>
	<input type="radio" id="15" name="domanda4" value="risposta3" class="hidden"><label class="pulsante btn" for="15">Risposta 3</label>
	<br>
	<input type="radio" id="16" name="domanda4" value="risposta4" class="hidden"><label class="pulsante btn" for="16">Risposta 4</label>
	<br><br>
	<input type="submit" value="Conferma" class="btn btn-secondary container">
	</div>
  </form>
</div>
<?php
define("COMMA", ";");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$email = $_POST['email'];
	$domanda1 = $_POST['domanda1'];
	$domanda2 = $_POST['domanda2'];
	$domanda3 = $_POST['domanda3'];
	$domanda4 = $_POST['domanda4'];
	$file = fopen("sondaggio.csv", "a");
	fwrite($file, $email . COMMA . $domanda1 . COMMA . $domanda2 . COMMA . $domanda3 . COMMA . $domanda4 . COMMA . "\n");
	fclose($file);
}
?>
</body>
</html>
