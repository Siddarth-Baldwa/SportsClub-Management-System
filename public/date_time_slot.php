<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="default.time.css">
    <link rel="stylesheet" href="default.date.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script src="picker.js"></script>
    <script src="picker.date.js"></script>
    <script src="picker.time.js"></script>

</head>

<body>
    <div class="container">
        <form method="POST">
            <input type="text" id='datepicker' name="date">
            <input type="text" id='timepicker' name="time">
            <input type="submit" name="submit">
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $date = $_POST['date'];
        $time = $_POST['time'];

        $date = strtotime($date);
        $date = date('Y-m-d', $date);

        $time = date("H:i:s", strtotime($time));

        $club_id = 10001;

        echo var_dump($date);
        echo var_dump($time); 

    }
    ?>

    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
    mysqli_select_db($conn, 'sportsclub');

    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {


        $query = "SELECT COUNT(*),court_no FROM casual_play WHERE club_id =? AND casual_play.date =? AND casual_play.start_time =?  GROUP BY court_no"; //You don't need a ; like you do in SQL
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iss", $club_id,$date,$time);
        $stmt->execute();
        $result = $stmt->get_result();
        
        echo "<table>"; // start a table tag in the HTML

        while ($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
            echo "<tr><td>" . $row['court_no'] . "</td><td>" . $row['COUNT(*)'] . "</td></tr>";  //$row['index'] the index here is a field name
        }

        echo "</table>"; //Close the table in HTML

        mysqli_close($conn); //Make sure to close out the database connection
    }

    ?>
    <script>
        $(function() {
            $('#timepicker').pickatime({
                formatSubmit: 'HH:i',
                interval: 60,
                min: [10, 0],
                max: [20, 0],
                disable: [
                    [12, 0],
                    [13, 0]
                ],

                closeOnSelect: false,
                closeOnClear: false,

            });
        });
    </script>

    <script>
        $(function() {
            $('#datepicker').pickadate();
        });
    </script>

</body>

</html>