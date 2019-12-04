<?php $this->load->view('tampilan/header'); ?>

<style type="text/css">
body {
    background-color:  #D2B48C
}</style>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">Daftar Paket Wisata</div>
<div class="panel-body">

<div class="form-group">
<a href="<?=site_url()?>/wisata/Create">
<button type="submit" class="btn btn-success">Tambah Data</button></a>
<br>
</div>

<table id="example" class="table table-striped table-bordered"  style="width:100%">
<thead>


            <tr>
            	<th>ID</th>
                <th>Nama Paket Wisata</th>
                <th>Rute Wisata</th>
                <th>Fasilitas</th>
                <th>Harga</th>
                <th>Sunting</th>
                <th>Hapus</th>
            </tr>
            </thead>

		

	</table>
</div>
</div>
<?php $this->load->view('tampilan/footerwisata'); ?>
