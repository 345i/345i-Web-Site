<?php include 'header.php';?>
<div class="jumbotron text-center">
  <h1>Snippet</h1>
  <p>Lo snippet &egrave; una porzione di codice che racchiude un particolare servizio.</p>
</div>
<div class="container">
  <img src="img/code1.png"/>
  <img src="img/code2.png"/>
  <p>Lo snippet che segue verifica che, l'indirizzo email dato come input, non sia gi&agrave; presente all'interno
del file su cui si desidera memorizzare i dati dell'utente. Per cominciare i dati inseriti nei campi di
testo vengono copiati all'interno di alcune variabili, al fine di poter essere elaborati dalle funzioni
prescelte, per poi essere trascritti su di un file in formato '.csv', cio&egrave; sotto forma di tabella in un
file Excel, durante questo processo una funzione in particolare controlla che, in caso l'indirizzo
email sia gi&agrave; presente all'interno del file, i dati non vengano trascritti e sullo schermo apparir&agrave; un
messaggio d'errore, se l'operazione dovesse andare a buon fine vi verr&agrave; data conferma a video.</p>

  <p>Per aprire, scrivere e chiudere file nel server si utilizzano delle funzioni gi&agrave; esistenti in PHP.<br>
Le funzioni che lavorano sui file di testo iniziano tutti con la lettera "f" che indica proprio la parola "file".<br>

<b>CREAZIONE FILE:</b><br>
Come si legge dal codice sopra mostrato per aprire (o creare) un file si usa la funzione fopen (evidenza con lo strong):<br>
essa prevede come primo parametro il nome del file che deve essere aperto o creato, mentre come secondo parametro si deve specificare<br>
con quale modalit&agrave; deve essere aperto.<br>
Le modalit&agrave; principali sono 3:<br>
&nbsp;	"r": solo lettura, il puntatore sta all'inizio del file;<br>
&nbsp;	"w": solo scrittura, il puntatore sta all'inizio del file;<br>
&nbsp;	"a": solo scrittura, il puntatore sta alla fine del file.<br>
Se il file non dovesse aprirsi si pu&ograve; mostrare un messaggio di errore tramite "or die".<br>

<b>SCRITTURA NEL FILE:</b><br>
Per scrivere all'interno del file appena creato con "fopen" bisogna utilizzare un'altra funzione chiamata fwrite (evidenza con lo strong):<br>
Come si legge dal codice il primo parametro di fwrite deve essere il nome del file, o la variabile ad essa assegnata come nell'esempio,<br>
dove si vuole scrivere, mentre il secondo &egrave; la stringa che deve essere scritta.<br>
Nel nostro esempio nel file verranno scritti il nome, cognome e l'email dell'utente separati dal ";".<br>


<b>CHIUSURA FILE:</b><br>
Dopo aver fatto le necessarie operazioni sul nostro file bisogna chiuderlo.<br>
Per chiudere un file tramite PHP si utilizza la funzione fclose (evidenza con lo strong):<br>
essa prevede come unico parametro il nome del file da chiudere o la variabile ad essa assegnata.
</p>
</div>
</body>
</html>