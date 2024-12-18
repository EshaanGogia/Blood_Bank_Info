<!-- index.php -->
<?php include 'templates/header.php'; ?>


<!doctype html>
<html lang="en">
    <head>
        <title>index</title>
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
        <header>
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="First slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="1"
                        aria-label="Second slide"
                    ></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="2"
                        aria-label="Third slide"
                    ></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active ">
                        <img
                            src="./Assets/images/Slide2.jpg"
                            class="w-100 d-block"
                            alt="First slide"
                         />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="./Assets/images/Slide3.jpg"
                            class="w-100 d-block"
                            alt="Second slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="./Assets/images/Slide4.jpg"
                            class="w-100 d-block"
                            alt="Third slide"
                        />
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </header>
        <main>
            
 <div class="container mt-5">
    <div class="text-center" >
        <!-- <h1>Welcome to the Blood Management System</h1>
        <p class="mt-3">
            Your one-stop solution for managing and accessing blood donation and availability information.
        </p>  -->
        
        <!-- Buttons for navigating to search and admin login -->
        <div class="mt-4">
            <a href="search.php" class="btn btn-primary btn-lg">Search Blood</a>
            <a href="./Admin/Admin_login.php" class="btn btn-success btn-lg">Admin Login</a>
        </div>
    </div>

    <!-- About Us Section -->
    <!-- <div class="mt-5">
        <h3>About Us</h3>
        <p style="color: black">
            The Blood Management System ensures that patients in need can quickly find blood
            and hospitals with the right blood groups. Administrators can manage and update
            the availability of blood in hospitals to keep information current.
        </p>
    </div>
</div> -->
<div class="container my-5">
        <h1 class="text-center text-danger mb-4">About Us</h1>
        <p class="lead text-center">
            Welcome to the <strong>Blood Management System</strong>, a trusted platform dedicated to saving lives by ensuring the seamless management and availability of blood.
        </p>
        
        <div class="my-4">
            <h3 class="text-danger">Our Vision</h3>
            <p>To create a world where no life is lost due to a lack of timely access to blood.</p>
        </div>

        <div class="my-4">
            <h3 class="text-danger">Our Mission</h3>
            <ul>
                <li>To simplify the process of finding and donating blood.</li>
                <li>To maintain accurate and up-to-date blood inventories for hospitals, clinics, and blood banks.</li>
                <li>To encourage and support blood donation drives in communities.</li>
            </ul>
        </div>

        <div class="my-4">
            <h3 class="text-danger">What We Do</h3>
            <ul>
                <li><strong>Donor Registration:</strong> We provide a user-friendly platform for blood donors to register their details, making it easy for those in need to find compatible donors.</li>
                <li><strong>Recipient Support:</strong> Our system allows recipients to search for and connect with donors or blood banks quickly during emergencies.</li>
                <li><strong>Blood Bank Integration:</strong> We partner with blood banks and healthcare organizations to maintain a real-time inventory of blood supplies.</li>
                <li><strong>Awareness Campaigns:</strong> We spread awareness about the importance of blood donation and encourage regular donors.</li>
            </ul>
        </div>

        <div class="my-4">
            <h3 class="text-danger">Why Choose Us?</h3>
            <ul>
                <li><strong>Reliability:</strong> Accurate and real-time information on blood availability.</li>
                <li><strong>Accessibility:</strong> A simple and user-friendly interface for donors, recipients, and blood banks.</li>
                <li><strong>Community Focused:</strong> Dedicated efforts to build a strong network of donors and medical professionals.</li>
                <li><strong>Security:</strong> Robust systems to ensure privacy and security of user data.</li>
            </ul>
        </div>

        <div class="my-4 text-center">
            <h3 class="text-danger">Join Us in Saving Lives</h3>
            <p>By being a part of the <strong>Blood Management System</strong>, you're contributing to a life-saving cause. Together, we can ensure that no one has to wait for help during critical times. Every drop counts, and so does your support.</p>
            <p><strong>Let's make a difference, one drop at a time.</strong></p>
        </div>
    </div>

        </main>
        <footer>
            <!-- place footer here -->
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
    </body>
</html>


<?php include 'templates/footer.php'; ?>

