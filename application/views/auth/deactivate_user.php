<div class="container">
  <div class="text-center row justify-content-center">
    <div class="col-md-6">
      <h1><?php echo lang('deactivate_heading'); ?></h1>
      <p><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></p>

      <?php echo form_open("auth/deactivate/" . $user->id); ?>

      <div class="custom-control custom-radio">
        <p>
          <input type="radio" class="custom-control-input" id="confirmYes" name="confirm" value="yes" checked="checked" />
          <?php echo lang('deactivate_confirm_y_label', 'confirmYes', 'class="custom-control-label"'); ?>
        </p>
      </div>
      <div class="custom-control custom-radio">
        <p>
          <input type="radio" class="custom-control-input" id="confirmNo" name="confirm" value="no" />
          <?php echo lang('deactivate_confirm_n_label', 'confirmNo', 'class="custom-control-label"'); ?>
        </p>
      </div>
      <?php echo form_hidden($csrf); ?>
      <?php echo form_hidden(['id' => $user->id]); ?>

      <p><?php echo form_submit('submit', lang('deactivate_submit_btn')); ?></p>

      <?php echo form_close(); ?>
    </div>
  </div>