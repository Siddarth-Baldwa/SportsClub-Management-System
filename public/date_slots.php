<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

    <script src="picker.js"></script>
    <script src="picker.date.js"></script>
</head>

<body>
    <!-- component -->
    <div class="md:px-32 py-8 w-full">
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Time Slot</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Available Space</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Player List</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Register</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">Lian</td>
                        <td class="w-1/3 text-left py-3 px-4">Smith</td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="w-1/3 text-left py-3 px-4">Emma</td>
                        <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                    </tr>
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                        <td class="w-1/3 text-left py-3 px-4">Williams</td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                        <td class="w-1/3 text-left py-3 px-4">Brown</td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>