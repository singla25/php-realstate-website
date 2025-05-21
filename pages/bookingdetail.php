<?php
include('../base/base_header.php');
?>

<?php

$userid = $_SESSION['user']['user_id'];
$username = $_SESSION['user']['username'];
$useremail = $_SESSION['user']['email'];
$useraddress = $_SESSION['user']['address'];

$date = $_GET['date'];
?>

<div class="bg-secondary bg-opacity-80">
    <div class="container py-4">
        <div class="border rounded-2 bg-white">
            <h3 class="text-start mx-4 mt-3">Booking Details</h3>
            <h6 class="text-start mx-4 mb-3">Booking placed on: <?php echo $date ?></h6>

            <div style="display: flex; flex-direction: column-reverse;">
                <div class="p-3">
                    <div class="m-2 border rounded-1 shadow-sm bg-light">
                        <div class="d-flex justify-content-evenly align-items-center mt-3">
                            <h5 class="text-start">Checked By : <?php echo ucfirst($username) ?></h5>
                            <h5 class="text-start">Checked On : <?php echo $date ?></h5>
                        </div>

                        <?php

                        $query = "SELECT * FROM `bookinghistory` WHERE `userid` = $userid AND `status` = 1 AND `created_at` = '$date'";
                        $result = mysqli_query($conn, $query);

                        $totalprice = 0;
                        $totalRoomCount = 0;

                        while ($row = mysqli_fetch_assoc($result)) {

                            $bookingid = $row['id'];
                            $quantity = $row['quantity'];
                            $roomid = $row['room_id'];

                            $newquery = "SELECT * FROM `userbooking` WHERE `userid` = '$userid' AND `roomid` = '$roomid' AND `quantity` = '$quantity' AND `status` = 1";
                            $newresult = mysqli_query($conn, $newquery);

                            while ($newrow = mysqli_fetch_assoc($newresult)) {

                                $roomquery = "SELECT * FROM `room` WHERE `id` = $roomid";
                                $roomresult = mysqli_query($conn, $roomquery);

                                $totalRoomCount += $quantity;

                                while ($roomrow = mysqli_fetch_assoc($roomresult)) {
                                    $subt = $quantity * $roomrow['price'];
                                    $totalprice += $subt;
                        ?>

                                    <div class="card m-2">
                                        <div class="row g-0">
                                            <div class="col-md-5">
                                                <img src="../public/upload/rooms/<?php echo $roomrow['image'] ?>" class="img-fluid w-100 object-fit-cover" style="height: 210px;" alt="Room Image">
                                            </div>

                                            <div class="col-md-7">
                                                <div class="card-body text-dark">


                                                    <h4 class="card-title fw-bold"><?php echo $roomrow['title'] ?></h4>
                                                    <p class="text-muted"><?php echo $roomrow['shortdescription'] ?></p>

                                                    <div class="my-2">
                                                        <h6 class="mb-0">Key Benefits:</h6>
                                                        <p class="text-muted mt-0"><?php echo $roomrow['keybenefits'] ?></p>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center mt-1">
                                                        <div class="my-2">
                                                            <p><strong>Booked Price: ₹<?php echo $roomrow['price'] ?></strong></p>
                                                            <p><strong>Booked Quantity: <?php echo $quantity ?></strong></p>

                                                        </div>
                                                        <div class="my-2">
                                                            <p><strong>Booking Id : <?php echo $bookingid ?> </strong></p>
                                                            <p class="subtotal"><strong>Subtotal Money Spent: ₹<?php echo $subt ?></strong></p>
                                                        </div>
                                                        <a href="roomdetail.php?id=<?php echo $roomid ?>" class="btn btn-outline-success">Book Again</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="p-3 border rounded-1 shadow-sm bg-light text-left d-flex justify-content-between mx-4">
                    <div class="mx-3">
                        <h5 class="mb-3"><i class="fa-regular fa-address-card"></i> Billing Address</h5>
                        <p class="m-0"><?php echo ucfirst($username) ?></p>
                        <p class="m-0"><?php echo $useraddress ?></p>
                        <p class="m-0"><?php echo $useremail ?></p>
                    </div>

                    <div class="">
                        <h5 class="mb-3"><i class="fa-solid fa-money-check-dollar"></i> Payment Method</h5>
                        <p class="m-0">Cash On Delivery</p>
                    </div>

                    <?php

                    ?>
                    <div class="mx-3">
                        <h5 class="mb-3"><i class="fa-solid fa-hotel"></i> Room Summary</h5>
                        <p class="m-0">Total Rooms Booked : <?php echo $totalRoomCount ?></p>
                        <p class="m-0">Subtotal : ₹<?php echo $totalprice ?></p>
                        <p class="m-0">Other Charges : ₹0</p>
                        <p class="m-0">Total : ₹<?php echo $totalprice ?></p>
                        <p class="m-0"><strong>Grand Total : ₹<?php echo $totalprice ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../base/base_footer.php'); ?>