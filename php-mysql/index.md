---
author: Rocco De Patto
title: PHP / Mysql <br> Sinervis
date: Febbraio 26, 2018
---
# PHP / MYSQL

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

## Progetto
**TODO**:

Una semplice todo list con possibilita' di aggiungere, eliminare, modificare elementi di una lista.

## Progettazione (dati)
Che tipi di dati dobbiamo gestire?

Ogni elemento della lista ha solamente un titolo. 

Inoltre abbiamo bisogno di un ulteriore parametro che
tenga conto del fatto che l'elemento sia stato completato o meno (fare la spesa, fare il bucato, fare un figlio...)

## Progettazione (azioni)
- Che tipi di operazioni dobbiamo gestire sui dati?
* Creare un nuovo elemento
* Eliminare un elemento
* Segnare come fatto un elemento
* Mostrare tutti gli elementi
