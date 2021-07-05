<?php
// $club_id = $_GET['club']; 
// $sport = $_GET['sport'];

$sport = 'Basketball';
$reg_id = 100001;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Training</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- component -->
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
    mysqli_select_db($conn, 'sportsclub');

    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }

    $sql = "SELECT associated_with.coach_id,first_name,last_name, sports_club.name , associated_with.start_time FROM `coach`, `associated_with` , `sports_club`   WHERE coach.coach_id = associated_with.coach_id AND associated_with.club_id = sports_club.club_id and associated_sport= ? ORDER BY first_name";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $sport);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);


    ?>

    <div class="md:px-32 py-8 w-full">

        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <caption><?php echo "Coach List"; ?></caption>
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Coach</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Club</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Time Slot</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Register</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <?php
                    foreach ($data as $row) {
                        echo '<tr class="bg-gray-100">';
                        echo '<td class="w-1/3 text-left py-3 px-4">' . $row["first_name"] . ' ' . $row["last_name"] . '</td>';
                        echo '<td class="w-1/3 text-left py-3 px-4">' . $row["name"] . '</td>';
                        echo '<td class="w-1/3 text-left py-3 px-4">' . $row["start_time"] . '</td>';

                        echo '<td class="text-left py-3 px-4">';
                        $insertTrain   = array("coach_id" => $row["coach_id"], "start_time" => $row["start_time"], "player_id" => $reg_id);
                        echo '<a href="http://localhost/sportsclub/public/insertTrain.php?' . http_build_query($insertTrain) . '">';
                        echo '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    Register
                              </button> </a> </td>';

                        echo " </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

</body>

</html>