<div class="container">
      <div class="text-center row justify-content-center">
            <div class="col-md-6">
                  <h1><?php echo lang('create_user_heading'); ?></h1>
                  <p><?php echo lang('create_user_subheading'); ?></p>

                  <?php echo form_open("auth/create_user"); ?>

                  <p>
                        <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                        <?php echo form_input($first_name, '', 'class="form-control" placeholder="Masukan Nama Awal" required autofocus'); ?>
                  </p>

                  <p>
                        <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                        <?php echo form_input($last_name, '', 'class="form-control" placeholder="Masukan Nama Akhir" required'); ?>
                  </p>

                  <?php
                  if ($identity_column !== 'email') {
                        echo '<p>';
                        echo lang('create_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity, '', 'class="form-control" placeholder="Masukan Username" required');
                        echo '</p>';
                  }
                  ?>

                  <p>
                        <?php echo lang('create_user_company_label', 'company'); ?> <br />
                        <?php echo form_input($company, '', 'class="form-control" placeholder="Masukan Nama Perusahaan" required'); ?>
                  </p>

                  <p>
                        <?php echo lang('create_user_email_label', 'email'); ?> <br />
                        <?php echo form_input($email, '', 'class="form-control" placeholder="Masukan Alamat Email" required'); ?>
                  </p>

                  <p>
                        <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                        <?php echo form_input($phone, '', 'class="form-control" placeholder="Masukan Nomor Handphone" required'); ?>
                  </p>

                  <p>
                        <?php echo lang('create_user_password_label', 'password'); ?> <br />
                        <?php echo form_input($password, '', 'class="form-control" placeholder="Masukan Password" required'); ?>
                  </p>

                  <p>
                        <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                        <?php echo form_input($password_confirm, '', 'class="form-control" placeholder="Masukan Konfirmasi Password" required'); ?>
                  </p>
                  <?php if ($this->ion_auth->is_admin()) : ?>

                        <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                        <div class="row">
                              <?php foreach ($groups as $group) : ?>
                                    <div class="col">
                                          <div class="custom-control custom-checkbox">
                                                <?php
                                                $gID = $group['id'];
                                                $checked = null;
                                                $item = null;
                                                // foreach ($currentGroups as $grp) {
                                                //       if ($gID == $grp->id) {
                                                //             $checked = ' checked="checked"';
                                                //             break;
                                                //       }
                                                // }
                                                // 
                                                ?>
                                                <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked ?> class="custom-control-input" id="<?php echo 'inputGrup' . $group['id']; ?>">
                                                <label class="custom-control-label" for="<?php echo 'inputGrup' . $group['id']; ?>"><?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?></label>
                                          </div>
                                    </div>
                                    &nbsp &nbsp
                              <?php endforeach ?>
                        </div>
                  <?php endif ?>

                  <p><?php echo form_submit('submit', lang('create_user_submit_btn')); ?></p>

                  <?php echo form_close(); ?>
            </div>
      </div>