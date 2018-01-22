---
author: Rocco De Patto
title: PHP / Mysql <br> Sinervis
date: Gennaio 22, 2017
---

# PHP

## Include
<style>
	div.sourceCode {
		font-size: 1.3em;
	}

	.reveal {
		font-size: 27px;
		color: #2d373a;
	}

	.reveal p {
		text-align: left;
	}

	.reveal blockquote {
		text-align: left;
		padding-left: 45px;
		font-size: 1.3em;
		border-left: 5px solid !important;
		background: #eee;
	}

	body {
		background: white;
	}

	.container {
		width: 100%;
		box-sizing: border-box;
	}

	.container textarea {
		width: 50%;
	}

	.container .output {
		width: 50%;
	}

	.reveal pre.sourceCode {
		width: 100%;
		box-shadow: none;
		border: 1px solid #bbb;
		border-left: 5px solid #bbb;
		background: #f5f5f5;
		padding: 5px;
		margin: 0px;
		box-sizing: border-box;
	}

	li > code,
	p  > code {
		border-radius: 6px;
		color: black;
		background: #f4f4f4;
		padding: 0px 4px !important;
	}
</style>

Oggi vi spiego una sola cosa, ma bellissima.

> `include`

Vi ricordo che per trovare la documentazione di una funziona php, basta andare su http://php.net/**nomefunzione**
quindi in questo caso: <br>[http://php.net/include](http://php.net/include)

## Include
```php
  include('file.php')
```

<br>

- Come ipotizzabile dal nome, include un file dentro un altro.
- Non esiste un modo in html per ottenere la stessa cosa (per ora).

## Include
Immaginate di avere un sito con 4 pagine, ognuna con un header, una navbar, una sidebar e un footer.
Dobbiamo scrivere 4 file (home.html, contact.html, about.html, info.html) ognuno contenente i quattro elementi ripetuti.

Volendo fare una modifica al footer della pagina, sara' necessario farla in tutti e quattro i file (...).

Con include possiamo creare un file `footer.html` da includere nelle pagine che lo richiedono e integrarlo
a piacimento nella posizione che vogliamo.

In questo modo otteniamo due grandissimi vantaggi:

- Il codice è molto più leggibile
- Volendo modificare il footer, dobbiamo modificare un solo file

## Include

```php
<?php //home.html
  include('header.html');
?>

<h1>Siamo nella home!</h1>

<?php
  include('footer.html');
?>
```
oppure
```php
<?php //index.php
  include('header.html');
  echo '<h1>Siamo nella home!</h1>';
  include('footer.html');
?>
```


## Include

`header.html`
```html
<html>
	<head>
		<title>My beautifull site</title>
	</head>
	<body>
		<h1>My beautifull site!</h1>
```

`footer.html`
```html
		<footer>
		  <a href='index.php'>Home</a>
		  <a href='info.php'>Info</a>
		</footer>
	</body>
</html>
```

## Include
Includere un file è proprio come inserirlo nel contesto dove lo si include, quindi nel file incluso è possibile utilizzare variabili 
e funzioni dichiarate nel contesto che lo ha incluso.

```php
// index.php
<?php
  $title = 'Home';
  include('header.php');
?>
```
<br>
```php
//header.php
  <html>
	<head>
	  </title><?php echo $title; ?></title>
	</head>
	<body>
	  <h1>Sei nella pagina: <?php echo $title; ?></h1>
?>
```
<br>
```php
// info.php
<?php
  $title = 'Info';
  include('header.php');
?>
```

# Esercizi

## Esercizio I
Creiamo un piccolo progetto che generi la tabellina di un numero inserito dall'utente

## Tips

> **<u>Non pensare al codice</u>**.<br>
  rappresenta il problema in una forma che vada bene per te (uno schema, una lista di punti, degli screenshot)

## Tips II

> Leggi il problema 2 volte, se hai dubbi chiedi.<br>
	IMPORTANTERRIMO, **<u>i requisiti di un progetto devo essere chiarissimi</u>**.<br>
	con un cliente dovete cercare sempre i **corner case**, chiedete, chiedete, chiedete:<br>
	(ad esempio: se metto un numero negativo cosa deve succedere? un cliente potrebbe volere
	mostrare un errore un altro potrebbe volere un altra cosa, è una cosa che non volete scoprire
	alla consegna).

## Tips III
> Dividi i problemi in sottoproblemi

## Tips IV
> Scrivi in italiano le operazioni che vuoi eseguire (magari come comenti nel codice)

## Tips V
> Prova manualmente su carta a fare le operazioni che vuoi eseguire

## Esercizio II
- Creare un piccolo progetto di 3 pagine (home, about, info) con un menu comune in alto con le tre voci delle pagine per passare da una pagina ad un'altra.
- Ogni pagina deve mostrare il suo titolo e la voce del menu della pagina corrente deve cambiare sfondo.