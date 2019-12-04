<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="FaberNainggolan">
		<title>CodeIgneter dengan Bootstrap</title>

		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

		<link href="<?=base_url();?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

		<link href="<?=base_url();?>assets/css/bootstrap-datepicker.min.css" rel="stylesheet" media="screen">

		</head>

	<style type="text/css">
	body {
    background-color:  #D2B48C
	}</style>

	<body>
	<div class="alert alert-succes" role="alert">
	<strong> Data berhasil diupdate</strong>
	<?php
		echo anchor('transportasi/datatransportasi', 'Lihat data paket transportasi');
		?>
	</div>

	<script src="<?=base_url()?>assets/js/jquery.js"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		
	</body>
	</html>
