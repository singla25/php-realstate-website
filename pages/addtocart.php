<?php 
include('../connection/conn.php');

$userid = $_POST['userId'];     // from jquery
$roomid = $_POST['roomid'];
$roomprice = $_POST['roomPrice'];

$query = "SELECT * FROM `userbooking` WHERE `roomid` = $roomid AND `userid` = $userid AND `status` != 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($row) {

    $quantity = $row['quantity'] + 1;
    $subtotal = $quantity * $roomprice;
    $query = "UPDATE `userbooking` SET `quantity` = $quantity, `sub_total` = $subtotal WHERE `roomid` = $roomid AND `userid` = $userid";
    $result = mysqli_query($conn, $query);

} else {

    $subtotal = '1' * $roomprice;
    $query = "INSERT INTO `userbooking` (`userid`, `roomid`, `quantity`, `price`, `status`, `sub_total`) VALUES ('$userid','$roomid', 1, '$roomprice', 0, '$subtotal')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $query = "SELECT * FROM `userbooking` WHERE `userid` = $userid AND `status` != 1";
        $result = mysqli_query($conn, $query);
        $userOrderCount = mysqli_num_rows($result);
        echo $userOrderCount;
    }
}
