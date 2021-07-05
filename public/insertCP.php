<?php
$club_id = $_GET['club_id'];
$time = $_GET['time'];
$date = $_GET['date'];
$reg_id = $_GET['person_id'];
$sport = $_GET['sport'];
$court = $_GET['court'];

var_dump($reg_id);

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sportsclub";
//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if ($conn)
  echo ('<script>window.alert("Connected");</script>');
if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
}


// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
// mysqli_select_db($conn, 'sportsclub');
// if ($conn)
//   echo "Connected to Database";

// if (!$conn) {
//   die("Sorry we failed to connect: " . mysqli_connect_error());
// }

$query1 =  "INSERT INTO `casual_play` (`reg_id`, `club_id`, `date`, `start_time`, `sport`, `no_of_players`, `court_no`) VALUES ('$reg_id', '$club_id', '$date', '$time' , '$sport','1', '$court')";
$result = mysqli_query($conn, $query1) or die(mysqli_error($conn));

if ($result == TRUE) {
  header('location:http://localhost/sportsclub/public/sports.php');
  exit(0);
} else {
  echo "Wrong !";
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

