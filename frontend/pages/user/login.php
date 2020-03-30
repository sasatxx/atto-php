<head>
  <title>Login</title>
</head>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 m-auto jumbotron" style="margin-top: 2rem;">
      <h4 class="text-lighter text-center">Login</h4><br><br>
      <?php
      if(isset($error_msg)){
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '.$error_msg.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ';
      }
      ?>
      <form method="post" action="login">
        <div class="form-group">
          <label for="Email1">Email address</label>
          <input type="email" name="email" class="form-control login-input" id="Email1" aria-describedby="emailHelp" value="<?php if(isset($input_email)){ echo $input_email; } ?>" placeholder="exemple@doositej.rs">
          <small id="emailHelpBlock" class="form-text text-muted text-danger"><?php if(isset($error_email)){ echo $error_email; } ?></small>
        </div>
        <div class="form-group">
          <label for="Password1">Password</label>
          <input type="password" name="password" class="form-control login-input" id="Password1" placeholder="*******">
          <small id="passwordHelpBlock" class="form-text text-muted"><?php if(isset($error_password)){ echo $error_password; } ?></small>
        </div>
        <hr>
        <input type="submit" class="btn btn-dark btn-block" value="Login">
      </form>
    </div>
  </div>
</div>
