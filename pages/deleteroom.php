<?php
include('../base/base_header.php');
?>

<?php

$id = $_GET['id'];

$sql  = "DELETE FROM `room` where `id`= $id";
$result = mysqli_query($conn,$sql);

if($result){
    header("location: admin.php");
}

?>