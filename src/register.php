<?php
    require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/login-page.css">
    <!-- Iconscout Cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.google.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap">
    <!--Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <title>register | TreeSolve</title>
</head>

<body>
    <nav>
        <div class="container nav-container">
            <a href="home-page.php">
                <img src="./res/Treesolve-removebg-preview.png"  alt="treesolvelogo" width="170px">
            </a>
            <ul class="nav-menu">
                <li><a href="home-page.php">Home</a></li>
                <li><a href="tree-solution-page.php">Tree Solution</a></li>
                <li><a href="news&publication-page.php">News &amp; Publications</a></li>
                <li><a href="get-involved-page.php">Get Involved</a></li>
                <?php
                    if(isset($_SESSION['logged_in'])) {
                        echo '<li><a href="#" onclick="confirmLogout()">Log Out</a></li>';
                    } else {
                        echo '<li><a href="login.php">Become one of us</a></li>';
                    }
                ?>
                <li><a href="about-us-page.php">About Us</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!------------------------------------------------ End Of nav ---------------------------------------------->
    <main>
   
    <div class="border-register">
        <div class="register-container">
            <div class="image-container-register" >
                <div>
                    <img src="./res/login-pic.png" alt="login-pic" height="500px" width="350px" align="left">
                </div>
            </div>
            <div class="form-container">
                <div class="form-box register">
                    <h2 style="color: black;">Registration</h2>
                    <form action="register.php" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" name="firstname" required>
                            <label>First Name</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" name="lastname" required>
                            <label>Last Name</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input id="email" name="email" type="text" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                            <input type="text" name="phonenumber" required>
                            <label>Phone Number</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input id="pass" type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                        
                        </div>
                        <input id="regbtn" type="submit" class="btnSubmit" style="color: white;" name="register">Register</input>
                        <div class="login-register">
                            <p>Already have an account? 
                                <a href="login-page.php" class="login-link">Login</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        

        <?php
            include './connect.php';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['firstname'])) {
                $firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
                $lastname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
                $email = mysqli_real_escape_string($mysqli, $_POST['email']);
                $phonenumber = mysqli_real_escape_string($mysqli, $_POST['phonenumber']);
                $password = mysqli_real_escape_string($mysqli, $_POST['password']);

                // Validate input data
                if (empty($firstname) || empty($lastname) || empty($email) || empty($phonenumber) || empty($password)) {
                    echo 'Please fill in all the fields.';
                } else {
                    // Hash the password
                   

                    // Prepare and execute the query
                    $query = "INSERT INTO user (first_name, last_name, email, contact_number, `password`, in_mailing_list) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$password', 0)";
                    $result = mysqli_query($mysqli, $query);

                    if ($result) {
                        $_SESSION['logged_in'] = true;
                        header("Location: home-page.php");
                        exit;
                    } else {
                        echo 'Error: ' . mysqli_error($mysqli);
                    }
                }
            }
        ?>
        

    </main>

    <!------------------------------------------------ End Of content ---------------------------------------------->
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-1">
                <a href="home-page.php" class="footer-logo"><h4>TreeSolve</h4></a>
                <p>
                    Protect Forests,<br> Preserve the Planet !
                </p>
            </div>

            <div class="footer-2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="home-page.php">Home</a></li>
                    <li><a href="tree-solution-page.html">Tree Solution</a></li>
                    <li><a href="news&publication-page.html">News &amp; Publications</a></li>
                    <li><a href="get-involved-page.html">Get Involved</a></li>
                    <li><a href="about-us-page.html">About Us</a></li>
                </ul>
            </div>

            <div class="footer-3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="privacy policy.html">Privacy Policy</a></li>
                    <li><a href="terms&condition.html">Terms & Conditions</a></li>
                    <li><a href="return policy.html">Refund Policy</a></li>
                </ul>
            </div>

            <div class="footer-4">
                <h4>Contact Us</h4>
                <div>
                    <p>+(01)234567898</p>
                    <p>TreeSolve@gmail.com</p>
                </div>

                <ul class="footer-socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-copyright">
            <small>All Right Reserved &copy; 2023 - TreeSolve</small>
        </div>
    </footer>
    <!------------------------------------------------ End Of Footer ---------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //when window width is >= 600px
            breakpoints: {
                1000: {
                    slidesPerView: 2
                }
            }
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
