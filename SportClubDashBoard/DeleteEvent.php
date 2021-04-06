<?php
include('Homepageconstants.php');
$eventname = $_GET['id'];

$sql = "DELETE FROM event WHERE event_name='$eventname'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result == TRUE) {
    $_SESSION['delete'] = "Event Deleted Successfully";
    header('location:http://localhost/sportsclub/sportclubdashboard/Events.php');
    exit(0);
} else {
    $_SESSION['delete'] = "Failed to delete Event";
    header('location:http://localhost/sportsclub/sportclubdashboard/Events.php');
    exit(0);
}
