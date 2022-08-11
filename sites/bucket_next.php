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
		
		<div id="cena1" class="cena">
			APLIKACJA MOBILNA<br><br><br><br><br><br><br><div id="money1"></div>
		</div>
		<div id="cena2" class="cena">
			APLIKACJA WEEBOWA<br><br><br><br><br><br><br><p id="money2"></p>
		</div>
		<div id="cena3" class="cena">
			PRODUKCJA FILMOWA<br><br><br><br><br><br><br><p id="money3"></p>
		</div>
		<div id="cena4" class="cena">
			SOCIAL MEDIA<br><br><br><br><br><br><br><p id="money4"></p>
		</div>
		<div id="cena5" class="cena">
			GRAFIKA KOMPUTEROWA<br><br><br><br><br><br><br><p id="money5"></p>
		</div>
		<div id="cli">
		<center>
		<br>Gratulacje! Twój rabat wyniosi:<br><p id="rab"></p><br><br>Cena usług po rabacie to:<br><p id="sum"></p>
		<form method="POST" action="../php/zakupy.php">
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
				<input type="submit" class="btn" value="Zamów" id="finish" name="zamow">
				
				<div id="sum1" style="display:none;"></div>
				<div id="sum2" style="display:none;"></div>
				<div id="sum3" style="display:none;"></div>
				<div id="sum4" style="display:none;"></div>
				<div id="sum5" style="display:none;"></div>
				<div id="rabats" style="display:none;"></div>
				<div id="costs" style="display:none;"></div>

			</form>
		</div>
		</form>
		
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
<script>
	var suma1 = sessionStorage.getItem("suma1");
	var suma2 = sessionStorage.getItem("suma2");
	var suma3 = sessionStorage.getItem("suma3");
	var suma4 = sessionStorage.getItem("suma4");
	var suma5 = sessionStorage.getItem("suma5");
	var suma = sessionStorage.getItem("suma");
	var rabat = sessionStorage.getItem("rabat");
	var rabat_proc = sessionStorage.getItem("rabat_proc");
	var suma_rabat = sessionStorage.getItem("suma_rabat");

	document.getElementById('money1').innerHTML = ' Cena Aplikacji: <br><br><br><br><span style="color:green; font-size:150%;">'+suma1+' złotych';
	document.getElementById('money2').innerHTML = ' Cena Aplikacji: <br><br><br><br><span style="color:green; font-size:150%;">'+suma2+' złotych';
	document.getElementById('money3').innerHTML = ' Cena Aplikacji: <br><br><br><br><span style="color:green; font-size:150%;">'+suma3+' złotych';
	document.getElementById('money4').innerHTML = ' Cena Aplikacji: <br><br><br><br><span style="color:green; font-size:150%;">'+suma4+' złotych';
	document.getElementById('money5').innerHTML = ' Cena Aplikacji: <br><br><br><br><span style="color:green; font-size:150%;">'+suma5+' złotych';
	document.getElementById('rab').innerHTML = ' <span style="color:green; font-size:150%;">'+rabat_proc*100+' procent';
	document.getElementById('sum').innerHTML = ' <span style="color:red; font-size:120%;"><s>'+suma+' PLN</s>  '+'<span style="color:green; font-size:160%;">'+suma_rabat+' PLN<br><br><br>';

	document.getElementById('sum1').innerHTML = ' <input type="number" id="summ1" name="sum1" value="'+suma1+'">';
	document.getElementById('sum2').innerHTML = ' <input type="number" id="summ2" name="sum2" value="'+suma2+'">';
	document.getElementById('sum3').innerHTML = ' <input type="number" id="summ3" name="sum3" value="'+suma3+'">';
	document.getElementById('sum4').innerHTML = ' <input type="number" id="summ4" name="sum4" value="'+suma4+'">';
	document.getElementById('sum5').innerHTML = ' <input type="number" id="summ5" name="sum5" value="'+suma5+'">';
	document.getElementById('rabats').innerHTML = ' <input type="number" id="rab_sum" name="rabats" value="'+rabat_proc*100+'">';
	document.getElementById('costs').innerHTML = ' <input type="number" id="summ_end" name="costs" value="'+suma_rabat+'">';

</script>
</body>
<?php
	include('../php/sprawdzanie_sesji.php');
?>
</html>