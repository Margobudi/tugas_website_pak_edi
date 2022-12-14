
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/') . $register['image']; ?>" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?php echo $register['nama']; ?></h5>
            <p class="card-text"><?php echo $register['email']; ?></p>
            <p class="card-text"><small class="text-muted">Waktu Registerasi Akun anda <?= date('d F Y', $register['data_created']); ?></small></p>
        </div>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->