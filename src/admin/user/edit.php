<!-- this page edited by chunhong -->
<?php 
    session_start();
    if(!isset($_SESSION['admin_logged_in'])) {
        header("Location: ../../home-page.php");
        exit;
    }
    if(isset($_GET['id'])) {
        include '../connect.php';
        $query = "SELECT * FROM user WHERE user_id =".$_GET['id'];

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $id = $_GET['id'];
                $email = $row["email"];
                $first_name = $row["first_name"];
                $last_name = $row["last_name"];
                $contact_number = $row["contact_number"]; 
                $in_mailing_list = $row["in_mailing_list"];
            }
            $result->free();
        } 
    } else {
        header('Location: view.php');
        exit();
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/general.css">
    <link rel="stylesheet" href="../../css/news&publication-page.css">
    <link rel="stylesheet" href="../../css/home-page.css">
    <!-- Iconscout Cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.google.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap">
    <!--Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Tree Solution | TreeSolve</title>
</head>
<body>
    <nav>
        <div class="container nav-container">
            <a href="home-page.html">
                <img src="../../res/Treesolve-removebg-preview.png"  alt="treesolvelogo" width="170px">
            </a>
            <ul class="nav-menu">
                <li><a href="../home.php">Admin Home</a></li>
                <li><a href="../tree/view.php">Tree</a></li>
                <li><a href="../article/view.php">Article</a></li>
                <li><a href="view.php">User</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!---------------------------------------------------- END OF NAVBAR ---------------------------------------->

    <!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
    <main>
    <div class="container main-container">
            <div class="main-left">
                <div class="main-image">
                    <img src="../../res/tree.svg" alt="tree">
                </div>
            </div>
            <div class="main-right">
                <h3>Edit User</h3>
                <form class="register__form" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form__name">
                        <input type="text" name="first_name" required value="<?php echo $first_name ?>">
                        <input type="text" name="last_name" required value="<?php echo $last_name ?>">
                    </div>
                    <input type="email" name="email" required value="<?php echo $email ?>">
                    <input type="text" name="contact_number" required value="<?php echo $contact_number ?>">
                    In Mailing List: <input type="checkbox" name="in_mailing_list" value="1">
                    <input class="btn btn-primary" type="submit" value="Edit">
                </form>
            </div>
        </div>
    </main>
 
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
                    <li><a href="../home.php">Admin Home</a></li>
                    <li><a href="../tree/view.php">Tree</a></li>
                    <li><a href="../article/view.php">Article</a></li>
                    <li><a href="view.php">User</a></li>
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
            slidesPerView: 2,
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
    <script> var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });</script>
</body>
</html>
