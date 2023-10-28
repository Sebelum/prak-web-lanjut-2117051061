<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container">
    <h3 style="text-align: center; color: #ffffffaf;">Create Kelas</h3>
    <form action="<?= base_url('kelas/store') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="form-row">
            <div class="form-group col-md-10 d-flex align-items-center">
                <label for="nama_kelas" class="col-form-label" style="color: white; margin:10px; font-size:25px">Name:</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama_kelas')) ? 'is-invalid' : ''; ?>" 
                value="<?= old('nama_kelas') ?>"
                id="nama_kelas" name="nama_kelas" placeholder="ex. A">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_kelas'); ?>
                </div>
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary btn-block" style="margin-top:15px">Submit</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
