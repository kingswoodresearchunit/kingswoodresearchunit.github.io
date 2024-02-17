<?php
// Assuming you have a MySQL database connection
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "expo";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the POST request
$data = json_decode(file_get_contents("php://input"));

$teamName = $conn->real_escape_string($data->teamName);  // Escape user input to prevent SQL injection
$category = $conn->real_escape_string($data->category);
$researchStatus = $conn->real_escape_string($data->researchStatus);

// Query to check if the code already exists using a prepared statement
$sql = "SELECT COUNT(*) AS count FROM registration WHERE Rcode = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $teamName.$category.$researchStatus);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row['count'];

    // Respond with JSON indicating whether the code is unique
    echo json_encode(['isUnique' => ($count === 0)]);
} else {
    echo json_encode(['isUnique' => false]);
}

$stmt->close();
$conn->close();
?>
