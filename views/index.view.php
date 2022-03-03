<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/navbar.php'; ?>
 
<div class="container mt-3">
  <div class="row">
      <div class="col-6 offset-3">
      <h4>Login and check validation</h4>
          <form action="index.php" method="POST">
              <!-- make validation here -->
            <input type="email" name="email" placeholder="email" class="form-control"  value="<?php if(isset($email)) echo $email; ?>"><br>
         <?php  if(isset($email_error)):?>
            <p class="alert-danger"><?php echo $email_error; ?></p>
         <?php  endif;?>

            <input type="password" name="password" placeholder="password" class="form-control" value="<?php if(isset($pasword)) echo $password; ?>"><br>
            <?php  if(isset($password_error)): ?>
               <p class="alert-secondary"><?php echo $password_error; ?></p>
               <?php endif; ?>
            <button class="btn btn-secondary form-control">Login</button>
          </form>
      </div>
  </div>
</div>

<?php require 'views/partials/bottom.php'; ?>
    
