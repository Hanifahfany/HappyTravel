<html> 
<head> 
</head> 
<title></title> 
<body> 


 <script src="<?php echo base_url()?>assets/js/jquery.js"></script> 
 <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>        
 <script src="<?php echo base_url()?>assets/DataTables/datatables.min.js"></script> 
 <script type="text/javascript"> 
    $(document).ready(function(){ 
       $('#example').DataTable({ 
        "processing":true, 
        "serverSide":true, 
        "lengthMenu":[[3,5,-1],[3,5,"All"]], 
        "ajax":{ 
            url : "<?php echo site_url('transportasi/data_server')?>", 
            type : "POST" 
        }, 
        "columnDefs": 
        [ 
            { 
                "targets":0, 
                "data":"id", 
            },
            {

                "targets":1, 
                "data":"tipepaket", 
            },  
            { 
                "targets":2, 
                "data":"tipemobil",
                 "render":function(data,type,full,meta){ 
                    return '<img src="<?=base_url()?>assets/upload/'+data+'">'; 
                } 
            }, 
            { 
                "targets":3, 
                "data":"durasipinjam", 
            }, 
            { 
                "targets":4, 
                "data":"fasilitas", 
            }, 
            { 
                "targets":5, 
                "data":"harga", 
                
            }, 
            { 
                "targets":6, 
                 "data":null, 
                "searchable":false, 
                "render":function(data,type,full,meta){ 
                    return '<a href="<?=site_url()?>/transportasi/Update/'+data["id"]+'"><button type="button" class="btn btn-primary" style="width:80px; height:50px;"><font color="white"><i class="ti-pencil"></i> Edit</font></button></a>';
                }
            }, 
            { 
                "targets":7, 
                 "data":null, 
                "searchable":false, 
                "render":function(data,type,full,meta){ 
                    return '<a href="<?=site_url()?>/transportasi/delete/'+data["id"]+'"><button type="button" class="btn btn-danger" style="width:80px; height:50px;"><font color="white"><i class="fa fa-trash-o"></i> Hapus</font></button></a>';
                }
            }, 
           
        ] 
       }); 
    }); 
</script> 

 
 <footer class="footer"> 
        © Hanifah Fany
    </footer> 
</body> 

</html>