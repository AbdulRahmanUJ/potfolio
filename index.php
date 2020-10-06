<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="portfolio">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Abdul Rahman">
    
    <!-- css style -->
    <link rel="stylesheet" href="/custom.css">
    <link rel="stylesheet" href="aos.css">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Abdul Rahman</title>
    <!-- title image -->
    <link rel = "icon" href = "/image/favicon.ico" type = "image/x-icon"> 
    
</head>
<body>
    <!-- header start -->
    <header>
        <div class="container">
            <div class="row">
                <div class="brand-name">
                    <img src="/image/logo6.png" alt="logo">
                    <a href="" class="logo">Abdul Rahman</a>
                </div>
                <div class="burger">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="navbar">
                    <ul>
                        <li><a href="#home" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#skill">Skills</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <section class="home" id="home">
        <div class="container">
            <div class="row full-screen">
                <div class="home-content">
                    <div class="block">
                        <h6>Hello, I'm</h6>
                        <h1>Abdul Rahman</h1>
                        <h3>Web Developer</h3>
                        <div class="cv-btn">
                            <a href="/image/Abdul Rahman.pdf" download="Abdul Rahman">Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- top button start -->
    <div class="topbutton text-right" id="home">
        <i><a href="#home" class="fa fa-arrow-up"></a></i>
    </div>
    <!-- top button end -->

    <!-- start about -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>About Me</h1>
                </div>
            </div>
            <div class="row">
                <div class="about-content">
                    <div class="row">
                        <div class="img">
                            <img src="/image/download.png" alt="about-me" data-aos="fade-right">
                        </div>
                        <div class="text">
                            <h4>I'M Abdul Rahman</h4>
                            <h6>A lead <span>UI/ UX </span>Designer based in <span>Sri lanka</span></h6>
                            <p>I Have Completed Bachelor's Degree in <span>Software Engneering </span>at <span> Southampton Solent University</span></p>

                            <div class="info">
                                <div class="list">
                                    <label for="">Name:</label>
                                    <p>Abdul Rahman</p>
                                </div>
                                <div class="list">
                                    <label for="">E-mail:</label>
                                    <p>ujabdulrahman97@gmail.com</p>
                                </div>
                                <div class="list">
                                    <label for="">DOB:</label>
                                    <p>20/ 07/ 1997</p>
                                </div>
                                <div class="list">
                                    <label for="">Age:</label>
                                    <p>23</p>
                                </div>
                                <div class="list">
                                    <label for="">Phone:</label>
                                    <p>070-2636016</p>
                                </div>
                                <div class="list">
                                    <label for="">Nationality:</label>
                                    <p>Srilankan</p>
                                </div>
                            </div>
                            <!-- Social links start -->
                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=100010044846923"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/UJ_Abdul_Rahman"><i class="fa fa-twitter"></i></a>
                                <a href="https://linkedin.com/in/abdul-rahman-75a285137"><i class="fa fa-linkedin"></i></a>
                                <a href="https://wa.link/gsgcsi"><i class="fa fa-whatsapp"></i></a>
                            </div>
                            <!-- Social links end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- start service -->
    <section class="service" id="service">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h1>Services</h1>
                </div>
            </div>
            <div class="row">
                <div class="service-content">
                    <div class="box" data-aos="flip-right">
                        <div class="icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                            <h5>Web Design</h5>
                            <p>Design Responsive and Attractive Websites.</p>
                    </div>
                    <div class="box" data-aos="flip-right">
                        <div class="icon">
                            <i class="fa fa-code"></i>
                        </div>
                            <h5>Web Development</h5>
                            <p>Develop High Secure, Static and Dynamic Websites.</p>
                    </div>
                    <div class="box" data-aos="flip-right">
                        <div class="icon">
                            <i class="fa fa-send"></i>
                        </div>
                            <h5>Software Development</h5>
                            <p>Develop Desktop Applications with Attractive User Interface.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service -->

    <!-- start skills -->
    <section class="skills" id="skill">
        <div class="container">
            <div class="row align-item-center">
                <div class="skills-content">
                    <div class="row">
                        <div class="section-title">
                            <h1>Professional Skills</h1>
                            <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. -->
                            <!--    Facilis nesciunt nulla expedita totam, sint quas.</p>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="skills-box">
                            <h6>HTML</h6>
                            <div class="skills-bar">
                                <div class="skills-bar-in" style="width: 95%;">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skills-box">
                            <h6>PHP</h6>
                            <div class="skills-bar">
                                <div class="skills-bar-in" style="width: 85%;">
                                    <span>85%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skills-box">
                            <h6>CSS</h6>
                            <div class="skills-bar">
                                <div class="skills-bar-in" style="width: 90%;">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skills-box">
                            <h6>Laravel</h6>
                            <div class="skills-bar">
                                <div class="skills-bar-in" style="width: 80%;">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skills-box">
                            <h6>Js</h6>
                            <div class="skills-bar">
                                <div class="skills-bar-in" style="width: 50%;">
                                    <span>50%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skills-box">
                            <h6>C#</h6>
                            <div class="skills-bar">
                                <div class="skills-bar-in" style="width: 70%;">
                                    <span>70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img">
                    <img src="/image/user.jpg" alt="skills" data-aos="fade-left">
                </div>
            </div>
        </div>
    </section>
    <!-- end skills -->

    <!-- portfolio work start -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h1>Latest Works</h1>
                </div>
            </div>
            <div class="row">
                <div class="filter-buttons">
                    <ul id="filter-btns">
                        <li class="active" data-target="all">All</li>
                        <li data-target="web">Web</li>
                        <li data-target="desktop">Desktop</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-gallery">
                    <div class="item" data-id="web">
                        <img src="/image/project1.png" alt="project1" data-aos="zoom-in">
                        <div class="overlay">
                            <span class="fa fa-plus"></span>
                            <h4>Online Blood Donation</h4>
                        </div>
                    </div>
                    <div class="item" data-id="web">
                        <img src="/image/project4.png" alt="project2" data-aos="zoom-in">
                        <div class="overlay">
                            <span class="fa fa-plus"></span>
                            <h4>Radient Treders</h4>
                        </div>
                    </div>
                    <div class="item" data-id="desktop">
                        <img src="/image/project2.PNG" alt="project3" data-aos="zoom-in">
                        <div class="overlay">
                            <span class="fa fa-plus"></span>
                            <h4>Top-Noach Textile</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio work end -->
    
    <!-- start contact form -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h1>Get in Touch</h1>
                </div>
            </div>
            <div class="row">
                <div class="contact-form">
                    <div class="row">
                        <div class="text">
                            <h2>Drop us a line</h2>
                            <p>i'm here to answer any question you may have</p>
                        </div>
                    </div>
                    
                    <form action="contact.php" method="post" id="contact_form">
                        <div class="row space-between">
                            <div class="col-4 ">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" title="Name" required>
                            </div>
                            <div class="col-4">
                                <input type="email" class="form-control" placeholder="e-mail" id="email" name="email" title="e-mail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="message" id="message" class="form-control" placeholder="Type your message here...." title="Type your message here...." required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="button text-right">
                                <button class="button text-right" name="submit" type="submit">Get in Touch</button>
                            </div>
                        </div>  
                    </form>                  
                </div>
            </div>
        </div>
    </section>
    
    <!-- end contact form -->

    <!-- strat footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <img src="/image/logo6.png" alt="logo">
                    Abdul Rahman
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/profile.php?id=100010044846923"><i class="fa fa-facebook"></i></a>
                    <a href="https://linkedin.com/in/abdul-rahman-75a285137"><i class="fa fa-linkedin"></i></a>
                    <a href="https://twitter.com/UJ_Abdul_Rahman"><i class="fa fa-twitter"></i></a>
                    <a href="https://wa.link/gsgcsi"><i class="fa fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    
    <!-- start copyright -->
    <section class="copyright">
        <div class="container">
            <p>&copy; 2020 copyright. all right reserved by <a href="">Abdul Rahman</a></p>
        </div>
    </section>
    <!-- end copyright -->
    <!-- start light box -->
    
    <div class="lightbox">
        <span class="close-lightbox fa fa-close"></span>
        <img src="/image/project4.png" alt="lightbox">
    </div>
    <!-- end light box -->
    
    <script src="/jquery.min.js"></script>
    <script src="/custom.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="aos.js"></script>
    <script type="text/javascript">
        AOS.init({
            offset: 250,
            duration:1000,
        });
    </script>
</body>
</html>



