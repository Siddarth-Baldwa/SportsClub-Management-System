<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./images/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./images/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>Register</title>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="index.php">Sports Club Management</a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">

                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a href="login.php">
                            <button class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                                <i class="fas fa-arrow-alt-circle-down"></i> Login
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-gray-900" style="background-image: url(./images/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;"></div>
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-6/12 px-4 mt-5">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                            <div class="rounded-t mb-0 px-6 py-6">
                                <div class="text-center mb-3">
                                    <h3 class="text-gray-600 text-lg font-bold">
                                        REGISTER
                                    </h3>
                                </div>
                                <hr class="mt-6 border-b-1 border-gray-400" />
                            </div>
                            <!-- component -->

                            <div class="bg-gray-300 shadow-md rounded px-8 pt-2 flex flex-col ">
                                <form name="RegForm" onaction="login.php" onsubmit="return COACHFORM()" method="POST">
                                    <div class="-mx-3 md:flex mb-2 ">
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                                First Name
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" name="first_name">

                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                                                Last Name
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" name="last_name">
                                        </div>
                                    </div>

                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="md:w-full px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                                                Email
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="email" name="email">

                                        </div>
                                        <div class="md:w-full px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                                                Password
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" name="password">
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-2">
                                        <div class="md:w-full px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                                                Phone No.
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="text" name="phone_no">

                                        </div>
                                        <div class="md:w-full px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                                                Street
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="text" name="street">

                                        </div>
                                        <div class="md:w-full px-3">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                                                City
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="text" name="city">
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-2">
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                                Blood Group
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" name="bloodgroup">
                                        </div>
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                                Age
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" name="age">
                                        </div>
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                                Gender
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" name="gender">
                                        </div>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="submit" name="submit" id="btn" style="transition: all 0.15s ease 0s;">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <hr class=" border-b-1 border-gray-400" />
                            <div class="text-center mb-3">
                                <a href="login.php" class="text-gray-600 text-sm font-medium">
                                    Registerd Already ? Login Now !
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
</body>

</html>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>

<?php
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phoneno = $_POST['phone_no'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $fees = $_POST['fees'];
    $bloodgroup = $_POST['bloodgroup'];
    $gender = $_POST['gender'];
    $password1 = $_POST['password'];


    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sportsclub";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database) or  die(mysqli_error($conn));
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO `player` (`first_name`, `last_name`, `street`, `city`, `email`, `phone`, `bloodgroup`, `password`, `gender`,`age`, `date_time`) VALUES ('$first_name', '$last_name', '$street', '$city', '$email', '$phoneno', '$bloodgroup','$password1', '$gender','$age', current_timestamp())";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($result == TRUE) {
        $_SESSION['save'] = "Registered Successfully";
        header('location:http://localhost/sportsclub/login.php');
        exit(0);
    } else {
        echo "Failed to Register";
    }
}


?>

<script>
    function COACHFORM() {
        var name =
            document.forms["RegForm"]["first_name"];
        var age =
            document.forms["RegForm"]["age"];
        var capacity =
            document.forms["RegForm"]["last_name"];
        var city =
            document.forms["RegForm"]["city"];
        var email =
            document.forms["RegForm"]["email"];
        var phone_no =
            document.forms["RegForm"]["phone_no"];
        var blood_group =
            document.forms["RegForm"]["bloodgroup"];
        var gender =
            document.forms["RegForm"]["gender"];
        var password =
            document.forms["RegForm"]["password"];


        if (name.value == "") {
            window.alert("Please enter First Name");
            name.focus();
            return false;
        }

        if (age.value == "") {
            window.alert("Please enter Age");
            age.focus();
            return false;
        }

        if (city.value == "") {
            window.alert(
                "Please enter city.");
            city.focus();
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