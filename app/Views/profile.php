<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
    <center>
    <img src="<?= $user['foto'] ?? base_url('/assets/uploads/img/') ?>">
    
        <table>
            <tr>
                <td>Nama : <?= $user['nama'] ?></td>
            </tr>
            <tr>
                <td>Kelas : <?= $user['nama_kelas'] ?></td>
            </tr>        
            <tr>
                <td>Npm : <?= $user['npm'] ?></td>
            </tr>
        </table>
        
    </center>
</div>
<?= $this->endSection() ?>
