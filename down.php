<?php
	include('conf.php');
	if (isset($_GET['down'])) 
	{
			$path=$_GET['down'];

			$res = mysqli_query("SELECT * FROM digital WHERE file='$path'");
			
			header('Content-Type: application/octet-stream');
			header('Content-Desposition: attachment; filname="'.basename($path).'"');
			header('Content-Length: '.filesize($path));
			readfile($path);

	}

?>