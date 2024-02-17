<?php
	$schoolName = $_POST['SchoolName'];
	$teamName = $_POST['teamName'];
	$category = $_POST['category'];
	$researchStatus = $_POST['researchStatus'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','info_reg');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into expo(Scl_Name, T_Name, Category, Status) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $schoolName, $teamName, $category, $researchStatus);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>