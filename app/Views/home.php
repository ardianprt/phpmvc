<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="<?= $GLOBALS['path']; ?>/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2>Daftar User Pendaftar</h2>
         
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No,</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach ($data['user'] as $item)
            {
        ?>
        <tr>
                <td><?= $no; ?></td>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['email']; ?></td>
                <td><?= $item['alamat']; ?></td>
        </tr>
        <?php
            $no++;
            }
        ?>
        </tbody>
    </table>
    </div>
    
    <link rel="stylesheet" href="<?= $GLOBALS['path']; ?>/js/jquery.min.js">
    <link rel="stylesheet" href="<?= $GLOBALS['path']; ?>/js/bootstrap.min.js">
</body>
</html>
