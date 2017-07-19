<?php

if(isset($_POST['email'])) {
	$msg = strip_tags($_POST['name']).' - '.strip_tags($_POST['email']). ' - '. strip_tags($_POST['phone']).' - '.strip_tags($_POST['message']);
	mail('idobrowolski@wpp.pl', 'info ze strony internetowej', $msg);
	$sent = true;
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Józef Izydor Dobrowolski</title>


	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/layout.css" />
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />


	<script type="text/javascript">var baseUrl = '';</script>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>

	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/messages_pl.js"></script>

	<script type="text/javascript" src="js/frontend.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
	<?if(isset($sent)):?>
	<script type="text/javascript">
		alert('Twoja wiadomość została wysłana.');
	</script>
	<?endif;?>
    </head>
    <body>

	<div class="header">
	    <div class="wrapper">
		<div class="mainMenu">
		    <ul>
			<li><a href="index.php" title="">Home</a></li>
			<li><a href="galeria.php" title="">Galeria</a></li>
			<li><a href="recenzje.php" title="">Recenzje</a></li>
			<li><a href="wystawy.php" title="">Wystawy</a></li>
			<li class="active"><a href="kontakt.php" title="">Kontakt</a></li>
		    </ul>
		</div>
		<div class="mainContent">

		    <div class="content">
			<div class="body">
			    <div class="overflow">
				<h1 class="tHead">Kontakt</h1>
				<p>
				    <b>GDAŃSK</b> - ul. Tamka<br/>
				    <br/>
				    e-mail: idobrowolski@wp.pl<br/>
				    kom. 661 882 240
				</p>

				<div class="contactForm">
				    <form method="post" id="contactForm">
					<div class="item">
					    <div class="label">Imię i nazwisko</div>
					    <div class="input"><input type="text" class="required" minlength="5" name="name" value=""/></div>
					</div>

					<div class="item">
					    <div class="label">Twój adres e-mail</div>
					    <div class="input"><input type="text" class="required email" name="email" value=""/></div>
					</div>
					
					<div class="item">
					    <div class="label">Telefon kontaktowy</div>
					    <div class="input"><input type="text" class="phone" name="phone" value=""/></div>
					</div>

					<div class="item">
					    <div class="label">Wiadomość</div>
					    <div class="input"><textarea name="message" class="required" minlength="5"></textarea></div>
					</div>



					<div class="item" >
					    <div class="input"><input type="submit" name="send" value="Wyślij wiadomość" class="button"/></div>
					</div>
					<div class="clear"></div>
				    </form>
				    <script type="text/javascript">
					$(document).ready(function() {
					    $('#contactForm').validate();
					});
				    </script>
				</div>
			    </div>
			</div>

		    </div>
		</div>
	    </div>
	</div>
	<div class="bar"></div>
	<div class="vbar">
	    <div class="wrapper">
		<div class="panelL">
		    <div class="body">
			<img src="image/foto.png" alt=""/>
			<h3 class="title">Józef Izydor DOBROWOLSKI</h3>
			<p>
			    Rocznik 49-ty "JUDEX".<br/>
			    Uprawia malarstwo, pastel.<br/>
			    W swoim dorobku ma 24 wystawy indywidualne i liczne wystawy zbiorowe.<br/>
			    W 1987 roku zajął pierwsze miejsce w Konkursie Polskiego Stowaryszenia Edukacji Plastycznej Polski Południowo-Wschodniej za obraz "PIETA".<br/>
			    Wiele jego prac znajduje sie w prywatnych kolekacjach w kraju i za granicą.
			</p>
		    </div>
		</div>

		<div class="panelR">
		    <div class="body">
			<h4 class="title2">PRACOWNIE</h4>
			<p>
			    GDAŃSK - ul. Tamka<br/>
			    Lubaczów - ul. Kopernika<br/>
			    <br/>
			    e-mail: idobrowolski@wp.pl<br/>
			    kom. 661 882 240
			</p>
		    </div>
		</div>
		<div class="clear"></div>
	    </div>
	</div>

    </body>
</html>