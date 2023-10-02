<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
   <div class="container">
        <!-- <div class="card"> -->
        <h3 style="text-align:center;">Create Profile</h3>
            <form action="<?= base_url('/user/store') ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group">
    <label for="nama">Name:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama">
      
    </div>
    <div class="invalid-feedback">
        <?= $validation->getError('nama'); ?>
    </div>
</div>


<div class="form-group">
    <label for="npm">NPM:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '' ; ?>" id="npm" name="npm" placeholder="ex. 2117051061">
    </div>
    <div class="invalid-feedback">
        <?= $validation->getError('npm'); ?>
    </div>
</div>


                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="kelas" id="kelas">
                        <?php foreach ($kelas as $item) : ?>
                            <option value="<?= $item['id'] ?>">
                                <?= $item['nama_kelas'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                        </div>
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    <!-- </div> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
<?= $this->endSection() ?>