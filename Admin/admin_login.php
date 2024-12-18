
<?php include '../templates/header.php'; ?>
<link rel="stylesheet" href="./Css/mystyle.css">
<div class="container mt-5 bg-background">
    <h2 class="text-center">Admin Login</h2>
    <form method="POST" action="adminloginprocess.php" class="mt-4 w-50 mx-auto">
        <!--  -->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="user" placeholder="Enter your username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="pswd" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary " name="login">Login</button>
    </form>
</div>
<?php include '../templates/footer.php'; ?>