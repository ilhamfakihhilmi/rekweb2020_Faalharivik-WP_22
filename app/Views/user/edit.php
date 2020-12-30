<?= $this->extend('layout/template_user'); ?>

<?= $this->section('page-content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

         <div class="row">
        	<div class="col-lg-8">
        		<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group row">
				    	<label for="email" class="col-sm-2 col-form-label">Email</label>
				    	<div class="col-sm-10">
				      	<input type="text" class="form-control" id="email" name="email" value="<?= user()->email; ?>" readonly>
				    	</div>
					</div>
					<div class="form-group row">
				    	<label for="fullname" class="col-sm-2 col-form-label">Full name</label>
				    	<div class="col-sm-10">
				      	<input type="text" class="form-control" id="fullname" name="fullname" value="<?= user()->fullname; ?>">
				    	</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-2">Picture</div>
						<div class="col-sm-10">
							<div class="row">
								<div class="col-sm-3">
									<img src="<?= base_url('/img/' . user()->user_image) ?>" class="img-thumbnail">
								</div>
								<div class="col-sm-9">
									<div class="custom-file">
									  <input type="file" class="custom-file-input" id="user_image" name="user_image">
									  <label class="custom-file-label" for="user_image">Choose file</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group row justify-content-end">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Edit</button>
						</div>
					</div>
	    		</form>
        	</div>
        </div>

    </div>
<?= $this->endSection(); ?>