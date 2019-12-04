<?php $this->load->view('tampilan/headerlogin'); ?>

<style type="text/css">
body {
    background-color:  #D2B48C
}</style>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo form_open_multipart('pelanggan/create') ;?>
	<legend>Pendaftaran pelanggan sesuai paket pilihan</legend>

	<div class="form-group">
		
		<label for="">Nama pendaftar</label>
		<input type="text" name="namapendaftar" class="form-control" id="namapendaftar" placeholder="isikan nama anda" required="">
		<label for="">Nomer hp</label>
		<input type="number" maxlength="12" name="nomerhp" class="form-control" id="nomerhp" placeholder="isikan nomer" required="">
		<label for="">Pilihan paket wisata</label>
		 <select class="form-control" name="pilihanpaket" id="pilihanpaket" required="">
                                            <option value="">PILIH :</option>
                                            <?php foreach ($namapaket as $key) {?>

                                           <option class="form-control" value="<?php echo $key->namapaket?>"><?php echo $key->namapaket?> </option> <?php }?>
                                           </select>
         <label for="">Pilihan Transportasi</label>
		 <select class="form-control" name="tipepaket" id=tipepaket required="">
                                            <option value="">PILIH :</option>
                                            <?php foreach ($tipepaket as $key) {?>

                                           <option class="form-control" value="<?php echo $key->tipepaket?>"><?php echo $key->tipepaket?> </option> <?php }?>
                                           </select>
		<label for="">Tgl pemesanan</label>
		<input type="date" name="tglpemesanan" class="form-control" id="tglpemesanan" placeholder="xx-xx-xxxx" required="">
		<label for="">Jumlah penumpang</label>
		<input type="number" name="jumlahpenumpang" class="form-control" id="jumlahpenumpang" placeholder="isikan jumlah penumpang" required="">
		<label for="">Alamat jemput</label>
		<input type="text" style="height:100px;" name="alamatjemput" class="form-control" id="alamatjemput" placeholder="isikan alamat lengkap" required="">
	</div>
	<button type="submit" class="btn btn-primary" style="width:100px;">PESAN</button> 
	<br>
	<br>
	<?php echo form_close(); ?>
</div>

