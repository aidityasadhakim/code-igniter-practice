<?= $this->extend("template/template"); ?>
<?= $this->section('content'); ?>
<div class="card" style="width: 18rem;">
  <img src="/img/<?= $devices['gambar']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $devices['name']; ?></h5>
    <p class="card-text"><?= $devices['brand']; ?></p>
    <p class="btn btn-primary"><?= $devices['quantity'] ?></p>
  </div>
</div>
<?= $this->endSection(); ?>