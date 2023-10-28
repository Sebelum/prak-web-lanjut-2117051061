<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">">    <title>Create User</title>

<div class="container" style="margin-top: 55px; width: 70%; height: 450px; padding-top: 50px; padding-bottom: 50px;">

    <h1>List Kelas</h1><br>
    <a class="btn btn-primary" href="<?= base_url('/kelas/create') ?>">Add Kelas</a>

    <table class="table table-bordered">
        <thead style="background-color: rgba(122, 219, 143, 0.836)">
            <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kelas as $kel) : ?>
                <tr>
                    <td><?= $kel['id'] ?></td>
                    <td><?= $kel['nama_kelas'] ?></td>

                    <td>
                        <a class="btn btn-warning" href="<?= base_url('kelas/' . $kel['id'] . '/edit') ?>">Edit</a>
                        <form action="<?= base_url('kelas/' . $kel['id']) ?>" method="post" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
</div>
<?= $this->endSection() ?>
