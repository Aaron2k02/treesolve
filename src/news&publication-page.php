<!DOCTYPE html>
<!-- this page edited by aaron -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/news&publication-page.css">
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

    <title>News &amp; Publications | TreeSolve</title>
</head>
<body>
    <nav>
        <div class="container nav-container">
            <a href="home-page.html">
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
    <form id="logoutForm" action="logout.php" method="post" style="display: none;"></form>
    <!---------------------------------------------------- END OF NAVBAR ---------------------------------------->

    <!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
    <header class="header-content">
        <div class="container header-content-container">
            <h1> Growing Together <br/> The Latest News and Insights from TreeSolve </h1>
        </div>
    </header>
    
    <!----------------------------------------------- END OF HEADER --------------------------------------------->

    <section class="container experience_Container mySwiper">

        <h1> What’s New at Tree Check </h1> 

        <p> Stay updated on our latest projects and achievements as we work towards a greener and healthier planet </p>

        <p> Explore our blog and newsletter for inspiring stories and useful tips from our team and partners </p>

        <div class="swiper-wrapper">
    
            <?php
            
            include './connect.php';
    
            $query = "SELECT * FROM article";
    
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $title = $row["title"];
                    $content = $row["content"];
    
                    echo 
                        '<article class="experience swiper-slide">
                        
                            <div class="profile">
                                <img src="./res/article'.$id.'.PNG" alt="profile picture"> 
                            </div>
    
                            <div class="profile-info">
                                <h4>'.$title.'</h4>
                              
                            </div>
    
                            <div class="experince-info"> 
                                <p>'.$content.'</p>
                                <div class="footer-links">
                                    <span>
                                        <a href="https://www.example.com" class="btn btn-primary">Learn more</a> 
                                    </span>
    
                                    <span>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    </span>
    
                                    <span>
                                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                                    </span>
    
                                    <span>
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                    </span>
                                </div>
                            </div>
    
                        </article>';
                }
                $result->free();
            }
    
            $mysqli->close();

            ?>

        </div>
    
        <div class="swiper-pagination"></div>

    </section>

    <!----------------------------------------------- END OF NEWS & PUBLICATION --------------------------------------------->
    
    <section class="contact"> 

         <h1> Subscribe to Our News & Publications </h1>

        <div class="container contact__container">

            <aside class="contact__aside">

                <div class="aside__iamge"> 
                    <img src="./res/register-for-news-letter.svg">
                </div>

                <h2> Signup for Tree Check Newsletter </h2>

                <p> 
                    Get our tree newsletter delivered to your inbox. By subscribing to our news and publications, you will get access to exclusive updates and insights on our efforts on reforestation. You will also learn how you can get involved and make a difference in your own way. Don’t miss this opportunity to be part of our vision for a greener and healthier world. Subscribe today!
                </p>

            </aside>


            <form class="register__form" method="POST" action="">
                <div class="form__name">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>

                <input type="email" name="email_address" placeholder="Your Email Address" required>

                <textarea type="text" name="message" rows = "7" placeholder="Message" required></textarea>

                <button type="submit" name="submit" class="btn btn-primary"> REGISTER </button>
            </form>

            <?php
                include './connect.php';

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
                    $firstName = $_POST['first_name'];
                    $lastName = $_POST['last_name'];
                    $email = $_POST['email_address'];
                    $message = $_POST['message'];

                    // Check if the user exists in the 'user' table
                    $userExists = false;
                    $stmt = $mysqli->prepare("SELECT in_mailing_list FROM user WHERE email = ?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $stmt->store_result();
                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($inMailingList);
                        $stmt->fetch();

                        if ($inMailingList == 0) {
                            // Update 'in_mailing_list' column to true for the existing user
                            $stmt = $mysqli->prepare("UPDATE user SET in_mailing_list = 1 WHERE email = ?");
                            $stmt->bind_param("s", $email);
                            $stmt->execute();

                            // Insert a new registration record in the 'registration' table
                            $stmt = $mysqli->prepare("INSERT INTO registration (email, first_name, last_name, message) VALUES (?, ?, ?, ?)");
                            $stmt->bind_param("ssss", $email, $firstName, $lastName, $message);
                            $stmt->execute();

                            echo '<script>alert("Successfully updated the mailing list status.");</script>';
                        } else {
                            echo '<script>alert("You are already subscribed to our news and publication.");</script>';
                        }
                    } else {
                        echo '<script>alert("Please complete the registration on our website before registering for news and publication.");</script>';
                    }
                }

                $mysqli->close();
            ?>

        </div>

    </section>


    <!----------------------------------------------- END OF REGISTER FOR NEWS & PUBLICATION --------------------------------------------->

    <section class="faqs" id="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs-container">
            <?php
            include './connect.php';

            $query = "SELECT * FROM newsLetterfaqs";

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $question = $row["question"];
                    $answer = $row["answer"];

                    echo '
                    <article class="faq">
                        <div class="faq-icon"><i class="uil uil-plus"></i></div>
                        <div class="question-answer">
                            <h4>'.$question.'</h4>
                            <p>'.$answer.'</p>
                        </div>
                    </article>';
                }
                $result->free();
            }

            $mysqli ->close();
            ?>
        </div>

    </section>

    <!----------------------------------------------- END OF FAQ --------------------------------------------->


    <!------------------------------------------------- END OF PAGE CONTENT ------------------------------------->

    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-1">
                <a href="home-page.html" class="footer-logo"><h4>TreeSolve</h4></a>
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
                1000: {
                    slidesPerView: 2
                }
            }
        });
    </script>
</body>
</html>
