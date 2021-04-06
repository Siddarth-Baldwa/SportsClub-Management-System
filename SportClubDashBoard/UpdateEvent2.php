<?php
include('Homepageconstants.php');
$eventname = $_GET['id'];


$sql = "SELECT * FROM event WHERE event_name='$eventname'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>


<div class="relative mt-24 w-auto my-6 mx-auto max-w-3xl">
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">

        <div class="mt-10 sm:mt-0">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form name="RegForm" onsubmit="return GEEKFORGEEKS()" method="POST">

                    <?php if ($result == TRUE) {
                        $num = mysqli_num_rows($result);

                        if ($num > 0) {
                            // LOOP TILL END OF DATA 
                            while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-indigo-200 sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="event_name" class="block text-sm font-medium text-gray-700">Event Name</label>
                                                <input type="text" name="event_name" id="update_event_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['event_name']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last_name" class="block text-sm font-medium text-gray-700">Sport</label>
                                                <input type="text" name="sport" id="update_sport" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['sport']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="event_name" class="block text-sm font-medium text-gray-700">Date</label>
                                                <input type="text" name="datepicker" id="datepicker" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['date']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last_name" class="block text-sm font-medium text-gray-700">Court Number</label>
                                                <input type="text" name="courtno" id="update_courtno" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['court_no']; ?>">
                                            </div>

                                            <div class=" col-span-6 sm:col-span-3">
                                                <label for="event_name" class="block text-sm font-medium text-gray-700">Start Time</label>
                                                <input type="text" name="start_time" id="update_start_time" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['start_time']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last_name" class="block text-sm font-medium text-gray-700">End Time</label>
                                                <input type="text" name="end_time" id="update_end_time" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['end_time']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6">
                                                <label for="event_name" class="block text-sm font-medium text-gray-700">Participating Teams</label>
                                                <input type="text" name="participating_teams" id="update_participating_teams" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['participating_teams']; ?>">
                                            </div>


                                            <div class="col-span-6 sm:col-span-3 ">
                                                <label for="city" class="block text-sm font-medium text-gray-700">Results</label>
                                                <input type="text" name="results" id="results" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['results']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="state" class="block text-sm font-medium text-gray-700">Max Capacity</label>
                                                <input type="text" name="max_capacity" id="update_max_capacity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['max_capacity']; ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <a class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="Events.php">
                                        CLOSE
                                    </a>

                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="update">
                                        UPDATE
                                    </button>
                                </div>

                                <div class="hidden col-span-6 sm:col-span-3">
                                    <label for="state" class="block text-sm font-medium text-gray-700">ID</label>
                                    <input type="text" name="id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md" value="<?php echo $rows['event_id']; ?>">
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_POST['update'])) {
    $eventname = $_POST['event_name'];
    $date = date('Y-m-d', strtotime($_POST['datepicker']));
    $results = $_POST['results'];
    $participating_teams = $_POST['participating_teams'];
    $court_no = $_POST['courtno'];
    $sport = $_POST['sport'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $max_capacity = $_POST['max_capacity'];
    $id = $_POST['id'];

    $sql1 = "UPDATE `event` SET `date` = '$date', `event_name` = '$eventname', `results` = '$results', `participating_teams` = '$participating_teams', `court_no` = '$court_no', `sport` = '$sport', `max_capacity` = '$max_capacity', `start_time` = '$start_time', `end_time` = '$end_time' WHERE `event_id`='$id'";

    $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

    if ($result == TRUE) {
        header('location:http://localhost/sportsclub/sportclubdashboard/Events.php');
        exit(0);
    } else {
        echo "Failed to Update Data";
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

<?php include('DropdownJS_Script.php') ?>