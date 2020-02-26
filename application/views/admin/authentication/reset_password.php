<!-- Password recovery -->
<form  id="reset_form" action="<?php echo site_url($this->uri->uri_string()); ?>" method="POST">
	<div class="panel panel-body login-form">
		<div class="text-center">
			<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
			<h5 class="content-group">Reset password</h5>

		</div>

		<?php $this->load->view('admin/includes/alerts');?>

		<div class="form-group has-feedback has-feedback-left">
			<div class="form-control-feedback">
				<i class="icon-lock2 text-muted"></i>
			</div>
			<input type="password" class="form-control" placeholder="New Password" name="password" id="password">

		</div>
		<div class="form-group has-feedback has-feedback-left">
			<div class="form-control-feedback">
				<i class="icon-lock2 text-muted"></i>
			</div>
			<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" id="confirm_password">

			<center><span id="message" align="center"></span></center>

		</div>

		<div class="form-group">
		<button type="submit" class="btn bg-blue btn-block" name="submit">Reset Password<i class="icon-arrow-right14 position-right"></i></button>
		</div>

		<a href="<?php echo admin_url('authentication') ?>">Login</a>
	</div>
</form>

<script type="text/javascript">
$("#reset_form").validate({
	rules: {
		password: {
			required: true,
			minlength: 8
		},
		confirm_password: {
			required: true,
			equalTo: "#password"
		}
	},
	messages:{
		password: {
			required: "Please enter password",
			minlength: "Password's minimum length must be 8"
		},
		confirm_password: {
			required: "Please enter confirm password",
			equalTo: "Confirm password do not match"
		},
	}
});
</script>
