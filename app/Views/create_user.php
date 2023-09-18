<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/styles.css');?>">

    <title>Create User</title>
</head>
<body>
    <div class="card">
    <form action="<?= base_url ('/user/store') ?>" method="POST">
        <label for="nama">Name:</label>
        <input type="text" id="nama" name="nama" placeholder="ex. sari aoka lestari" required><br><br>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" placeholder="ex. 2117051061" required><br><br>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" placeholder="ex. AB" required><br><br>

        <input type="submit" >
    </form>
</div>
</body>
</html>