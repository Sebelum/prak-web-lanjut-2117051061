<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container" style="margin-top: 50px;">
    <h3 style="text-align: center; color: #ffffffaf;">Edit Profile</h3>

    <form action="<?= base_url('/user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>

        <div class="form-group">
            <img src="<?= $user['foto'] ?? base_url('/assets/uploads/img/') ?>">
            <label for="formFileSm" class="form-label" style="color: white;">Foto</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
        </div>

        <div class="form-group">
            <label for="nama" style="color: white;">Name:</label>
            <input type="text" value="<?= $user['nama'] ?>" id="nama" name="nama" class="form-control">
        </div>

        <div class="form-group">
            <label for="npm" style="color: white;">NPM:</label>
            <input type="text" value="<?= $user['npm'] ?>" id="npm" name="npm" class="form-control">
        </div>

        <div class="form-group">
            <label for="kelas" style="color: white;">Kelas:</label>
            <select class="form-control" name="kelas" id="kelas">
                <?php foreach ($kelas as $item) : ?>
                    <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                        <?= $item['nama_kelas'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div style="text-align: right;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
