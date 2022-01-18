<?php
require_once('C:\Xampp WebDevelopment\htdocs\portofolio\config\connection.php');
$conn = connect();

if (isset($_POST) && !empty($_POST)) :
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    $mailTo = "engkhalid.ict@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an E-mail From: " . $name . ".\n\n" . $message;

    mail($mailTo, $project, $headers, $txt);
    header("Location: index.php?MailSended");


endif;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/public/Assets/css/all.css">
    <link rel="stylesheet" href="./assets/public/Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/public/Assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="./assets/public/Assets/css/style.css">
</head>

<body>
    <div class="page">
        <header class="header">
            <nav class="navigation">
                <div class="container">
                    <!-- ==========================NavBar Section====================== -->
                    <div class="container-fluid">
                        <!-- <img src="./Assets/images/Untitled.svg" alt="" class="round-hero"> -->
                        <img src="./assets/public/Assets/images/HERO-IMAGE.png" alt="" class="shape-on-hero">
                        <img src="./assets/public/Assets/images/shaped.svg" alt="" class="round-hero">


                    </div>

                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container">
                            <a class="navbar-brand" href="#"><img src="./Assets/images/logo_2.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse wrapper" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 menue">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#skills">Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#projects">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#contacts">Contact Us</a>
                                    </li>
                                </ul>
                                <form class="d-flex">
                                </form>
                            </div>
                        </div>
                    </nav>



                    <!-- 
                    <nav class="navbar navbar-light bg-light fixed-top">
                        <div class="container">
                          <a class="navbar-brand" href="#">Offcanvas navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                      <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                                </li>
                              </ul>
                              <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </nav> -->
                </div>
            </nav>
            <!-- ==========================Header Section====================== -->

            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-6 header-items">
                            <div class="header-titles">
                                <span class="subtitle">Hello, Welcome I am</span> <br>
                                <span class="title">Eng.Khalid Abdi</span> <br>
                                <span class="subtitle">And I am <span class="colored">Full Stack Developer</span></span>
                            </div>
                            <p class="header-lorem">
                                <?php
                                $sql_header = "SELECT header_content FROM header WHERE header_id=1";
                                $result_header = mysqli_query($conn, $sql_header);

                                while ($row_header = mysqli_fetch_object($result_header)) : ?>

                            <p><?php echo $row_header->header_content; ?></p>
                        <?php endwhile;
                        ?>
                        </p>
                        <button class="hero-hirebtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" id="#contacts">Hire Me!</button>
                        <button class="explorebtn">Explore</button>
                        </div>
                        <div class="col-6 hero-img">
                            <div class="container">
                                <div class="hero-image">
                                    <!-- <img src="./Assets/images/blob (2).svg" alt=""> -->

                                </div>
                                <!-- <img src="./Assets/images/mypic_2we.png" alt="" class="mine-img"> -->
                            </div>
                        </div>
                        <ul class="sidebar-socialmedia">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                        </ul>


                    </div>
                </div>
            </div>
        </header>
        <!-- ==========================About us Section====================== -->
        <section class="about" id="about">
            <div class="about-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="about-hero">
                                <!-- <img src="./assets/public/Assets/images/mypic_2.jpg" alt=""> -->
                                <?php

                                $sql = "SELECT about_img FROM about WHERE about_id = 1";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <img src="./assets/public/Assets/images/<?php echo $row->about_img; ?>" alt="">
                                <?php
                                endwhile;
                                ?>
                                <!-- <img src="./Assets/images/dashcorner (2).svg" alt=""> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="welcomebtn">About Me</div> <br>
                            <span class="title text-center">Why Choose Me ?</span>

                            <p class="about-text">
                                <?php
                                $sql = "SELECT about_content FROM about WHERE about_id = 1 ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                            <p><?php echo $row->about_content; ?></p>
                        <?php
                                endwhile;
                        ?>
                        </p>

                        <p class="about-text">
                            <?php
                            $query = "SELECT about_content FROM about WHERE about_id = 2";
                            $process = mysqli_query($conn, $query);

                            while ($data = mysqli_fetch_object($process)) : ?>
                        <p><?php echo $data->about_content; ?></p>
                    <?php
                            endwhile;
                    ?>
                    </p>

                    <a href="./assets/public/Assets/data/Database Adminstrator.pdf" download="CV.pdf" class="hero-hirebtn align-center">Download CV</a>
                        </div>
                    </div>
                </div>
        </section>
        <div class="circle">
        </div>
    </div>
    <!-- ==========================Progresses Section====================== -->
    <section class="circular-bars">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="circular">
                        <div class="inner"></div>
                        <div class="numb1"></div>
                        <!-- <div class="type">Web Development</div> -->
                        <div class="circled">
                            <div class="bar left">
                                <div class="progress-bar"></div>
                            </div>

                            <div class="bar right">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="circular">
                        <div class="inner"></div>
                        <div class="numb2"></div>
                        <div class="circled">
                            <div class="bar left">
                                <div class="progress-bar"></div>
                            </div>

                            <div class="bar right">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="circular">
                        <div class="inner"></div>
                        <div class="numb3"></div>
                        <div class="circled">
                            <div class="bar left">
                                <div class="progress-bar"></div>
                            </div>

                            <div class="bar right">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="circular">
                        <div class="inner"></div>
                        <div class="numb4"></div>
                        <div class="circled">
                            <div class="bar left">
                                <div class="progress-bar"></div>
                            </div>

                            <div class="bar right">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================Features Section====================== -->
    <section class="cards container" id="services">
        <div class="cards_section">
            <div class="row">
                <div class="subtitle">My Services</div>
                <div class="title">My Provided Services</div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="card_content">
                        <i class="fas fa-laptop-code card_icon"></i>
                        <div class="icon_circle"></div>
                        <div class="card_body">
                            <div class="card_title">
                                <?php
                                $sql = "SELECT card_title FROM services WHERE id = 1 ";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <p><?php echo $row->card_title; ?></p>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="rectangles">
                                <span class="rectangle1"></span>
                                <span class="rectangle2"></span>
                                <span class="rectangle3"></span>
                            </div>
                            <p>
                                <?php
                                $sql = "SELECT card_content FROM services WHERE id = 1";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                            <p><?php echo $row->card_content; ?></p>
                        <?php
                                endwhile;
                        ?>
                        </p>
                        <button class="read">Read More
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="card_content">
                        <i class="fas fa-laptop-code card_icon"></i>
                        <div class="icon_circle"></div>
                        <div class="card_body">
                            <div class="card_title">
                                <?php
                                $sql = "SELECT card_title FROM services WHERE id = 2 ";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <p><?php echo $row->card_title; ?></p>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="rectangles">
                                <span class="rectangle1"></span>
                                <span class="rectangle2"></span>
                                <span class="rectangle3"></span>
                            </div>
                            <p>
                                <?php
                                $sql = "SELECT card_content FROM services WHERE id = 2";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                            <p><?php echo $row->card_content; ?></p>
                        <?php
                                endwhile;
                        ?>
                        </p>
                        <button class="read">Read More
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="card_content">
                        <i class="fas fa-laptop-code card_icon"></i>
                        <div class="icon_circle"></div>
                        <div class="card_body">
                            <div class="card_title">
                                <?php
                                $sql = "SELECT card_title FROM services WHERE id = 3 ";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <p><?php echo $row->card_title; ?></p>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="rectangles">
                                <span class="rectangle1"></span>
                                <span class="rectangle2"></span>
                                <span class="rectangle3"></span>
                            </div>
                            <p>
                                <?php
                                $sql = "SELECT card_content FROM services WHERE id = 3";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                            <p><?php echo $row->card_content; ?></p>
                        <?php
                                endwhile;
                        ?>
                        </p>
                        <button class="read">Read More
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="card_content">
                        <i class="fas fa-laptop-code card_icon"></i>
                        <div class="icon_circle"></div>
                        <div class="card_body">
                            <div class="card_title">
                                <?php
                                $sql = "SELECT card_title FROM services WHERE id = 4 ";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <p><?php echo $row->card_title; ?></p>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="rectangles">
                                <span class="rectangle1"></span>
                                <span class="rectangle2"></span>
                                <span class="rectangle3"></span>
                            </div>
                            <p>
                                <?php
                                $sql = "SELECT card_content FROM services WHERE id = 4";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                            <p><?php echo $row->card_content; ?></p>
                        <?php
                                endwhile;
                        ?>
                        </p>
                        <button class="read">Read More
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="card_content">
                        <i class="fas fa-laptop-code card_icon"></i>
                        <div class="icon_circle"></div>
                        <div class="card_body">
                            <div class="card_title">
                                <?php
                                $sql = "SELECT card_title FROM services WHERE id = 5 ";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <p><?php echo $row->card_title; ?></p>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="rectangles">
                                <span class="rectangle1"></span>
                                <span class="rectangle2"></span>
                                <span class="rectangle3"></span>
                            </div>
                            <p>
                                <?php
                                $sql = "SELECT card_content FROM services WHERE id = 5";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                            <p><?php echo $row->card_content; ?></p>
                        <?php
                                endwhile;
                        ?>
                        </p>
                        <button class="read">Read More
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="card_content">
                        <i class="fas fa-laptop-code card_icon"></i>
                        <div class="icon_circle"></div>
                        <div class="card_body">
                            <div class="card_title">
                                <?php
                                $sql = "SELECT card_title FROM services WHERE id = 6 ";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <p><?php echo $row->card_title; ?></p>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="rectangles">
                                <span class="rectangle1"></span>
                                <span class="rectangle2"></span>
                                <span class="rectangle3"></span>
                            </div>
                            <p>
                                <?php
                                $sql = "SELECT card_content FROM services WHERE id = 6";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                            <p><?php echo $row->card_content; ?></p>
                        <?php
                                endwhile;
                        ?>
                        </p>
                        <button class="read">Read More
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================Experience/skills Section====================== -->
    <section class="skill_section container" id="skills">
        <h1 class="skills_title title">My Experience</h1>
        <button class="skill_btn">Hire Me!</button>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-lg-6 skill_bars">
                <div class="skills_container">
                    <div class="">
                        <!-- ===skill bar 1=== -->
                        <div class="skills_data">
                            <div class="skill_percentage">
                                <?php
                                $sql = "SELECT percent FROM experiences WHERE id= 1";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->percent ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="inner_bar">

                                <div class="outer_bar"></div>
                            </div>
                            <div class="skill_name">
                                <?php
                                $sql = "SELECT skill_name FROM experiences WHERE id= 1";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->skill_name ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="skill_detail">
                                <?php
                                $sql = "SELECT sub_skills FROM experiences WHERE id= 1";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->sub_skills ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-lg-6 skill_bars">
                <div class="skills_container">
                    <div class="">
                        <!-- ===skill bar 2=== -->
                        <div class="skills_data">
                            <div class="skill_percentage">
                                <?php
                                $sql = "SELECT percent FROM experiences WHERE id= 2";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->percent ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="inner_bar">

                                <div class="outer_bar"></div>
                            </div>
                            <div class="skill_name">
                                <?php
                                $sql = "SELECT skill_name FROM experiences WHERE id= 2";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->skill_name ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="skill_detail">
                                <?php
                                $sql = "SELECT sub_skills FROM experiences WHERE id= 2";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->sub_skills ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-lg-6 skill_bars">
                <div class="skills_container">
                    <div class="">
                        <!-- ===skill bar 3=== -->
                        <div class="skills_data">
                            <div class="skill_percentage">
                                <?php
                                $sql = "SELECT percent FROM experiences WHERE id= 3";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->percent ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="inner_bar">

                                <div class="outer_bar"></div>
                            </div>
                            <div class="skill_name">
                                <?php
                                $sql = "SELECT skill_name FROM experiences WHERE id= 3";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->skill_name ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="skill_detail">
                                <?php
                                $sql = "SELECT sub_skills FROM experiences WHERE id= 3";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->sub_skills ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-lg-6 skill_bars">
                <div class="skills_container">
                    <div class="">
                        <!-- ===skill bar 4=== -->
                        <div class="skills_data">
                            <div class="skill_percentage">
                                <?php
                                $sql = "SELECT percent FROM experiences WHERE id= 4";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->percent ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="inner_bar">

                                <div class="outer_bar"></div>
                            </div>
                            <div class="skill_name">
                                <?php
                                $sql = "SELECT skill_name FROM experiences WHERE id= 4";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->skill_name ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="skill_detail">
                                <?php
                                $sql = "SELECT sub_skills FROM experiences WHERE id= 4";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->sub_skills ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-lg-6 skill_bars">
                <div class="skills_container">
                    <div class="">
                        <!-- ===skill bar 5=== -->
                        <div class="skills_data">
                            <div class="skill_percentage">
                                <?php
                                $sql = "SELECT percent FROM experiences WHERE id= 5";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->percent ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="inner_bar">

                                <div class="outer_bar"></div>
                            </div>
                            <div class="skill_name">
                                <?php
                                $sql = "SELECT skill_name FROM experiences WHERE id= 5";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->skill_name ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="skill_detail">
                                <?php
                                $sql = "SELECT sub_skills FROM experiences WHERE id= 5";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->sub_skills ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-lg-6 skill_bars">
                <div class="skills_container">
                    <div class="">
                        <!-- ===skill bar 6=== -->
                        <div class="skills_data">
                            <div class="skill_percentage">
                                <?php
                                $sql = "SELECT percent FROM experiences WHERE id= 6";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->percent ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="inner_bar">

                                <div class="outer_bar"></div>
                            </div>
                            <div class="skill_name">
                                <?php
                                $sql = "SELECT skill_name FROM experiences WHERE id= 6";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->skill_name ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                            <div class="skill_detail">
                                <?php
                                $sql = "SELECT sub_skills FROM experiences WHERE id= 6";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                    <span><?php echo $row->sub_skills ?></span>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- ==========================Projects Section====================== -->
    <section class="work container" id="projects">
        <div class="work_section">
            <div class="row">
                <div class="subtitle">Portofolio</div>
                <div class="title">My Work Projects</div>
                <div class="col-12">
                    <ul class="items">
                        <li class="item">All</li>
                        <li class="item">Web Pages</li>
                        <li class="item">Management Systems</li>
                        <li class="item">UI/UX</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="work_images">
                        <?php
                        $sql = "SELECT image FROM projects WHERE id=1";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_object($result)) :
                        ?>

                            <img src="./assets/public/Assets/images/<?php echo $row->image; ?>" alt="">
                        <?php endwhile ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="work_images">
                        <?php
                        $sql = "SELECT image FROM projects WHERE id=2";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_object($result)) :
                        ?>

                            <img src="./assets/public/Assets/images/<?php echo $row->image; ?>" alt="">
                        <?php endwhile ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="work_images"><?php
                                                $sql = "SELECT image FROM projects WHERE id=3";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_object($result)) :
                                                ?>

                            <img src="./assets/public/Assets/images/<?php echo $row->image; ?>" alt="">
                        <?php endwhile ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="work_images">
                        <?php
                        $sql = "SELECT image FROM projects WHERE id=4";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_object($result)) :
                        ?>

                            <img src="./assets/public/Assets/images/<?php echo $row->image; ?>" alt="">
                        <?php endwhile ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="work_images"> <?php
                                                $sql = "SELECT image FROM projects WHERE id=5";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_object($result)) :
                                                ?>

                            <img src="./assets/public/Assets/images/<?php echo $row->image; ?>" alt="">
                        <?php endwhile ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="work_images"> <?php
                                                $sql = "SELECT image FROM projects WHERE id=6";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_object($result)) :
                                                ?>

                            <img src="./assets/public/Assets/images/<?php echo $row->image; ?>" alt="">
                        <?php endwhile ?>
                    </div>
                </div>
            </div>
            <button class="view_btn">View All</button>
        </div>
        </div>
    </section>
    <!-- =========================Contact Us Section===================== -->
    <!-- <div class="contacts container">
        <div class="contact_section">
            <div class="row">
                <div class="subtitle">Get in Touch</div>
                <div class="title" >Contact Me</div>
                <div class="col-4">
                    <ul class="contact_list">
                        <li class="lists"><i class="fas fa-phone-alt icon"></i><span class="sub_contact">Call Me</span></li>  <span class="left_contact">+252-633544626</span>
                        <li class="lists"><i class="far fa-envelope icon"></i> <span class="sub_contact">My Email</span></li> <span class="left_contact">engkhalid.ict@gmail.com</span>
                        <li class="lists"><i class="fas fa-map-marker-alt icon"></i> <span class="sub_contact">Location</span></li> <span class="left_contact">Hargeisa, Somaliland</span>
                    </ul>
                </div>
                <div class="col-8">
                    <div class="form row">
                        <div class="col-6">
                            <input type="text" class="form-control mb-4" placeholder="Enter Your Name Here">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-4" placeholder="E-Mail Here">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-4" placeholder="Enter Your Project Here">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control mb-4 mt-4 textarea" placeholder="Description Here"></textarea>
                        </div>
                        <div class="col-8">
                            <button class="send_msg">Send Message <i class="fas fa-paper-plane send_icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="contacts container" id="contacts">
        <div class="contact_section">
            <div class="row">
                <div class="subtitle">Get in Touch</div>
                <div class="title">Contact Me</div>

                <div class="col-4">
                    <div class="contact_img">
                        <img src="./Assets/images/contact_image.jpg" alt="">
                    </div>
                </div>


                <div class="col-8">
                    <div class="form row">
                        <div class="col-6">
                            <input type="text" class="form-control mb-4" placeholder=" Enter Your Name Here">
                            <i class="fas fa-user-alt input_icons"></i>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-4" placeholder=" E-Mail Here">
                            <i class="fas fa-envelope input_icons"></i>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-4" placeholder=" Enter Your Project Here">
                            <i class="fas fa-lightbulb input_icons"></i>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control mb-4 mt-4 textarea"
                                placeholder=" Description Here"></textarea>
                            <i class="fas fa-comments input_icons textarea_icon"></i>
                        </div>
                        <div class="col-4">
                            <div class="send_msg">Send Message <i class="fas fa-paper-plane send_icon"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <section class="contacts container" id="contacts">
        <div class="contact_section">
            <div class="row">
                <div class="subtitle">Get in Touch</div>
                <div class="title">Contact Us</div>
                <div class="col-lg-8 col-md-12 col-xs-12 contact_left">
                    <div class="contact_info row">
                        <div class="form_title">Get in Touch</div>
                        <form action="index.php" method="POST">
                            <div class="col-12">
                                <div class="col-6">
                                    <input type="text" class="form-control mb-4" placeholder="Enter Your Name Here" name="name">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control mb-4" placeholder="E-Mail Here" name="email">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control mb-4" placeholder="Enter Your Project Here" name="project">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="" cols="30" rows="10" class="form-control textarea" placeholder="Description"></textarea>
                                </div>
                                <div class="col-8">
                                    <button type="submit" class="send_msg">Send Message <i class="fas fa-paper-plane send_icon"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 col-xs-12 contact_right">
                    <div class="contact_info">
                        <div class="form_title text-start">Contact</div>
                        <ul class="contact_list">
                            <li class="lists"><i class="fas fa-phone-alt icon"></i><span class="sub_contact">Call
                                    Me</span></li> <span class="left_contact">+252-633544626</span>
                            <li class="lists"><i class="far fa-envelope icon"></i> <span class="sub_contact">My
                                    Email</span></li> <span class="left_contact">engkhalid.ict@gmail.com</span>
                            <li class="lists"><i class="fas fa-map-marker-alt icon"></i> <span class="sub_contact">Location</span></li> <span class="left_contact">Hargeisa,
                                Somaliland</span>
                            <li class="lists"><i class="fas fa-globe icon"></i> <span class="sub_contact">Website</span>
                            </li> <span class="left_contact">EngKhalid.com</span>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============Bootstrap Modals================== -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Follow the Instructions:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Full Name</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Company Name</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Phone Number</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">E-Mail</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Job Title</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Enter Some Extra Description</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div> -->


    <!-- =========================Go to Top Button===================== -->
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>


    <!-- ==========================Footer Section====================== -->
    <section class="footer container-fluid">
        <div class="footer_section text-center">
            <!-- <a class="" href="#"><img src="./Assets/images/logo_2.png" alt=""></a> -->
            <div class="title"> <span class="eng">Eng. </span>Khalid Abdi</div>
            <span class="social-icons">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>

                </ul>
            </span>
            <div class="copyright">
                <p>&copy; <span class="copyYear"></span>
                    Eng.Khalid Abdi
                </p>
            </div>
        </div>
    </section>

    <!-- =============================End of the page ===========-->

    </div>



    <script>
        var date = new Date();
        document.querySelector(".copyYear").innerHTML = date.getFullYear();
    </script>

    <script src="./assets/public/Assets/js/main.js"></script>
    <script src="./assets/public/Assets/js/all.js"></script>
    <script src="./assets/public/Assets/js/bootstrap.min.js"></script>
    <script src="./assets/public/Assets/js/jquery.js"></script>
</body>

</html>