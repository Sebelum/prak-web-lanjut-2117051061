<!-- <?= $this->extend('layouts/app'); ?> -->

<?= $this->section('content') ?>
<div class="container">
    <h3 style="text-align:center; color:#ffffffaf">Create Profile</h3>
    <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="formFileSm" class="form-label" style=" color:white">Foto</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
        </div>

        <div class="form-group">
            <label for="nama" style=" color:white">Name:</label>
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="ex. myshel">
            <div class="invalid-feedback">
                <?= $validation->getError('nama'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="npm" style=" color:white">NPM:</label>
            <input type="text" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '' ; ?>" id="npm" name="npm" placeholder="ex. 2117051061">
            <div class="invalid-feedback">
                <?= $validation->getError('npm'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="kelas" style=" color:white">Kelas:</label>
            <select class="form-control" name="kelas" id="kelas">
                <?php foreach ($kelas as $item) : ?>
                    <option value="<?= $item['id'] ?>">
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
