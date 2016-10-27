 <!DOCTYPE html>
<html lang="it">
 <head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>345-I - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="img/logo.png" />
  <link rel="stylesheet" href="css/style.css">

 <?php
  if($_SERVER['PHP_SELF'] == "/345-I/sondaggio.php"){
	  echo "<style>
  .pulsante{margin:10px;list-style-type:none;background-color:#0066ff;color:#fff;border-color:#0052cc;}
  .pulsante:hover{background-color:#0052cc;color:#fff;}
  input[type='radio']:checked + label,
.Checked + label {
    background:#003d99;
}
  </style>";
  }
  ?>
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php#myPage">345-I<!--<img style="margin-top:0" src="img/logo.png" width="45px"/>--></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php#about">About us</a></li>
        <li><a href="index.php#services">Servizi</a></li>
        <li><a href="index.php#contact">Contatti</a></li>
        
      </ul>
    </div>
  </div>
</nav>