<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>

    <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Gambar</th>
        <th scope="col">Device Name</th>
        <th scope="col">Merk</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($devices as $index=>$device): ?>
      <tr>
        <th scope="row"><?= $index+1; ?></th>
        <td><img src="<?= base_url('img/'.$device['gambar']) ?>" alt="" width="100"></td>
        <td><?= $device["name"] ?></td>
        <td><?= $device["brand"] ?></td>
        <td><?= $device["quantity"] ?></td>
        <td><?= $device["status"] ?></td>
        <td><a href="<?= '/details?id='.$device['id']?>" class="btn btn-success">Details</a></td>
      </tr>
      <?php endforeach; ?>


    </tbody>
  </table>

<?= $this->endSection(); ?>