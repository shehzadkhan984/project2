<?php
	session_start();
	session_destroy();
	header("location:../slogin.php?logout=you are sucessfuly logout");


?>