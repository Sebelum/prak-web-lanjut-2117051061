<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container" style="margin-top: 200px;">
    <br>
        <?php $nama_kelas = session()->getFlashdata('nama_kelas');  ?>

    <h3 style="text-align:center;">Edit Kelas</h3>

    <form action="<?= base_url('/kelas/'.$kelas['id']) ?>" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field(); ?>


        <div class="form-group">
            <label for="nama_kelas">Name:</label>
            <input type="text"  value="<?= $kelas['nama_kelas']?>" id="nama_kelas" name="nama_kelas" class="form-control ">
         
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>
