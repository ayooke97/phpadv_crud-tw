<?php
include_once 'config.php';
if (isset($_POST['submit'])) {
    create($_POST);
    header('location:index.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="flex justify-center">
        
    </div>
    <form action="" method="post" class="d-flex flex-column w-50 ms-3">
        <label for="Judulbuku">Judul Buku</label>
        <input type="text" name="judulbuku">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit">
        <label for="th_terbit">Tahun</label>
        <input type="text" name="th_terbit">
        <label for="sinopsis">Sinopsis</label>
        <textarea name="sinopsis" id="" cols="" rows="10" class="form-control"></textarea>
        <button class="mt-4" type="submit" name="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>