<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>

<div class="container" style="margin-top: 55px; width: 70%; height: 450px; padding-top: 50px; padding-bottom: 50px;">

    <h1 style="color:#ffffffaf">List User</h1><br>
    <a class="btn btn-primary" href="<?= base_url('/user/create') ?>">+ user</a>

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
        <tbody >
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td style="color: white;"><?= $user['id'] ?></td>
                    <td style="color: white;"><?= $user['nama'] ?></td>
                    <td style="color: white;"><?= $user['npm'] ?></td>
                    <td style="color: white;"><?= $user['nama_kelas'] ?></td>
                    <td>
                        <a class="btn btn-success" href="<?= base_url('user/' . $user['id']) ?>"><i class="bi bi-eye"></i></a>
                        <a class="btn btn-warning" href="<?= base_url('user/' . $user['id'] . '/edit') ?>"><i class="bi bi-pen"></i></a>
                        <form action="<?= base_url('user/' . $user['id']) ?>" method="post" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
</div>
<?= $this->endSection() ?>
