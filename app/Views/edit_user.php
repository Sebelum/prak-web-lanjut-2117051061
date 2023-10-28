<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container" style="margin-top: 200px;">
    <br>
        <?php $nama_kelas = session()->getFlashdata('nama_kelas');  ?>

    <h3 style="text-align:center;">Edit Profile</h3>

    <form action="<?= base_url('/user/'.$user['id']) ?>" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field(); ?>

        <div class="form-group">
        <img src="<?= $user['foto'] ?? base_url('/assets/uploads/img/') ?>">
        
            <label for="formFileSm" class="form-label">Foto</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto" >
        </div>

        <div class="form-group">
            <label for="nama">Name:</label>
            <input type="text"  value="<?= $user['nama']?>" id="nama" name="nama" class="form-control ">
         
        </div>

        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text"  value='<?= $user['npm']?>' id="npm" name="npm" class="form-control " >
           
        </div>

        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <select class="form-control" name="kelas" id="kelas">
                <?php foreach ($kelas as $item) : ?>
                    <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                        <?= $item['nama_kelas'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>
