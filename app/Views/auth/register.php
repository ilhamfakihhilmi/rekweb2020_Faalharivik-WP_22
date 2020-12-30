<?= $this->extend('auth/template/template_auth'); ?>

<?= $this->section('content-auth'); ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url(); ?>/images/img-01.png" alt="IMG">
				</div>

				<form action="<?= route_to('register') ?>" method="post" class="login100-form validate-form">
                    <?= csrf_field() ?>
					<span class="login100-form-title">
						<?=lang('Auth.register')?>
					</span>
					<?= view('Myth\Auth\Views\_message_block') ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" type="text" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" type="password" name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							<?=lang('Auth.register')?>
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							<?=lang('Auth.alreadyRegistered')?>
						</span>
						<a class="txt2" href="<?= route_to('login') ?>">
							<?=lang('Auth.signIn')?>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>