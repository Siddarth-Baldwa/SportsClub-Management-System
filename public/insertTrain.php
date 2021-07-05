<?php
$start_time = $_GET['start_time'];
$reg_id = $_GET['player_id'];
$coach_id = $_GET['coach_id'];

// echo $coach_id. ' '. $reg_id . ' ' . $start_time; 

$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
mysqli_select_db($conn, 'sportsclub');
if ($conn)
    echo "Connected to Database";

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}



$query = "SELECT * FROM  `trains` WHERE start_time = '$start_time' AND reg_id = '$reg_id' ";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_fetch_row($result);

if ($count != NULL) {
    echo '<script>window.alert("You already have a training session during this time slot");</script>';
    echo "<script>window.location.href='http://localhost/sportsclub/';</script>";
} else {

    $query1 =  "INSERT INTO `trains` (`coach_id`, `reg_id`, `start_time`) VALUES ('$coach_id', '$reg_id', '$start_time')";
    $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));

    if ($result == TRUE) {
        header('location:http://localhost/sportsclub/');
        exit(0);
    } else {
        echo "Wrong !";
    }
}

//   $servername = 'localhost';
//   $username = 'root';
//   $password = '';
//   $conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
//   mysqli_select_db($conn, 'sportsclub');
//   if($conn)
//     echo "Connected to Database"; 

//   if (!$conn) {
//       die("Sorry we failed to connect: " . mysqli_connect_error());
//   }
// 
?>

 <?php
    //     $q = "SELECT slot_fee FROM `sportsclub_sport` WHERE club_id = ? AND sport_name = ?";
    //     $stmt = $conn->prepare($q);
    //     $stmt->bind_param("is", $club_id, $sport);
    //     $stmt->execute();
    //     $result = $stmt->get_result();

    //     $fee = mysqli_fetch_row($result);
    //     $fee = $fee[0]; 

    //print_r($_POST); 

    //  if($_POST['user'])
    //        {
    //             echo  $_POST['name'] ; 
    //         echo '<script>window.alert("Hello");</script>';
    //     }



    ?>

