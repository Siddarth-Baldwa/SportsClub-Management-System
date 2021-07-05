<?php
// Declaring all the variables
$club_id = $_POST['club_id'];
$date = $_POST['date']; //"2021-04-01";
$court_no = $_POST['court_number'];
$sport = $_POST['sport'];
$time_slot = $_POST['slot'];

?>

<?php
//Connecting to server

$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
mysqli_select_db($conn, 'sportsclub');

if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
}

?>

<?php

$query_mod = "SELECT first_name, last_name, age, gender, skill_level from player_sport inner JOIN player ON player_sport.reg_id = player.reg_id WHERE player_sport.reg_id IN (SELECT casual_play.reg_id FROM casual_play WHERE court_no = ?  AND date = ? AND club_id = ? AND sport = ? AND start_time = ?)";

$stmt_mod = $conn->prepare($query_mod);
$stmt_mod->bind_param("issss", $court_no, $date, $club_id, $sport, $time_slot);
$stmt_mod->execute();
$result_mod = $stmt_mod->get_result();

?>

<?php



while ($row_mod = mysqli_fetch_array($result_mod)) {
  echo '<div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg m-2 w-full h-15 object-contain relative">
    <div id="header" class="flex object-contain "> 
    
        <div id="body" class="flex flex-col ml-5">
          <h4 id="name" class="text-xl font-semibold mb-2">' . $row_mod['first_name'] . " " . $row_mod['last_name'] .  '</h4>
          <p id="age" class="text-gray-800 mt-2 "> Age: ' . $row_mod['age'] . '</p>
          <p id="gender" class="text-gray-800 mt-2 "> Gender: ' . $row_mod['gender'] . '</p>
          <p id="skill_level" class="text-gray-800 mt-2"> Skill Level: ' . $row_mod['skill_level'] . '</p>
        </div>
    </div>
  </div>';
}
?>

