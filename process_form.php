<?php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$customerName = mysqli_real_escape_string($conn, $_POST['customerName']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$carModel = mysqli_real_escape_string($conn, $_POST['carModel']);
$accessories = implode(", ", $_POST['accessories']); // Convert array to string
$carVariant = mysqli_real_escape_string($conn, $_POST['carVariant']);

// Insert data into the database
$sql = "INSERT INTO accessory_requests (customer_name, phone_number, email, address, car_model, accessories, car_variant)
        VALUES ('$customerName', '$phoneNumber', '$email', '$address', '$carModel', '$accessories', '$carVariant')";

if ($conn->query($sql) === TRUE) {
    // Database operation successful
    // Send email notification
    $to = "company_email@example.com";
    $subject = "New Car Accessory Installation Request";
    $message = "Customer Name: $customerName\nPhone Number: $phoneNumber\nEmail: $email\nAddress: $address\nCar Model: $carModel\nAccessories: $accessories\nCar Variant: $carVariant";
    mail($to, $subject, $message);

    // Redirect to a thank you page
    header("Location: thank_you.html");
} else {
    // Database operation failed
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
