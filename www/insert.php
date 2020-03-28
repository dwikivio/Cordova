<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $ipk=$_POST['ipk'];
 $q=mysqli_query($con,"INSERT INTO `mhs` (`nim`,`nama`,`ipk`) VALUES ('$nim','$nama','$ipk')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>