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
		<center> <font size="7px">Logowanie</font></center><br><br><br><br>
		<div id="left">
			<center>
			<font size="7px">Zaloguj się:</font><br><br><br><br>
			
			<form method="POST" action="../php/logowanie.php">
			
				<font size="6px">Wpisz Login</font><br><br>
				<input type="text" name="login" class="inpu" placeholder="user" pattern="(?=.*[a-z])(?=.*[A-z]).{}" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
				<br><br><br>
				<font size="6px">Wpisz Hasło</font><br><br>
				<input type="password" name="haslo" class="inpu" placeholder="zaq1@WSX" pattern="(?=.*[a-z])(?=.*[A-z]).{}" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
				<br><br><br>
				<input type="submit" value="Zaloguj" name="loguj" class="btn">
			</form>
				
			</center>
		</div>
		
		<div id="right">
			<center>
			<font size="7px">Zarejestruj się:</font><br><br><br><br>
			
			<form method="POST" action="../php/rejestracja.php">
				<font size="6px">Wpisz Imię</font><br><br>
				<input type="text" name="firname" class="inpu" placeholder="Jan" pattern="(?=.*[a-z])(?=.*[A-z]).{}" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
				<br><br><br>
				<font size="6px">Wpisz Nazwisko</font><br><br>
				<input type="text" name="surname" class="inpu" placeholder="Kowalski" pattern="(?=.*[a-z])(?=.*[A-z]).{}" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
				<br><br><br>
				<font size="6px">Wpisz Email</font><br><br>
				<input type="email" name="email" class="inpu" placeholder="email@domain.com" required>
				<br><br><br>
				<font size="6px">Wpisz Numer Telefonu</font><br><br>
				<input type="tel" name="tel" class="inpu" id="num" maxlength="9" placeholder="123456789" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
				<br><br><br>
				<font size="6px">Wpisz Login</font><br><br>
				<input type="text" class="inpu" name="login" placeholder="login"><br><br>
				<br>
				<font size="6px">Wpisz Hasło</font><br><br>
				<input type="password" class="inpu" name="haslo1" placeholder="zaq1@WSX">
				<br><br><br>
				<font size="6px">Powtórz hasło</font><br><br>
				<input type="password" class="inpu" name="haslo2" placeholder="zaq1@WSX">
				<br><br><br>
				<input type="submit" class="btn" value="Utwórz konto" name="rejestruj">
			</form>
			</center>
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