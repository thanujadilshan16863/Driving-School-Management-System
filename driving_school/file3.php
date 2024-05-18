<?php 
    $name = $_POST['name'];
    $email=$_POST['email'];
    $con=$_POST['con'];
    $msg=$_POST['message'];

    // Create MySQL connection
$conn = new mysqli('localhost', 'root', '', 'driving school');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO new_customer(NName,Email,Contact,NMessage) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $con, $msg);
    $stmt->execute();
    echo "Registration Successful.....";
    $stmt->close();
    $conn->close();
}
?>