<?php
	session_start();
	session_destroy();
	header("Location: http://localhost/Zeal-E-Learning/index.php");
?>