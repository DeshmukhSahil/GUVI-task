<?php
require 'db_connection.php';
require 'mongodb_connection.php';

session_start();

//echo 'Request method: ' . $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    // Retrieve the username from the session
    $username = $_SESSION['username'];

    // Validate input data
    if (empty($phone) || empty($dob) || empty($age) || empty($address)) {
        echo 'Please fill all fields';
    } else {
        // Update data in MySQL
        $stmt = $conn->prepare('UPDATE users SET phone = ?, dob = ?, age = ?, address = ? WHERE username = ?');
        $stmt->bind_param('ssiss', $phone, $dob, $age, $address, $username);

        // Update data in MongoDB
        $filter = ['username' => $username];
        $update = ['$set' => ['phone' => $phone, 'dob' => $dob, 'age' => $age, 'address' => $address]];
        $updateResult = $mongoCollection->updateOne($filter, $update);

        if ($stmt->execute() && $updateResult->getModifiedCount() > 0) {
            echo 'Update successful';
        } else {
            echo 'Update failed';
        }

        $stmt->close();
        $conn->close();
    }
}
?>
