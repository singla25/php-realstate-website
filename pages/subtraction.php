<?php

include('../connection/conn.php');

$userid = $_POST['userId'];     // from jquery
$roomid = $_POST['roomid'];

$query = "SELECT * FROM `userbooking` WHERE `roomid` = $roomid AND `userid` = $userid";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($row) {

    $newquantity = $row['quantity'] - 1;
    
    if ($newquantity < 1) {
        $newquantity = 1; // Prevent quantity from going below 1
    }

    $price = $row['price']; // assuming this is price per item
    $subtotal = $newquantity * $price;

    $newquery = "UPDATE `userbooking` SET `quantity` = '$newquantity', `sub_total`='$subtotal' WHERE `roomid` = '$roomid' AND `userid` = '$userid'";
    $newresult = mysqli_query($conn, $newquery);

    $response = [
        'quantity' => $newquantity,
        'subtotal' => $subtotal
    ];

    echo json_encode($response);

}
?>







