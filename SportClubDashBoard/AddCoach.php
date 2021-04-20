<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center bg-black bg-opacity-30" id="modal-id">
    <div class="relative w-full my-6 mx-auto max-w-3xl">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white bg-opacity-90 outline-none focus:outline-none">

            <!--body-->

            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form name="RegForm" action="Coaches.php" onsubmit="return COACHFORM()" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white bg-opacity-0 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2 ">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="birth_date" class="block text-sm font-medium text-gray-700"> Birth Date</label>
                                        <input type="text" name="datepicker" id="datepicker" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="sport" class="block text-sm font-medium text-gray-700">Sport</label>
                                        <input type="text" name="associated_sport" id="associated_sport" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email ID</label>
                                        <input type="text" name="email" id="email" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="phone_no" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                        <input type="text" name="phone_no" id="phone_no" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>


                                    <div class="col-span-6 sm:col-span-3 ">
                                        <label for="city" class="block text-sm font-medium text-gray-700">Gender</label>
                                        <input type="text" name="gender" id="gender" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="state" class="block text-sm font-medium text-gray-700">Blood Group</label>
                                        <input type="text" name="blood_group" id="blood_group" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="city" class="block text-sm font-medium text-gray-700">Address</Address></label>
                                        <input type="text" name="street_no" id="street_no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="state" class="block text-sm font-medium text-gray-700">City</label>
                                        <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="state" class="block text-sm font-medium text-gray-700">Fees</label>
                                        <input type="text" name="fees" id="fees" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="state" class="block text-sm font-medium text-gray-700">Password</label>
                                        <input type="text" name="password" id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Description</label>
                                        <input type="text" name="description" id="description" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2">
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
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birthdate = date('Y-m-d', strtotime($_POST['datepicker']));
    $email = $_POST['email'];
    $phoneno = $_POST['phone_no'];
    $street_no = $_POST['street_no'];
    $city = $_POST['city'];
    $associated_sport = $_POST['associated_sport'];
    $fees = $_POST['fees'];
    $bloodgroup = $_POST['bloodgroup'];
    $gender = $_POST['gender'];
    $description = $_POST['description'];
    $password = $_POST['password'];


    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sportsclub";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database) or  die(mysqli_error($conn));
    $sql = "INSERT INTO `coach` (`first_name`, `last_name`, `street_no`, `city`, `email`, `phone_no`, `blood_group`, `fees`, `associated_sport`, `description`, `password`, `gender`,`birtthdate` `timestamp`) VALUES ('$first_name', '$last_name', '$street_no', '$city', '$email', '$phoneno', '$bloodgroup', '$fees', '$associated_sport', '$description', '$password', '$gender','$birthdate', current_timestamp())";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($result == TRUE) {
        $_SESSION['save'] = "Coach Added Successfully";
        echo "Added";
        header('location:http://localhost/sportsclub/sportclubdashboard/Coaches.php');
        exit(0);
    } else {
        echo "Failed to Add Coach";
    }
}


?>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>

<script>
    function COACHFORM() {
        var name =
            document.forms["RegForm"]["first_name"];
        var date =
            document.forms["RegForm"]["datepicker"];
        var capacity =
            document.forms["RegForm"]["last_name"];
        var sport =
            document.forms["RegForm"]["associated_sport"];
        var email =
            document.forms["RegForm"]["email"];
        var phone_no =
            document.forms["RegForm"]["phone_no"];
        var fees =
            document.forms["RegForm"]["fees"];
        var blood_group =
            document.forms["RegForm"]["blood_group"];
        var gender =
            document.forms["RegForm"]["gender"];
        var password =
            document.forms["RegForm"]["password"];


        if (name.value == "") {
            window.alert("Please enter First Name");
            name.focus();
            return false;
        }

        if (date.value == "") {
            window.alert("Please enter Last Name");
            date.focus();
            return false;
        }

        if (sport.value == "") {
            window.alert(
                "Please enter sport.");
            sport.focus();
            return false;
        }

        if (email.value == "") {
            window.alert("Please enter Email.");
            start_time.focus();
            return false;
        }

        if (phone_no.selectedIndex < 1) {
            window.alert("Please enter Phone No.");
            end_time.focus();
            return false;
        }

        if (fees.value == "") {
            window.alert(
                "Please enter training fees.");
            fees.focus();
            return false;
        }

        if (blood_group.value == "") {
            window.alert(
                "Please enter Blood Group.");
            blood_group.focus();
            return false;
        }

        if (gender.value == "") {
            window.alert(
                "Please enter Gender.");
            gender.focus();
            return false;
        }

        if (password.value == "") {
            window.alert(
                "Please enter Password.");
            gender.focus();
            return false;
        }


        return true;
    }
</script>