<?php
include('../connection/conn.php');

$id = $_GET['id'];
$query = "SELECT * FROM `room` where `id` = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if (isset($_POST) && $_POST) {

    // upload the image
    $image = $_FILES["roomimage"];
    $imageName = $_FILES["roomimage"]["name"];
    $tempName = $_FILES['roomimage']['tmp_name'];
    $uploadDir = '../public/upload/rooms/';

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $target_file = $uploadDir . basename($imageName);
    move_uploaded_file($tempName, $target_file);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $roomimage = $imageName;
    $roomtitle = $_POST['roomtitle'];
    $shortdescription = $_POST['shortdescription'];
    $longdescription = $_POST['longdescription'];
    $keybenefits = $_POST['keybenefits'];
    $roomprice = $_POST['roomprice'];
    $amenities = implode(',', $_POST['amenities']);

    $query = "UPDATE `room` SET `title`='$roomtitle', `image`='$roomimage', `shortdescription`='$shortdescription', `longdescription`='$longdescription',`price`='$roomprice', `keybenefits`='$keybenefits', `amenities`='$amenities' WHERE `id` = $id";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: admin.php");
    }
}
?>

<?php
include('../base/base_header.php');
?>

<div style="background: #00365a; opacity: 95%; color: whitesmoke; font-size: 18px;">
    <div class="container py-3">
        <div class="my-2">
            <form method="post" enctype="multipart/form-data">
                <h2 class="text-center mb-4">Edit Room Details</h2>

                <div class="row room">
                    <div class="col-md-5 mb-3">
                        <label for="roomtitle" class="form-label">Room Title</label>
                        <input type="text" class="form-control" id="roomtitle" placeholder="title" name="roomtitle"
                            value="<?php echo $row['title'] ?>">
                    </div>

                    <div class="col-md-2 mb-3">
                    </div>

                    <div class="col-md-5 mb-3">
                        <label for="roomimage" class="form-label">Image of Room</label>
                        <input class="form-control" type="file" id="roomimage" name="roomimage"
                            value="<img src=' <?php echo $row['image'] ?>'>">
                    </div>

                    <div class="col-md-5 mb-3">
                        <label for="shortdescription" class="form-label">Short Description</label>
                        <input type="text" class="form-control" id="shortdescription" placeholder="Short Description" name="shortdescription"
                            value="<?php echo $row['shortdescription'] ?>">
                    </div>

                    <div class="col-md-2 mb-3">
                    </div>

                    <div class="col-md-5 mb-3">
                        <label for="roomprice" class="form-label">Room Price</label>
                        <input type="text" class="form-control" id="roomprice" placeholder="Room Price" name="roomprice"
                            value="<?php echo $row['price'] ?>">
                    </div>

                    <div class="col-md-5 mb-3">
                        <label for="longdescription" class="form-label">About this Room</label>
                        <textarea class="form-control" id="longdescription" rows="3" placeholder="description" name="longdescription"><?php echo $row['longdescription'] ?></textarea>
                    </div>

                    <div class="col-md-2 mb-3">
                    </div>

                    <div class="col-md-5 mb-3">
                        <label for="keybenefits" class="form-label">Key Benefits</label>
                        <textarea class="form-control" id="keybenefits" rows="2" placeholder="Key Benefits" name="keybenefits"><?php echo $row['keybenefits'] ?></textarea>
                    </div>

                    <?php
                    $selectedAmenities = explode(",", $row['amenities']);
                    // explode function is used to convert string into array
                    ?>

                    <div class="col-md-12 my-2">
                        <label for="amenities" class="form-label">Amenities</label>
                        <div class="d-flex m-2">
                            <div class="form-check m-2">
                                <input class="form-check-input" type="checkbox" value="ac" id="ac" name="amenities[]"
                                    value="ac" <?php if (in_array('ac', $selectedAmenities)) {
                                                    echo 'checked';
                                                } ?>>
                                <label class="form-check-label" for="ac"> AC </label>
                            </div>

                            <div class="form-check m-2">
                                <input class="form-check-input" type="checkbox" value="wifi" id="wifi" name="amenities[]"
                                    value="wifi" <?php if (in_array('wifi', $selectedAmenities)) {
                                                        echo 'checked';
                                                    } ?>>
                                <label class="form-check-label" for="wifi"> Free Wifi </label>
                            </div>

                            <div class="form-check m-2">
                                <input class="form-check-input" type="checkbox" value="tv" id="tv" name="amenities[]"
                                    value="tv" <?php if (in_array('tv', $selectedAmenities)) {
                                                    echo 'checked';
                                                } ?>>
                                <label class="form-check-label" for="tv"> TV </label>
                            </div>

                            <div class="form-check m-2">
                                <input class="form-check-input" type="checkbox" value="geyser" id="geyser" name="amenities[]"
                                    value="geyser" <?php if (in_array('geyser', $selectedAmenities)) {
                                                        echo 'checked';
                                                    } ?>>
                                <label class="form-check-label" for="geyser"> Geyser </label>
                            </div>

                            <div class="form-check m-2">
                                <input class="form-check-input" type="checkbox" value="powerbackup" id="powerbackup" name="amenities[]"
                                    value="powerbackup" <?php if (in_array('powerbackup', $selectedAmenities)) {
                                                            echo 'checked';
                                                        } ?>>
                                <label class="form-check-label" for="powerbackup"> Power Backup </label>
                            </div>

                            <div class="form-check m-2">
                                <input class="form-check-input" type="checkbox" value="elevator" id="elevator" name="amenities[]"
                                    value="elevator" <?php if (in_array('elevator', $selectedAmenities)) {
                                                            echo 'checked';
                                                        } ?>>
                                <label class="form-check-label" for="elevator"> Elevator </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center my-2">
                    <button class="btn btn-success opacity-70 w-50">Edit the Room Details</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('../base/base_footer.php');
?>