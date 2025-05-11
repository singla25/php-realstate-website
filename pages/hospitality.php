<?php
include('../base/base_header.php');
?>

<?php
$userid = $_SESSION['user']['user_id'];
$query = "SELECT * FROM `room`";
$result = mysqli_query($conn, $query);
?>

<div class="bg-secondary bg-opacity-50">
    <div class="container py-4">
        <?php
        // if ($warning) {
        //     echo "
        //     <div class='alert alert-" . $msg['type'] . " alert-dismissible fade show' role='alert'>
        //     " . $msg['msg'] . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div> ";
        // }
        ?>
        <div class="col-md-12 rounded-4" style="background:rgb(0, 54, 90, 0.90);">
            <div class="p-5 border-2 rounded-4 shadow-sm text-white" >
                <h3 class="mb-4 text-center">🛏️ Rooms for Booking</h3>
                <div class="row g-3">
                    <?php

                    $totalprice = 0;
                    $totalRoomTypes = 0;
                    $totalRoomCount = 0;

                    while ($row = mysqli_fetch_assoc($result)) {
                        $roomid = $row['id'];
                    ?>
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0 overflow-hidden h-100">
                                <img src="../public/upload/rooms/<?php echo $row['image'] ?>" class="card-img-top" style="height: 200px; object-fit: cover; border-top-left-radius: .5rem; border-top-right-radius: .5rem;">

                                <div class="card-body">

                                    <h5 class="card-title fw-bold mb-2"><?php echo $row['title'] ?></h5>
                                    <p class="text-muted fs-6 mb-3"><?php echo $row['shortdescription'] ?></p>


                                    <div class="mb-3">
                                        <h5 class="fw-semibold">Key Benefits:</h5>
                                        <p><?php echo $row['keybenefits'] ?></p>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <a href="roomdetail.php?id=<?php echo $row['id'] ?>" class="btn btn-success px-4 py-2">More Details</a>
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
</div>

<?php
include('./exploring.php');
?>

<?php
include('../base/base_footer.php');
?>