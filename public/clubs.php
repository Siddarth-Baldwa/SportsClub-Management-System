<?php
$cityname = 'HYDERABAD';
$sportname = $_GET['sport'];
//connect to database
// $conn = mysqli_connect('localhost', 'root', '', 'sportsclub');

// // check connection
// if(!$conn){
//     echo 'Connection error: ' . mysqli_connect_error();
// }

$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
mysqli_select_db($conn, 'sportsclub');

if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
}

$query = "SELECT sports_club.club_id, sports_club.name, sports_club.street_no FROM sports_club, sportsclub_sport WHERE sports_club.city = ? AND sportsclub_sport.sport_name = ? AND sports_club.club_id = sportsclub_sport.club_id";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $cityname, $sportname);
$stmt->execute();
$result = $stmt->get_result();

$sportsclubs = mysqli_fetch_all($result, MYSQLI_ASSOC);



mysqli_free_result($result);

mysqli_close($conn);

//print_r($sportsclubs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sports Club</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>

</body>

</html>

<!DOCTYPE html>
<html>
<title>Sports Club Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="clubs">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Clubs</h3>
    </div>
    <div class="w3-row-padding">
      <?php foreach ($sportsclubs as $sportsclub) { ?>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding"> <?php echo $sportsclub['name']; ?> </div>
            <!-- <a href = "testfile.php?sport="> -->
            <?php echo '<a href = "testfile.php?sport=' . $sportname . '&club=' . $sportsclub['club_id'] . '">' ?>
            <img src="sportsclubpic.png" alt="House" style="width:100%">
            </a>
          </div>
        </div>


      <?php } ?>
    </div>
    <!-- <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Rajpath Club</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    
</div> -->


</body>

</html>