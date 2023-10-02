<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
    <center>
    <img src="<?= base_url('image/pentol.png'); ?>">
    
        <table>
            <tr>
                <td>Nama : <?= $nama ?></td>
            </tr>
            <tr>
                <td>Kelas : <?= $kelas ?></td>
            </tr>        
            <tr>
                <td>Npm : <?= $npm ?></td>
            </tr>
        </table>
        
    </center>
</div>
<?= $this->endSection() ?>
