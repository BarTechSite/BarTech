﻿<?php
//czytanie artykułu z pliku
$a = $_GET["nr"];

$myfile = @fopen("a$a.txt", "r") or die("Unable to open file!");

$myfile = fread($myfile,filesize("a$a.txt"));

$sector = explode("|", $myfile);

$topic = $sector[0];

$introduction = $sector[1];

$content = $sector[2];

$sentence = $sector[3];

?>

<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="utf-8" /> <!-- ta linia powoduje kodowanie znaków na stronie w podanym standardzie (UTF-8) -->
    <title>BestTechPage</title> <!-- ta linia powoduje, że w tytule strony wyświetli się podany napis (Najlepsze filmy!) -->
    <meta name="description" content="Serwis o technologii pochodzących z najpopularniejszych, popkulturowych komiksów, filmów i grier" /> <!-- ta linia zawiera napis jaki wyświetla się w przeglądarce pod adesem strony internetowej -->
    <meta name="keywords" content="btp,best,tech,page,marvel,dc,comics,technology,article,page,site,website,heroes,hero,iron,man,batman" /> <!-- ta linia zawiera wszystkie zwroty pod jakie będą sugerowały przeglądarce wybranie tej strony internetowej -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- ta linia informuje przeglądarkę Internet Explorer, aby urzywała najnowszej wersji gdy odpala podaną stronę internetową -->
    <link href="mainstyle.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet"> 
    <link href="css/fontello.css" rel="stylesheet" type="text/css" />
    <link href="css/fontellosmall.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="wrapper">
        <div id="topbar">
			<div id="header">
				<div id="logo">
					<img src="img/logo/logo.jpg" />
					<div style="clear:both"></div>
				</div>
				<div id="smallsocialdivs">
					<a target="_blank" href="https://www.facebook.com/btpbesttechpage/?ref=bookmarks"><div id="smallfb"><i class="icon-facebook-small"></i></div></a>
					<div id="smallyt"><i class="icon-youtube-play-small"></i></div>
					<div id="smallgp"><i class="icon-gplus-small"></i></div>
					<div style="clear:both"></div>
				</div>
				<div style="clear:both"></div>
			</div>
			<div class="nav">
				<ol>
					<li><a href="index.html">Home Page</a></li>
					<li>
						<a href="techinpopculture.html">Tech from Pop Culture</a>
						<ul>
							<li><a href="movies.html"><span style="color:purple;">movies</span></a></li>
							<li><a href="comics.html"><span style="color:blue;">comics</span></a></li>
							<li><a href="games.html"><span style="color:gold;">games</span></a></li>
							<li><a href="other.html"><span style="color:#FFBF00;">other</span></a></li>
						</ul>
					</li>

					<li><a href="events.html">Events :)</a></li>

					<li><a href="authors.html">About us</a></li>
				</ol>
			</div>
		</div>
        <div id="posttopic">
            <div class="posttopiccontent">
		<?php
			echo $topic;
		?>
            </div>
        </div>
        <div id="postconteiner">
            <div class="postfotoright"><img src="<?php echo "img/post$a/1.jpg"; ?>" /></div>

            <div class="postcontent">
                <div class="postintroduction">
                    <?php
					echo $introduction;
					?>
                </div>
                <div style="clear:both"></div>
                <div class="postfotorightinside"><img src="<?php echo "img/post$a/2.jpg"; ?>" /></div>
                <div class="postother">
                    <?php
					echo $content;
					?>
                    <br /><br />
                    
                </div>
                <div style="clear:both"></div>
            </div>

            <div class="postsentence">
				<?php
				echo $sentence;
				?>
	    </div>
        </div>

        <div id="reklamadol">
            <div id="reklamadoldeep">
                <img src="img/reklama/reklamadol.png" />
            </div>
        </div>

        <div id="socials">
            <div id="socialdivs">
                <a target="_blank" href="https://www.facebook.com/btpbesttechpage/?ref=bookmarks"><div id="fb"><i class="icon-facebook-1"></i></div></a>
                <div id="yt"><i class="icon-youtube-play-1"></i></div>
                <div id="gp"><i class="icon-gplus-1"></i></div>
                <div style="clear:both"></div>
            </div>
        </div>
        <div id="footer">BestTechPage.com &copy; 2018 Thank you for your visit Hero! </div>
    </div>

    <script src="jquery-3.2.1.js"> </script>
    <script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;

	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();

	if (ScrollY > NavY) {
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky');
	}
	};

	stickyNav();

	$(window).scroll(function() {
		stickyNav();
	});
	});

    </script>

</body>

</html>