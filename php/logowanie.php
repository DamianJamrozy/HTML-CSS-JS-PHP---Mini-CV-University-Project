<?php
	session_start();
	$user = 'root';
	$pass = '';
	$db = 'damjam';

	$database = new mysqli('localhost', $user, $pass, $db) or die("Nie można połączyć z bazą danych. Upewnij się że używasz php w wersji 7.0 lub nowszej.");

    if (isset($_POST['loguj']))
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $ip = $_SERVER['REMOTE_ADDR'];
        
        // sprawdzamy czy login i hasło są dobre
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		$passwdr = "SELECT haslo FROM users WHERE login='$login'";
		$passwd = mysqli_query($database, $passwdr);
		
        if (mysqli_num_rows(mysqli_query($database,"SELECT login, haslo FROM users WHERE login = '".$login."' AND haslo = '".md5($haslo)."';")) > 0)
        {
            // uaktualniamy date logowania oraz ip
            mysqli_query($database,"UPDATE `users` SET (`logowanie` = '".time().", `ip` = '".$ip."'') WHERE login = '".$login."';");
            
            $_SESSION['zalogowany'] = true;
            $_SESSION['login'] = $login;
			
            // zalogowany
			 echo ('<script>sessionStorage.setItem("logout", logout);</script>');
			
			
			echo "<script>alert('Użytkownik pomyślnie został zalogowany.'); window.location = '../Index.php';</script>";
        }
        else echo "<script>alert('Wpisano złe dane.'); window.location = '../sites/login.php';</script>";
    }
	exit();
    
    
?>