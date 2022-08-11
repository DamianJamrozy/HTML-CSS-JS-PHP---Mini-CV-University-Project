<html>
<head>
	<title>Firma</title>
	<link rel="Shortcut icon" href="img/icons/icon.ico" />

	<meta http-equiv="content-type" content="text/php"; charset="UTF-8"/> 
	<meta name="keywords" content="firma,Damian Jamroży, web designer,">
	<meta name="description" content="Firma">
	<link rel="stylesheet" href="style/style.css" type="text/css" />
	<?php
		session_start();
	?>
	
	
</head>
<body>
	<div id="header">
		<div id="left_head">
			<div id="left_ban"><a href="#"><span style="font-size:30px; font-weight:700; "><b>Damian Jamroży</span></a><br><br>
			<span style="color:#707070;">Sample Website by Damian Jamroży</span></div>
			<a href="sites/admin.php"><div class="side_right" id="admin_panel"> <center><img class="icon_hed" src="img/icon/price.png" width="25%"><br><br>ADMIN PANEL</center></div></a>
			
		</div>
		
		<div id="right_head">
			<a href="sites/me.php"><div class="side"> <center><img class="icon_hed" src="img/icon/me.png" width="25%"><br><br>O MNIE</center></div></a>
			<a href="#"><div class="side"> <center><img class="icon_hed" src="img/icon/home.png" width="25%"><br><br>HOME</center></div></a>
			<a href="sites/contact.php"><div class="side"> <center><img class="icon_hed" src="img/icon/phone.png" width="25%"><br><br>KONTAKT</center></div></a>
			<a href="sites/brand.php"><div class="side"> <center><img class="icon_hed" src="img/icon/bubble.png" width="25%"><br><br>USŁUGI</center></div></a>
			<a href="sites/bucket.php"><div class="side"> <center><img class="icon_hed" src="img/icon/bucket.png" width="25%"><br><br>KOSZYK</center></div></a>
			<div class="side_btn" id="Login"><a href="sites/login.php"><center><button class="btn">ZALOGUJ SIĘ</button> </center></a></div>
			<div class="side_btn" id="Logout"><a href="php/wylogowanie.php"><center><button class="btn">Wyloguj SIĘ</button> </center></a></div>

		</div>
		
	</div>
	
	<div id="ban">
		<center>
		<span style="font-size:100px;"><br>Damian Jamroży</span><br>
		Web developer, Grafik, Postprodukcja filmowa, Help desk, Social media<br><br>
		<a href="https://damianjamrozy.000webhostapp.com/"><button class="btn">Więcej o mnie</button></a>
		</center>
	</div>
	
	<div id="content">
		
		<div id="left">
			<div style="padding-left:10%; padding-right:10%;">
			<center><font size="300px">Usługi</font><br><br></center>
			
			Chciałbyś/aś posiadać własnego bloga ale nie wiesz jak się za to zabrać? Może masz świetny pomysł 
			na aplikację mobilną lub desktopową ale programowanie Cię przeraża? Jeżeli tak to nasze usługi są 
			właśnie dla Ciebie! Stworzę twoją wymarzoną stronę internetową, aplikację mobilną, aplikację 
			desktopową. Oferuję również takie usługi jak: tworzenie oraz personalizowanie grafik 2D, produkcję
			oraz postprodukcję materiałów wideo w najwyższej jakości, obsługa social mediów w którym posiadam
			kilkuletnie doświadczenie. Moi klienci są zawsze zadowoleni, jako jeden/jedna z nich masz projekt
			cały czas pod kontrolą. Umożliwiam kontakt poprzez różnego rodzaju komunikatory w ostatnim dniu 
			roboczym każdego tygodnia. Dzięki temu na bieżąco możesz widzieć jakie 
			funkcjonalności są dodawane do zamówionej usługi. 
			Otwórz zakładkę <a href="sites/brand.php">usługi</a> i rozpocznij przygodę wraz ze mną już teraz!
			<br><br><br><br>
			Do każdej kolejnej usługi naliczany jest rabat w wysokości 5% od ceny netto. Zamawiając kompleksową
			usługę, łączącą wszystkie możliwe opcje możesz otrzymać nawet 20% rabatu! Nie znajdziesz tego u konkurencji.
			Na co czekasz? Uruchom zakładkę <a href="sites/brand.php">usługi</a> i skompletuj swoje zamówienie. Po wykonaniu tej czynności przejdź
			do zakładki <a href="sites/bucket.php">koszyk</a> i wybierz interesujące Cię opcje dodatkowe.
			<br><br><br><br>
			
			

			</div>
			
		</div>
		
		<div id="right">
			<center><img class="img" src="img/front.jpg" height="75%"></center>
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

</body>
<?php
	include('php/sprawdzanie_sesji.php');
?>

</html>