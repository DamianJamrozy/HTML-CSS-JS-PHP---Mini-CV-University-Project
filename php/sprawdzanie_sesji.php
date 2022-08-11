<?php
	
	// Ukrywanie błędu (brak zmiennej login)
	error_reporting(0);
	ini_set('display_errors', 0);
	
	
	//Sprawdzanie czy użytkownik jest zalogowany, jeżeli tak to zmiana przycisku na wyloguj
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		echo('<script> 
			let x = document.getElementById("Login");
			let y = document.getElementById("Logout");
			x.style.display = "none";
			y.style.display = "block";
			</script>');
		//echo('<script>alert("Sesja działa");</script>');
	}
	else{
		echo('<script> 
			let x = document.getElementById("Login");
			let y = document.getElementById("Logout");
			x.style.display = "block";
			y.style.display = "none";
			</script>');
		//echo('<script>alert("Sesja wyłączona");</script>');
	}
	
	
	//Zabezpieczenie admin panelu
	if($_SESSION['login'] == 'admin'){
		echo('<script> 
			let z = document.getElementById("admin_panel");
			z.style.display = "block";
			</script>');
	}
	else{
		echo('<script> 
			let z = document.getElementById("admin_panel");
			z.style.display = "none";
			</script>');
	}
	
	
	
?>