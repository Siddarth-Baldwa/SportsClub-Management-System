<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/default.date.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script src="javascript/picker.js"></script>
    <script src="javascript/picker.date.js"></script>
</head>

<body>
    <div class="container">
        <form method="POST">
            <input type="text" id='datepicker' name="date">
            <input type="submit" name="submit">
        </form>
    </div>

    <?php
        $date = date("Y-m-d"); 
        if (isset($_POST['submit'])) {
            $date = $_POST['date'];
            $date = strtotime($date);
            $date = date('Y-m-d', $date);
            $club_id = 10001;
            $sport = "Basketball";
        }
        ?>
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
        
        $q_court = "SELECT available_courts FROM `sportsclub_sport` WHERE club_id = ? AND sport_name = ?";
        $stmt_court = $conn->prepare($q_court);
        $stmt_court->bind_param("is", $club_id, $sport);
        $stmt_court->execute();
        $r_court = $stmt_court->get_result();
        
        $row0 = mysqli_fetch_array($r_court); 
        $courts = $row0['available_courts']; 

        $query1 = "SELECT * FROM `sport` WHERE sport_name = ?";
        $stmt1 = $conn->prepare($query1);
        $stmt1->bind_param("s", $sport);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        $sport_info = mysqli_fetch_assoc($result1);
        $max_capacity = $sport_info['Max_Capacity'];

        $query = "SELECT court_no,start_time, COUNT(*) FROM `casual_play` WHERE date = ? AND club_id = ? AND sport = ? GROUP BY court_no,start_time ORDER BY court_no,start_time";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sis",$date, $club_id, $sport);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
       // echo var_dump($data[0]); 



    ?>

    <div class="md:px-32 py-8 w-full">
    <?php 
        $row_c = 0; 
        for($c=1; $c<= $courts; $c++) { 
            // if ($c != $data[$row_c]['court_no']) {
            //     continue; 
            // }?>
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
            <caption><?php echo "Court-" .$c; ?></caption>
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Time Slot</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Available Space</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Player List</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Register</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">

                    <?php
                    $time_list = array("10:00:00", "11:00:00", "12:00:00", "13:00:00", "14:00:00", "15:00:00", "16:00:00", "17:00:00", "18:00:00", "19:00:00", "20:00:00");


                    
                    $j = 0;
                    $flag1 = 0;
                    $flag2 = 0;

                    foreach($time_list as $time) {
                        if ($row_c < count($data)) {
                            $row = $data[$row_c];
                        }
                        else {
                            $row = array("court_no"=>"100", "start_time"=>"21:00:00", "COUNT(*)"=>"43");
                        }

                        // if ($row['court_no'] != $c) {
                        //     break; 
                        // }
                       
                        if($row['court_no'] == $c && $row['start_time'] == $time)
                        {
                            $flag2 = 1; 
                            $row_c++; 
                        }
                        else
                            $flag2 = 0; 

                        if ($j % 2 == 1) {
                            echo '<tr class="bg-gray-100">';
                        } else {
                            echo  '<tr>';
                        }
                        $j++;

                        echo '<td class="w-1/3 text-left py-3 px-4">' . $time . '</td>';
                        $capacity = $max_capacity - ($flag2) * $row['COUNT(*)'];
                        echo '<td class="w-1/3 text-left py-3 px-4">' . $capacity . '</td>';


                        if ($capacity == 0) {
                            echo '<td class="text-left py-3 px-4">';
                            echo '<button class="bg-blue-500 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed ">
                           Click Here
                    </button> </td>';
                            echo '<td class="text-left py-3 px-4">';
                            echo '<button class="bg-blue-500 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed">
                           Register
                    </button> </td>';
                        } else {
                            echo '<td class="text-left py-3 px-4">';
                            echo '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="toggleModal('."'player-list','".$time."',".$c.')"  >'.'
                          Click Here
                  </button> </td>';

                            echo '<td class="text-left py-3 px-4">';
                            echo '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                          Register
                  </button> </td>';
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <?php } ?>
    </div>

    <?php require 'casual_play_modal.php'; ?>


    <script>
        $(function() {
            $('#datepicker').pickadate();
        });
    </script>

</body>

</html>