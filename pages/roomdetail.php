<?php
include('../base/base_header.php');
?>

<?php
$roomid = $_GET['id'];
$userid = $_SESSION['user']['user_id'];

$query = "SELECT * FROM `room` WHERE `id` = $roomid";
$result = mysqli_query($conn, $query);
?>

<div class="bg-secondary bg-opacity-50">
    <div class="container py-5">
        <div class="col-md-12 rounded-4" style="background:rgb(0, 54, 90, 0.90);">
            <div class="px-5 py-4 border-2 rounded-4 shadow-sm text-white">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $roomid = $row['id'];
                ?>
                    <div class="row g-3">
                        <h3 class="my-4 text-center">🛏️ Rooms Deatils</h3>
                        <div class="card shadow-sm border-0 overflow-hidden h-100">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="../public/upload/rooms/<?php echo $row['image'] ?>" class="img-fluid w-100 object-fit-cover" style="height: 440px;" alt="Room Image">
                                </div>

                                <div class="col-md-6">
                                    <div class="card-body p-4">

                                        <h3 class="card-title fw-bold mb-2"><?php echo $row['title'] ?></h3>
                                        <p class="text-muted fs-6 mb-3"><?php echo $row['shortdescription'] ?></p>

                                        <div class="mb-3">
                                            <h5 class="fw-semibold">Key Benefits:</h5>
                                            <p><?php echo $row['keybenefits'] ?></p>
                                        </div>

                                        <div class="mb-3">
                                            <h5 class="fw-semibold">Amenities:</h5>
                                            <p>
                                                <?php
                                                $features = $row['amenities'];
                                                $featuresArray = explode(",", $features);

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

                                        <div class="mb-3">
                                            <h5 class="fw-semibold">Long Description:</h5>
                                            <p><?php echo $row['longdescription'] ?></p>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mt-4">
                                            <h4 class="text-success fw-bold mb-0">₹ <?php echo $row['price'] ?> / day</h4>
                                            <button type="button" name="booknow" class="btn btn-success px-4 py-2"
                                                data-type="roombook"
                                                data-room-id="<?php echo $roomid ?>"
                                                data-user-id="<?php echo $userid ?>"
                                                data-room-price="<?php echo $row['price'] ?>">
                                                Book Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php
include('../base/base_footer.php');
?>