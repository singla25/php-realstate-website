<?php
include('../base/base_header.php');
?>

<?php
$userid = $_SESSION['user']['user_id'];
$username = $_SESSION['user']['username'];
?>

<div class="bg-secondary bg-opacity-80">
    <div class="container mt-4 pb-4">
        <div class="row g-4">
            <div class="col-md-9">
                <div class="p-4 border-2 rounded-4 shadow-sm bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="mb-0">🛏️ Your Booked Rooms</h3>
                    </div>

                    <div class="card shadow-sm border-secondary rounded-4 overflow-hidden h-100 my-4">
                        <?php
                        $datequery = "SELECT DISTINCT DATE(created_at) as bookingdate FROM `userbooking` WHERE `userid` = $userid AND `status` = 1";
                        $dateresult = mysqli_query($conn, $datequery);

                        $totalprice = 0;
                        $totalRoom = 0;
                        $totalBookings = 0;

                        while ($daterow = mysqli_fetch_assoc($dateresult)) {
                            $bookingdate = $daterow['bookingdate'];
                        ?>
                            <div class="card-top mt-1" style="height: 65px; background: rgba(108, 117, 125, 0.50);">
                                <div class="d-flex justify-content-between align-items-baseline m-3">
                                    <p><strong>Previously Reserved Rooms <i class="fa-regular fa-circle-check text-success"></i></strong></p>
                                    <p><strong>Booked By : <?php echo ucfirst($username) ?> </strong></p>
                                    <p><strong>Booked On: <?php echo $bookingdate ?></strong> </p>
                                    <a href="bookingdetail.php?date=<?php echo $bookingdate; ?>" class="btn btn-success ">Booking Details</a>
                                </div>
                            </div>

                            <?php
                            $query = "SELECT * FROM `userbooking` WHERE `userid` = '$userid' AND DATE(`created_at`) = '$bookingdate' AND `status` = 1";
                            $result = mysqli_query($conn, $query);


                            $totalBookings++;

                            while ($row = mysqli_fetch_assoc($result)) {

                                $quantity = $row['quantity'];
                                $roomid = $row['roomid'];

                                $roomquery = "SELECT * FROM `room` WHERE `id` = $roomid";
                                $roomresult = mysqli_query($conn, $roomquery);

                                $totalRoom++;

                                while ($roomrow = mysqli_fetch_assoc($roomresult)) {
                                    $subt = $quantity * $roomrow['price'];
                                    $totalprice += $subt;
                            ?>
                                    <div class="card mx-3 my-2">
                                        <div class="row g-0">
                                            <div class="col-md-5">
                                                <img src="../public/upload/rooms/<?php echo $roomrow['image'] ?>" class="img-fluid w-100 object-fit-cover" style="height: 150px;" alt="Room Image">
                                            </div>

                                            <div class="col-md-7">
                                                <div class="card-body text-dark">
                                                    <h4 class="card-title fw-bold"><?php echo $roomrow['title'] ?></h4>
                                                    <p class="text-muted"><?php echo $roomrow['shortdescription'] ?></p>
                                                    <div class="d-flex justify-content-between align-items-center mt-1">
                                                        <div class="my-2">
                                                            <p><strong>Booking Id : <?php echo $row['id'] ?> </strong></p>
                                                            <p><strong>Booked Price: ₹<?php echo $roomrow['price'] ?></strong></p>
                                                        </div>
                                                        <div class="my-2">
                                                            <p><strong>Booked Quantity: <?php echo $quantity ?></strong></p>
                                                            <p class="subtotal"><strong>Subtotal Money Spent: ₹<?php echo $subt ?></strong></p>
                                                        </div>
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
            </div>

            <div class="col-md-3">
                <div class="h-100" style="min-height: 500px;">
                    <div class="p-4 border-2 rounded-4 shadow bg-light text-center">
                        <h4 class="mb-3">📊 Booking Summary</h4>
                        <p class="fs-5"><strong>Total Money Spent:</strong> ₹<?php echo $totalprice; ?></p>
                        <p><strong>Total Booked Rooms:</strong> <?php echo $totalRoom; ?></p>
                        <p><strong>Total Number of Bookings:</strong> <?php echo $totalBookings; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('./exploring.php'); ?>
<?php include('../base/base_footer.php'); ?>