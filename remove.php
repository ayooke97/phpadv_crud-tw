<?php

include_once 'config.php';

remove($_POST['id']);

$data = show();

$no = 1;

if (mysqli_num_rows($data) > 0) :
    foreach ($data as $d) : ?>
        <tr>
            <th scope="row">
                <?= $no ?>
            </th>
            <td><?= $d['judul_buku'] ?></td>
            <td><?= $d['penerbit'] ?></td>
            <td><?= $d['th_terbit_buku'] ?></td>
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
    endforeach;
else : ?>
    <tr>
        <td colspan="6" class="text-center">No Data Found!</td>
    </tr>
    <?php endif ?>;