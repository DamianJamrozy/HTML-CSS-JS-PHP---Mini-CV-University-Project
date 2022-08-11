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
		
		<center><font size="300px">Usługi</font><br><br></center>
		<br><br><br>
		
		<div id="left_brand">
			<br>
			<h1>APLIKACJA MOBILNA</h1><br>
			<img src="../img/mobile.jpg" width="98%"><br><br>
			Aplikacje mobilne to elementy które otaczają nas wszystkich.
			Codziennie, każdy z nas korzysta z kilkudziesięciu aplikacji mobilnych.
			Dzięki mnie, możesz dołączyć do grona posiadaczy własnej aplikacji mobilnej!<br><br>
			Kliknij przycisk dodaj do koszyka, a następnie przejdź do niego, aby wybrać
			warianty, dostępne dla aplikacji mobilnych.<br><br>
			<button onclick="mobile()" class="btn">Dodaj do koszyka</button>
		</div>
		
		<div id="center_brand">
			<br>
			<h1>APLIKACJA WEEBOWA</h1><br>
			<img src="../img/web.png" width="98%"><br><br><br>
			Chcesz prowadzić własnego bloga? Nie? Może własny sklep internetowy będzie
			lepszym wyborem? Nie ważne jakiego typu chcesz stronę, za odpowiednią cenę
			otrzymasz swoją wymarzoną witrynę internetową.<br><br>
			Kliknij przycisk dodaj do koszyka, a następnie przejdź do niego, 
			aby wybrać warianty, dostępne dla aplikacji weebowych.<br><br>
			<button onclick="weeb()" class="btn">Dodaj do koszyka</button>
		</div>
		
		<div id="right_brand">
			<br>
			<h1>APLIKACJA DESKTOPOWA</h1><br>
			<img src="../img/desktop.jpg" width="98%"><br><br>
			Komunikatory głosowe, aplikacje do zarządzania treścią, a może spersonalizowany
			odtwarzacz muzyki? Czego konkretnie oczekujesz od własnej aplikacji desktopowej?<br><br>
			Kliknij przycisk dodaj do koszyka, a następnie przejdź do niego, 
			aby wybrać warianty, dostępne dla aplikacji desktopowych.<br><br>
			<button onclick="desktop()" class="btn">Dodaj do koszyka</button>
		</div>
		
		<div id="left_brand">
			<br>
			<h1>PRODUKCJA FILMOWA</h1><br>
			<img src="../img/video.jpg" width="98%"><br><br>
			Tworzenie filmów to moja największa pasja... No może zaraz po tworzeniu grafiki,
			graniu na komputerze i długich spacerach gdy na zewnątrz jest ciepło...
			O czym ja to... a no tak! Potrzebujesz operatora kamery lub montażysty? A może
			jedno i drugie? Bez problemu, wszystkim się zajmę.<br><br>
			Kliknij przycisk dodaj do koszyka, a następnie przejdź do niego, 
			aby wybrać warianty, dostępne dla produkcji filmowej.<br><br>
			<button onclick="video()" class="btn">Dodaj do koszyka</button>
		</div>
		
		<div id="center_brand">
			<br>
			<h1>SOCIAL MEDIA</h1><br>
			<img src="../img/social.jpg" width="98%"><br><br>
			Chcesz sprzedać coś w internecie? No cóż... bez rozgłosu, twoje przychody nie będą
			wysokie. Daj mi chwilę, a zrobię wszystko co w mojej mocy aby twoje social media
			eksplodowały świerzością pnąc się w szczeblach popularności. <br><br>
			Kliknij przycisk dodaj do koszyka, a następnie przejdź do niego, 
			aby wybrać warianty, dostępne dla social mediów.<br><br>
			<button onclick="social_media()" class="btn">Dodaj do koszyka</button>
		</div>
		
		<div id="right_brand">
			<br>
			<h1>GRAFIKA KOMPUTEROWA</h1><br>
			<img src="../img/graphic.jpg" width="98%"><br><br>
			Rysowanie kółek w paincie wydawało się łatwiejsze? No cóż, grafika komputerowa
			nie jest dla każdego. Tutaj liczy się zmysł estetyczny, kreatywność oraz wiele 
			godzin pracy z programami graficznymi. Tak, tak... Tym też się zajmuję.<br><br>
			Kliknij przycisk dodaj do koszyka, a następnie przejdź do niego, 
			aby wybrać warianty, dostępne dla grafiki komputerowej.<br><br>
			<button onclick="graphic()" class="btn">Dodaj do koszyka</button>
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
</body>

<?php
	include('../php/sprawdzanie_sesji.php');
?>
</html>