<?php
include('../base/base_header.php');
?>

<?php
$userid = $_SESSION['user']['user_id'];
$roomid = $_GET['id'];
$date = $_GET['date'];

$query = "SELECT * FROM `userbooking` WHERE `userid` = $userid AND `roomid` = $roomid AND `status` = 1 AND DATE(created_at) = '$date'";
$result = mysqli_query($conn, $query);

$userOrderCount = mysqli_num_rows($result);
?>

<div class="bg-secondary bg-opacity-80">
    <div class="container py-4">
        <div class="border rounded-2 bg-white">
            <h3 class="text-start mx-4 mt-3">Booking Details</h3>
            <?php
            $totalprice = 0;
            $totalRoomCount = 0;

            while ($row = mysqli_fetch_assoc($result)) {

                $quantity = $row['quantity'];

                $bookingdate = date('D d-M-Y', strtotime($row['created_at']));

                $roomquery = "SELECT * FROM `room` WHERE `id` = $roomid";
                $roomresult = mysqli_query($conn, $roomquery);

                $totalRoomCount += $quantity;

                while ($roomrow = mysqli_fetch_assoc($roomresult)) {
                    $subt = $quantity * $roomrow['price'];
                    $totalprice += $subt;
            ?>
                    <h6 class="text-start mx-4 mb-3">Booking placed on: <?php echo $bookingdate ?> | Booking Number: <?php echo $row['id'] ?></h6>

                    <?php
                    $username = $_SESSION['user']['username'];
                    $useremail = $_SESSION['user']['email'];
                    $useraddress = $_SESSION['user']['address'];
                    ?>
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

                        <div class="mx-3">
                            <h5 class="mb-3"><i class="fa-solid fa-hotel"></i> Room Summary</h5>
                            <p class="m-0">Total Rooms Booked : <?php echo $totalRoomCount; ?></p>
                            <p class="m-0">Subtotal : ₹<?php echo $totalprice; ?></p>
                            <p class="m-0">Other Charges : ₹0</p>
                            <p class="m-0">Total : ₹<?php echo $totalprice; ?></p>
                            <p class="m-0"><strong>Grand Total : ₹<?php echo $totalprice; ?></strong></p>
                        </div>
                    </div>

                    <div class="p-3">
                        <div class="m-2 border rounded-1 shadow-sm bg-light">
                            <h6 class="text-start mx-3 mt-3">Checked In : <?php echo $bookingdate ?></h6>
                            <h6 class="text-start mx-3 mb-3">Checked By : <?php echo ucfirst($username) ?></h6>

                            <div class="row g-0 border rounded-1 m-2">
                                <div class="col-md-5">
                                    <img src="../public/upload/rooms/<?php echo $roomrow['image'] ?>" class="img-fluid w-100 object-fit-cover" style="height: 205px;" alt="Room Image">
                                </div>

                                <div class="col-md-7">
                                    <div class="card-body text-dark">
                                        <h4 class="card-title fw-bold"><?php echo $roomrow['title'] ?></h4>
                                        <p class="text-muted"><?php echo $roomrow['shortdescription'] ?></p>

                                        <div class="my-2">
                                            <h6 class="mb-0">Key Benefits:</h6>
                                            <p class="text-muted mt-0"><?php echo $roomrow['keybenefits'] ?></p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="mb-0">Booked Price: ₹<?php echo $roomrow['price'] ?></p>
                                                <p class="mt-0">Booked Quantity: <?php echo $quantity ?></p>
                                            </div>

                                            <div class="me-3">
                                                <a href="roomdetail.php?id=<?php echo $roomid ?>" class="btn btn-outline-success">Book Again</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div>

<?php include('../base/base_footer.php'); ?>