<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Step 2: Connect to MySQL database
$conn = new mysqli('localhost', 'root', '', 'personal_portfolio');

// Step 3: Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 4: Prepare and execute SQL statement
$stmt = $conn->prepare("INSERT INTO queries (Name, Email, Phone, Subject, Message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $name, $email, $mobile, $subject , $message);

if ($stmt->execute()) {
    echo "Massage send successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Step 5: Close connections
$stmt->close();
$conn->close();
}
?>