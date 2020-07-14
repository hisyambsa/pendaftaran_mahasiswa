<div class="container">
  <div class="text-center row justify-content-center">
    <div class="col-md-6">
      <div class="py-5 my-2">

        <?php echo form_open("auth/login", 'class="form-signin"'); ?>
        <img class="mb-4" src="https://hisyambsa.github.io/logo.png" alt="logo" width="72" height="72">
        <h1><?php echo lang('login_heading'); ?></h1>
        <p><?php echo lang('login_subheading'); ?></p>
        <label for="username" class="sr-only">USERNAME</label>
        <!-- <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Masukan Username" required autofocus> -->
        <?php echo form_input($identity, '', 'class="form-control mb-2" placeholder="Masukan Username" required autofocus'); ?>
        <label for="password" class="sr-only">PASSWORD</label>
        <!-- <input name="password" type="password" id="password" class="form-control" placeholder="Masukan Password" required> -->
        <?php echo form_input($password, '', 'class="form-control mb-2" placeholder="Masukan Password" required'); ?>
        <!-- <?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="form-check-input"'); ?> -->
        <!-- <?php echo lang('login_remember_label', 'remember', 'class="form-check-label mb-2"'); ?> -->
        <!-- <button class="btn btn-lg btn-success btn-block" type="submit">LOGIN</button> -->
        <p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-lg btn-success btn-block"'); ?></p>

        <?php echo form_close(); ?>
        <!-- <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p> -->
        <!-- <p class="mt-3 text-muted">&copy; 2011 - <?php echo date('Y') ?> </p> -->
      </div>
    </div>
  </div>