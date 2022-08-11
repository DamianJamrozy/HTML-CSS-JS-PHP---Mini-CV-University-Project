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
	
		<div id="left">
			<img class="img" src="../img/contact.jpg" height="85%" >
		</div>
		
		<div id="right">
			<br><br><br><br><br><br><br><br><br><br><br>
			<h1>Kontakt</h1><br>
			Aby uzyskać więcej informacji skontaktuj się ze mną.<br><br><br><br>

			Miejsce zamieszkania:<br><br>
			Rzeszów<br><br><br><br>
			
			
			E-mail:<br><br>
			damianjamrozy99@gmail.com
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
	include('../php/sprawdzanie_sesji.php');
?>

</html>