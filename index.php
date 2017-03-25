<?php

$id= $_GET["id"];
$key='EAD98537F92315FBC0AB6494DB7774FD';

$link =file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$key.'&steamids='.$id.'&format=json');
$myarray=json_decode($link, true);

$linkkills=file_get_contents('http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=222880&key='.$key.'&steamid='.$id.'&format=json');;
$datos=json_decode($linkkills, true);

$link2 =file_get_contents('http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key='.$key.'&steamid='.$id.'&format=json&');
$juego=json_decode($link2, true);

$insurgencyDataraw = file_get_contents ('http://api.steampowered.com/ISteamUserStats/GetSchemaForGame/v2/?key='.$key.'&appid=222880');
$insurgencyData=json_decode($insurgencyDataraw, true);

$juego= $juego['response']['games'];
$num = "222880";
foreach ($juego as $b) {
    if ($b['appid'] == $num) {
        $minutos = $b['playtime_forever'];

        break;
    }
};

$horas = $minutos / 60;
$muertes = $datos['playerstats']['stats'][0]['value'];
$mvphora = $muertes / $horas ;
$foto = $myarray['response']['players'][0]['avatarmedium'];
$NumLogros = count ($datos['playerstats']['achievements']);
$logros = ($datos['playerstats']['achievements']);

$logrosDisponibles= $insurgencyData['game']['availableGameStats']['achievements'] ;

?>





<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : ClearFigure
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140310

-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ClearFigure</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">

      </a></h1>
				<p>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></p>
			</div>
		</div>
	</div>
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="#">Homepage</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>
	<div id="banner"></div>
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Integer sit amet aliquet</h2>
				<span class="byline">Phasellus nec erat sit amet nibh pellentesque congue</span> </div>
          <?php
                  echo "<img src='$foto'/>";
              echo "<p> Nombre :</p>"  ;
              print $myarray['response']['players'][0]['personaname'];
              echo "<p> Ultima conexion " ;
              $timestamp=$myarray['response']['players'][0]['lastlogoff'];
              echo gmdate("Y-m-d", $timestamp);
              echo "<p> Mvp totales: " ;
              print $datos['playerstats']['stats'][2]['value'] ;
              echo "<p> Kills  por hora:   "  ;
              echo round ($mvphora, 2);
              echo "<p> Numero de logros:";
              print $NumLogros;
              echo "</p></p></p>";
              foreach($logros as $row => $innerArray){
  foreach($innerArray as $innerRow => $logros1[]){
  }
}
             $logros2 = array_diff($logros1, ["1"]);
          //   echo '<pre>'; print_r(array_values($logrosDisponibles)); echo '</pre>';

                        for ($x = 0; $x < 50; $x++) {


                          for ($y = 0; $y < 100 ; $y++) {
                          if ($logros2[$x] == $logrosDisponibles[$y]['name']){

                            $titulo = $logrosDisponibles[$y]['displayName'] ;
                            $icon = $logrosDisponibles[$y]['icon'];

                             echo "<img src='$icon'/>";
                               echo "$titulo <br/>";

                          }
}

}










            ?>
		</div>
		<div id="sidebar">
			<div class="box2">
				<div class="title">
					<h2>Integer gravida</h2>
					<form>
						Steam ID<br>
						<input type="text" name="id" method="GET" >
						<br>



  						<input type="submit" value="Submit">

					</form>
				</div>

			</div>
		</div>
	</div>
</div>
	<div id="portfolio-wrapper">
		<div id="portfolio" class="container">
			<div id="column1">
				<div class="title">
					<h2>Suspendisse lacus</h2>
				</div>
				<a href="#" class="image image-full"><img src="images/pic02.jpg" alt="" /></a>
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
			<div id="column2">
				<div class="title">
					<h2>Fusce ultrices</h2>
				</div>
				<a href="#" class="image image-full"><img src="images/pic03.jpg" alt="" /></a>
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
			<div id="column3">
				<div class="title">
					<h2>Etiam posuere</h2>
				</div>
				<a href="#" class="image image-full"><img src="images/pic04.jpg" alt="" /></a>
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
			<div id="column4">
				<div class="title">
					<h2>Mauris vulputate</h2>
				</div>
				<a href="#" class="image image-full"><img src="images/pic05.jpg" alt="" /></a>
				<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
		</div>
	</div>

<div id="footer-wrapper">
	<div id="footer" class="container">
		<div id="box1">
			<div class="title">
				<h2>Latest Post</h2>
			</div>
			<ul class="style1">
				<li><a href="#">Semper mod quis eget mi dolore</a></li>
				<li><a href="#">Quam turpis feugiat sit dolor</a></li>
				<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
				<li><a href="#">Consequat etiam lorem phasellus</a></li>
				<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
				<li><a href="#">Semper mod quisturpis nisi</a></li>
			</ul>
		</div>
		<div id="box2">
			<div class="title">
				<h2>Popular Links</h2>
			</div>
			<ul class="style1">
				<li><a href="#">Semper mod quis eget mi dolore</a></li>
				<li><a href="#">Quam turpis feugiat sit dolor</a></li>
				<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
				<li><a href="#">Consequat etiam lorem phasellus</a></li>
				<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
				<li><a href="#">Semper mod quisturpis nisi</a></li>
			</ul>
		</div>
		<div id="box3">
			<div class="title">
				<h2>Follow Us</h2>
			</div>
			<p>Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet magna.</p>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Dribbble</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Tumblr</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
				<a href="#" class="icon icon-arrow-right button">Read More</a> </div>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
<script type="text/javascript" src="DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="scripts/javascript.js"></script>
</body>
</html>
