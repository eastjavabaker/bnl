<?php
$this->load->view('auth/view_header');
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'class'	=> 'input',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Username';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'class'	=> 'input',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<div id="atas"><div class="content"><img src="<?php echo base_url();?>assets/images/integrity_logo.png" class="logo" /></div></div>
<div id="login-page">
	<table>
		<tr><td><?php echo form_label($login_label, $login['id']); ?></td></tr>
		<tr>
			<td><?php echo form_input($login); ?></td>
			<div style="color: red;position: absolute;left: 43px;top: 84px;font-size: 12px;width: 294px;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></div>
		</tr>
		<tr><td><?php echo form_label('Password', $password['id']); ?></td></tr>
		<tr>
			<td><?php echo form_password($password); ?></td>
			<div style="color: red;position: absolute;left: 43px;top: 160px;font-size: 12px;width: 294px;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></div>
		</tr>
	
		<?php if ($show_captcha) {
			if ($use_recaptcha) { ?>
		<tr>
			<td colspan="2">
				<div id="recaptcha_image"></div>
			</td>
			<td>
				<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
				<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
				<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="recaptcha_only_if_image">Enter the words above</div>
				<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
			</td>
			<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
			<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
			<?php echo $recaptcha_html; ?>
		</tr>
		<?php } else { ?>
		<tr>
			<td colspan="3">
				<p>Enter the code exactly as it appears:</p>
				<?php echo $captcha_html; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
			<td><?php echo form_input($captcha); ?></td>
			<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
		</tr>
		<?php }
		} ?>
	
		<tr>
			<td>
				<?php echo form_checkbox($remember); ?>
				<?php echo form_label('Remember me', $remember['id']); ?>
				&nbsp;&nbsp;<?php // echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
				
			</td>
			
		</tr>
	</table>
	<input type="image" src="<?php echo base_url('assets/images/signin.png');?>" style="position: absolute;bottom: 13px;right: 26px;" />
<?php echo form_close(); ?>
</div>






