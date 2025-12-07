<?php
session_start();
include('connect.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabia Shaikh | Web Developer & Designer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style id="app-style"></style>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <a href="#hero" class="logo">Nabia<span>Shaikh</span></a>
                <div class="nav-links" id="navLinks">
                    <a href="#hero" class="nav-link active">Home</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#projects" class="nav-link">Projects</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </div>
                <div class="nav-right">
                    <button class="theme-toggle" id="themeToggle">
                        <i class="fas fa-moon"></i>
                    </button>
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text" data-aos="fade-right" data-aos-delay="200">
                    <h1 class="hero-name">Nabia Shaikh</h1>
                    <h2 class="hero-title">Full Stack Web Developer</h2>
                    <p class="hero-desc">I craft beautiful and functional web experiences with a focus on responsive
                        design, performance, and accessibility.</p>
                    <div class="hero-cta">
                        <a href="#projects" class="btn">View My Work</a>
                        <a href="#contact" class="btn btn-outline" style="margin-left: 1rem;">Contact Me</a>
                    </div>
                    <div class="hero-social">
                        <a href="javascript:void(0)" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/NabiaShaikh" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="javascript:void(0)" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/_shk.01_/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="hero-image" data-aos="fade-left" data-aos-delay="400">
                    <img src="images/lady.jpg" alt="Nabia Shaikh"
                        class="profile-img">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <h2>About Me</h2>
                <p>Get to know me and my skills</p>
            </div>
            <div class="about-content">
                <div class="about-text" data-aos="fade-right" data-aos-delay="200">
                    <p>Hello! I'm Nabia, a passionate full-stack web developer with over 5 years of experience in
                        building modern web applications. I enjoy turning complex problems into simple, beautiful and
                        intuitive designs.</p>
                    <p style="margin-top: 1rem;">My journey in web development started when I was in college, and I've
                        been hooked ever since. I've worked with various clients from startups to established
                        businesses, helping them achieve their goals through technology.</p>
                    <p style="margin-top: 1rem;">When I'm not coding, you'll find me exploring new technologies,
                        contributing to open source projects, or hiking in the mountains.</p>
                </div>
                <div class="about-skills" data-aos="fade-left" data-aos-delay="400">
                    <div class="skill-category">
                        <h3>Front-end Development</h3>
                        <div class="skill-list">
                            <div class="skill-item"><i class="fab fa-html5"></i> HTML</div>
                            <div class="skill-item"><i class="fab fa-css3-alt"></i> CSS3</div>
                            <div class="skill-item"><i class="fab fa-css3-alt"></i> CSS</div>
                            <div class="skill-item"><i class="fab fa-js"></i> JavaScript</div>
                        </div>
                    </div>
                    <div class="skill-category">
                        <h3>Back-end Development</h3>
                        <div class="skill-list">
                            <div class="skill-item"><i class="fab fa-node-js"></i> PHP</div>
                            <div class="skill-item"><i class="fab fa-php"></i> PHP</div>
                            <div class="skill-item"><i class="fas fa-database"></i> SQL</div>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <div class="tech-icon">
                            <i class="fa-brands fa-html5"></i>
                            <span class="tech-name">HTML</span>
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-node-js"></i>
                            <span class="tech-name">PHP</span>
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-js"></i>
                            <span class="tech-name">JavaScript</span>
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-php"></i>
                            <span class="tech-name">PHP</span>
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-git-alt"></i>
                            <span class="tech-name">Git</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <h2>My Projects</h2>
                <p>Check out some of my recent work</p>
            </div>
            <div class="projects-filter" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="ui">UI/UX Design</button>
                <button class="filter-btn" data-filter="app">App Development</button>
            </div>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card" data-category="web" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/E-commerce_Website.jpg" alt="E-commerce Website" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title">E-commerce Website</h3>
                        <p class="project-desc">A fully responsive e-commerce platform with product filtering, cart
                            functionality, and secure checkout. <br> <br> <br><br> <br> <br></p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="btn btn-sm">Live Demo</a>
                            <a href="https://nabiashaikh.github.io/E-commerce_website/" class="btn btn-sm btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project-card" data-category="ui" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/calculator.jpg"
                        alt="Real Estate Platform" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title">Calculator</h3>
                        <p class="project-desc">A calculator is an interactive web tool built using JavaScript, HTML, and CSS.
                             It performs real-time arithmetic calculations with a user-friendly interface and responsive design.
                              It demonstrates logic building, event handling, and clean UI development skills. <br>  <br> <br></p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="btn btn-sm">Live Demo</a>
                            <a href="https://nabiashaikh.github.io/Calculator_N.S/" class="btn btn-sm btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project-card" data-category="app" data-aos="fade-up" data-aos-delay="300">
                    <img src="images/dateandtime.jpg" alt="Analytics Dashboard" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title">Change Date and Time.</h3>
                        <p class="project-desc">A dynamic date and time control panel created using HTML, CSS, and JavaScript. It updates live, supports manual changes, and includes formatted display outputs. This project highlights my ability to work with real-time data and build intuitive user interactions.
                            <br><br>
                        </p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="btn btn-sm">Live Demo</a>
                            <a href="https://nabiashaikh.github.io/Change-Date-and-Time/" class="btn btn-sm btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="project-card" data-category="web" data-aos="fade-up" data-aos-delay="400">
                    <img src="images/bulb.jpg" alt="Learning Management System"
                        class="project-img">
                    <div class="project-content">
                        <h3 class="project-title">On/Off Bulb</h3>
                        <p class="project-desc">A dynamic bulb control system developed using HTML, CSS, and JavaScript.
                             The project includes event listeners, state-based UI updates, and smooth visual transitions to 
                             simulate realistic bulb behavior.<br> <br> <br> <br></p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="btn btn-sm">Live Demo</a>
                            <a href="https://nabiashaikh.github.io/Bulb-on-off/" class="btn btn-sm btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="project-card" data-category="ui" data-aos="fade-up" data-aos-delay="500">
                    <img src="images/click2grocery.jpg"
                        alt="Travel Blog" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title">Click2Grocery</h3>
                        <p class="project-desc">The platform handles storage (sometimes with temperature-control,
                             especially for perishables like meat, dairy, frozen food), and arranges delivery to your doorstep.
                            <br>  <br> <br><br>  <br> </p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="btn btn-sm">Live Demo</a>
                            <a href="https://nabiashaikh.github.io/Click2Grocery/" class="btn btn-sm btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- Project 6 -->
                 <div class="project-card" data-category="ui" data-aos="fade-up" data-aos-delay="500">
                    <img src="images/cyber.jpg"
                        alt="Travel Blog" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title">Cyber </h3>
                        <p class="project-desc">I’m a cybersecurity practitioner dedicated to building safer digital experiences. 
                            My portfolio features real-world projects in threat analysis, penetration testing, automation, and defensive 
                            security. I aim to transform complex security challenges into effective solutions.   <br> <br> </p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="btn btn-sm">Live Demo</a>
                            <a href="https://nabiashaikh.github.io/Cyber_/" class="btn btn-sm btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <h2>My Services</h2>
                <p>What I can do for you</p>
            </div>
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-desc">I build responsive, high-performance websites and web applications using
                        modern technologies and best practices.</p>
                </div>
                <!-- Service 2 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-desc">I create intuitive, user-friendly interfaces and experiences that are
                        visually appealing and functionally effective.</p>
                </div>
                <!-- Service 3 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="service-title">Custom Website Creation</h3>
                    <p class="service-desc">I design and develop custom websites tailored to your specific needs, goals,
                        and brand identity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-heading" data-aos="fade-up">
                <h2>Contact Me</h2>
                <p>Get in touch for collaborations or inquiries</p>
            </div>
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right" data-aos-delay="200">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p>Pakistan.</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>nabiafatima120@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p>+92  319-394-7457</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Website</h4>
                            <p>https://nabiashaikh.github.io/Nabia_Shaikh_Portfolio/</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-left" data-aos-delay="400">
                    <form id="contactForm" onsubmit="return handleSignIn(event)" method="post" action="register.php" >
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" class="form-input" required name="name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-input" required name="email">
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" id="subject" class="form-input" required  name="subject">
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" class="form-input form-textarea" required  name="message"></textarea>
                        </div>
                        <input type="submit" class="btn form-submit" id="submitBtn" name="submit" value="Send Message">
                        <?php
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $query=mysqli_query($conn, "SELECT contact_form.* Form 'contact_form' WHERE contact_form.email='$email' ");
    while($row=mysqli_fetch_array($query)){
        echo $row['name'].''.$row['subject'];
    }
}
?>
                        <div id="messageSuccess" class="message-status message-success">
                            Thank you for your message! I'll get back to you soon.
                        </div>
                        <div id="messageError" class="message-status message-error">
                            Oops! Something went wrong. Please try again later.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-social">
                    <a href="javascript:void(0)" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/NabiaShaikh" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="javascript:void(0)" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/_shk.01_/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <p class="footer-text">&copy; 2025 Nabia Shaikh. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <div class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script id="app-script"></script>
    <script src="javascript.js"></script>
</body>