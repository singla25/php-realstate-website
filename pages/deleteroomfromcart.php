<?php

include('../connection/conn.php');

session_start();

$userid = $_SESSION['user']['user_id'];
$roomid = $_GET['id'];

$query  = "DELETE FROM `userbooking` WHERE `roomid` = $roomid AND `userid`= $userid AND `status` != 1";
$result = mysqli_query($conn,$query);

if($result){
    header("location: cartdetail.php");
}
?>
