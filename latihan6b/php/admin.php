<?php 

require 'functions.php';

$makan = query("SELECT * FROM makanan");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	<title>ADMIN</title>
 	<style type="text/css" >
 		.font{
 			color: blue;
 		}
 		.table{
 			background-color: silver;
 		}
 	</style>

 </head>
 <body>

 	<div class="container">	
 	<a href="tambah.php"><button type="button" class="btn btn-success btn-sm">Tambah Data</button></a>
 	</div>
 		<div class="continer">
 	<table border ="2" cellpadding="2" cellspacing="1"  class="table table-striped table">
 		<tr class="font">
 			<th>#</th>
 			<th>opsi</th>
 			<th>Gambar</th>
 			<th>Nama Makanan</th>		
 			<th>Jenis Makanan</th>
 			<th>Harga</th>
 			<th>Tgl_Kedaluarasa</th>
 		</tr>
 		<?php $i = 1; ?>
 		<?php foreach($makan as $mkn) : ?>
 			<tr class="font">
 				<td><?= $i; ?></td>
 				<td>
 				
 					<a href=""><button type=" button" class="btn btn-primary btn-sm">Ubah</button></a>
 					<a href=""><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
 				</td>
 				<td><img src="../assets/img/<?= $mkn["foto"];?>" alt="Gambar" width = 250px; weight= 250px;></td>
 				<td ><?= $mkn["nama"]; ?></td>
 				<td><?= $mkn["jenis"]; ?></td>
 				<td><?= $mkn["harga"]; ?></td>
 				<td><?= $mkn["kedaluarsa"]; ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	
 	</table>
 	</div>
 
 </body>
 </html>