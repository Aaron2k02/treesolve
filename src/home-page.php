<!-- this page edited by chun hong -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/home-page.css">
    <!-- Iconscout Cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.google.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap">
    <!--Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!--Javascript file -->
    <script src="./js/main.js"></script>

    

    <title>Home | TreeSolve</title>
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
                <li><a href="about-us-page.html">About Us</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <form id="logoutForm" action="logout.php" method="post" style="display: none;"></form>
    <!---------------------------------------------------- END OF NAVBAR ---------------------------------------->
    <!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
    <header>
        <div class="container header-container">
            <br>
            <br>
            <br>
            <h1>TreeSolve</h1>
            <h2>Life Protect Life</h2>
        </div>
    </header>

    <main>
        <div class="container main-container">
            <div class="main-left">
                <div class="main-image">
                    <img src="./res/tree.svg" alt="tree">
                </div>
            </div>
            <div class="main-right">
                <h3>Who are us?</h3>
                <p>
                    TreeSolve is an initiative dedicated to preserving the world's forests by educating people about their importance and promoting sustainable practices.
                </p>
                <br>
                <h3>What we provide?</h3>
                <p>
                    TreeSolve is the ultimate solution for community to plan, monitor, and share tree planting activities.
                </p>
                <br>
                <a href="tree-solution-page.html" class="btn">Check the Solution</a>
            </div>
        </div>
        <hr>
        <div class="container main-container">
            <div class="main-left">
                <h3>Concern our planet</h3>
                <p>
                    TreeSolve can help in track environmental impact, such as carbon sequestration, air quality improvement, and habitat restoration.
                </p>
                <br>
                <h3>Get connect to the community</h3>
                <p>
                    TreeSolve can help you to connect with other tree planters, join community projects, and access educational resources
                </p>
                <br>
                <a href="get-involved-page.html" class="btn">Get Involved</a>
            </div>
            <div class="main-right">
                <div class="main-image">
                    <img src="./res/planting_tree.svg" alt="people planting tree">
                </div>
            </div>
        </div>
        <div class="container main-container">
            <div class="main-left">
                <div class="main-image">
                    <img src="./res/Search-bro.svg" alt="news and publication">
                </div>
            </div>
            <div class="main-right">
                <h3>Concern our planet</h3>
                <p>
                    Stay updated on the latest news and insights from TreeSolve and our partners. Explore our blog and newsletter for inspiring stories on how to make a difference for the planet.
                </p>
                <br>
                <h3>Don’t Miss Out on the Latest News from TreeSolve</h3>
                <p>
                    Subscribe to our newsletter and get monthly updates on our projects, achievements and events.
                </p>
                <br>
                <a href="news&publication-page.html" class="btn">Learn more</a>
            </div>
        </div>
    </main>
    <!------------------------------------------------- END OF PAGE CONTENT ------------------------------------->

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
                    <li><a href="home-page-in-session.php">Home</a></li>
                    <li><a href="tree-solution-page-in-session.php">Tree Solution</a></li>
                    <li><a href="news&publication-page-in-session.php">News &amp; Publications</a></li>
                    <li><a href="get-involved-page-in-session.html">Get Involved</a></li>
                    <li><a href="about-us-page-in-session.html">About Us</a></li>
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
                600: {
                    slidesPerView: 2
                }
            }
        });
    </script>
</body>
</html>
