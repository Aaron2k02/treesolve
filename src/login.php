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

    <title>login | TreeSolve</title>
</head>

<body>
    <nav>
        <div class="container nav-container">
            <a href="home-page.php">
                <img src="./res/Treesolve-removebg-preview.png"  alt="treesolvelogo" width="170px">
            </a>
            <ul class="nav-menu">
                <?php
                    session_start();
                    if(isset($_SESSION['logged_in'])) {
                        echo '<li><a href="home-page.php">Home</a></li>';
                        echo '<li><a href="tree-solution-page.php">Tree Solution</a></li>';
                        echo '<li><a href="news&publication-page.php">News &amp; Publications</a></li>';
                        echo '<li><a href="get-involved-page.php">Get Involved</a></li>';
                        echo '<li><a href="logout.php" onclick="confirmLogout()"> Log Out </a> </li>';
                        echo '<li><a href="about-us-page.php">About Us</a></li>';
                    } else {
                        echo '<li><a href="home-page.php">Home</a></li>';
                        echo '<li><a href="login.php">Become one of us</a></li>';
                        echo '<li><a href="about-us-page.php">About Us</a></li>';
                    }
                ?>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!------------------------------------------------ End Of nav ---------------------------------------------->
    <main>
        <?php
            include './connect.php';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Database connection
                if ($mysqli->connect_error) {
                    die("Failed to connect: " . $mysqli->connect_error);
                } else {
                    $stmt = $mysqli->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
                    $stmt->bind_param("ss", $email, $password);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows == 1) {
                        // Successful login
                        $_SESSION['logged_in'] = true;
                        echo '<script>alert("Login Successfully");</script>';
                        header("Location: home-page.php");
                        exit;
                    } else {
                        // Failed login
                        echo '<script>alert("Failed login");</script>';
                    }
                }
            }
        ?>
    <div class="border">
        <div class="login-container">
            <div class="image-container">
                <div>
                    <img src="./res/login-pic.png" alt="login-pic" height="420px" width="265px" align="left">
                </div>
            </div>
            <div class="form-container">
                <div class="form-box login">
                    <h2 style="color: black;">Login</h2>
                    <form action="login.php" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input id="email" type="text" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input id="password" type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <!--<label><input type="checkbox">Remember Me</label>-->
                            <a href="#">Forgot Password?</a>
                        </div>
                        <button type="submit" id="loginbtn" class="btnSubmit" style="color: white;">Login</button>
                        <div class="login-register">
                            <p>Don't have an account? 
                                <a href="register.php" class="register-link" style="color: black;">Register</a> </p>

                            <p>Admin
                                <a href="./admin/login.php" class="register-link" style="color: black;">Login</a> </p>
                        </div>
                    
                    </form>
                </div>
                </div>
            </div>
        </div>
    </main>

    <!------------------------------------------------ End Of content ---------------------------------------------->
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-1">
                <a href="login.php" class="footer-logo"><h4>TreeSolve</h4></a>
                <p>
                    Protect Forests,<br> Preserve the Planet !
                </p>
            </div>

            <div class="footer-2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="home-page.php">Home</a></li>
                    <li><a href="tree-solution-page.php">Tree Solution</a></li>
                    <li><a href="news&publication-page.php">News &amp; Publications</a></li>
                    <li><a href="get-involved-page.php">Get Involved</a></li>
                    <li><a href="about-us-page.php">About Us</a></li>
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