	<?php if($this->session->userdata('admin')) : ?>

		<?php redirect('admin/admin/'); ?>
		<?php  elseif($this->session->userdata('kasir')) : ?>
			<?php redirect('kasir/kasir/'); ?>
			<?php   elseif($this->session->userdata('owner')) : ?>
				<?php redirect('owner/owner/'); ?>
				<?php   else : ?>




<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mt-5 rounded shadow p-5">
				<div class="card-body">
					<?php if( $this->session->flashdata('message') ) : ?>
							<?= $this->session->flashdata('message'); ?>
						<?php endif; ?>
					<h4 class="text-center">Login</h4>

					<form action="<?= base_url(); ?>login/proses_login" method="post">
						<div class="md-form">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" autocomplete="off" value="<?= set_value('username') ?>">
							 <small id="" class="form-text text-danger"><?= form_error('username'); ?></small>
						</div>

						<div class="md-form">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" autocomplete="off" value="<?= set_value('password') ?>">
							 <small id="" class="form-text text-danger"><?= form_error('password'); ?></small>
						</div>

						<div class="text-center">
							<button type="submit" class="btn btn-indigo" name="login">Login</button>
						</div>
					</form>

					
				</div>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>