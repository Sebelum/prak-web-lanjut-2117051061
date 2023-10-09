<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container">
    <h3 style="text-align:center;">Create Profile</h3>
    <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="formFileSm" class="form-label">Foto</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
        </div>

        <div class="form-group">
            <label for="nama">Name:</label>
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama">
            <div class="invalid-feedback">
                <?= $validation->getError('nama'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '' ; ?>" id="npm" name="npm" placeholder="ex. 2117051061">
            <div class="invalid-feedback">
                <?= $validation->getError('npm'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <select class="form-control" name="kelas" id="kelas">
                <?php foreach ($kelas as $item) : ?>
                    <option value="<?= $item['id'] ?>">
                        <?= $item['nama_kelas'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>
