<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect ("localhost", "root","");
		mysql_select_db ("tech_forum",$con);
		
		$rows = mysqli_query ($SQL);
		
		mysqli_close ();
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysqli_connect ("localhost", "root","");
		mysqli_select_db ("tech_forum",$con);
		
		$result = mysqli_query ($SQL);
		
		mysqli_close ();
		
		return $result;
	}
?>