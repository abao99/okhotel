<?php
	header("Access-Control-Allow-Origin:*");

	require_once("dbtools.php");
	$link = connection();

	$sql = "select * from hoteldata ";
	$result = execute_sql($link,"hotel",$sql);
	$total_records = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
/*
	for($i=1;$i<=$total_records;$i++){
		$row = mysqli_fetch_assoc($result);
		echo json_encode(array("book_id" => $row["book_id"],"image_name" => $row['image_name'],"description" => $row['description']));
	}
*/
	
	do{
		$rowarray[] = $row;
	}
	while ( $row = mysqli_fetch_assoc($result));{
		echo json_encode($rowarray);
	}
	
	
?>