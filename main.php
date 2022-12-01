<?= <<<'EOT'
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="w-full h-16 bg-neutral-900 text-white flex items-center justify-between px-4">
        <div>Bakti PM</div>
        <div class="w-3/4">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="search-input" placeholder="Search" required>
                </div>
                <button type="submit" class="btn-search">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

        </div>

        <div class="flex gap-2 items-center">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium
            rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none
            dark:focus:ring-blue-800" onclick="window.location.href='./login.html'">Login</button>
            <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900" onclick="window.location.href='./register.html'">Register</button>
        </div>
    </div>
    <div class="w-full h-16 bg-neutral-900 text-white flex items-center justify-between px-4">
        <div>Bakti PM</div>
        <div class="w-3/4">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="search-input" placeholder="Search" required>
                </div>
                <button type="submit" class="btn-search">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

        </div>

        <div class="flex gap-2 items-center">
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-600 font-medium
                rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none
                dark:focus:ring-red-800">Logout</button>
        </div>
    </div>
    <button type="button" class="btn-create">Create</button>
    <div class="overflow-x-auto relative shadow-md">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Judul Buku
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Tahun Terbit
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                    <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Penerbit
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                    <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Sinopsis
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                    <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Edit</span>
                        <div class="flex items-center justify-center">
                            Action
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="py-4 px-6">
                        Sliver
                    </td>
                    <td class="py-4 px-6">
                        Laptop
                    </td>
                    <td class="py-4 px-6">
                        $2999
                    </td>
                    <td class="py-4 px-6 text-center">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2">Remove</a>

                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="py-4 px-6">
                        White
                    </td>
                    <td class="py-4 px-6">
                        Laptop PC
                    </td>
                    <td class="py-4 px-6">
                        $1999
                    </td>
                    <td class="py-4 px-6 text-center">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2">Remove</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="py-4 px-6">
                        Black
                    </td>
                    <td class="py-4 px-6">
                        Accessories
                    </td>
                    <td class="py-4 px-6">
                        $99
                    </td>
                    <td class="py-4 px-6 text-center">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2">Remove</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
EOT;

?>