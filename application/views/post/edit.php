<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title>Edit Post</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Codeigniter 3 CRUD (Create-Read-Update-Delete) Application</h2>
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Edit Post</h4>
          <a class="btn btn-warning" href="<?php echo base_url('post'); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div>

        <form method="post" action="<?php echo base_url('post/update/' . $data->id); ?>">

          <div class="form-group">
            <label>name</label>
            <input class="form-control" type="text" name="name" value="<?php echo $data->name; ?>">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" value="<?php echo $data->email; ?>">
          </div>
          <div class="form-group">
            <label>password</label>
            <input class="form-control" type="passsword" name="password" value="<?php echo $data->password; ?>">
          </div>
          <div class="form-group">
            <label>age</label>
            <input class="form-control" type="number" name="age" value="<?php echo $data->age; ?>">
          </div>



          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Update </button>
          </div>

        </form>


      </div>
    </div>
  </div>



  <?php $this->load->view('includes/footer'); ?>

</body>

</html>