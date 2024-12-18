<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <title>Add Blood Info</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
</head>

<body>
    <?php
    include '../templates/header.php'; 
    ?>
<header>
    <!-- Navbar can go here -->
</header>
<main>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Add Blood Information</h2>
        
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['success']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['success']); // Clear the message after displaying ?>
        <?php endif; ?>
        <form method="POST" action="add_blood_process.php" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="blood_group" class="form-label">Blood Group</label>
                <input
                    type="text"
                    name="blood_group"
                    id="blood_group"
                    class="form-control"
                    placeholder="Blood Group (e.g., A+, B-)"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="hospital_name" class="form-label">Hospital Name</label>
                <input
                    type="text"
                    name="hospital_name"
                    id="hospital_name"
                    class="form-control"
                    placeholder="Hospital Name"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input
                    type="text"
                    name="phone"
                    id="phone"
                    class="form-control"
                    placeholder="Phone"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea
                    name="address"
                    id="address"
                    class="form-control"
                    placeholder="Address"
                    rows="3"
                ></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="addblood">Add Blood Info</button>
        </form>
    </div>
</main>
<footer>
    <!-- Footer can go here -->
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
></script>
<?php include '../templates/footer.php'; ?>
</body>
</html>
