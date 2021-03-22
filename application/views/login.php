<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>../assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-primary">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="<?= base_url('login/login_aksi'); ?>">
          <div class="form-group">
               <input type="text" class="form-control form-control-user" name="username" 
                   placeholder="username">
                   <?= form_error('username', '<small class="text-danger pl-3">', '</small>');  ?>
           </div>
           <div class="form-group">
               <input type="password" class="form-control form-control-user"
                   name="password" placeholder="Password">
                   <?= form_error('password', '<small class="text-danger pl-3">', '</small>');  ?>
           </div>
           <div class="form-group">
               <!-- <div class="custom-control custom-checkbox small">
                   <input type="checkbox" class="custom-control-input" id="customCheck">
                   <label class="custom-control-label" for="customCheck">Remember
                       Me</label>
               </div> -->
           </div>
           <button type="submit" class="btn btn-primary btn-user btn-block" >
               login
           </button>
        </form>
        <div class="text-center">     
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>../assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
