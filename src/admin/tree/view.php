<!-- this page edited by chunhong -->
<?php 
    session_start();
    if(!isset($_SESSION['admin_logged_in'])) {
        header("Location: ../../home-page.php");
        exit;
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
    <link rel="stylesheet" href="../../css/tree-solution-page.css">
    <link rel="stylesheet" href="../../css/admin-panel.css">
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
                <li><a href="#">Tree</a></li>
                <li><a href="../article/view.php">Article</a></li>
                <li><a href="../user/view.php">User</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!---------------------------------------------------- END OF NAVBAR ---------------------------------------->

    <!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
    <main>
      <div class="container">
        <br>
        <h2 id="box1">Tree Species Information: <a href="toadd.php">Add</a></h2>
        <br>
        <table>
            <tr>
                <th>Name </th>
                <th>Location </th>
                <th>Soil Type </th>
                <th>Characteristics </th>
                <th>Benefits </th>
                <th>Picture </th>
                <th>Operation </th>
            </tr>
            <?php 
                include '../connect.php';
                $query = "SELECT * FROM tree";

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $species = $row["species"];
                        $location = $row["location"];
                        $soil_type= $row["soil_type"];
                        $characteristic = $row["characteristic"];
                        $benefits = $row["benefits"]; 
                        $image_path = $row["image_path"];

                        echo 
                            '<tr> 
                                <td>'.$species.'</td> 
                                <td>'.$location.'</td> 
                                <td>'.$soil_type.'</td> 
                                <td>'.$characteristic.'</td> 
                                <td>'.$benefits.'</td> 
                                <td><img src="../../'.$image_path.'" height="150" width="150"></td>
                                <td><a href="edit.php?id='.$id.'">Update</a><br><a href="delete.php?id='.$id.'">Delete</a></td> 
                            </tr>';
                    }
                    $result->free();
                } 
            ?>
        </table>
        <!--end of table-->
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
                    <li><a href="#">Tree</a></li>
                    <li><a href="../article/view.php">Article</a></li>
                    <li><a href="../user/view.php">User</a></li>
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
