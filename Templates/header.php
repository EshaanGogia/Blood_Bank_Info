<!-- templates/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="index.php">Blood Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <!-- Logout Form -->
                        <!-- <form action="./Admin_Logout.php?logout=true" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-light">Logout</button>
                        </form> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <h1 class="text-center text-danger">Welcome to the Blood Management System</h1>
        <p class="text-center" style="color: blue;">Manage donors, blood groups, and donations seamlessly.</p>
    </div>
</body>
</html>
