<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container" style="margin-top: 50px;">
    <h3 style="text-align: center; color: #ffffffaf;">Edit Kelas</h3>
    <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="nama_kelas" style="color: white;">Name:</label>
            <input type="text" value="<?= $kelas['nama_kelas'] ?>" id="nama_kelas" name="nama_kelas" class="form-control">
        </div>
        <div style="text-align: right;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
