<?php
session_start();
?>

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
    <title>Login</title>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-black" href="index.php">Sports Club Management</a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">

                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a href="register.php">
                            <button class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" name="register" style="transition: all 0.15s ease 0s;">
                                <i class="fas fa-arrow-alt-circle-down"></i> REGISTER
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-white bg-opacity-90" style="background-image: url(images/123456.jpg); background-size: 100%; background-repeat: no-repeat;"></div>
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white bg-opacity-0 border-0">
                            <div class="rounded-t mb-0 px-6 py-6">
                                <div class="text-center mb-3">
                                    <h3 class="text-gray-600 text-lg font-bold">
                                        LOGIN
                                    </h3>
                                </div>
                                <hr class="mt-6 border-b-1 border-gray-400" />
                            </div>


                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form name="RegForm" onsubmit="return LOGINFORM()" method="POST">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2 mt-5" for="grid-password">Email</label>

                                        <input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Email" id="email" name="email" style="transition: all 0.15s ease 0s; " />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>

                                        <input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Password" id="password" name="password" style="transition: all 0.15s ease 0s;" />
                                    </div>
                                    <div class="text-center mt-6">
                                        <button type="submit" class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" id="btn" name="submit1" style="transition: all 0.15s ease 0s;">
                                            Sign In
                                        </button>
                                    </div>
                                </form>
                                <hr class="mt-6 border-b-1 border-gray-400" />
                                <div class="text-center mb-3">
                                    <a href="register.php" class="text-gray-600 text-sm font-medium">
                                        Not yet registered ? Register Now !
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>

<?php

ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "sportsclub";
//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

if (isset($_POST['submit1'])) {
    // echo ('<script>window.alert("Please enter Password");</script>');

    echo $email = $_POST['email'];
    echo $password2 = $_POST['password'];

    // echo ('<script>window.alert("baba");</script>');
    // echo ('<script>window.alert("$password2");</script>');

    if ($email == 10001 || $email == 10002 || $email == 10004) {
        $sql = "SELECT * FROM sports_club where club_id='$email'";
        $result1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result1);
        if ($count == 1) {
            $rows = mysqli_fetch_assoc($result1);
            $login_id = $rows['club_id'];
            if ($rows['club_id'] == $email && $rows['password'] == $password2) {
                $_SESSION['t3'] = $login_id;
                echo ('<script>window.alert("Logged In");</script>');
                echo "<script>window.location.href='http://localhost/sportsclub/sportclubdashboard/Events.php';</script>";
                exit;
            } else {
                echo ('<script>window.alert("Wrong Password");</script>');
            }
        } else
            echo ('<script>window.alert("Wrong Email");</script>');
    }
    // $sql = "Select * from users where username='$username' AND password='$password'";
    else {
        $sql = "SELECT * FROM player where email='$email'";

        $result1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result1);
        if ($count == 1) {
            $rows = mysqli_fetch_assoc($result1);
            $login_id = $rows['reg_id'];
            if ($rows['email'] == $email && $rows['password'] == $password2) {
                $_SESSION['t3'] = $login_id;
                echo ('<script>window.alert("Logged In");</script>');
                echo "<script>window.location.href='index.php';</script>";
                exit;
            } else {
                echo ('<script>window.alert("Wrong Password");</script>');
            }
        } else
            echo ('<script>window.alert("Wrong Email");</script>');
    }
}
?>

<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }

    function LOGINFORM() {
        var email =
            document.forms["RegForm"]["email"];
        var password =
            document.forms["RegForm"]["password"];

        if (email.value == "") {
            window.alert("Please enter Email");
            email.focus();
            return false;
        }

        if (password.value == "") {
            window.alert("Please enter Password");
            password.focus();
            return false;
        }

        return true;
    }
</script>