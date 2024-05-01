<?php include PATH . "partials/header.php" ?>

<div class="container">

  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>List of Admin</h2>

    <a href="<?= ROOT ?>/admins/create" class="btn btn-primary">Add New</a>
  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th></th>
    </tr>
    <?php if ($admins != null) { ?>
      <?php foreach ($admins as $item) { ?>
        <tr>
          <td><?= $item->firstname ?></td>
          <td><?= $item->lastname ?></td>
          <td><?= $item->email ?></td>
          <td>
            <a href="<?= ROOT ?>/admins/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/admins/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td colspan="3">
          <h3>No record found.</h3>
        </td>
      </tr>
    <?php } ?>
  </table>

</div>

<?php include PATH . "partials/footer.php" ?>