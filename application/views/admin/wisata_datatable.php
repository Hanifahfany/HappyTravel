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

            
            <tbody>   
			<?php foreach ($wisata_object as $key => $data): ?>
			<tr>
                   
					<td><?php echo $data->id ?></td>
					<td><?php echo $data->namapaket ?></td>
                    <td><?php echo $data->rutewisata ?></td>
                    <td><?php echo $data->fasilitas ?></td>
                    <td><?php echo $data->harga ?></td>

             <td><a href="<?=site_url()?>/wisata/Update/<?php echo $data->id ?>"<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-warning" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td></a>
             <td><a href="<?=site_url()?>/wisata/delete/<?php echo $data->id ?>"<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td></a>
            </tr>

			<?php endforeach ?>  
		</tbody>
		

	</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();

    } );
</script>

</div>
</div>
