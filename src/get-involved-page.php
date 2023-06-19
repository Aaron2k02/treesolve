<!DOCTYPE html>
<!-- this page edited by qawiem -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/get-involved-page.css">
    <!-- Iconscout Cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.google.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap">
    <!--Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <title>Get Involved | TreeSolve</title>
</head>

<body>
    <nav>
        <div class="container nav-container">
            <a href="home-page.php">
                <img src="./res/Treesolve-removebg-preview.png" alt="treesolvelogo" width="170px">
            </a>
            <ul class="nav-menu">
                <?php
                session_start();
                if (isset($_SESSION['logged_in'])) {
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
    <!---------------------------------------------------- END OF NAVBAR ---------------------------------------->

    <!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
    <header>
        <div class="container header-container">
            <div class="header-left">
                <!-- <h1>TreeSolve :</h1> -->
                <h1>Join the Movement to Protect Forests and Preserve the Planet</h1>
                <p>
                    Join us now to volunteer, donate, or spread awareness about sustainable practices.
                    Together, we can make a difference and ensure a sustainable future!
                </p>
                <a href="#getInvolved" class="btn">Get Involved</a>
            </div>
            <div class="header-right">
                <div class="header-right-image">
                    <img src="./res/jungle-background.svg" alt="jungle-background">
                </div>
            </div>
        </div>
    </header>
    <!---------------------------------------------------- END OF HEADER --------------------------------------------->

    <section class="getInvolved" id="getInvolved">
        <div class="container getInvolved-container">
            <div class="getInvolved-left">
                <h1>Get Involved</h1>
                <p>
                    Make a difference in sustainable practices with TreeSolve.
                    Volunteer, donate, or Adopt-A-Tree today and work together for a greener future!
                </p>
                <a href="#bePartOfUs" class="btn">Join Now</a>
            </div>

            <div class="getInvolved-right">
                <article class="category">
                    <span class="category-icon"><i class="uil uil-award"></i></span>
                    <h5>Becoming a member</h5>
                    <p>
                        As a member, you'll have access to exclusive resources and events, and be the first to know about our latest initiatives.
                    </p>
                </article>

                <article class="category">
                    <span class="category-icon"><i class="uil uil-trees"></i></span>
                    <h5>Adopt-A-Tree Program</h5>
                    <p>
                        Support our conservation efforts by donating to plant and maintain trees, combat deforestation, and promote sustainable practices.
                    </p>
                </article>

                <article class="category">
                    <span class="category-icon"><i class="uil uil-trowel"></i></span>
                    <h5>Volunteering</h5>
                    <p>
                        Join TreeSolve's volunteer team and work towards a greener future through tree planting, education, and community outreach.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <!----------------------------------------------------------- END OF GET INVOLVED --------------------------------------------->

    <section class="bePartOfUs" id="bePartOfUs">
        <h2>Be Part Of Us</h2>
        <div class="container bePartOfUs-container">
            <article class="bePartOfUs-activity">
                <div class="bePartOfUs-activity-image">
                    <img src="./res/become-a-member.svg" alt="become-a-member-svg">
                </div>
                <div class="bePartOfUs-activity-info">
                    <h4>Becoming a member</h4>
                    <p>
                        As a member, you'll have access to exclusive resources and events, and be the first to know about our latest initiatives.
                    </p>
                    <a href="./login.php" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="bePartOfUs-activity">
                <div class="bePartOfUs-activity-image">
                    <img src="./res/adopt-a-tree.svg" alt="adopt-a-tree-svg">
                </div>
                <div class="bePartOfUs-activity-info">
                    <h4>Adopt-A-Tree Program</h4>
                    <p>
                        Support our conservation efforts by donating to plant and maintain trees, combat deforestation, and promote sustainable practices.
                    </p>
                    <a class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="bePartOfUs-activity">
                <div class="bePartOfUs-activity-image">
                    <img src="./res/volunteer.svg" alt="volunteer-svg">
                </div>
                <div class="bePartOfUs-activity-info">
                    <h4>Volunteering</h4>
                    <p>
                        Join TreeSolve's volunteer team and work towards a greener future through tree planting, education, and community outreach.
                    </p>
                    <a class="btn btn-primary" onclick="showPopupForm('Volunteering')">Learn More</a>
                </div>
            </article>
        </div>
    </section>

    <div class="popup-form-overlay" id="popupFormOverlay"></div>
    <div class="popup-form" id="popupForm">
        <h3 id="popupFormTitle"></h3>
        <form action="" method="POST">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="availabilityDate">Availability Date:</label>
            <input type="date" id="availabilityDate" name="availabilityDate" required>

            <label for="availabilityTime">Availability Time:</label>
            <input type="time" id="availabilityTime" name="availabilityTime" required>

            <label for="additionalRequest">Additional Requests:</label>
            <textarea id="additionalRequest" name="additionalRequest"></textarea>

            <button type="submit" name="submit" class="btn btn-primary" placeholder=""> Register </button>

            <!-- Close button/link -->
            <button type="button" class="btn btn-primary" onclick="closePopupForm()">Close</button>
        </form>
    </div>

    <?php
    include './connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $availabilityDate = $_POST['availabilityDate'];
        $availabilityTime = $_POST['availabilityTime'];
        $additionalRequest = $_POST['additionalRequest'];

        // Insert the form data into the 'getInvolvedAdoptATree' table
        $stmt = $mysqli->prepare("INSERT INTO `getInvolvedAdoptATree` (name, email, phone, availability_date, availability_time, additional_request) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $phone, $availabilityDate, $availabilityTime, $additionalRequest);
        $stmt->execute();

        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            echo '<script>alert("Thank you for your registering!");</script>';
        } else {
            echo '<script>alert("Failed to process your registration. Please try again.");</script>';
        }

        $stmt->close();
    }

    $mysqli->close();
    ?>
    <!----------------------------------------------------------- END OF BE PART OF US --------------------------------------------->

    <section class="faqs" id="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs-container">

            <?php
            include './connect.php';

            $query = "SELECT * FROM getinvolvedfaqs";

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $question = $row["question"];
                    $answer = $row["answer"];

                    echo '
                    <article class="faq">
                        <div class="faq-icon"><i class="uil uil-plus"></i></div>
                        <div class="question-answer">
                            <h4>' . $question . '</h4>
                            <p>' . $answer . '</p>
                        </div>
                    </article>';
                }
                $result->free();
            }

            $mysqli->close();
            ?>
        </div>
    </section>
    <!----------------------------------------------------------- END OF FAQS ----------------------------------->

    <!------------------------------------------------- END OF PAGE CONTENT ------------------------------------->

    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-1">
                <a href="home-page.php" class="footer-logo">
                    <h4>TreeSolve</h4>
                </a>
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
                    <li><a href="terms&condition.html">Terms&Conditions</a></li>
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
    <script>
        function showPopupForm(title) {
            document.getElementById('popupFormOverlay').style.display = 'block';
            document.getElementById('popupForm').style.display = 'block';
            document.getElementById('popupFormTitle').textContent = title;
        }

        function closePopupForm() {
            document.getElementById('popupFormOverlay').style.display = 'none';
            document.getElementById('popupForm').style.display = 'none';
        }
    </script>
</body>

</html>