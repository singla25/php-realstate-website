<?php
include('../base/base_header.php');
?>

<?php
$userid = $_SESSION['user']['user_id'];

$query = "SELECT * FROM `userbooking` WHERE `userid` = $userid AND `status` != 1";
$result = mysqli_query($conn, $query);

$userOrderCount = mysqli_num_rows($result);
?>

<div class="bg-secondary bg-opacity-80">
    <div id="checkoutPage" class="container mt-4">
        <div class="row g-4">
            <div class="col-md-9">
                <div class="p-4 border-2 rounded-4 shadow-sm bg-light mb-4">
                    <h3 class="mb-4 text-center">🛏️ Rooms in Your Booking</h3>
                    <div class="row g-3">
                        <?php

                        $totalprice = 0;
                        $totalRoomTypes = 0;
                        $totalRoomCount = 0;

                        while ($row = mysqli_fetch_assoc($result)) {

                            $quantity = $row['quantity'];
                            $roomid = $row['roomid'];
                            $roombookingid = $row['id'];

                            $roomquery = "SELECT * FROM `room` WHERE `id` = $roomid";
                            $roomresult = mysqli_query($conn, $roomquery);

                            $totalRoomTypes++;
                            $totalRoomCount += $quantity;

                            while ($roomrow = mysqli_fetch_assoc($roomresult)) {
                                $subt = $quantity * $roomrow['price'];
                                $totalprice += $subt;

                        ?>
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="../public/upload/rooms/<?php echo $roomrow['image'] ?>" class="card-img-top" style="height: 100px; object-fit: cover; border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
                                        <div class="card-body">
                                            <h5 class="card-title fw-semibold"><?php echo $roomrow['title'] ?></h5>
                                            <p class="text-muted mb-1"><?php echo $roomrow['shortdescription'] ?></p>
                                            <div class="small">
                                                <p class="mb-1"><strong>Price:</strong> ₹<?php echo $roomrow['price'] ?></p>
                                                <p class="mb-1"><strong>Quantity:</strong> <?php echo $quantity ?></p>
                                                <p><strong>Subtotal:</strong> ₹<?php echo $subt ?></p>
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

            <div class="col-md-3">
                <?php
                $username = $_SESSION['user']['username'];
                $useremail = $_SESSION['user']['email'];
                $useraddress = $_SESSION['user']['address'];
                ?>
                <div class="d-flex flex-column justify-content-evenly h-100" style="min-height: 500px;">

                    <div class="p-3 border rounded-4 shadow-sm bg-light text-center">
                        <h4 class="mb-3">👤 User Info</h4>
                        <p><strong>Name:</strong> <?php echo ucfirst($username) ?></p>
                        <p><strong>Email:</strong> <?php echo $useremail ?></p>
                        <p><strong>Address:</strong> <?php echo $useraddress ?></p>
                    </div>

                    <div class="p-4 border rounded-4 shadow bg-light text-center my-3">
                        <h4 class="mb-3">📊 Booking Summary</h4>
                        <!-- <p CLASS="fs-5"><strong>Booking ID : </strong> <?php // echo $roombookingid ?></p> -->
                        <p><strong>Total Price:</strong> ₹<?php echo $totalprice; ?></p>
                        <p><strong>Room Types:</strong> <?php echo $totalRoomTypes; ?></p>
                        <p><strong>Total Rooms Booked:</strong> <?php echo $totalRoomCount; ?></p>
                        <?php if ($userOrderCount != 0) { ?>
                            <button type="button" name="payment" class="btn btn-success px-4 py-2"
                                data-type="payment"
                                data-user-id="<?php echo $userid ?>">
                                Proceed to Pay
                            </button>
                        <?php } ?>
                        <div id="paymentMessage" class="alert alert-success mt-3" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../base/base_footer.php'); ?>