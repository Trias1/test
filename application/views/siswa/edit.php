<div class="container">
		<div class="card">
			<div class="card-header">Edit Siswa</div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>siswa/update">
				<input type="hidden" name="kd_siswa" id="kd_siswa" value="<?php echo $siswa->kd_siswa; ?>"/>
				<div class="form-group">
					<label for="nama">Nim</label>
					<input type="text" value="<?php echo $siswa->nim; ?>" class="form-control" readonly id="nim" name="nim">
				</div>

				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $siswa->nama; ?>" class="form-control" id="nama" name="nama">
				</div>

				<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option value="laki-laki" <?php echo ($siswa->jenis_kelamin ? 'laki-laki' : 'selected' ); ?> >Laki-laki</option>
						<option value="perempuan" <?php echo ($siswa->jenis_kelamin ? 'perempuan' : 'selected' ); ?>>Perempuan</option>
					</select>
				</div>

				<div class="form-group">
					<label for="no_telp">No Telp</label>
					<input type="number" class="form-control" value="<?php echo $siswa->no_telp; ?>" id="no_telp" name="no_telp">
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat"><?php echo $siswa->alamat; ?></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>