<?php

include_once 'config.php';

// $query = mysqli_query($conn, "SELECT * FROM buku WHERE penerbit LIKE '%{$data}%' OR sinopsis LIKE '%{$data}%' OR judul_buku LIKE '%{$data}%' OR id_buku LIKE '%{$data}%'");
$search = $_GET['search'];

$data = search($search);

$no = 1;

foreach ($data as $d) : ?>
    <tr>
        <th scope="row">
            <?= $no ?>
        </th>
        <td><?= $d['judul_buku'] ?></td>
        <td><?= $d['th_terbit_buku'] ?></td>
        <td><?= $d['penerbit'] ?></td>
        <td><?= $d['sinopsis'] ?></td>
        <td>
            <form action="" method="post">
                <a class="btn btn-warning" href="edit.php?id_buku=<?= base64_encode($d['id_buku']) ?>">Edit</a>
                <input type="hidden" value="<?= $d['id_buku'] ?>" name="input_id">
                <button type="submit" class="btn btn-danger" name="btn_delete">Delete</button>
            </form>
        </td>
    </tr>

<?php $no++;
endforeach ?>