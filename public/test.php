<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
  <div class="relative w-auto my-6 mx-auto max-w-3xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          Modal Title
        </h3>
        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
          <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
            ×
          </span>
        </button>
      </div>
      <!--body-->
      <div class="relative p-6 flex-col overflow-y-auto  h-96">
      <?php


         
         while ($row_mod = mysqli_fetch_array($result_mod)) {
           echo '<div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg m-2 h-15 object-contain relative">
     <div id="header" class="flex object-contain "> 
     <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
        <div id="body" class="flex flex-col ml-5">
           <h4 id="name" class="text-xl font-semibold mb-2">' . $row_mod['first_name'] . " " . $row_mod['last_name'] .  '</h4>
           <p id="age" class="text-gray-800 mt-2 "> Age: ' . $row_mod['age'] . '</p>
           <p id="gender" class="text-gray-800 mt-2 "> Gender: ' . $row_mod['gender'] . '</p>
           <p id="skill_level" class="text-gray-800 mt-2"> Skill Level: ' . $row_mod['skill_level'] . '</p>
        </div>
     </div>
  </div>';
         }
         ?>



      <?php
          $i = 0;
          for ($i = 0; $i < 2; $i++) {
            echo '<div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg m-2 h-15 object-contain">
      <div id="header" class="flex object-contain"> 
      <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
         <div id="body" class="flex flex-col ml-5">
            <h4 id="name" class="text-xl font-semibold mb-2">Siddarth Baldwa</h4>
            <p id="job" class="text-gray-800 mt-2"> Age: 21</p>
         </div>
      </div>
   </div>';
          }
          ?>
          <!-- End of component -->

          <!-- Start of component -->
          <div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg m-2 h-15 object-contain">
            <div id="header" class="flex object-contain">
              <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
              <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2">Siddarth Baldwa</h4>
                <p id="job" class="text-gray-800 mt-2"> Age: 21</p>
              </div>
            </div>
          </div>
          <!-- End of component -->

          <!-- Start of component -->
          <div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg m-2">
            <div id="header" class="flex">
              <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
              <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
                <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="flex mt-5">
                  <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                  <p class="ml-3">John Doe</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End of component -->
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
          Close
        </button>
        <button class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
          Save Changes
        </button>
      </div>
    </div>
  </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
<script type="text/javascript">
  function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
</script>
