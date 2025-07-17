<?php
include('../base/base_header.php');
?>

<?php
$alert = false;

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
    // it tell the type of image, it is used to provide check on particular type of image

    $roomimage = $imageName;
    $roomtitle = $_POST['roomtitle'];
    $shortdescription = $_POST['shortdescription'];
    $longdescription = $_POST['longdescription'];
    $keybenefits = $_POST['keybenefits'];
    $roomprice = $_POST['roomprice'];
    $amenities = isset($_POST['amenities']) ? implode(',', $_POST['amenities']) : '';
    // implode function is used to convert array into string

    if ($roomtitle && $roomimage && $shortdescription && $roomprice) {

        $query = "INSERT INTO `room` (`title`, `image`, `shortdescription`, `longdescription`, `price` , `keybenefits`, `amenities`) VALUES ('$roomtitle', '$roomimage', '$shortdescription', '$longdescription','$roomprice' , '$keybenefits', '$amenities')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            $alert = true;
            $message = 'Internal server error';
            $bg_color = 'danger';
        } else {
            $alert = true;
            $message = 'Your Room is Live on Website';
            $bg_color = 'success';
        }
    } else {
        $alert = true;
        $message = 'Please enter title, image, price and short description of Room';
        $bg_color = 'warning';
    }
}
?>

<div class="bg-secondary bg-opacity-50">
    <div class="container pt-4 pb-5">
        <div class="mt-4">
            <div class="card shadow-lg p-4 rounded-4 text-white fs-5" style="background:rgb(0, 54, 90, 0.90);">
                <h2 class="text-center mb-4">🛏️ Add a New Room</h2>

                <?php
                if ($alert) {
                    echo '
                        <div class="alert alert-' . $bg_color . ' alert-dismissible fade show" role="alert">
                        <strong>' . $bg_color . '!</strong> ' . $message . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }
                ?>

                <form method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="roomtitle" class="form-label">Room Title</label>
                            <input type="text" class="form-control" id="roomtitle" name="roomtitle" placeholder="Enter room title">
                        </div>

                        <div class="col-md-6">
                            <label for="roomimage" class="form-label">Room Image</label>
                            <input type="file" class="form-control" id="roomimage" name="roomimage">
                        </div>

                        <div class="col-md-6">
                            <label for="shortdescription" class="form-label">Short Description</label>
                            <input type="text" class="form-control" id="shortdescription" name="shortdescription" placeholder="Short description">
                        </div>

                        <div class="col-md-6">
                            <label for="roomprice" class="form-label">Room Price</label>
                            <input type="text" class="form-control" id="roomprice" name="roomprice" placeholder="Enter price">
                        </div>

                        <div class="col-md-6">
                            <label for="longdescription" class="form-label">About this Room</label>
                            <textarea class="form-control" id="longdescription" name="longdescription" rows="3" placeholder="Describe the room..."></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="keybenefits" class="form-label">Key Benefits</label>
                            <textarea class="form-control" id="keybenefits" name="keybenefits" rows="3" placeholder="List the key benefits..."></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Amenities</label>
                            <div class="d-flex flex-wrap gap-3">
                                <?php
                                $amenities = ["ac" => "AC", "wifi" => "Free Wifi", "tv" => "TV", "geyser" => "Geyser", "powerbackup" => "Power Backup", "elevator" => "Elevator"];
                                foreach ($amenities as $value => $label) {
                                    echo '
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="' . $value . '" name="amenities[]" id="' . $value . '">
                                <label class="form-check-label" for="' . $value . '">' . $label . '</label>
                            </div>';
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success w-50 mt-3 rounded-4">Add Room</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-5 shadow-lg rounded-4">
            <div class="card-body">
                <h3 class="text-center my-4">📊 Rooms in Database</h3>

                <table class="table table-hover table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <td>SNo.</td>
                            <th>Title</th>
                            <th>Amenities</th>
                            <th>Image</th>
                            <th>Short Desc</th>
                            <th>Details</th>
                            <th>Benefits</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sno = 0;
                        $query = "SELECT * FROM `room`";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sno = $sno + 1;
                            $amenities = implode(", ", array_map(function ($item) {
                                $map = ["ac" => "AC", "wifi" => "WiFi", "tv" => "TV", "powerbackup" => "Power Backup"];
                                return $map[$item] ?? ucfirst($item);
                            }, explode(",", $row['amenities'])));
                        ?>

                            <tr>
                                <td><?php echo $sno ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $amenities ?></td>
                                <td><img src="<?php echo '../public/upload/rooms/' . $row['image'] ?>" alt="room" class="img-fluid rounded" style="height: 60px;"></td>
                                <td><?php echo $row['shortdescription'] ?></td>
                                <td><?php echo $row['longdescription'] ?></td>
                                <td><?php echo $row['keybenefits'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href='editroom.php?id=<?php echo $row["id"] ?>' class="btn btn-warning opacity-75 mx-2 fw-bold">Edit</a>
                                        <a href='deleteroom.php?id=<?php echo $row["id"] ?>' class="btn btn-secondary mx-2 fw-bold">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('../base/base_footer.php');
?>