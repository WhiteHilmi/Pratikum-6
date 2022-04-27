<?php
if (empty($_POST['nama'])) {
	header("Location:kosong.php");
	// code...
}else if (empty($_POST['email'])) {
	header("Location:kosong.php");
	// code...
}else {
	echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>