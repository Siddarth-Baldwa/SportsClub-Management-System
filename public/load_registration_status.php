<?php
          // Declaring all the variables
          $reg_id = 100001;
          $club_id = $_POST['club_id'];
          $date = $_POST['date'];//"2021-04-01";
          $court_no = $_POST['court_number'];
          $sport= $_POST['sport'];
          $time_slot = $_POST['slot']; 

          echo var_dump($date) . var_dump($time_slot);    
          ?>

          <?php
          //Connecting to server

          $servername = 'localhost';
          $username = 'root';
          $password = '';
          $conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
          mysqli_select_db($conn, 'sportsclub');

          if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
          }

          ?>

          <?php

          $status = 0; 

          $q_reg_time = "SELECT slot_fee FROM sportsclub_sport WHERE club_id = ? AND sport_name = ?";

          $stmt_reg = $conn->prepare($q_reg_time);
          $stmt_reg->bind_param("iss", $club_id, $sport);
          $stmt_reg->execute();
          $result_reg = $stmt_reg->get_result();
        
          $res = mysqli_fetch_array($result_reg); 

          if(!$res){
            session_start();
            $status = 3; 
            $_SESSION['save_status'] = $status; 
            echo "Sorry! It seems like you already have an event during this time. Kindly choose another slot"; 
          }
          else {
            session_start();
            $status = 1; 
            $_SESSION['save_status'] = $status; 
              echo "Confirm registeration? "; 
          }
            
          ?>




         
         
