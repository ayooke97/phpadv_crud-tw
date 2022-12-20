<!DOCTYPE html>

<?php
include_once 'config.php';

var_dump($_COOKIE);
// var_dump($_SESSION);
if (!isset($_SESSION['email'])) {
    // header('location:login.php');
} else {
    $user = getuser($_SESSION['email']);
}

$data = show("SELECT * FROM buku");


if (isset($_POST['btn_create'])) {
    if (isset($_SESSION['email'])) {
        header("location:create.php");
    } else {
        header("location:login.php");
    }
}
if (isset($_POST['buttonSort'])) {
    $sort = $_POST['sort'];
    // echo $sort;
    $data = show($sort);
    // var_dump($_GET);
    // die;     
}
if (isset($_POST['btn_search'])) {
    $search = $_POST['search'];
    $data = search($search);
    // var_dump($_POST);
    // die;
}

if (isset($_POST['logout'])) {
    logout();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
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
                    <input type="text" id="search" class="search-input" placeholder="Search" required>
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
            <?php if (isset($_SESSION['email'])) : ?>
                <form method="post">
                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-600 font-medium
                rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none
                dark:focus:ring-red-800" name="logout">Logout</button>
                </form>
            <?php else : ?>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium
            rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none
            dark:focus:ring-blue-800" onclick="window.location.href='./login.php'">Login</button>
                <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900" onclick="window.location.href='./register.php'">Register</button>
            <?php endif ?>
        </div>
    </div>

    <div class="ctnr">
        <div class="overflow-x-auto relative shadow-md">
            <form action="" method="post">
                <button type="submit" class="btn-create" name="btn_create">Create</button>
            </form>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="table">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6 text-center">
                            No
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">
                                <a href="#" class="flex items-center csort" data-order="desc" id="judul_buku">Judul Buku
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">

                                <a href="#" class="flex items-center csort" data-order="desc" id="th_terbit_buku">
                                    Tahun Terbit<svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">

                                <a href="#" class="flex items-center csort" data-order="desc" id="penerbit">Penerbit<svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">
                                Sinopsis
                            </div>
                        </th>
                        <?php if (isset($_SESSION['email'])) : ?>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                                <div class="flex items-center justify-center">
                                    Action
                                </div>
                            </th>
                        <?php endif ?>
                    </tr>
                </thead>
                <tbody id="list">
                    <?php $i = 1;
                    if (mysqli_num_rows($data) > 0) :
                        var_dump(mysqli_fetch_assoc($data));
                        foreach ($data as $d) :
                            $e_id_buku = base64_encode($d['id_buku']); ?>

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="text-center"><?= $i ?></th>
                                <th scope="col" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $d['judul_buku'] ?>
                                </th>
                                <td class="py-4 px-6">
                                    <img src="img/<?= $d['cover_buku'] ?>" width="50px" height="50px" alt="<?= $d['cover_buku'] ?>">
                                </td>
                                <td class="py-4 px-6">
                                    <?= $d['th_terbit_buku'] ?>
                                </td>
                                <td class="py-4 px-6">
                                    <?= $d['penerbit'] ?>
                                </td>
                                <td class="py-4 px-6">
                                    <?= $d['sinopsis'] ?>
                                </td>
                                <?php if (isset($_SESSION['email'])) : ?>
                                    <td class="py-4 px-6 text-center">
                                        <a href="<?= "edit.php?id_buku={$e_id_buku}" ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2" id="del" onclick="deleteItem(<?= $d['id_buku'] ?>)">Remove</a>
                                    </td>
                                <?php endif ?>
                            </tr>
                        <?php $i++;
                        endforeach;
                    else : ?>
                        <tr class=>
                            <td colspan="6" class="dark:bg-gray-800 font-semibold text-center text-white p-2">No Data Found!</td>
                        </tr>
                    <?php endif; ?>


                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', ".csort", function(e) {
                e.preventDefault();
                let colname = $(this).attr('id');
                let sort = $(this).data('order');
                $.ajax({
                    url: "getdata.php",
                    method: "POST",
                    data: {
                        colname: colname,
                        order: sort
                    },
                    success: function(data) {
                        $("#table").html(data);
                    }
                });
            });
            $("#search").keyup(function() {
                let search = $("#search").val();
                console.log(search);

                $.ajax({
                    type: "GET",
                    dataType: "html",
                    url: "search.php?search=" + search,
                    success: function(response) {
                        $("#table").html(response);
                    }
                });
            });
            // $("#del").click(function(e) {
            //     e.preventDefault();
            //     let id = $("#id_del").val();
            //     console.log(id);

            // });
            $("#edit").click(function() {
                let search = $("#edit").val();
                console.log(search);
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "edit.php",
                    success: function(response) {
                        $("#b-list").html(response);
                    }
                });
            });

        })

        function deleteItem(id) {
            console.log(id);
            $.ajax({
                type: "POST",
                dataType: "html",
                data: {
                    id: id,
                },
                url: 'remove.php',
                success: function(response) {
                    $("#table").html(response);
                }

            });
        }
    </script>
</body>

</html>