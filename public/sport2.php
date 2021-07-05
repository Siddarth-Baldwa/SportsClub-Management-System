<?php
// if (empty($_GET)) {
//     $sql = "SELECT * FROM `event`";
// } else {

//     $sql = "SELECT * FROM `event` WHERE event_name LIKE '%" . $_GET['search_event'] . "%'";
// }
?>

<?php
$cityname = 'Pusad';
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

$sql = "SELECT sport_name FROM `sport`order by sport_name";
$result = mysqli_query($conn, $sql);

$all = mysqli_fetch_all($result);
$sports = array();
foreach ($all as $row1) {
    array_push($sports, $row1[0]);
}

mysqli_free_result($result);

mysqli_close($conn);

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
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">SPORTS</h3>
        </div>
        <div class="w3-row-padding">
            <?php foreach ($sports as $sport) { ?>
                <?php $sp_name = $sport;
                $sp_name = strtolower($sp_name);
                ?>
                <div class="w3-col l3 m6 w3-margin-bottom">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding"> <?php echo $sport; ?> </div>
                        <!-- <a href = "testfile.php?sport="> -->
                        <?php echo '<a href = "clubs.php?sport=' . $sport . '">'; ?>
                        <?php echo '<img src="sport_images/' . $sp_name . '.jfif" alt="House" style="width:100% ">'; ?>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>

</body>

</html>