<?php
include 'includes/db.php';
include 'templates/header.php';

$result = null; // Initialize $result to avoid errors if no search is made

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['blood_group'])) {
    $blood_group = $conn->real_escape_string($_GET['blood_group']); // Prevent SQL injection
    $result = $conn->query("SELECT * FROM blood_info WHERE blood_group='$blood_group'");
}
?>

<div class="container mt-5">
    <h2 class="text-center">Search Blood Information</h2>
    <form method="GET" action="" class="mt-4 w-50 mx-auto">
        <div class="mb-3">
            <label for="blood_group" class="form-label">Select Blood Group</label>
            <select class="form-select" id="blood_group" name="blood_group" required>
                <option value="" disabled selected>Choose a blood group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Search</button>
    </form>

    <?php if ($result && $result->num_rows > 0): ?>
        <ul class="list-group mt-4">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <li class="list-group-item">
                    <strong><?= htmlspecialchars($row['hospital_name']); ?></strong> - <?= htmlspecialchars($row['phone']); ?> - <?= htmlspecialchars($row['address']); ?>
                </li>
            <?php } ?>
        </ul>
    <?php elseif ($result): ?>
        <p class="text-center mt-4 text-danger">No results found for the specified blood group.</p>
    <?php endif; ?>
</div>

<?php include 'templates/footer.php'; ?>
