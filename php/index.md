---
author: Rocco De Patto
title: PHP / Mysql <br> Sinervis
date: Dicembre 19, 2017
---
# PHP

## PHP
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
		border-left: 5px solid;
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

### PHP Hypertext Preprocessor

Nasce nel '94 ad opera del danese Rasmus Lerdorf.

Il significato originale dell'acronimo era "Personal Home Page", oggi sta per "PHP Hypertext Preprocessor".

- Interpretato
- Alto livello
- Aperto
- Poche alternative (ASP)
- Progettato per il web (ma non necessariamente relegato in quell'ambito)

## Client/Server

- Il computer dell'utente (**client**) si connette a Internet
- Apre un Web Browser (FF, Opera, Chrome, etc.)
- Il client richiede una pagina ad un sito web
- Il DNS (name server) indirizza il client verso l'indirizzo del server
- Il server che ospita la pagina web, riceve la richiesta e recupera al suo interno la pagina
- Se la pagina e' statica (html, txt, png) la manda al clinet
- Se la pagina dinamica (php) la interpreta e ne manda l'output al client
- Il client riceve la pagina richiesta e ne mostra una sua interpretazione sul monitor dell'utente

## PHP

- Sintassi Fondamentale 
- Tipi
- Variabili
- Costanti 
- Operatori 
- Strutture di controllo 
- Funzioni 
- Form
- Cookie
- Sessione
- File

## Sintassi

- Un file PHP contiene tag HTML e del codice PHP di scripting

- Esempio di un semplice script PHP che invia il testo "Hello World" al browser:

```php
<html>
	<body>
	<?php echo "Hello World"; ?>
	</body>
</html>
```

## Sintassi

- Un blocco PHP è racchiuso tra `<?php`  e `?>` e puo' essere inserito ovunque nel documento
- Ogni istruzione termina con un punto e virgola (obbligatoriamente, non come il javascript)
- `echo` e' l'istruzione per mostrare un output (ne esistono anche altre)

## Commenti

- Inserire i commenti nel codice e' fondamentale.  
- Si usa `//` per fare commenti su singola linea (come in javascript)
- e `/*` e `*/` per commentare un blocco di linee

```php
<?php
	// commento di una linea

	/* 
		commento su piu' linee
	*/
?>

```

## Variabili
Come per quasi ogni linguaggio di programmazione, anche in PHP esistono le variabili.  

- In PHP la variabili iniziano con un `$` (dollaro).
- Possono contenere stringhe, numeri, array, oggetti, date, booleani

```php
<?php
	$nome = "Mario";
	$cognome = "Rossi";
	echo $nome;
?>
```

## Tipi

PHP e' un linguaggio debolmente tipato. 
Vuol dire che non bisogna dichiarare a priori la tipologia della variabile che si vuole utilizzare (questo non e' vero per tutti i linguaggi).  
Il tipo della variabile viene determinato dal contesto.

```php
<?php
	$pippo = TRUE; // $pippo e' boolean
	$pippo = "0";  // diventa una stringa
	$pippo += 2;   // diventa un integer
	$pippo -= 1.1; // diventa un float
?>
```

## Costanti

Oltre alle variabili, in molti linguaggi di programmazione esiste il concetto di costante, simili alle variabili ma il loro valore non puo' essere variato:


```php
<?php
	define('PI', 3.1415);
	$raggio = 2;
	$area = ($raggio**2)*PI;
?>
```

## Stringhe
Le stringhe si possono dichiarare principalmente in due modi:

- Single quoted: ovvero tra apici singoli
- Double quoted: tra doppi apici

```php
<?php
	$name = "Mario";
	$surname = 'Rossi';
?>
```

## Concatenazione

Per concatenare due o piu' stringhe si usa l'operatore `.`  

```php
<?php
	$name = "Mario";
	$surname = "Rossi";
	$fullname = $name . " " . $surname;
?>
```

## Operatori Aritmetici

 Operazione		          Operatore
------------             ------------
 Addizione		 			+
 Sottrazione				-
 Divisione					/
 Moltiplicazione			*
 Decremento					--
 Incremento					++
 Potenza					** (php > 5.6)
 Modulo (resto divisione)	%

-----------------------------------------

## Condizioni

### IF

Come gia' visto in javascript, con qualche variazione sul tema:


```php
<?php
	if	($area > 10) {
		print "area maggiore di 10";
	} elseif ($area == 10) {
		print "area proprio uguale a 10";
	} else {
		print "area minore di 10";
	}
?>
```

## Condizioni II

### SWITCH
```php
<?php
	switch ($x) {
		case 1:
			echo "Number 1";
			break;
		case 2:
			echo "Number 2";
			break;
		default:
			echo "No number between 1 and 2";
	}
?>
```

## Operatori di confronto

Come in javascript:

Operatore		Descrizione
----------     --------------------
==				Uguale
!=				Diverso
>				Maggiore
<				Minore
>=				Maggiore o uguale
<=				Minore o uguale


## Operatori logici

Come in javascript:

Operatore		Descrizione
----------	    -------------
&&				 and
||				 or
!				 not

## Cicli

- while - cicla **finche'** la condizione specificata e' vera
- do...while - cicla almeno una volta e poi finche' la condizione specificata e' vera
- for - cicla per un numero specificato di volte
- foreach - cicla attraverso gli elementi di un array


## while


```php
<?php
	$i = 1;
	while ($i <= 10) {
		/* Il valore visualizzato è 
		il valore della variabile $i prima 
		del suo incremento */
		print $i++;
	}
?>
```

## do...while
Simile al ciclo while ma viene eseguito almeno una volta.

```php
<?php
	$i = 0;
	do {
		print $i;
	} while($i>0);
?>
```

## for
Come in javascript:

```php
<?php
	for ($i = 1; $i <= 10; $i++) {
		print $i;
	}
?>
```

## Array
Gli array sono un tipo di variabile che contiene liste di altre variabili:

```php
<?php
  $listaGiorni = array("lun", "mar", "mer", "gio", "ven", "sab", "dom");

  // stampo il primo giorno della settimana
  print $listaGiorni[0];
?>
```

## Array associativi

```php
<?php
	$utente = array( "nome" => "Mario", "cognome" => "Rossi");
	print $utente["nome"];
?>
```

## Foreach
Permette di ciclare su tutti gli elementi di un array in due varianti:

```php
<?php
	foreach($listaGiorni as $giorno) {
		print $giorno;
	}

	// oppure
	foreach($utente as $chiave => $valore) {
		print $chiave . ":" . $valore;
	}
?>
```


## Form
Il contenuto degli elementi di un form HTML, dopo il submit sono disponibili al PHP!

```php
<html>
	<body>
		<form method="POST" action="script.php">
			<input type="text" name="username">
			<input type="submit" value="Invia">
		</form>
		<?php
			$username = $_REQUEST['username'];
		?>
	</body>
</html>
```

## Esercizio
