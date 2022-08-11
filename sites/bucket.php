<html>
<head>
	<title>Firma</title>
	<link rel="Shortcut icon" href="../img/icon.ico" />

	<meta http-equiv="content-type" content="text/php"; charset="UTF-8"/> 
	<meta name="keywords" content="firma,Damian Jamroży, web designer,">
	<meta name="description" content="Firma">
	<link rel="stylesheet" href="../style/style.css" type="text/css" />
	<?php
		session_start();
	?>
	
</head>
<body>
	<div id="header">
		<div id="left_head">
			<div id="left_ban"><a href="../Index.php"><span style="font-size:30px; font-weight:700; "><b>Damian Jamroży</span></a><br><br>
			<span style="color:#707070;">Sample Website by Damian Jamroży</span></div>
			<a href="admin.php"><div class="side_right" id="admin_panel"> <center><img class="icon_hed" src="../img/icon/price.png" width="25%"><br><br>ADMIN PANEL</center></div></a>
			
		</div>
		
		<div id="right_head">
			
			<a href="me.php"><div class="side"> <center><img class="icon_hed" src="../img/icon/me.png" width="25%"><br><br>O MNIE</center></div></a>
			<a href="../index.php"><div class="side"> <center><img class="icon_hed" src="../img/icon/home.png" width="25%"><br><br>HOME</center></div></a>
			<a href="contact.php"><div class="side"> <center><img class="icon_hed" src="../img/icon/phone.png" width="25%"><br><br>KONTAKT</center></div></a>
			<a href="brand.php"><div class="side"> <center><img class="icon_hed" src="../img/icon/bubble.png" width="25%"><br><br>USŁUGI</center></div></a>
			<a href="bucket.php"><div class="side"> <center><img class="icon_hed" src="../img/icon/bucket.png" width="25%"><br><br>KOSZYK</center></div></a>
			<div class="side_btn" id="Login"><a href="login.php"><center><button class="btn">ZALOGUJ SIĘ</button> </center></a></div>
			<div class="side_btn" id="Logout"><a href="../php/wylogowanie.php"><center><button class="btn">Wyloguj SIĘ</button> </center></a></div>

		</div>
		
	</div>
	
	
	<div id="content">
		<center><font size="300px">Koszyk</font><br><br></center>
		<div id="product_first">
			<hr><h2>APLIKACJA MOBILNA <button onclick="cancel_first()">X</button></h2><hr>
				<br><br><br>
				Ilość ekranów: 
				<select>
					<option id="mob_screen_1" selected>1</option>
					<option id="mob_screen_2">2</option>
					<option id="mob_screen_3">3</option>
					<option id="mob_screen_4">4</option>
					<option id="mob_screen_5">5</option>
					<option id="mob_screen_6">6</option>
					<option id="mob_screen_7">7</option>
					<option id="mob_screen_8">8</option>
					<option id="mob_screen_9">9</option>
					<option id="mob_screen_10">10</option>
					<option id="mob_screen_more">Więcej</option>
				</select>
				
				<br><br><br><br><br>
				Dodatkowe opcje:
				<br><br>
				<input type="checkbox" id="mob_options_1"> Płatności / dotacje	<font color="green">+8 000 PLN</font><br>	
				<input type="checkbox" id="mob_options_2"> Integracja z social media	<font color="green">+5 000 PLN</font><br>
				<input type="checkbox" id="mob_options_3"> Powiadomienia push	<font color="green">+3 000 PLN</font><br>
				<input type="checkbox" id="mob_options_4"> Mapy / nawigacja	<font color="green">+1 500 PLN</font><br>
				<input type="checkbox" id="mob_options_5"> Obsługa bluetooth	<font color="green">+12 000 PLN</font><br>
				<input type="checkbox" id="mob_options_6"> Operacje CRUD	<font color="green">+10 000 PLN</font><br>
				
				
		</div>
		
		
		
		<div id="product_secound">
			<hr><h2>APLIKACJA WEEBOWA <button onclick="cancel_sec()">X</button></h2><hr>
			<br><br><br>
				Typ strony: 
				<select>
					<option selected id="web_1">Wizytówka</option>
					<option id="web_2">Sklep Internetowy</option>
					<option id="web_3">Blog</option>
					<option id="web_4">Inna</option>
				</select>
				
				
				
				
				<br><br><br><br><br>
				Ilość podstron: 
				<select>
					<option selected id="web_side_0">0</option>
					<option id="web_side_1">1</option>
					<option id="web_side_2">2</option>
					<option id="web_side_3">3</option>
					<option id="web_side_4">4</option>
					<option id="web_side_5">5</option>
					<option id="web_side_6">6</option>
					<option id="web_side_7">7</option>
					<option id="web_side_8">8</option>
					<option id="web_side_9">9</option>
					<option id="web_side_10">10</option>
					<option id="web_side_more">Więcej</option>
				</select>
				
				
				<br><br><br><br><br>
				Dodatkowe opcje:
				<br><br>
				<input type="checkbox" id="web_options_1"> Płatności / dotacje	<font color="green">+400 PLN</font><br>	
				<input type="checkbox" id="web_options_2"> Odtwarzacze multimedialne	<font color="green">+50 PLN</font><br>
				<input type="checkbox" id="web_options_3"> System CMS	<font color="green">+1000 PLN</font><br>
				<input type="checkbox" id="web_options_4"> Baner, Grafiki początkowe	<font color="green">+500 PLN</font><br>
				
				<br><br><br><br><br>
				Wybierz pakiet:<br>
				<input type="radio" name="pakiet1" id="web_pack_1"><label> Platynowy (10 poprawek) <font color="green">+500 PLN</font></label><br>	
				<input type="radio" name="pakiet1" id="web_pack_2"><label> Złoty (7 poprawek)	<font color="green">+300 PLN</font></label><br>
				<input type="radio" name="pakiet1" id="web_pack_3"><label> Srebrny (5 poprawek)	<font color="green">+100 PLN</font></label><br>
				<input type="radio" name="pakiet1" id="web_pack_4"><label> Brązowy (3 poprawki)	<font color="green">0 PLN</font></label><br>
				
		</div>
		
		<div id="product_third">
			<hr><h2>APLIKACJA DESKTOPOWA <button onclick="cancel_thr()">X</button></h2><hr>
				Ta oferta aktualnie jest niedostępna. Prosimy spróbować później.
		</div>
		
		<div id="product_fourth">
			<hr><h2>PRODUKCJA FILMOWA <button onclick="cancel_for()">X</button></h2><hr>
				<br><br><br>
				Zadania: 
				<select>
					<option id="vid_1">Produkcja</option>
					<option id="vid_2">Postprodukcja</option>
					<option selected id="vid_3">Produkcja oraz postprodukcja nagrań</option>
				</select>
				
				
				
				<br><br><br>
				Ilość dni nagraniowych - dla opcji produkcji: 
				<select>
					<option selected id="vid_day_0">0</option>
					<option id="vid_day_1">1</option>
					<option id="vid_day_2">2</option>
					<option id="vid_day_3">3</option>
					<option id="vid_day_4">4</option>
					<option id="vid_day_5">5</option>
					<option id="vid_day_6">6</option>
					<option id="vid_day_7">7</option>
					<option id="vid_day_8">8</option>
					<option id="vid_day_9">9</option>
					<option id="vid_day_10">10</option>
					<option id="vid_day_more">Więcej</option>
				</select>
				
				<br><br><br>
				Ilość godzin nagrania - dla opcji postprodukcji: 
				<select>
					<option selected id="vid_hour_0">0</option>
					<option id="vid_hour_1">1-3</option>
					<option id="vid_hour_2">4-6</option>
					<option id="vid_hour_3">7-10</option>
					<option id="vid_hour_more">Powyżej 10</option>
				</select>
				
				
				
		</div>
		
		<div id="product_fifth">
			<hr><h2>SOCIAL MEDIA <button onclick="cancel_fif()">X</button></h2><hr>
				<br><br><br>
				Ilość portali social-media: 
				<select>
					<option selected id="social_1">1</option>
					<option id="social_2">2-3</option>
					<option id="social_3">4-7</option>
					<option id="social_more">Powyżej 7</option>
				</select>
				
				
				<br><br><br>
				Częstotliwość dodawania postów:<br>
				<input type="radio" name="posts" id="soc_pack_1"><label> 1-3 Tygodniowo	<font color="green">+200 PLN</font></label><br>
				<input type="radio" name="posts" id="soc_pack_2"><label> 4-6 Tygodniowo	<font color="green">+400 PLN</font></label><br>
				<input type="radio" name="posts" id="soc_pack_3"><label> 7-12 Tygodniowo	<font color="green">+700 PLN</font></label><br>

		</div>
		
		<div id="product_sixth">
			<hr><h2>GRAFIKA KOMPUTEROWA <button onclick="cancel_six()">X</button></h2><hr>
			<br><br><br>
			Ilość potrzebnych grafik: 
				<select>
					<option selected id="graphic_1">1</option>
					<option id="graphic_2">2-5</option>
					<option id="graphic_3">6-10</option>
					<option id="graphic_more">Powyżej 10</option>
				</select>
			<br><br><br>
			
				Pakiety:<br>
				<input type="radio" name="grap" id="grap_pack_1"><label> Złoty (6 poprawek)	<font color="green">+300 PLN</font></label><br>
				<input type="radio" name="grap" id="grap_pack_2"><label> Srebrny (3 poprawki)	<font color="green">+100 PLN</font></label><br>
				<input type="radio" name="grap" id="grap_pack_3"><label> Brązowy (1 poprawka)	<font color="green">+0 PLN</font></label><br>
			
		</div>
		
		<br><center><a href="bucket_next.php"><button id="check_it" class="btn" onclick="cost()">Podsumowanie</button></a>
		
		<div id="empty">
			Niestety twój koszyk jest pusty. Przejdź do zakładki usługi i dodaj coś do koszyka!
		</div>
	</div>
	
	<div id="foter">
		<center><br>
		Szybkie linki:<br><br>
		<a href="https://damianjamrozy.000webhostapp.com/">O mnie</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://drive.google.com/drive/u/0/folders/1iO_GKEyLnbx0YPPabxCht1a2is-1CmQK?fbclid=IwAR0m6keW-nLw9X-MQ8Bl35xsaDDn4tzIPHQ-M_zNmbu5N2sizWw1Bx0VXws">Portfolio</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://damianjamrozy.000webhostapp.com/index.php/rodo/">RODO</a><br><br><br><br><br>
		@2020 <a href="https://damianjamrozy.000webhostapp.com/">Damian Jamroży</a>. <a href="LICENSE.pdf">Wszelkie prawa zastrzeżone.</a>
		</center>
	</div>



<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/script_shop.js"></script>

</body>
<?php
	include('../php/sprawdzanie_sesji.php');
?>

</html>