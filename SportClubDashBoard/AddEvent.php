<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center bg-black bg-opacity-30" id="modal-id">
    <div class="relative w-full my-6 mx-auto max-w-3xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white bg-opacity-90 outline-none focus:outline-none">
            <!--body-->
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form name="RegForm" action="Events.php" onsubmit="return GEEKFORGEEKS()" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white bg-opacity-0 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="event_name" class="block text-sm font-medium text-gray-700">Event Name</label>
                                        <input type="text" name="event_name" id="event_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Sport</label>
                                        <input type="text" name="sport" id="sport" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="event_name" class="block text-sm font-medium text-gray-700">Date</label>
                                        <input type="text" name="datepicker" id="datepicker" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Court Number</label>
                                        <input type="text" name="courtno" id="courtno" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="event_name" class="block text-sm font-medium text-gray-700">Start Time</label>
                                        <input type="text" name="start_time" id="start_time" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">End Time</label>
                                        <input type="text" name="end_time" id="end_time" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="event_name" class="block text-sm font-medium text-gray-700">Participating Teams</label>
                                        <input type="text" name="participating_teams" id="participating_teams" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>


                                    <div class="col-span-6 sm:col-span-3 ">
                                        <label for="city" class="block text-sm font-medium text-gray-700">Results</label>
                                        <input type="text" name="results" id="results" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="state" class="block text-sm font-medium text-gray-700">Max Capacity</label>
                                        <input type="text" name="max_capacity" id="max_capacity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-4 py-3 rounded-lg bg-gray-50 text-right sm:px-6">
                            <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                CLOSE
                            </button>

                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="submit">
                                SAVE
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

<script type="text/javascript">
    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
</script>

<?php
if (isset($_POST['submit'])) {
    $eventname = $_POST['event_name'];
    $date = date('Y-m-d', strtotime($_POST['datepicker']));
    $results = $_POST['results'];
    $participating_teams = $_POST['participating_teams'];
    $court_no = $_POST['courtno'];
    $sport = $_POST['sport'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $max_capacity = $_POST['max_capacity'];


    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sportsclub";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database) or  die(mysqli_error($conn));

    $sql = "INSERT INTO `event` (`date`, `event_name`, `results`, `participating_teams`, `court_no`, `sport`, `max_capacity`, `start_time`, `end_time`, `timestamp`, `club_id`) VALUES ('$date', '$eventname', '$results', '$participating_teams', '$court_no', '$sport', '$max_capacity', '$start_time', '$end_time', current_timestamp(),'10001')";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($result == TRUE) {
        $_SESSION['save'] = "Event Added Successfully";
        echo "Added";
        header('location:http://localhost/sportsclub/sportclubdashboard/Events.php');
        exit(0);
    } else {
        echo "Failed to Insert Event";
    }
}


?>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>

<script>
    function GEEKFORGEEKS() {
        var name =
            document.forms["RegForm"]["event_name"];
        var date =
            document.forms["RegForm"]["datepicker"];
        var capacity =
            document.forms["RegForm"]["max_capacity"];
        var sport =
            document.forms["RegForm"]["sport"];
        var start_time =
            document.forms["RegForm"]["start_time"];
        var end_time =
            document.forms["RegForm"]["end_time"];

        if (name.value == "") {
            window.alert("Please enter Event name.");
            name.focus();
            return false;
        }

        if (date.value == "") {
            window.alert("Please enter your date.");
            date.focus();
            return false;
        }

        if (sport.value == "") {
            window.alert(
                "Please enter sport.");
            sport.focus();
            return false;
        }

        if (start_time.value == "") {
            window.alert("Please enter start time.");
            start_time.focus();
            return false;
        }

        if (end_time.selectedIndex < 1) {
            window.alert("Please enter end time.");
            end_time.focus();
            return false;
        }

        if (capacity.value == "") {
            window.alert(
                "Please enter Maximum Capacity.");
            max_capacity.focus();
            return false;
        }

        return true;
    }
</script>