<?php
include('Homepageconstants.php');
$cid = $_GET['id'];


$sql = "SELECT * FROM coach WHERE coach_id='$cid'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>

<div class="relative mt-4 w-auto my-6 mx-auto max-w-3xl">
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-gray-400 bg-opacity-30 outline-none focus:outline-none">

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
                                    <div class="px-4 py-5 bg-indigo-200 bg-opacity-0 sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['first_name']; ?>">
                                            </div>

                                            <div class=" col-span-6 sm:col-span-3">
                                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['last_name']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="birth_date" class="block text-sm font-medium text-gray-700"> Birth Date</label>
                                                <input type="text" name="datepicker" id="datepicker" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['birthdate']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="sport" class="block text-sm font-medium text-gray-700">Sport</label>
                                                <input type="text" name="associated_sport" id="associated_sport" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['associated_sport']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="email" class="block text-sm font-medium text-gray-700">Email ID</label>
                                                <input type="text" name="email" id="email" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['email']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone_no" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                                <input type="text" name="phone_no" id="phone_no" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['phone_no']; ?>">
                                            </div>


                                            <div class="col-span-6 sm:col-span-3 ">
                                                <label for="city" class="block text-sm font-medium text-gray-700">Gender</label>
                                                <input type="text" name="gender" id="gender" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['gender']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="state" class="block text-sm font-medium text-gray-700">Blood Group</label>
                                                <input type="text" name="blood_group" id="blood_group" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['blood_group']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="city" class="block text-sm font-medium text-gray-700">Address</Address></label>
                                                <input type="text" name="street_no" id="street_no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['street_no']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="state" class="block text-sm font-medium text-gray-700">City</label>
                                                <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['city']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="state" class="block text-sm font-medium text-gray-700">Fees</label>
                                                <input type="text" name="fees" id="fees" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['fees']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="state" class="block text-sm font-medium text-gray-700">Password</label>
                                                <input type="text" name="password" id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['password']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6">
                                                <label for="first_name" class="block text-sm font-medium text-gray-700">Description</label>
                                                <input type="text" name="description" id="description" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['description']; ?>">
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
                                    <input type="text" name="id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md" value="<?php echo $rows['coach_id']; ?>">
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

    $sql1 = "UPDATE `coach` SET `first_name` = '$first_name', `last_name` = '$last_name', `street_no` = '$street_no', `city` = '$city', `email` = '$email', `phone_no` = '$phoneno', `blood_group` = '$bloodgroup', `fees` = '$fees', `associated_sport` = '$associated_sport', `description` = '$description', `password` = '$password', `gender` = '$gender' , `birthdate` = '$birthdate' WHERE `coach`.`coach_id` = $cid";

    $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

    if ($result == TRUE) {
        header('location:http://localhost/sportsclub/sportclubdashboard/Coaches.php');
        exit(0);
    } else {
        echo "Failed to Update Data";
    }
}
?>

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

<?php include('DropdownJS_Script.php') ?>