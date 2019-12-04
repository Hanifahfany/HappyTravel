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
                <th>Pilihan Paket</th>
                
                <th>Tanggal Pemesanan</th>
                <th>Jumlah Penumpang</th>
                <th>Alamat jemput</th>
                <th>hapus</th>

            </tr>
            </thead>

            
            <tbody>   
			<?php foreach ($pelanggan_object as $key => $data): ?>
			<tr>
                   
					<td><?php echo $data->id ?></td>
					<td><?php echo $data->namapendaftar ?></td>
                    <td><?php echo $data->nomerhp ?></td>
                    <td><?php echo $data->pilihanpaket ?></td>
                   
                    <td><?php echo $data->tglpemesanan ?></td>
                    <td><?php echo $data->jumlahpenumpang ?></td>
                    <td><?php echo $data->alamatjemput ?></td>


             <td><a href="<?=site_url()?>/pelanggan/delete/<?php echo $data->id ?>"<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td></a>
            </tr>

            

			<?php endforeach ?>  
		</tbody>
		
	</table>
<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();

    } );
</script>

<!-- <div class="form-group">
            <a href="#">
            <button type="submit" class="btn btn-success">Cetak</button></a>
            <br>
            </div> -->
</div>
</div>
