<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sportsclub";
//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

$regid = $_GET['reg_id'];
$eventid = $_GET['event_id'];

$sql = "INSERT INTO participates values ($regid,$eventid)";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result == TRUE) {
    $_SESSION['delete'] = "Event Deleted Successfully";
    header('location:http://localhost/sportsclub/index.php');
    exit(0);
} else {
    $_SESSION['delete'] = "Failed to delete Event";
    header('location:http://localhost/sportsclub/sportclubdashboard/Events.php');
    exit(0);
}
