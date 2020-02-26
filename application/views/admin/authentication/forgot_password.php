<!-- Password recovery -->
<form  id="recovery_form" action="<?php echo admin_url('authentication/forgot_password') ?>" method="POST">
	<div class="panel panel-body login-form">
		<div class="text-center">
			<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
			<h5 class="content-group">Forgot Password<small class="display-block">Please enter your email address below. <br/>We will send you instructions in email to reset your password.</small></h5>
		</div>

		<?php $this->load->view('admin/includes/alerts');?>

		<div class="form-group">
			<div class="form-control-feedback">
				<i class="icon-mail5 text-muted"></i>
			</div>
			<input type="email" class="form-control" placeholder="Email" name="email" id="email" autocomplete="off">

		</div>
		<div class="form-group">
		<button type="submit" class="btn bg-blue btn-block" name="submit">Confirm<i class="icon-arrow-right14 position-right"></i></button>
		</div>

		<a href="<?php echo admin_url('authentication') ?>">Login</a>

	</div>
</form>
<script type="text/javascript">
$(function () {
	$("#recovery_form").validate({
	    rules: {
	        email: {
                required: true,
                email: true
	        }
	    },
    	messages: {
	        email: {
				required:"Please enter email",
				email:"Please enter valid email"
	        }
	    }
	});
});
</script>
