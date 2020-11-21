<?php 
$con=mysqli_connect('localhost','root','1910990328','corona');
$name=$_POST['name'];
$phno=$_POST['phno'];
$city=$_POST['city'];
$dop=$_POST['dop'];
$sql="INSERT INTO 'tbrequestee' ('rname','rmobno','rcity','rposdate') VALUES ('$name','$phno','$city','$dop')";
$rs=mysqli_query($con,$sql);
if($rs){
    echo "inserted";
}
?>