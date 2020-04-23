<?php 
function koneksi(){
	$conn=mysqli_connect("localhost","root","") or die ("KONEKSI KE DB GAGAL!");
	mysqli_select_db($conn,"pw_173040152") or die ("DATABASE SALAH!");

	return $conn;
}


function query($sql){
 $conn = koneksi();

  $result = mysqli_query($conn,$sql);

  $rows =[];
  while($row = mysqli_fetch_assoc($result)){
  	$rows[] = $row;
  }
  return $rows;
  
}



 ?>

