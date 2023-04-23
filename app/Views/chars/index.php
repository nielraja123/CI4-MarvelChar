<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Character List</h1>



            <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>   
    <?= $i = 1; ?>
    <?php foreach ($chars as $char) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?= $char['photo']; ?>" alt="" class="photo"></td>
      <td><?= $char['name']; ?></td>
      <td>
        <a href="/chars/<?= $char['slug']; ?>" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



        </div>
    </div>
</div>

<?= $this->endSection(); ?>
