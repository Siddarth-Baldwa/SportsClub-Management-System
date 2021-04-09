<?php include('Homepageconstants.php') ?>

<form class="relative px-5 mt-4 bg-gray-100">
    <svg width="20" height="20" fill="currentColor" class="absolute left-8 top-1/2 transform -translate-y-1/2 text-gray-400 px">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
    </svg>
    <input class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10" type="text" aria-label="Search" placeholder="SEARCH" name="search_event" id="search_event" />
</form>
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Event Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Sport
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">EDIT</span>
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">UPDATE</span>
                                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ease-linear transition-all duration-150" id="add-event" onclick="toggleModal('modal-id')">
                                    ADD EVENT
                                </button>
                                <?php if (isset($_SESSION['save'])) {
                                    echo $_SESSION['save'];
                                    unset($_SESSION['save']);
                                }
                                ?>
                                <?php include('AddEvent.php') ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200" id="table-data">
                        <?php

                        if (empty($_GET)) {
                            $sql = "SELECT * FROM `event`";
                        } else {

                            $sql = "SELECT * FROM `event` WHERE event_name LIKE '%" . $_GET['search_event'] . "%'";
                        }

                        $result = mysqli_query($conn, $sql);
                        if ($result == TRUE) {
                            $num = mysqli_num_rows($result);

                            if ($num > 0) {
                                // LOOP TILL END OF DATA 
                                while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap event_name">
                                            <a href="http://localhost/sportsclub/sportclubdashboard/EventInfo.php?id=<?php echo $rows['event_name']; ?>" class="text-indigo-600 hover:text-indigo-900 font-semibold text-center"><?php echo $rows['event_name']; ?></a>
                                        </td>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?php echo $rows['sport']; ?></div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?php echo $rows['date']; ?></div>
                                        </td>

                                        <td class="px-3 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <a href="http://localhost/sportsclub/sportclubdashboard/UpdateEvent2.php?id=<?php echo $rows['event_name']; ?>" class="text-indigo-600 hover:text-indigo-900 text-center">UPDATE</a>
                                        </td>

                                        <td class="px-3 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <a href="http://localhost/sportsclub/sportclubdashboard/DeleteEvent.php?id=<?php echo $rows['event_name']; ?>" class="text-indigo-600 hover:text-indigo-900 text-center">DELETE</a>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function myFunction() {


        var search_key = '<?php echo $_GET['search_event']; ?>';

        $('#table-data').load("Fetch.php", {
            slot: search_key
        })
    }
</script>

<?php include('DropdownJS_Script.php') ?>