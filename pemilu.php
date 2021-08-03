<?php
require_once "function/function.php";
session_start();
if(!isset($_SESSION['status'])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pemilu Pub 2021</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Selamat datang, <?php echo $_SESSION['nama'];?></h2>
	
	<form action="suara.php" method="post">
		<input type="radio" name="kandidat" value="1"> Moh Afkarul Haq<br>
		<input type="radio" name="kandidat" value="2"> Habib Jannata<br>		
		<br>
		<button type="submit" name="pilih" value='pilih'>Konfirmasi</button>
	</form>	
</body>
</html>
