<?php
include('../connection/conn.php');

$userid = $_POST['userId'];

$query = "SELECT * FROM `userbooking` WHERE `userid` = $userid AND `status` != 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $userbookingid = $row['id'];
    $room_id = $row['roomid'];
    $quantity = $row['quantity'];
    $status = $row['status'];

    $updatequery = "UPDATE `userbooking` SET `status` = 1 WHERE `userid` = $userid AND `status` = $status";
    $updateresult = mysqli_query($conn, $updatequery);

    if ($updateresult) {
        $newquery = "INSERT INTO `bookinghistory` (`userid`, `room_id`, `quantity`, `userbookingid`, `status`) VALUES ('$userid', '$room_id', '$quantity', '$userbookingid', 1)";
        $newresult = mysqli_query($conn, $newquery);

        if($newresult) {
            echo "Your rooms are booked";
        }
    }
}
