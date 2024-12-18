<?php
session_start();
include 'db.php'; // Include database connection

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Invalid ID.");
}

$query = "SELECT * FROM blood_info WHERE id = $id";
$query_run = mysqli_query($con, $query);

if ($query_run && mysqli_num_rows($query_run) > 0) {
    $record = mysqli_fetch_array($query_run);
} else {
    die("Record not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateblood'])) {
    $blood_group = mysqli_real_escape_string($con, $_POST['blood_group']);
    $hospital_name = mysqli_real_escape_string($con, $_POST['hospital_name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "UPDATE blood_info SET 
        blood_group = '$blood_group', 
        hospital_name = '$hospital_name', 
        phone = '$phone', 
        address = '$address' 
        WHERE id = $id";

    if (mysqli_query($con, $query)) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: dash.php");
        exit;
    } else {
        $_SESSION['message'] = "Error updating record: " . mysqli_error($con);
        header("Location: dash.php");
        exit;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Update Blood Info</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>
<body>
    <?php include '../templates/header.php'; ?>
<main>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Update Blood Information</h2>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        <form method="POST" action="" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="blood_group" class="form-label">Blood Group</label>
                <input type="text" name="blood_group" id="blood_group" class="form-control" value="<?= $record['blood_group'] ?>" required />
            </div>
            <div class="mb-3">
                <label for="hospital_name" class="form-label">Hospital Name</label>
                <input type="text" name="hospital_name" id="hospital_name" class="form-control" value="<?= $record['hospital_name'] ?>" required />
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?= $record['phone'] ?>" required />
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" id="address" class="form-control" rows="3"><?= $record['address'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="updateblood">Update Blood Info</button>
        </form>
    </div>
</main>
<?php include '../templates/footer.php'; ?>
</body>
</html>
