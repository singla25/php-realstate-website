<?php
include('../base/base_header.php');

$userid = $_SESSION['user']['user_id'];

$query = "SELECT * FROM `userbooking` WHERE `userid` = $userid AND `status` != 1";
$result = mysqli_query($conn, $query);

$userOrderCount = mysqli_num_rows($result);
?>

<div class="p-5 bg-secondary bg-opacity-50 text-white">
    <div class="row g-4">
        <div class="col-md-9">

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
                    <div class="card mb-4 shadow-sm border-2 rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="../public/upload/rooms/<?php echo $roomrow['image'] ?>" class="img-fluid w-100 object-fit-cover" style="height: 300px;" alt="Room Image">
                            </div>

                            <div class="col-md-7">
                                <div class="card-body text-dark">

                                    <h4 class="card-title fw-bold"><?php echo $roomrow['title'] ?></h4>
                                    <p class="text-muted"><?php echo $roomrow['shortdescription'] ?></p>

                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="mb-1"><strong>Key Benefits:</strong> <br><?php echo $roomrow['keybenefits'] ?></p>
                                        <p class="mb-1 ms-4"><strong>Amenities:</strong><br>
                                            <?php
                                            $featuresArray = explode(",", $roomrow['amenities']);
                                            $formattedFeatures = array_map(function ($item) {
                                                $specialCases = [
                                                    "ac" => "AC",
                                                    "tv" => "TV",
                                                    "wifi" => "WiFi",
                                                    "powerbackup" => "Power Backup",
                                                ];
                                                return $specialCases[$item] ?? ucfirst($item);
                                            }, $featuresArray);
                                            echo implode(", ", $formattedFeatures);
                                            ?>
                                        </p>
                                    </div>

                                    <p class="small mt-2"><?php echo $roomrow['longdescription'] ?></p>

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <h5>Price: ₹<?php echo $roomrow['price'] ?></h5>
                                            <div class="d-flex">
                                                <h5 class="quantity">Quantity: <?php echo $quantity ?></h5>
                                                <div class="mx-3 mt-2">
                                                    <span data-type="add" data-room-id="<?php echo $roomid ?>" data-user-id="<?php echo $userid ?>" data-room-price="<?php echo $roomrow['price'] ?>">
                                                        <i class="fa-solid fa-plus fa-lg d-block mb-1 text-success"></i>
                                                    </span>
                                                    <span data-type="sub" data-room-id="<?php echo $roomid ?>" data-user-id="<?php echo $userid ?>" data-room-price="<?php echo $roomrow['price'] ?>">
                                                        <i class="fa-solid fa-minus fa-lg text-danger"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <h5 class="subtotal">Subtotal: ₹<?php echo $subt ?></h5>
                                        </div>
                                        <a href='deleteroomfromcart.php?id=<?php echo $roomid ?>' class="btn btn-outline-danger">🗑 Remove</a>
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

        <div class="col-md-3 bg-light rounded-4 shadow-sm text-dark my-4 p-4 d-flex flex-column justify-content-between h-50">
            <div class="container mt-2">
                <h4 class="mb-3">🧾 Order Summary</h4>
                <p><strong>Total Price:</strong> ₹<?php echo $totalprice; ?></p>
                <p><strong>Room Types:</strong> <?php echo $totalRoomTypes; ?></p>
                <p><strong>Total Rooms:</strong> <?php echo $totalRoomCount; ?></p>
                <div class="text-center mt-4">
                    <?php
                    if ($userOrderCount != 0) {
                    ?>
                        <a href="../pages/checkout.php" class="btn btn-success px-4 py-2 w-100">Proceed to Checkout</a>
                    <?php
                    } else {
                    ?>
                        <a href="../pages/hospitality.php" class="btn btn-success px-4 py-2 w-100">Add a Room</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../base/base_footer.php');
?>