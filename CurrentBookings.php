<?php
session_start();
ob_start();
$login_cred = $_SESSION['t3'];

if (!isset($_SESSION['t3'])) {
    echo "<script>window.location.href='withoutlogin.php';</script>";
    exit;
}
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sportsclub";
//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} ?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>

</head>

<body class="absolute top-0 w-screen h-full bg-gray-900" style="background-image: url(images/123456.jpg); background-size: 100%; background-repeat: no-repeat; overflow-x: hidden;">
    <div>

        <form class="relative px-5 mt-4 bg-gray-100 bg-opacity-0">
            <svg width="20" height="20" fill="currentColor" class="absolute left-8 top-5 transform -translate-y-1/2 text-black px">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
            </svg>
            <input class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-black border border-black  rounded-md py-2 pl-10 mb-6  bg-gray-500 bg-opacity-0" type="text" aria-label="Search" placeholder="SEARCH" name="search_bookings" id="search_bookings" />
        </form>
        <div class="flex flex-col px-5">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100 bg-opacity-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                        Club Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                        Sport
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                        Date
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                        Time
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-100 bg-opacity-20 divide-y divide-gray-200">
                                <?php
                                if (empty($_GET)) {
                                    $sql = "SELECT * FROM `casual_play` INNER JOIN `sports_club` ON casual_play.club_id = sports_club.club_id ORDER BY casual_play.date ,casual_play.start_time";
                                } else {
                                    $sql = "SELECT * FROM `casual_play`  INNER JOIN `sports_club` ON casual_play.club_id = sports_club.club_id WHERE first_name LIKE '%" . $_GET['search_bookings'] . "%' ORDER BY casual_play.date ,casual_play.start_time ";
                                }

                                $sql = "SELECT * FROM `casual_play` INNER JOIN `sports_club` ON casual_play.club_id = sports_club.club_id WHERE casual_play.reg_id = $login_cred ORDER BY casual_play.date ,casual_play.start_time";
                                $result = mysqli_query($conn, $sql);
                                if ($result == TRUE) {
                                    $num = mysqli_num_rows($result);

                                    if ($num > 0) {
                                        // LOOP TILL END OF DATA 
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap event_name">
                                                    <div class="text-m-12 text-black"><?php echo $rows['name']; ?></div>
                                                </td>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-m-12 text-black"><?php echo $rows['sport']; ?></div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-m-12 text-black"><?php echo $rows['date']; ?></div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-m-12 text-black"><?php echo $rows['start_time']; ?></div>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>