<?php
error_reporting(1);



	function ExecuteQuery ($SQL)
	{	
		//$con=mysqli_connect ("localhost", "root","");
		//mysqli_select_db ("discussion_forum",$con);

$conn = new mysqli("localhost", "root", "", "discussion_forum");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		
		//$rows = mysqli_query ($SQL);
$result = $conn->query($SQL);
		
		//mysqli_close ();
$conn->close();
		
		//return $rows;
return $result;
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