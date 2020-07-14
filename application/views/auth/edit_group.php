<div class="container">
      <div class="text-center row justify-content-center">
            <div class="col-md-6">
                  <h1><?php echo lang('edit_group_heading'); ?></h1>
                  <p><?php echo lang('edit_group_subheading'); ?></p>

                  <?php echo form_open(current_url()); ?>

                  <p>
                        <?php echo lang('edit_group_name_label', 'group_name'); ?> <br />
                        <?php echo form_input($group_name, '', 'class="form-control" placeholder="Masukan Nama Grup" required autofocus'); ?>
                  </p>

                  <p>
                        <?php echo lang('edit_group_desc_label', 'description'); ?> <br />
                        <?php echo form_input($group_description, '', 'class="form-control" placeholder="Masukan Deskripsi Grup" required'); ?>
                  </p>

                  <p><?php echo form_submit('submit', lang('edit_group_submit_btn')); ?></p>

                  <?php echo form_close(); ?>
            </div>
      </div>