<?php
include('../connection/conn.php');

$userid = $_POST['userId'];

$query = "SELECT * FROM `userbooking` WHERE `userid` = $userid AND `status` != 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $status = $row['status'];
    $updatequery = "UPDATE `userbooking` SET `status` = 1 WHERE `userid` = $userid AND `status` = $status";
    $updateresult = mysqli_query($conn, $updatequery);

    if ($updateresult) {
        echo "Yor Rooms are Booked";
    }
}
