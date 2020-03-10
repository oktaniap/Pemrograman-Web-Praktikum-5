<?php
if (empty($_POST['nama']) || empty($_POST['email'])) {
	header("Location:t2x.php");
}
else{ 
	header("Location:t3.php");
}
?>