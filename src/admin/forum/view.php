<!-- this page edited by chunhong -->
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
                <li><a href="../tree/view.php">Tree</a></li>
                <li><a href="../article/view.php">Article</a></li>
                <li><a href="#">Forum</a></li>
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
        <h2 id="box1">Forum: <a href="toadd.php">Add</a></h2>
        <br>
        <table>
            <tr>
                <th>Title </th>
                <th>Content </th>
                <th>Image </th>
                <th>Author Id </th>
                <th>Author Name </th>
                <th>Operation </th>
            </tr>
            <?php 
                include '../connect.php';
                $query = "SELECT * FROM forum JOIN user USING (user_id)";

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $forum_id = $row["forum_id"];
                        $forum_title = $row["forum_title"];
                        $forum_content = $row["forum_content"];
                        $forum_image_path = $row["forum_image_path"];
                        $user_id = $row["user_id"];
                        $name = $row["first_name"] .  $row["last_name"];

                        echo 
                            '<tr> 
                                <td>'.$forum_title.'</td> 
                                <td><img src="'.$forum_image_path.'" height="150" width="150"></td>
                                <td>'.$forum_content.'</td> 
                                <td>'.$user_id.'</td>  
                                <td>'.$name.'</td> 
                                <td><a href="edit.php?id='.$forum_id.'">Update</a><br><a href="delete.php?id='.$forum_id.'">Delete</a></td> 
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
                    <li><a href="../tree/view.php">Tree</a></li>
                    <li><a href="../article/view.php">Article</a></li>
                    <li><a href="#">Forum</a></li>
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
