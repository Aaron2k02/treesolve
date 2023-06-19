<!-- this page edited by haniff & chunhong  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/tree-solution-page.css">
    <link rel="stylesheet" href="./css/admin-panel.css">
    <!-- Iconscout Cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.google.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap">
    <!--Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!--Javascript file -->
    <script src="./js/main.js"></script>
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
    <script type="text/javascript">
    (function(){
    emailjs.init("79bWaspqQMXZDOZ4T");
    })();
</script>


    <title>Tree Solution | TreeSolve</title>
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
      <div class="container">
        <br>
        <h2 id="box1">Tree Species Information</h2>
        <br>
        <input type="text" id="searchInput" placeholder="Search..." oninput="searchTrees()">
        <table id="treeTable">
            <tr>
                <th onclick="sortTable(0)">Name </th>
                <th onclick="sortTable(1)">Location </th>
                <th onclick="sortTable(2)">Soil Type </th>
                <th onclick="sortTable(3)">Characteristics </th>
                <th onclick="sortTable(4)">Benefits </th>
                <th onclick="sortTable(5)">Picture </th>
            </tr>
            <?php 
                $username = "root"; 
                $password = "1234"; 
                $database = "natureData"; 
                $mysqli = new mysqli("localhost", $username, $password, $database); 
                $query = "SELECT * FROM natureData.tree";

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
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
                                <td><img src="'.$image_path.'" height="150" width="150"></td>
                            </tr>';
                    }
                    $result->free();
                } 
            ?>
        </table>

        <script>
    function sortTable(column) {
        var table, rows, switching, shouldSwitch, x, y, shouldSwitchData, dir;
        table = document.getElementById("treeTable");
        switching = true;
        dir = "asc";
      
        while (switching) {
            switching = false;
            rows = table.rows;
            
            for (var i = 1; i < rows.length - 1; i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("td")[column];
                y = rows[i + 1].getElementsByTagName("td")[column];

                shouldSwitchData =
                    isNaN(parseFloat(x.innerHTML)) || isNaN(parseFloat(y.innerHTML))
                        ? x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()
                        : parseFloat(x.innerHTML) > parseFloat(y.innerHTML);

                if (shouldSwitchData) {
                    shouldSwitch = true;
                    break;
                }
            }

            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }

            if (dir === "asc") {
                dir = "desc";
            } else {
                dir = "asc";
            }
        }
    }
</script>
        <!--end of table-->

        <section  class="container testimonial_Container mySwiper">
            <h2 id="box2">Community Discussion</h2>
            <div class="swiper-wrapper"  >
                <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="res/David Nowak.jpg" width="100" height="100">
                    </div>
                    <div class="testimonial_info">
                        <h5>Dr. David Nowak</h5>
                        <small>Senior Scientist and Team Leader with the USDA Forest Service</small>
                    </div>
                    <div class="testimonial_body">
                        <p>"Taking care of trees is not rocket science, but it does require knowledge, skill, and effort. Proper pruning, planting, and maintenance can ensure a tree's health and longevity, which in turn provides numerous benefits to our communities and the environment."</p>
                    </div>
                </article>
            
                
        <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="res/Nalini.jpeg" width="100" height="100">
                    </div>
                    <div class="testimonial_info">
                        <h5> Dr. Nalini Nadkarni</h5>
                        <small> Professor of Biology at the University of Utah, United States of America</small>
                    </div>
                    <div class="testimonial_body">
                        <p>"To care for trees is to care for life."</p>
                    </div>
                    
                </article>
            
                <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="res/James.jpeg" width="100" height="100" >
                    </div>
                    <div class="testimonial_info">
                        <h5>James Urban</h5>
                        <small>FASLA, ISA, renowned landscape architect and urban tree expert.</small>
                    </div>
                    <div class="testimonial_body">
                        <p>"Proper tree care is not just about taking care of the tree, it's about taking care of the entire ecosystem."</p>
                    </div>
                </article>
            
                
        <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="res/Jason.jpg" width="100" height="100">
                    </div>
                    <div class="testimonial_info">
                        <h5>Jason Grabosky</h5>
                        <small>PhD, Associate Professor of Urban Forestry at Rutgers University</small>
                    </div>
                    <div class="testimonial_body">
                        <p>"One of the biggest misconceptions about tree care is that it's a one-time event. Trees are living things and require ongoing care throughout their lifetime." </p>
                    </div>
                </article>
            
                
        <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="res/Akira.jpg" width="100" height="100">
                    </div>
                    <div class="testimonial_info">
                        <h5>Dr. Akira Miyawaki</h5>
                        <small>Botanist and expert in forest restoration, Takahashi, Japan</small>
                    </div>
                    <div class="testimonial_body">
                        <p>"Trees are not just a pretty decoration on our planet, they are the lungs that provide us with oxygen, the cooling system that reduces urban heat, and the air purifier that cleans our atmosphere." </p>
                    </div> 
                </article> 
                </div>

            </section>

        </div>
    </main>

     <!--end of community discussion-->

     <section class="contact">
        <div class="container contact_container">
            <aside class="contact_aside">
                <div class="aside_image">
                    <img src="">                
                </div>
                <h2>Share Your Experience And Tips!</h2>
                <p>Taking care of trees is an important responsibility that we all share as members of this planet. Thus, share your real world experience to the community to spread the awareness about importance of trees.</p>
            </aside>
            <form  class="contact_form" id="testimonialForm" >
                <div class="form_name">
                    <input class="myplaceholder" name="firstname" type="text" id="First_Name" placeholder="First Name" required>
                    <input class="myplaceholder" name="lastname" type="text" id="Last_Name" placeholder="Last Name" required>
                    <input class="myplaceholder" name="title" type="text" id="Title" placeholder="Your Title" required>

                </div>
                <input class="myplaceholder" type="email" name="email" id="Email_Address" placeholder="Your Email Address" required>
                <textarea class="myplaceholder" name="message" id="Message" rows="7" placeholder="Your Message" required></textarea>
                <button type="submit" onclick="sendMail()" class="btn btn-primary">Submit</button>

            </form>

        </div>
        
    </section>
 
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
