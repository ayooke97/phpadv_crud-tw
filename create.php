<?php
include_once 'config.php';
if (isset($_POST['submit'])) {
    create($_POST);
    // header('location:index.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Bootstrap demo</title>
</head>

<body class="bg-slate-900">
    <form action="" method="post" class="flex flex-col w-1/2 ml-6" enctype="multipart/form-data">
        <label for="Judulbuku" class="text-white">Judul Buku</label>
        <input type="text" name="judulbuku">
        <label for="penerbit" class="text-white">Penerbit</label>
        <input type="text" name="penerbit">
        <label for="th_terbit" class="text-white">Tahun</label>
        <input type="text" name="th_terbit">
        <label for="sinopsis" class="text-white">Sinopsis</label>
        <textarea name="sinopsis" id="" cols="" rows="10" class="form-control"></textarea>
        <label for="cover" name="" class="white">Cover</label>
        <input type="file" name="cover" class="text-white">
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium
            rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none
            dark:focus:ring-blue-800" style="margin-top: 1.5rem;" type="submit" name="submit">Submit</button>
    </form>
</body>

</html>