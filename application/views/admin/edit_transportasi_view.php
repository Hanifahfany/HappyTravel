<?php $this->load->view('tampilan/header');?>

<style type="text/css">
body {
    background-color:  #D2B48C
}</style>

<div class="container">
	<div class="row">

		<legend> Edit Data Paket Transportasi </legend>

		<?php

	//var_dump($pegawai); ?>
	<?php echo validation_errors(); ?>

	<?php echo form_open_multipart('transportasi/update/'.$this->uri->segment(3)); ?>

	<div class="form-group">
		<label for="tipepaket"> Nama Paket Transportasi :</label>
		<input type="text" name="tipepaket" class="form-control" id="tipepaket" value="<?php echo $pakettransportasi[0]->id?>" placeholder="id">
	</div>

	<div class="form-group">
		<label for="tipemobil">Tipe Mobil</label>
			<img height="150" width="200" src="<?php echo base_url()?>assets/upload/<?php echo $pakettransportasi[0]->tipemobil?>">
			<input type="file" name="tipemobil" class="form-control" id="tipemobil" ><br>
	</div>

	<div class="form-group">
		<label for="durasipinjam">Durasi pinjam :</label>
		<input type="text" name="durasipinjam" class="form-control" id="durasipinjam" value="<?php echo $pakettransportasi[0]->durasipinjam?>" placeholder="id">
	</div>


	<div class="form-group">
		<label for="fasilitas">fasilitas :</label>
			<input type="text" name="fasilitas" class="form-control" id="fasilitas" value="<?php echo $pakettransportasi[0]->fasilitas?>" placeholder="fasilitas">
	</div>

	<div class="form-group">
		<label for="harga">harga :</label>
			<input type="text" name="harga" class="form-control" id="harga" value="<?php echo $pakettransportasi[0]->harga?>" placeholder="harga">
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