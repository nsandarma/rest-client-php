<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body>
    <Table>
        <Thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Instansi</th>
                <th>Hasil Kerja</th>
                <th>Aksi</th>
            </tr>
        </Thead>
        <?php foreach ($value as $nilai) : ?>
            <tbody>
                <tr>
                    <td><?= $nilai['nama'] ?></td>
                    <td><?= $nilai['nim'] ?></td>
                    <td><?= $nilai['hasil_kerja'] ?></td>
                    <td><?= $nilai['instansi'] ?></td>
                    <td><a href="<?= base_url('Data/update/' . $nilai['no']) ?>">update</a></td>
                    <td><a href="<?= base_url('Data/delete/' . $nilai['no']) ?>">hapus</a></td>
                </tr>
            </tbody>
        <?php endforeach; ?>


    </Table>
    <br>
    <a href="<?= base_url('Data/add/') ?>">Tambah Data</a </body>

</html>