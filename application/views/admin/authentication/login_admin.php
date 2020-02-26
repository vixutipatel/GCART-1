<!-- Simple login form -->
<form action="<?php echo admin_url('authentication/'); ?>" id="loginform" method="POST">
	<div class="panel panel-body login-form">
		<div class="text-center">
			<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
			</div>
			<h5 class="content-group">Login to your account<small class="display-block">Please Enter your credentials below</small></h5>
		</div>
		<?php $this->load->view('admin/includes/alerts');?>
		<div class="form-group has-feedback has-feedback-left">
			<div class="form-control-feedback"><i class="icon-envelop text-muted"></i>
			</div>
			<input type="email" class="form-control" placeholder="Email" name="email" id="email" >

		</div>
		<div class="form-group has-feedback has-feedback-left">
			<div class="form-control-feedback">
				<i class="icon-lock2 text-muted"></i>
			</div>
			<input type="password" class="form-control" placeholder="Password" name="password" id="password" >
		</div>
		<div class="form-group login-options">
			<div class="row">
				<div class="col-sm-6">
					<label class="checkbox-inline">
						<input type="checkbox" class="styled" name="remember" >
						Remember Me
					</label>
				</div>
				<div class="col-sm-6 text-right">
					<a href="<?php echo admin_url('authentication/forgot_password'); ?>">Forgot Password</a>
				</div>
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn bg-blue btn-block">Login<i class="icon-arrow-right14 position-right"></i></button>
		</div>

	</div>
</form>
<!-- /simple login form -->
<script type="text/javascript">
$(function () {
	$("#loginform").validate
	({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: {
				required: true
			}
		},
		messages: {
			email: {
				required:"Please enter email",
				email:"Please enter valid email"
			},
			password: {
				required:"Please enter password"
			},
		}
	});
});
</script>