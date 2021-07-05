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
    <form class="relative px-5 mt-4 bg-gray-100 bg-opacity-0">
        <svg width="20" height="20" fill="currentColor" class="absolute left-8 top-5 transform -translate-y-1/2 text-gray-400 px">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
        </svg>
        <input class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-white placeholder-white border border-gray-200 rounded-md py-2 pl-10 mb-6 bg-gray-500 bg-opacity-70" type="text" aria-label="Search" placeholder="SEARCH" name="search_event" id="search_event" />
    </form>
    <div class="flex flex-col px-5">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100 bg-opacity-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-white uppercase tracking-wider">
                                    Event Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-white uppercase tracking-wider">
                                    Sport
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-white uppercase tracking-wider">
                                    Date
                                </th>

                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">EDIT</span>
                                </th>


                            </tr>
                        </thead>
                        <tbody class="bg-gray-100 bg-opacity-20 divide-y divide-gray-200" id="table-data">
                            <?php
                            $login_cred1 = $_SESSION['t3'];
                            if (empty($_GET)) {

                                $sql = "SELECT * FROM `event`";
                            } else {

                                $sql = "SELECT * FROM `event` WHERE event_name LIKE '%" . $_GET['search_event'] . "%'";
                            }

                            $result = mysqli_query($conn, $sql);
                            if ($result == TRUE) {
                                $num = mysqli_num_rows($result);

                                if ($num > 0) {
                                    // LOOP TILL END OF DATA 
                                    while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap event_name">
                                                <a href="http://localhost/sportsclub/sportclubdashboard/EventInfo.php?id=<?php echo $rows['event_name']; ?>" class="text-white hover:text-gray-50 font-semibold text-center"><?php echo $rows['event_name']; ?></a>
                                            </td>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-white"><?php echo $rows['sport']; ?></div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-white"><?php echo $rows['date']; ?></div>
                                            </td>

                                            <td class="px-3 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                <?php
                                                $event123 = $rows['event_id'];
                                                $sql = "SELECT * FROM participates where reg_id='$login_cred1' AND event_id = $event123";

                                                $result1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                                $count = mysqli_num_rows($result1);
                                                if ($count != 1) {
                                                ?>

                                                    <a href="http://localhost/sportsclub/registerevent.php?reg_id=<?php echo $login_cred1; ?>&event_id=<?php echo $rows['event_id']; ?>" class="text-white hover:text-gray-400 text-center">REGISTER</a>
                                                <?php
                                                }

                                                ?>
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
<script type="text/javascript">
    function myFunction() {


        var search_key = '<?php echo $_GET['search_event']; ?>';

        $('#table-data').load("Fetch.php", {
            slot: search_key
        })
    }
</script>

<?php include('SportClubDashBoard/DropdownJS_Script.php') ?>