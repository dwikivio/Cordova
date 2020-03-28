<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $ipk=$_POST['ipk'];
 $q=mysqli_query($con,"UPDATE `mhs` SET `nim`='$nim',`nama`='$nama',`ipk`='$ipk' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>