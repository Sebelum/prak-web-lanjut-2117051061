<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/styles.css');?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">">    <title>Create User</title>
</head>
<body>
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
</body>
</html>