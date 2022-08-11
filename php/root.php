<?php
	echo "<table style='border: solid 1px black;'>";
	echo "<tr><th>Id_usługi</th><th>Aplikacja_mobilna</th><th>Strona_internetowa</th><th>Produkcja_filmowa</th><th>Social_media</th><th>Grafika_komputerowa</th><th>cena</th><th>status</th><th>Imie</th><th>Nazwisko</th><th>Telefon</th><th>E-mail</th></tr>";

	class TableRows extends RecursiveIteratorIterator {
	  function __construct($it) {
		parent::__construct($it, self::LEAVES_ONLY);
	  }

	  function current() {
		return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
	  }

	  function beginChildren() {
		echo "<tr>";
	  }

	  function endChildren() {
		echo "</tr>" . "\n";
	  }
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "damjam";

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $stmt = $conn->prepare("SELECT * FROM uslugi");
	  $stmt->execute();

	  // set the resulting array to associative
	  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
		echo $v;
	  }
	} catch(PDOException $e) {
	  echo "Error: " . $e->getMessage();
	}
	
	echo "</table>";
	
	
	
	
	
	if (isset($_POST['delete']))
    {
		$delete_id = $_POST['delete_id'];
		// sql to delete a record
		  $sql = "DELETE FROM uslugi WHERE id_uslugi='$delete_id'";

		  // use exec() because no results are returned
		  $conn->exec($sql);
		  echo "Record deleted successfully";
		  echo "<script>alert('Zamówienie zostało anulowane.'); window.location = '../sites/admin.php';</script>";
	} 
		
	
	if (isset($_POST['edit']))
    {
		$edit_id = $_POST['edit_id'];
		$status = $_POST['status'];
		$sql = "UPDATE uslugi SET status='$status' WHERE id_uslugi='$edit_id'";

		  // Prepare statement
		  $stmt = $conn->prepare($sql);

		  // execute the query
		  $stmt->execute();

		  // echo a message to say the UPDATE succeeded
		  echo $stmt->rowCount() . " records UPDATED successfully";
		  echo "<script>alert('Status zamówienia został pomyślnie edytowany.'); window.location = '../sites/admin.php';</script>";
	}

		
	$conn = null;
?>