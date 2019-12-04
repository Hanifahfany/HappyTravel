<?php $this->load->view('tampilan/header');?>

<style type="text/css">
body {
    background-color:  #D2B48C
}</style>

<div class="container">
	<div class="row">

		<legend> Edit Data Paket Wisata </legend>

		<?php

	//var_dump($pegawai); ?>
	<?php echo validation_errors(); ?>

	<?php echo form_open_multipart('wisata/update/'.$this->uri->segment(3)); ?>

	<div class="form-group">
		<label for="id"> id :</label>
		<input type="text" name="id" class="form-control" id="id" value="<?php echo $paketwisata[0]->id?>" placeholder="id">
	</div>

	<div class="form-group">
		<label for="namapaket">namapaket :</label>
		<input type="text" name="namapaket" class="form-control" id="namapaket" value="<?php echo $paketwisata[0]->namapaket?>" placeholder="id">
	</div>

	<div class="form-group">
		<label for="rutewisata">rutewisata :</label>
			<input type="text" name="rutewisata" class="form-control" id="rutewisata" value="<?php echo $paketwisata[0]->rutewisata?>" placeholder="rutewisata">
	</div>

	<div class="form-group">
		<label for="fasilitas">fasilitas :</label>
			<input type="text" name="fasilitas" class="form-control" id="fasilitas" value="<?php echo $paketwisata[0]->fasilitas?>" placeholder="fasilitas">
	</div>

	<div class="form-group">
		<label for="harga">harga :</label>
			<input type="text" name="harga" class="form-control" id="harga" value="<?php echo $paketwisata[0]->harga?>" placeholder="harga">
	</div>

	<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
</div>
</div>
</form>
<?php $this->load->view('tampilan/footer');?>