<?php
include('../base/base_header.php');
?>

<?php
$userid = $_SESSION['user']['user_id'];
$query = "SELECT * FROM `users` WHERE `id` = $userid";
$result = mysqli_query($conn, $query);
?>

<div class="bg-secondary bg-opacity-80">
    <div class="container border-3 rounded-2 d-flex justify-content-center align-items-center">
        <div class="row p-3 my-5" style="width: 900px">
            <div class="p-4 border rounded-4 shadow-sm bg-light">
                <h3 class="mb-4 text-center">👤 User Info</h3>
                <div class="" style="min-height: 300px;">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="p-4 border-2 rounded-4 shadow bg-light text-center">
                            <h4 class="mb-3"></h4>
                            <h4 class="mb-3"></h4>
                            <p><strong>ID:</strong> <?php echo $row['id'] ?></p>
                            <p><strong>Name:</strong> <?php echo ucfirst($row['name']) ?></p>
                            <p><strong>Email:</strong> <?php echo $row['email'] ?></p>
                            <p><strong>Current Password:</strong> <?php echo $row['password'] ?></p>
                            <p><strong>Address:</strong> <?php echo $row['address'] ?></p>
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