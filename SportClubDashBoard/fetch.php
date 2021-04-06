<!-- <?php include('../config/constants.php') ?>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200" id="table-data">
                        <?php
                        $sql = "SELECT * FROM `event`";
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
</div> -->