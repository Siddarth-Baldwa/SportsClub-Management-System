<?php

session_start();

unset($_SESSION['t3']);

header('Location: http://localhost/sportsclub/index.php');
exit();
