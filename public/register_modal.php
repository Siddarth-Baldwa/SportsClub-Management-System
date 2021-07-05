<?php
//  $reg_id = 100005; 
//  $club_id = 10000;
//  $sport = "Chess";
//  $date = '2021-04-02'; 
//  $time = '19:00:00'; 
?>

<?php
  // $servername = 'localhost';
  // $username = 'root';
  // $password = '';
  // $conn = mysqli_connect($servername, $username, $password); //The Blank string is the password
  // mysqli_select_db($conn, 'sportsclub');
  // if($conn)
  //   echo "Connected to Database"; 

  // if (!$conn) {
  //     die("Sorry we failed to connect: " . mysqli_connect_error());
  // }
?>

<?php 
    $q = "SELECT slot_fee FROM `sportsclub_sport` WHERE club_id = ? AND sport_name = ?";
    $stmt = $conn->prepare($q);
    $stmt->bind_param("is", $club_id, $sport);
    $stmt->execute();
    $result = $stmt->get_result();
        
    $fee = mysqli_fetch_row($result);
    $fee = $fee[0]; 
    
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

</head>
<body> -->
<!-- <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleSmallModal('register-modal','16:00:00', '1','0')">
  Open small modal
</button> -->
<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="register-modal">
  <div class="relative w-auto my-6 mx-auto max-w-sm">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          Modal Title
        </h3>
        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleSmallModal('register-modal','16:00:00', '1','0')">
          <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
            ×
          </span>
        </button>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto" id = 'register_modal_body'>
        <p>Confirm registration?Rs <?php echo $fee; ?> will be deducted from your wallet</p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleSmallModal('register-modal','16:00:00', '1','0')">
          Close
        </button>
       
            <?php $insertData  = array("time"=>"19:00:00", "date"=>"2021-04-10", "court"=>"2","club_id"=>"10001","person_id"=>"100000","sport"=>"Basketball");?>
            <!-- <a href="http://localhost/Project/tailwind/public/insertCP.php?time='16:00:00'&court=1&date='2021-04-03'">  -->
            <?php echo '<a href="http://localhost/Project/tailwind/public/insertCP.php?'. http_build_query($insertData).'">'; ?>
             <button class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleSmallModal('register-modal','16:00:00', '1','1')">
                Save Changes
             </button></a>
            
   

      
  
      </div>
    </div>
  </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="register-modal-backdrop"></div>
<script type="text/javascript">
  function toggleSmallModal(modalID,time,court,confirm){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");

    var date_var = <?php echo json_encode($date); ?>;
    var club = <?php echo json_encode($club_id); ?>;
    var sport = <?php echo json_encode($sport); ?>;
  
  }
</script>
<!-- </body>
</html> -->