<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sportsclub";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {

    $sql = "SELECT `event_name`, `sport`, `date`  FROM `event`";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($result) {

        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // echo var_dump($row);
                echo $row['sno'] .  ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
                echo "<br>";
            }
        }
    } else {
        // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        echo mysqli_error($conn);
    }
}
