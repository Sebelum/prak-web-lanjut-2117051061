<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
    <div class="container" 
    style="margin-top: 55px; 
    width: 70%; 
    height: 450px; 
    padding-top: 50px; 
    padding-bottom: 50px;">
    
    <h1 colspan="5"  >List User</h1><br>

    <table class="table table-bordered">
            <thead style="background-color: rgba(122, 219, 143, 0.836)">      
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($users as $user){
                ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td>
                            <a class="btn btn-success" href="<?= base_url('user/'.$user['id']) ?>">Detail</a>
                            <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection() ?>