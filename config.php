<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    // Step 2: Connect to MySQL database
    $conn = new mysqli('sql306.infinityfree.com', 'if0_39505368', 'Ofr243274', 'if0_39505368_Personal_Portfolio');

    // Step 3: Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 4: Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO queries (Name, Email, Phone, Message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $message);

    if ($stmt->execute()) {
        $_SESSION['message_success'] = "Message delivered successfully. Thanks for reaching out!";
    } else {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
    header("Location: index.php#contact");
    exit();
}
