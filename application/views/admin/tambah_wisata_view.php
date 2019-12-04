<?php $this->load->view('tampilan/header'); ?>

<style type="text/css">
body {
    background-color:  #D2B48C
}</style>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo form_open_multipart('wisata/create') ;?>
	<legend>Tambah Data Paket Wisata</legend>

	<div class="form-group">
		
		<label for="">Namapaket</label>
		<input type="text" name="namapaket" class="form-control" id="namapaket" required="" placeholder="isikan nama paket">
		<label for="">Rutewisata</label>
		<input type="text" name="rutewisata" class="form-control" id="rutewisata" required="" placeholder="isikan rute wisata">
		<label for="">Fasilitas</label>
		<input type="text" name="fasilitas" class="form-control" id="fasilitas" required="" placeholder="isikan fasilitas">
		<label for="">Harga</label>
		<input type="text" name="harga" class="form-control" id="harga" required="" placeholder="isikan harga">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button> 
	<?php echo form_close(); ?>
</div>

<?php $this->load->view('tampilan/footer'); ?>