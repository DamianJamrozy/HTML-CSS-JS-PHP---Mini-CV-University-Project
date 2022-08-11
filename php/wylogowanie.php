<?php
	session_start();
	$user = 'root';
	$pass = '';
	$db = 'damjam';

	$database = new mysqli('localhost', $user, $pass, $db) or die("Nie można połączyć z bazą danych. Upewnij się że używasz php w wersji 7.0 lub nowszej.");

		
			
			
			$_SESSION['zalogowany']=false;
			$_SESSION['login'] = '';
			
			session_destroy();
			
			$logout = "<script>alert('Nastąpiło wylogowanie.'); window.location = '../Index.php';</script>";
			echo ($logout);
			

    
    
?>