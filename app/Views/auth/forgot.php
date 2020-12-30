<?= $this->extend('auth/template/template_auth'); ?>

<?= $this->section('content-auth'); ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url(); ?>/images/img-01.png" alt="IMG">
				</div>

				<form action="<?= route_to('forgot') ?>" method="post" class="login100-form validate-form">
					<?= csrf_field() ?>
					<span class="login100-form-title">
						<?=lang('Auth.forgotPassword')?>
					</span>
					<?= view('Myth\Auth\Views\_message_block') ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						<div class="invalid-feedback">
                            <?= session('errors.email') ?>
                        </div>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							<?=lang('Auth.sendInstructions')?>
						</button>
					</div>
				<div class="container-login100-form-btn">
						<a href="<?= base_url(); ?>">Back to Login</a>
				</div>
				</form>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>