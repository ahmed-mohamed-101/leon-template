<?php include("connection.php"); ?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST['send'])) {
    $sql1 = "alter TABLE products AUTO_INCREMENT = 1";
    mysqli_query($con, $sql1);
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $sql = "insert into mails(name,email,message) values('$name','$email','$message')";
    mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leon | Template One</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/leon.css" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <img class="logo" src="images/logo.png" alt="" />
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="http://localhost/leon-website/index.php">Home</a></li>
                    <li><a href="http://localhost/leon-website/adminpage.php">Admin</a></li>
                    <li><a href="http://localhost/leon-website/registrationpage.php">Sign up</a></li>
                    <li><a href="http://localhost/leon-website/loginpage.php">Sign in</a></li>
                    <li><a href="http://localhost/leon-website/logoutpage.php">Sign out<i
                                class="fa-solid fa-arrow-right-from-bracket" style="float:right;"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Landing Section -->
    <div class="landing">
        <div class="intro-text">
            <h1>hello there</h1>
            <p>We are Leon - Super Creative & Minimal Agency Web Template</p>
        </div>
    </div>
    <!-- End Landing Section -->
    <!-- Start Features -->
    <div class="features">
        <div class="container">
            <div class="feat">
                <i class="fas fa-magic fa-3x"></i>
                <h3>Tell Us Your Idea</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab</p>
            </div>
            <div class="feat">
                <i class="far fa-gem fa-3x"></i>
                <h3>We Will Do All The Work</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab</p>
            </div>
            <div class="feat">
                <i class="fas fa-globe-asia fa-3x"></i>
                <h3>Your Product is Worldwide</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab</p>
            </div>
        </div>
    </div>
    <!-- End Features -->
    <!-- Start Services -->
    <div class="services" id="services">
        <div class="container">
            <h2 class="special-heading">Services</h2>
            <p>Don't be busy, be productive</p>
            <div class="services-content">
                <div class="col">
                    <!-- Start Service -->
                    <div class="srv">
                        <i class="fas fa-palette fa-2x"></i>
                        <div class="text">
                            <h3>Graphic Design</h3>
                            <p>
                                Graphic design is the process of visual communication and problem-solving using one or
                                more of
                                typography, photography and illustration.
                            </p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fab fa-sketch fa-2x"></i>
                        <div class="text">
                            <h3>UI & UX</h3>
                            <p>
                                Process of enhancing user satisfaction with a product by improving the usability,
                                accessibility, and
                                pleasure provided in the interaction.
                            </p>
                        </div>
                    </div>
                    <!-- End Service -->
                </div>
                <div class="col">
                    <!-- Start Services -->
                    <div class="srv">
                        <i class="fas fa-vector-square fa-2x"></i>
                        <div class="text">
                            <h3>Web Design</h3>
                            <p>
                                Web design encompasses many different skills and disciplines in the production and
                                maintenance of
                                websites.
                            </p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fas fa-pencil-ruler fa-2x"></i>
                        <div class="text">
                            <h3>Web Development</h3>
                            <p>
                                Web development is a broad term for the work involved in developing a web site for the
                                Internet or an
                                intranet.
                            </p>
                        </div>
                    </div>
                    <!-- End Services -->
                </div>
                <div class="col">
                    <div class="image image-column">
                        <img src="images/services.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start Portfolio -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="special-heading">Portfolio</h2>
            <p>If you do it right, it will last forever.</p>
            <div class="portfolio-content">
                <?php
                $query = "select * from products";
                $records = mysqli_query($con, $query);
                while ($data = mysqli_fetch_array($records)) {
                    ?>
                    <div class="card">
                        <img src="<?php echo $data['image']; ?>" alt="" />
                        <div class="info">
                            <h3>
                                <?php echo $data['productName']; ?>
                            </h3>
                            <p>
                                <?php echo $data['description']; ?>
                            </p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
    <!-- Start About -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="special-heading">About</h2>
            <p>Less is more work</p>
            <div class="about-content">
                <div class="image">
                    <img src="images/about.jpg" alt="" />
                </div>
                <div class="text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nemo neque voluptate tempora
                        velit cum non,
                        fuga vitae architecto delectus sed maxime rerum impedit aliquam obcaecati, aut excepturi iusto
                        laudantium!
                    </p>
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, sapiente. Velit iure
                        exercitationem
                        dolores nesciunt dolore. Eum officiis dolorum hic voluptate quaerat minima, similique inventore
                        esse,
                        alias, sed quo officia?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h2 class="special-heading">Contact</h2>
            <p>We are born to create</p>
            <!-- start contact form -->
            <form class="form" method="POST" action="index.php">
                <h2>CONTACT US</h2>
                <p type="Name:">
                    <input name="name" placeholder="Write your name here.."></input>
                </p>
                <p type="Email:">
                    <input name="email" placeholder="Let us know how to contact you back.."></input>
                </p>
                <p type="Message:">
                    <input name="message" placeholder="What would you like to tell us.."></input>
                </p>
                <button type="submit" name="send">Send Message</button>
            </form>
            <!-- end contact form -->
            <div class="info">
                <p class="label">Feel free to drop us a line at:</p>
                <a href="mailto:leonagency@mail.com?subject=Contact" class="link">leonagency@mail.com</a>
                <div class="social">
                    Find Us On Social Networks
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer -->
    <div class="footer">&copy; 2021 <span>Leon</span> All Right Reserved</div>
    <!-- End Footer -->
</body>

</html>















































<!-- <div class="card">
    <img src="images/portfolio-2.jpg" alt="" />
    <div class="info">
        <h3>Project Here</h3>
        <p>My creative ability is very difficult to measure because it can manifest in so many
            surprising and.</p>
    </div>
</div>
<div class="card">
    <img src="images/portfolio-3.jpg" alt="" />
    <div class="info">
        <h3>Project Here</h3>
        <p>My creative ability is very difficult to measure because it can manifest in so many
            surprising and.</p>
    </div>
</div> -->