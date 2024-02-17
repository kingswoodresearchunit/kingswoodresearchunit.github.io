<?php
// Get form data
$registrationCode = filter_input(INPUT_POST, 'registrationCode', FILTER_SANITIZE_STRING);
$schoolName = filter_input(INPUT_POST, 'schoolName', FILTER_SANITIZE_STRING);
$teamName = filter_input(INPUT_POST, 'teamName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); // Use FILTER_SANITIZE_EMAIL for email
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
$researchStatus = filter_input(INPUT_POST, 'researchStatus', FILTER_SANITIZE_STRING);
$contactNumber = filter_input(INPUT_POST, 'contactNumber', FILTER_SANITIZE_STRING);

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address!";
    exit();
}

// Generate registration code (modify this according to your logic)

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "expo";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

// Check if the registration code already exists
$checkQuery = "SELECT * FROM registration WHERE Rcode = ?";
$stmtCheck = $conn->prepare($checkQuery);
$stmtCheck->bind_param("s", $registrationCode);
$stmtCheck->execute();
$stmtCheck->store_result();
$recordExists = $stmtCheck->num_rows > 0;
$stmtCheck->close();

if ($recordExists) {
    // Record with this registration code already exists
    echo "Record with this registration code already exists!";
} else {
    // Using prepared statements to prevent SQL injection
    $insertQuery = "INSERT INTO registration (Rcode, School_Name, Scl_Name, Email, Category, Research_Status, Phone_Number) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmtInsert = $conn->prepare($insertQuery);

    // Check if the statement was prepared successfully
    if ($stmtInsert) {
        // Bind parameters
        $stmtInsert->bind_param("sssssss", $registrationCode, $schoolName, $teamName, $email, $category, $researchStatus, $contactNumber);

        // Execute the statement
        if ($stmtInsert->execute()) {
            // Redirect to the success page
            header("Location: success.php");
            exit();
        } else {
            echo "Execution Error: " . $stmtInsert->error;  // Output execution error
        }

        // Close the statement
        $stmtInsert->close();
    } else {
        echo "Statement Preparation Error: " . $conn->error;  // Output statement preparation error
    }
}

// Close the connection
$conn->close();
?>
