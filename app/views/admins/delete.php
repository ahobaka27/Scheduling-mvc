<?php include PATH . "partials/header.php" ?>

<div class="container">

  <form action="" method="POST" class="mt-5 w-50 mx-auto">
    <h2>Delete admin</h2>

    <div class="mb-2">
      <label for="">First Name</label>
      <input name="firstname" disabled value="<?= $admin->firstname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" disabled value="<?= $admin->lastname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input name="email" disabled value="<?= $admin->email ?>" type="email" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" disabled value="<?= $admin->password ?>" type="password" class="form-control">
    </div>
    <input type="hidden" name="id" value="<?= $admin->id ?>">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>

</div>

<?php include PATH . "partials/footer.php" ?>