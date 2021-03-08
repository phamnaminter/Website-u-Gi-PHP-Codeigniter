<?php $this->load->view('admin/admin/head'); ?>
<div class="line"></div>
<fieldset>
<div class="wrapper">
<div class="widget">
					<form action="" id="form" class="form" method="post">
					<div class="title">
						<img src="<?= public_url('admin') ?>/images/icons/dark/add.png" class="titleIcon">
						<h6>Thêm mới quản trị viên</h6>
					</div>

						<div class="formRow">
						<label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
						<div class="formRight">
							<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" value="<?= set_value('name') ?>"></span>
							<span name="name_autocheck" class="autocheck"></span>
							<div name="name_error" class="clear error"><?= form_error('name') ?></div>
						</div>
						<div class="clear"></div>
					</div>


						<div class="formRow">
						<label class="formLeft" for="param_name">Username:<span class="req">*</span></label>
						<div class="formRight">
							<span class="oneTwo"><input name="username" id="param_name" _autocheck="true" type="text" value="<?= set_value('username') ?>"></span>
							<span name="name_autocheck" class="autocheck"></span>
							<div name="name_error" class="clear error"><?= form_error('username') ?></div>
						</div>
						<div class="clear"></div>
					</div>


						<div class="formRow">
						<label class="formLeft" for="param_name">Mật khẩu:<span class="req">*</span></label>
						<div class="formRight">
							<span class="oneTwo"><input name="password" id="param_name" _autocheck="true" type="password"></span>
							<span name="name_autocheck" class="autocheck"></span>
							<div name="name_error" class="clear error"><?= form_error('password') ?></div>
						</div>
						<div class="clear"></div>
					</div>


						<div class="formRow">
						<label class="formLeft" for="param_name">Nhập lại mật khẩu:<span class="req">*</span></label>
						<div class="formRight">
							<span class="oneTwo"><input name="re_password" id="param_name" _autocheck="true" type="password"></span>
							<span name="name_autocheck" class="autocheck"></span>
							<div name="name_error" class="clear error"><?= form_error('re_password') ?></div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="formSubmit">
	           			<input type="submit" value="Thêm mới" class="redB">
	  
	           		</div>
					</form>
</div>
</div>
</fieldset>