<?php
session_start();

	//echo $_SESSION['cx'];
	if($_SESSION['cx']=="��������Ա")
	{
		echo "<script>javascript:location.href='left.php';</script>";
	}
	else
	{
		echo "<script>javascript:location.href='left2.php';</script>";
	}

?>