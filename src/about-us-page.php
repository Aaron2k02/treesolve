<!-- this page edited by haniff -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/about-us-page.css">
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

    <title>About Us | TreeSolve</title>
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
    <form id="logoutForm" action="logout.php" method="post" style="display: none;"></form>
    <!---------------------------------------------------- END OF NAVBAR ---------------------------------------->

    <!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
    <main>
        <div class="container-fluid bg-image">
        <div class="container">
            <br>
            <div class="container-fluid" style="background-color: #2f603f;">
            <br><h1 class="text-center animate">Vision</h1>
                <p class="text-center animate">
                    Our vision is a world where forests are protected and conserved for the benefit of future generations, where the natural balance of our planet is maintained, and where people and wildlife thrive together in harmony.
                </p><br>
                <br><hr class="hr animate"><br><h1 class="text-center animate">Mision</h1>
                <p class="text-center animate">
                    Our mission is to protect and conserve forests by promoting sustainable practices, reducing deforestation and degradation, and restoring degraded areas. We aim to work with communities, governments, and other stakeholders to raise awareness, provide education, and develop solutions that enable forests to remain intact, while providing benefits such as clean water, clean air, and biodiversity conservation. We also aim to engage in advocacy and policy dialogue to ensure that forests are recognized as vital ecosystems and that their protection is prioritized at all levels. Ultimately, we strive to create a future where forests are valued, protected, and restored, and where people and nature can coexist in harmony.
                </p><br><br>
            </div>
                <br>
                <h2 class="text-center animate">Meet Our Team</h2><br>
                        <div class="container team-container animate">
                            <article class="team-member">
                                <div class="team-member-image">
                                    <img src="./res/aaron.png" alt="aaron">
                                </div>
                                <div class="team-member-info">
                                    <h4>Aaron Chee Thian Shin</h4>
                                    <p>Executive Director</p>
                                    <div class="team-member-socials">
                                        <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                                        <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                                        <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                                    </div>
                                </div>
                            </article>

                            <article class="team-member">
                                <div class="team-member-image">
                                    <img src="./res/anep.png" alt="anep">
                                </div>
                                <div class="team-member-info">
                                    <h4>Haniff bin Hasri</h4>
                                    <p>Director of Development</p>
                                    <div class="team-member-socials">
                                        <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                                        <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                                        <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                                    </div>
                                </div>
                            </article>

                            <article class="team-member">
                                <div class="team-member-image">
                                    <img src="./res/tan.png" alt="tan">
                                </div>
                                <div class="team-member-info">
                                    <h4>Tan Chun Hong</h4>
                                    <p>Operation Manager</p>
                                    <div class="team-member-socials">
                                        <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                                        <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                                        <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                                    </div>
                                </div>
                            </article>

                            <article class="team-member">
                                <div class="team-member-image">
                                    <img src="./res/hazrin.png" alt="hazrin">
                                </div>
                                <div class="team-member-info">
                                    <h4>Mohd Hazrin bin Mohamad</h4>
                                    <p>Regional Manager</p>
                                    <div class="team-member-socials">
                                        <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                                        <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                                        <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                                    </div>
                                </div>
                            </article>

                            <article class="team-member">
                                <div class="team-member-image">
                                    <img src="./res/8._gambar_bckground_biru-removebg-preview.png" alt="">
                                </div>
                                <div class="team-member-info">
                                    <h4>Muhammad Muqri Qawiem Bin Hanizam</h4>
                                    <p>Volunteer Coordinator</p>
                                    <div class="team-member-socials">
                                        <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                                        <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                                        <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                  <br><hr class="hr animate"><br>
                    <h1 class="display-6 text-center animate">How to use the website</h1><br>
                    <iframe width="400" height="225" src="https://www.youtube.com/embed/Tw-d5HgiG5s" frameborder="0" allowfullscreen></iframe>
                    
                    
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
                600: {
                    slidesPerView: 2
                }
            }
        });
    </script>
</body>
</html>

