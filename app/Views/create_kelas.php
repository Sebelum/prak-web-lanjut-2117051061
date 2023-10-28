<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container">
    <h3 style="text-align:center;">Create Kelas</h3>
    <form action="<?= base_url('/kelas/store') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>


        <div class="form-group">
            <label for="nama_kelas">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('nama_kelas')) ? 'is-invalid' : ''; ?>" 
                value="<?= old('nama_kelas') ?>"
                id="nama_kelas" name="nama_kelas" placeholder="ex. myshel">
        </div >

            <div class="invalid-feedback">
                <?= $validation->getError('nama_kelas'); ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>
