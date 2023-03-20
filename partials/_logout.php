<?php
	session_start();
	session_unset();
	session_destroy();
	header('Location: /login-dir/Resume-Builder-main/index.php?logout=true');
?>