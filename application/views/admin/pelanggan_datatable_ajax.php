<?php $this->load->view('tampilan/header'); ?>

<style type="text/css">
body {
    background-color: #D2B48C
}</style>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">Pelanggan Terdaftar</div>
<div class="panel-body">

<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
            <tr>
            	<th>ID</th>
                <th>Nama Pendaftar</th>
                <th>Nomer HP</th>
                <th>Paket Wisata</th>
                <th>Paket Transportasi</th>
                <th>Tanggal Pemesanan</th>
                <th>Jumlah Penumpang</th>
                <th>Alamat jemput</th>
                <th>hapus</th>

            </tr>
            </thead>

	</table>

<!-- <div class="form-group">
            <a href="#">
            <button type="submit" class="btn btn-success">Cetak</button></a>
            <br>
            </div> -->
</div>
</div>
<?php $this->load->view('tampilan/footerpelanggan'); ?>