<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include any necessary stylesheets -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php 
    session_start(); // Start the session
    include '../templates/header.php'; 
    include 'db.php'; // Include the database connection
    ?>

    <div class="container mt-5">
        <h2 class="text-center">Admin Dashboard</h2>

        <!-- Display Session Messages -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['message']); // Clear the message after displaying ?>
        <?php endif; ?>

        <a href="add_blood.php" class="btn btn-primary my-3">Add Blood Information</a> 
        <form action="./Admin_Logout.php?logout=true" method="POST" class="d-inline float-end">
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>

        <?php
        // Pagination setup
        $limit = 5; // Number of records per page
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
        $offset = ($page - 1) * $limit; // Offset for the query

        // Query to count total records
        $countQuery = "SELECT COUNT(*) AS total FROM blood_info";
        $countResult = $con->query($countQuery);
        $totalRecords = $countResult->fetch_assoc()['total'];
        $totalPages = ceil($totalRecords / $limit); // Calculate total pages

        // Query to fetch blood information with limit and offset
        $query = "SELECT * FROM blood_info LIMIT $limit OFFSET $offset";
        $result = $con->query($query);

        // Check for query errors
        if (!$result) {
            die("Error fetching blood information: " . $con->error);
        }
        ?>
        <table class="table table-bordered">
            <thead class="table-danger">
                <tr>
                    <th>Blood Group</th>
                    <th>Hospital Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Use PHP to populate table rows -->
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['blood_group'] ?></td>
                    <td><?= $row['hospital_name'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td class="d-flex">
                        <a href="update_blood.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning mx-2">Edit</a>
                        <a href="delete_blood.php?id=<?= $row['id'] ?>" 
                           class="btn btn-sm btn-danger" 
                           onclick="return confirm('Are you sure you want to delete this record?');">
                           Delete
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Pagination Links -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <?php include '../templates/footer.php'; ?>
</body>
</html>