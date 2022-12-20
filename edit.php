<?php
include_once 'config.php';
$id =  base64_decode($_GET['id_buku'], 1);
$query = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku=$id");
$result = mysqli_fetch_assoc($query);
// var_dump($result);

if (isset($_POST['submit'])) {
    edit($_POST, $id);
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form actionc="" method="post" class="">
                    <div class="form-group">
                        <label for="Judulbuku">Judul Buku</label>
                        <input type="text" name="judulbuku" value="<?= $result['judul_buku'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" value="<?= $result['penerbit'] ?>" class="form-control">
                    </div>
                    <label for="th_terbit">Tahun</label>
                    <input type="text" name="th_terbit" value="<?= $result['th_terbit_buku'] ?>" class="form-control">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea name="sinopsis" id="" cols="" rows="10" class="form-control"><?= $result['sinopsis'] ?></textarea>
                    <button class="mt-4 btn btn-success btn-block" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>