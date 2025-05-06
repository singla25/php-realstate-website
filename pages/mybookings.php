<?php
include('../base/base_header.php');
?>

<?php
$userid = $_SESSION['user']['user_id'];
$username = $_SESSION['user']['username'];

$filterdate = $_GET['filter'] ?? '';

$datequery = "SELECT DISTINCT YEAR(created_at) as bookingdate FROM `userbooking` WHERE `userid` = $userid AND `status` = 1";
$dateresult = mysqli_query($conn, $datequery);

$dateCondition = '';
if ($filterdate) {
    $dateCondition = "AND YEAR(created_at) = '$filterdate'";
}

$query = "SELECT * FROM `userbooking` WHERE `userid` = $userid AND `status` = 1 $dateCondition";
$result = mysqli_query($conn, $query);
?>

<div class="bg-secondary bg-opacity-80">
    <div class="container mt-4 pb-4">
        <div class="row g-4">
            <div class="col-md-9">
                <div class="p-4 border-2 rounded-4 shadow-sm bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="mb-0">🛏️ Your Booked Rooms</h3>
                        <form method="GET" class="d-flex align-items-center" style="width: 20%;">
                            <!-- <label for="filter" class="me-2 fw-semibold" style="width: 100px;">Choose Your Booking Date:</label> -->
                            <select name="filter" id="filter" class="form-select" onchange="this.form.submit()">
                                <option value="">All Rooms</option>
                                <?php while ($daterow = mysqli_fetch_assoc($dateresult)) {
                                    $date = $daterow['bookingdate'];
                                ?>
                                    <option value="<?php echo $date; ?>" <?php if ($filterdate === $date) echo 'selected'; ?>>
                                        <?php echo $date; ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </form>
                    </div>

                    <?php
                    $totalprice = 0;
                    $totalRoomTypes = 0;
                    $totalRoomCount = 0;

                    while ($row = mysqli_fetch_assoc($result)) {

                        $quantity = $row['quantity'];
                        $roomid = $row['roomid'];

                        $bookingdate = date('Y-m-d', strtotime($row['created_at']));

                        $roomquery = "SELECT * FROM `room` WHERE `id` = $roomid";
                        $roomresult = mysqli_query($conn, $roomquery);

                        $totalRoomTypes++;
                        $totalRoomCount += $quantity;

                        while ($roomrow = mysqli_fetch_assoc($roomresult)) {
                            $subt = $quantity * $roomrow['price'];
                            $totalprice += $subt;
                    ?>
                            <div class="card shadow-sm border-secondary rounded-4 overflow-hidden h-100 my-4">
                                <div class="card-top" style="height: 50px; background: rgba(108, 117, 125, 0.50);">
                                    <div class="d-flex justify-content-between align-items-center m-3">

                                        <p><strong>Room is Booked <i class="fa-regular fa-circle-check text-success"></i></strong></p>
                                        <p><strong>Booked By : <?php echo ucfirst($username) ?> </strong></p>
                                        <p><strong>Booking Id : <?php echo $row['id'] ?> </strong></p>
                                        <p><strong>Booked On: <?php echo $bookingdate ?></strong> </p>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="../public/upload/rooms/<?php echo $roomrow['image'] ?>" class="img-fluid w-100 object-fit-cover" style="height: 200px;" alt="Room Image">
                                        </div>

                                        <div class="col-md-7">
                                            <div class="card-body text-dark">

                                                <h4 class="card-title fw-bold"><?php echo $roomrow['title'] ?></h4>
                                                <p class="text-muted"><?php echo $roomrow['shortdescription'] ?></p>

                                                <div class="d-flex justify-content-between align-items-center mt-2">
                                                    <p><strong>Booked Price: ₹<?php echo $roomrow['price'] ?></strong></p>
                                                    <p><strong>Booked Quantity: <?php echo $quantity ?></strong></p>
                                                </div>

                                                <p class="subtotal"><strong>Subtotal Money Spent: ₹<?php echo $subt ?></strong></p>

                                                <div class="d-flex justify-content-between align-items-center mt-3">
                                                    <a href="bookingdetail.php?id=<?php echo $roomrow['id']; ?>&date=<?php echo $bookingdate; ?>" class="btn btn-outline-primary">Booking Details</a>
                                                    <a href="roomdetail.php?id=<?php echo $roomrow['id'] ?>" class="btn btn-outline-success">Book Again</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }

                    if ($totalRoomTypes == 0) {
                        echo "<p class='text-center text-muted'>No bookings found for the selected time period.</p>";
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-3">
                <div class="h-100" style="min-height: 500px;">
                    <div class="p-4 border-2 rounded-4 shadow bg-light text-center">
                        <h4 class="mb-3">📊 Booking Summary</h4>
                        <p class="fs-5"><strong>Total Money Spent:</strong> ₹<?php echo $totalprice; ?></p>
                        <p><strong>Room Types:</strong> <?php echo $totalRoomTypes; ?></p>
                        <p><strong>Total Rooms Booked:</strong> <?php echo $totalRoomCount; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./exploring.php'); ?>
<?php include('../base/base_footer.php'); ?>