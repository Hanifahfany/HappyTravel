<?php $this->load->view('tampilan/headerlogin'); ?>



<!DOCTYPE html>
<html>
<br><center>
<h2>DAFTAR PAKET WISATA</h2> <br></center>

<table id="racetimes">
<tr id="firstrow">
<th>Nama Paket</th>
<th>Tipe Mobil</th>
<th><center>Durasi sewa kendaraan</center></th>
<th><center>Fasilitas</center></th>
<th>Harga</th></tr>


<?php foreach ($tobject as $key => $data): ?>
            <tr>
                   
                   <td><?php echo $data->tipepaket ?></td> 
                    <td><img src="<?php echo base_url()?>assets/upload/<?php echo $data->tipemobil?>" alt="" width=200 height=150></td>
                    <td><?php echo $data->durasipinjam ?></td>
                    <td><?php echo $data->fasilitas ?></td>
                    <td><?php echo $data->harga ?></td>

        
            </tr>

            <?php endforeach ?>  
        </tbody>
        

    </table>

</table>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {font-family: Helvetica Neue, Arial, sans-serif; }

body { background-image: linear-gradient(#D2B48C 25%, #D2B48C);}

h1, table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

th, td { padding: 1.5rem; font-size: 1.3rem; }

tr {background: hsl(50, 50%, 80%); }

tr, td { transition: .4s ease-in; } 

tr:first-child {background: hsla(12, 100%, 40%, 0.5); }

tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }

tr:hover:not(#firstrow), tr:hover td:empty {background: #ff0; pointer-events: visible;}
tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 700; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);}



