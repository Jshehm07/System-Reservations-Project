<?php
$host = "localhost";  
$username = "root";   
$password = "";       
$database = "splashpoint_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$contact_num = mysqli_real_escape_string($conn, $_POST['contact_num']);
$number_of_people = (int) $_POST['num_participants'];
$guest_type = $_POST['guest_type'];
$date = $_POST['date_time'];
$time = $_POST['time'];

$valid_guest_types = ["Students", "Adults", "Children"];
$guest = in_array($guest_type, $valid_guest_types) ? $guest_type : "Unknown";

if ($number_of_people > 10) {
    die("Error: Maximum of 10 people allowed.");
}

$price_per_person = 100;
$total_price = $number_of_people * $price_per_person;
if ($guest === "Students") {
    $total_price *= 0.9; 
}

$sql = "INSERT INTO reservations (full_name, contact_num, number_of_people, guest, date, time, price) 
        VALUES ('$full_name', '$contact_num', '$number_of_people', '$guest', '$date', '$time', '$total_price')";

session_start();
if ($conn->query($sql) === TRUE) {
    $_SESSION['reservation_id'] = $conn->insert_id;
    header("Location: ./page3.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
