<?php
	
	$user = 'root';
	$pass = '';
	$db = 'damjam';

	$database = new mysqli('localhost', $user, $pass, $db) or die("Nie można połączyć z bazą danych. Upewnij się że używasz php w wersji 7.0 lub nowszej.");

    
    if (isset($_POST['rejestruj']))
    {
        $login = $_POST['login'];
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];
        $email = $_POST['email'];
        $name = $_POST['firname'];
        $surname = $_POST['surname'];
        $tel = $_POST['tel'];
        $ip = $_SERVER['REMOTE_ADDR'];
        
        // sprawdzamy czy login nie jest już w bazie
		$sql_u = "SELECT * FROM users WHERE login='$login'";
		$sql_e = "SELECT * FROM users WHERE email='$email'";
		$res_u = mysqli_query($database, $sql_u);
		$res_e = mysqli_query($database, $sql_e);

		if (mysqli_num_rows($res_u) > 0) {
			$login_error = "<script>alert('Podany login jest już zajęty.'); window.location = '../sites/login.php';</script>";
			echo ($login_error);
			
		}else if(mysqli_num_rows($res_e) > 0){
			$email_error = "<script>alert('Podany email jest już zajęty.'); window.location = '../sites/login.php';</script>";
			echo ($email_error);	
			
		}else{
            if ($haslo1 == $haslo2) // sprawdzamy czy hasła takie same
            {
				$query = "INSERT INTO users (imie, nazwisko, tel, login, haslo, email, rejestracja, logowanie, ip) 
				VALUES ('$name', '$surname', '$tel', '$login', '".md5($haslo1)."','$email', '".time()."', '".time()."', '".$ip."')";
				
				if ($database->query($query) === TRUE) {
				  echo "<script>alert('Gratulacje nowe konto zostało utworzone.'); window.location = '../sites/login.php';</script>";
				  //header('Location: ../sites/login.html');
				} else {
				  echo "Error: " . $query . "<br>" . $database->error;
				}
				
                //echo "Konto zostało utworzone!";
            }
            else echo "Hasła nie są takie same";
        }
    }
?>