<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./css/style.css');?>">
    <title>Document</title>
</head>
<body>
<center>
<table>
    <center><img src = "
    <?php
        echo base_url('./image/pentol.png');
    ?>">
    
</center>

            <tr>
                <!-- <td>Nama</td>
                <td>:</td> -->
                <td>Nama : <?=$nama ?></td>
            </tr>
            <tr>
                <!-- <td>Kelas</td>
                <td>:</td> -->
                <td>Kelas : <?=$kelas ?></td>
            </tr>        
            <tr>
                <!-- <td>NPM</td>
                <td>:</td> -->
                <td>Npm : <?=$npm ?></td>
            </tr>
        </table>
</center>
</body>
</html>