<?= $this->extend('auth/template/template_auth'); ?>

<?= $this->section('content-auth'); ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url(); ?>/images/img-01.png" alt="IMG">
				</div>

				<form action="<?= route_to('login') ?>" method="post" class="login100-form validate-form">
					<?= csrf_field() ?>
					<span class="login100-form-title">
						<?=lang('Auth.loginTitle')?>
					</span>
<?= view('Myth\Auth\Views\_message_block') ?>
<?php if ($config->validFields === ['email']): ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" type="email" name="login" placeholder="<?=lang('Auth.email')?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
<?php else: ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" type="text" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
<?php endif; ?>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="<?=lang('Auth.password')?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<div class="invalid-feedback">
							<?= session('errors.password') ?>
						</div>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							<?=lang('Auth.loginAction')?>
						</button>
					</div>
<?php if ($config->activeResetter): ?>
					<div class="text-center p-t-12">
						<a class="txt2" href="<?= route_to('forgot') ?>">
							<?=lang('Auth.forgotYourPassword')?>
						</a>
					</div>
<?php endif; ?>
<?php if ($config->allowRegistration) : ?>
					<div class="text-center p-t-136">
						<a class="txt2" href="<?= route_to('register') ?>">
							<?=lang('Auth.needAnAccount')?>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
<?php endif; ?>
				</form>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>