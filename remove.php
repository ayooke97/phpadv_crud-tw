<?php

include_once 'config.php';

remove($_POST['id']);

$data = show("SELECT * FROM buku");
?>

<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
        <th scope="col" class="py-3 px-6 text-center">
            No
        </th>
        <th scope="col" class="py-3 px-6">
            <div class="flex items-center">
                <a href="#" class="flex items-center csort" data-order="<?= $switch ?>" id="judul_buku">Judul Buku
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                    </svg>
                </a>
            </div>
        </th>
        <th scope="col" class="py-3 px-6">
            <div class="flex items-center">

                <a href="#" class="flex items-center csort" data-order="<?= $switch ?>" id="th_terbit_buku">
                    Tahun Terbit<svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                    </svg></a>
            </div>
        </th>
        <th scope="col" class="py-3 px-6">
            <div class="flex items-center">

                <a href="#" class="flex items-center csort" data-order="<?= $switch ?>" id="penerbit">Penerbit<svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                    </svg></a>
            </div>
        </th>
        <th scope="col" class="py-3 px-6">
            <div class="flex items-center">
                Sinopsis
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
<tbody id="list">
    <?php $i = 1;
    if (mysqli_num_rows($data) > 0) :
        foreach ($data as $d) :
            $e_id_buku = base64_encode($d['id_buku']); ?>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th class="text-center"><?= $i ?></th>
                <th scope="col" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $d['judul_buku'] ?>
                </th>
                <td class="py-4 px-6">
                    <?= $d['th_terbit_buku'] ?>
                </td>
                <td class="py-4 px-6">
                    <?= $d['penerbit'] ?>
                </td>
                <td class="py-4 px-6">
                    <?= $d['sinopsis'] ?>
                </td>
                <td class="py-4 px-6 text-center">
                    <a href="<?= "edit.php?id_buku={$e_id_buku}" ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2" id="del" onclick="deleteItem(<?= $d['id_buku'] ?>)">Remove</a>
                </td>
            </tr>
        <?php $i++;
        endforeach;
    else : ?>
        <th>
        <td colspan="6" class="text-center">No Data Found!</td>
        </th>
    <?php endif; ?>
</tbody>