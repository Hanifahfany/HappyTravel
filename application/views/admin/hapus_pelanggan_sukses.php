<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="FaberNainggolan">
	<title>Codeigneten dengan Bootstrap</title>

	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?=base_url()?>assets/css/bootstrap-datetimepicker" rel="stylesheet">

	<link href="<?=base_url()?>assets/css/bootstrap-datepicker" rel="stylesheet">
	
</head>
<style type="text/css">
body {
    background-color:  #D2B48C
}</style>
<body>
<div class="alert alert-succes">
<strong> Data berhasil dihapus</strong>
<?php
	echo anchor('pelanggan/datapelanggan', 'Kembali ke Daftar Pelanggan');
	?>
</div>

<script src="<?=base_url()?>assets/js/query.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

</body>
</html>