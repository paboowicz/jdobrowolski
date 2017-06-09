<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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



	<script type="text/javascript" src="js/frontend.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
	<style type="text/css">
	.thumbs {width: 790px; float: left; height: 70px; position: relative;}
	.carrier {position: relative;}
	a.mLeft, a.mRight {width: 50px; float: left; display: block; height: 70px; line-height: 70px; text-align: center; font-size: 20px;}
	</style>
	<script type="text/javascript">
	$(function(){
	
		$('.mRight').click(function(e){
			e.preventDefault();
			$('.carrier').css('position','absolute');
			if(parseInt($('.carrier').css('left')) - 100 < -1810) {
				$('.carrier').animate({'left' : (-810) + 'px'});
			}else if(parseInt($('.carrier').css('left')) - 100 >= -1810) {
				
				$('.carrier').animate({'left' : (parseInt($('.carrier').css('left')) - 100) + 'px'});
			}
			
			
		});
		
		$('.mLeft').click(function(e){
			e.preventDefault();
			$('.carrier').css('position','absolute');
			if(parseInt($('.carrier').css('left')) + 100 > 0) {
				$('.carrier').animate({'left' : (0) + 'px'});
			}else if(parseInt($('.carrier').css('left')) + 100 <= 0) {
				
				$('.carrier').animate({'left' : (parseInt($('.carrier').css('left')) + 100) + 'px'});
			}
			
			
		});
	
	});
	</script>
    </head>
    <body>

	<div class="header">
	    <div class="blend">
		<div class="wrapper">
		    <div class="mainMenu">
			<ul>
			    <li><a href="index.php" title="">Home</a></li>
			    <li class="active"><a href="galeria.php" title="">Galeria</a></li>
			    <li><a href="recenzje.php" title="">Recenzje</a></li>
			    <li><a href="wystawy.php" title="">Wystawy</a></li>
			    <li><a href="kontakt.php" title="">Kontakt</a></li>
			</ul>
		    </div>
		    <div class="galleryContent">

			<div class="content">
			    <div class="body">

				<?
				$dir = "image/gallery/";
				if ($handle = opendir($dir)) {
				    while (false !== ($file = readdir($handle))) {
					if ((strpos($file, '.jpg', 1)) || (strpos($file, '.png', 1))) {
					    if (filesize($dir . $file) > 0) {
						$pliki[] = $file;
					    }
					}
				    }
				}
				sort($pliki);
				?>
				
				<?
				$desc = array();
				$desc[] = array('"PIETA"','płótno, olej, 131 x 97,5','cena: 3000 EURO');
				$desc[] = array('"HOMO SOVIETICUS"','płótno, olej, 131 x 97,5','cena: 1500 EURO');
				$desc[] = array('"NIĆ ŻYCIA"','płótno, olej, 131 x 97,5','cena: 1500 EURO');
				$desc[] = array('"PTAKI"','płótno, olej, 131 x 97,5','cena: 1200 EURO');
				$desc[] = array('"MAJA"','płótno, olej, 97 x 130','');
				$desc[] = array('"Aptaki"','płótno, olej, 130 x 97,5','');
				$desc[] = array('"AKT"','płótno, olej, 80 x 40','');
				$desc[] = array('SZKIC OLEJNY STOGI','','');
				$desc[] = array('SZKIC OLEJNY','','');
				
				$desc[] = array('"GDAŃSK"','płótno, olej + złoto, 90 x 120','');
				$desc[] = array('"KRESY"','płótno, olej + złoto, 90 x 120','');
				$desc[] = array('"KRESY"','płótno, olej + złoto, 90 x 120','');
				$desc[] = array('"MOTŁAWA"','płótno, olej + złoto, 90 x 120','');
				$desc[] = array('"PEJZAŻ"','płótno, olej + złoto, 90 x 120','');
				$desc[] = array('"PEJZAŻ"','płótno, olej + złoto, 70 x 100','');
				$desc[] = array('"MONTRMARTE"','płótno, olej + złoto, 80 x 90','');
				$desc[] = array('"RYBY"','płótno, olej, 90 x 120','');
				$desc[] = array('"Arena Gdańsk"', 'pł, olej, złoto','');
				$desc[] = array('"Małe miasteczko kresowe"', 'pł, olej,złoto', '');
				$desc[] = array('"Figi"', 'olej  ', '');
				$desc[] = array('"Stogi"', 'olej, 30x40', '');
				$desc[] = array('"Stogi"', 'olej, 30x40', '');
				$desc[] = array('"Stogi"', 'olej, 30x40', '');
				$desc[] = array('"Stogi"', 'olej, 30x40', '');
				$desc[] = array('"Stogi"', 'olej, 30x40', '');
				$desc[] = array('"Stogi"', 'pł,olej','');
				$desc[] = array('"Tramwaj"','pł, olej','');
				$desc[] = array('"Ulica Dług 2"','pł,olej, złoto','');
				
				
				
				
				
				
				?>
				
				<script type="text/javascript">
				var danesz = <?=json_encode($desc)?>;
				function loadDanesz(index) {
					$('.title').text(danesz[index][0]);
					$('.desc').text(danesz[index][1]);
					$('.price').text(danesz[index][2]);
				}
				</script>

				<div class="gallery">
				    <div class="view">
					<div class="preview">
					    <img src="<?= $dir . $pliki[0] ?>"/>
					</div>
					<div class="description">
					    <div class="title">"PIETA"</div>
					    <div class="desc">Olej na płótnie</div>
					    <div class="price">CENA: 3000 euro</div>
					    <div class="query">
						<a href="kontakt.php">wyślij zapytanie</a>
					    </div>
					</div>
				    </div>
				    <a href="#" class="mLeft">&laquo;</a>
					<div class="thumbs" style="overflow: hidden;">
					
					<div style="width: 2600px; left: 0px;" class="carrier">
					<? foreach ($pliki as $i => $img): ?>
    					<a href="<?= $dir . $img ?>" class="thumb" onclick="loadDanesz(<?=$i?>)"><img src="<?= $dir . $img ?>"/></a>
					<? endforeach; ?>
					</div>
					
				    </div>
					<a href="#" class="mRight">&raquo;</a>

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
			<h1 class="title">Józef Izydor DOBROWOLSKI</h1>
			<p>
			    Rocznik 49-ty "JUDEX".<br/>
			    Uprawia malarstwo, pastel.<br/>
			    W swoim dorobku ma 23 wystawy indywidualne i liczne wystawy zbiorowe.<br/>
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