<?php
	
	$user = 'root';
	$pass = '';
	$db = 'damjam';

	$database = new mysqli('localhost', $user, $pass, $db) or die("Nie można połączyć z bazą danych. Upewnij się że używasz php w wersji 7.0 lub nowszej.");

    
    if (isset($_POST['zamow']))
    {
        $email = $_POST['email'];
        $name = $_POST['firname'];
        $surname = $_POST['surname'];
        $tel = $_POST['tel'];
        $sum1 = $_POST['sum1'];
        $sum2 = $_POST['sum2'];
        $sum3 = $_POST['sum3'];
        $sum4 = $_POST['sum4'];
        $sum5 = $_POST['sum5'];
        $rabats = $_POST['rabats'];
        $costs = $_POST['costs'];
        $status = 'Oczekuje na kontakt';
		
		
		$query = "INSERT INTO uslugi (Aplikacja_mobilna, Strona_internetowa, Produkcja_filmowa, Social_media, Grafika_komputerowa, cena, status, Imie, Nazwisko, Tel, E_mail) 
		VALUES ('$sum1','$sum2','$sum3','$sum4','$sum5', '$costs', '$status', '$name', '$surname', '$tel', '$email')";
		

			
			if ($database->query($query) === TRUE) {
				$hide = '<script>var mob = 0;
						var web = 0;
						var desk = 0;
						var vid = 0;
						var soc = 0;
						var gra = 0;
						sessionStorage.setItem("mob", mob);
						sessionStorage.setItem("web", web);
						sessionStorage.setItem("desk", desk);
						sessionStorage.setItem("vid", vid);
						sessionStorage.setItem("soc", soc);
						sessionStorage.setItem("gra", gra);</script>';
				echo($hide);

			  $test = '<script>alert("Gratulacje, zamówienie zostało przesłane do weryfikkacji.\n\nWkrótce skontaktuje się z Panem/Panią w celu ustalenia szczegółów."); window.location = "../Index.php";</script>';
			  echo($test);
			} else {
			  echo "Error: " . $query . "<br>" . $database->error;
			}
    }
?>