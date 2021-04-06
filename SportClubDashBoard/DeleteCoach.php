<?php
include('Homepageconstants.php');
$coachid = $_GET['id'];

$sql = "DELETE FROM coach WHERE coach_id='$coachid'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result == TRUE) {
    $_SESSION['delete'] = "Event Deleted Successfully";
    header('location:http://localhost/sportsclub/sportclubdashboard/Coaches.php');
    exit(0);
} else {
    $_SESSION['delete'] = "Failed to delete Event";
    header('location:http://localhost/sportsclub/sportclubdashboard/Coaches.php');
    exit(0);
}
