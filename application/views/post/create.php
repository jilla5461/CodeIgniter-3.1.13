<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>Add New Post</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Codeigniter 3 CRUD (Create-Read-Update-Delete) Application</h2>
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Add New Post</h4>
          <a class="btn btn-warning" href="<?php echo base_url('post'); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div>

        <form method="post" action="<?php echo base_url('post/store'); ?>">

          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password">
          </div>

          <div class="form-group">
            <label>Age</label>
            <input class="form-control" type="number" name="age">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
          </div>

        </form>


      </div>
    </div>
  </div>



  <?php $this->load->view('includes/footer'); ?>

</body>

</html>