<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale = 1.0">
    <title>Omar Faruk Rakib</title>
    <link rel="stylesheet" href="design.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="website icon" type="jpg" href="omar.png">
</head>

<body>

    <!--NAV BAR SECTION-->

    <nav class="navbar">
        <a href="#" class="logo"><b><big>OMAR.</big></b></a>
        <ul id="nav-ul">
            <li class="active"><a href="#home">Home</a></li>
            <li id="nav-li"><a href="#about">About</a></li>
            <li id="nav-li"><a href="#education">Education</a></li>
            <li id="nav-li"><a href="#skill">Skills</a></li>
            <li id="nav-li"><a href="#portfolio">Portfolio</a></li>
            <li id="nav-li"><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!--HOME SECTION DESIGN-->

    <section class="home" id="home">
        <div class="homeInfo">
            <h1>Omar Faruk Rakib</h1>
            <h3>Undergraduate CSE Student | Full-Stack Web Developer</h3>
            <p>I'm a Computer Science student at UITS with a passion for full-stack web development. I turn ideas
                into responsive, user-friendly web apps and thrive on learning the latest tech. From sleek front-ends to
                powerful back-ends, I love building things that work—and work well. Always up for new challenges,
                collaborations, and creating something awesome.<br><br> Let’s build the future, one line of code at a
                time.
            </p>
            <div class="icon">
                <a href="https://www.facebook.com/omarfaruk.rakib.26"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/omarrr_.ig/"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.youtube.com/@omarfarukrakib26"><i class='bx bxl-youtube'></i></a>
                <a href="https://www.linkedin.com/in/omarfarukrakib26/"><i class='bx bxl-linkedin-square'></i></a>
                <a href="https://github.com/Cyb3rSoldier"><i class='bx bxl-github'></i></a>
            </div>
        </div>
        <div class="img">
            <div class="img-box">
                <div class="img-item">
                    <img src="omar.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--ABOUT SECTION DESIGN-->

    <section class="about" id="about">
        <div class="about-content">
            <h2 class="heading">ABOUT <span id="span">Me</span></h2>
            <p>Hello! 👋 I’m an undergraduate Computer Science and Engineering student at UITS with a passion for building impactful digital solutions. My goal is to become a skilled Full-Stack Web Developer who can turn ideas into powerful, user-friendly applications.

                I work confidently with HTML, CSS, PHP (backend), and MySQL (database), and I also have experience in C, C++, and Java. This mix of web and programming skills helps me design complete projects from frontend to backend with efficiency and creativity.

                Beyond coding, I bring strong problem-solving skills, adaptability, and teamwork, which help me grow and deliver in dynamic environments. I’m always eager to learn, explore new technologies, and take on challenges that push me forward.

                🚀 Currently, I’m working on full-stack projects and looking for opportunities to collaborate, contribute, and create meaningful solutions.
            </p>
        </div>
    </section>

    <!--EDUCATION SECTION DESIGN-->

    <section class="education" id="education">
        <h2 class="heading">MY <span id="span">EDUCATION</span></h2>
        <div class="box-container">
            <div class="edu-box">
                <i class="edu"></i>
                <span><b>Bachelor of Science</b></span>
                <h1 id="institution2">UNIVERSITY OF INFORMATION TECHNOLOGY AND SCIENCES</h1>
                <pre>Location: Dhaka, Bangladesh
Department: Computer Science and Engineering
Year: 2024-2027 (expected)
CGPA: 3.85 out of 4</pre>
            </div>
            <div class="edu-box">
                <i class="edu"></i>
                <span><b>Higher Secondary Certificate</b></span>
                <h3></h3>
                <h1 id="institution">SABUJBAGH GOVERNMENT COLLEGE</h1>
                <pre>Location: Dhaka, Bangladesh
Group: Science
Year: 2019-2021
GPA: 5 out of 5</pre>
            </div>
            <div class="edu-box">
                <i class="edu"></i>
                <span><b>Secondary School Certificate</b></span>
                <h3></h3>
                <h1 id="institution">KPB SCHOOL AND COLLEGE</h1>
                <pre>Location: Dhaka, Bangladesh
Group: Science
Year: 2017-2019
GPA: 5 out of 5</pre>
            </div>
        </div>
    </section>

    <!--SKILLS SECTION DESIGN-->

    <section class="skill" id="skill">
        <h2 class="heading">MY <span id="span">SKILLS</span></h2>
        <div class="skill-box">
            <div class="skill-list">
                <span id="logospan"><b>HTML</b></span>
                <img id="logo" src="html-icon.png">
            </div>
            <div class="skill-list">
                <span id="logospan"><b>CSS</b></span>
                <img id="logo" src="css-icon.png">
            </div>
            <div class="skill-list">
                <span id="logospan"><b>C</b></span>
                <img id="logo" src="c-icon.png">
            </div>
            <div class="skill-list">
                <span id="logospan"><b>C++</b></span>
                <img id="logo" src="c++-icon.png">
            </div>
            <div class="skill-list">
                <span id="logospan"><b>Java</b></span>
                <img id="logo" src="java-icon.png">
            </div>
            <div class="skill-list">
                <span id="logospan"><b>MySQL</b></span>
                <img id="logo" src="mysql-icon.png">
            </div>
            <div class="skill-list">
                <span id="logospan"><b>PHP</b></span>
                <img id="logo" src="php.png">
            </div>
        </div>
    </section>

    <!--PORTFOLIO SECTION DESIGN-->

    <section class="Portfolio" id="portfolio">
        <h2 class="heading">LATEST </br><span id="span">PROJECTS</span></h2>
        <section class="carousel-section">

            <!-- Radio Buttons -->
            <input type="radio" name="slider" id="slide1" checked>
            <input type="radio" name="slider" id="slide2">

            <div class="carousel">

                <!-- Project 1 -->
                <div class="slide slide-1">
                    <div class="content">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/H-Krp1LMaSI?si=Jkipf6PuqTBHsvUS"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                        <div class="info">
                            <h3>1. Finance Manager</h3>
                            <p>Track income & expenses using a C++/Qt GUI app with data visualization.</p>
                            <pre>🛠️ Features Overview:

📇 Income & Expense Entry Forms with Validation
📅 Date-Wise Record Management
📊 Automatic Balance Computation
📑 Tabular Display of Transactions Using QTableView
🎨 Visually Styled Forms Using Qt Designer</pre><br>
                            <div class="tags"><span>C++</span><span>Qt</span></div>
                            <div class="icon2">
                                <span id="gitspan">GitHub Repository link:</span>
                                <a href="https://github.com/Cyb3rSoldier/Finance-Manager" target="_blank">
                                    <i class='bx bxl-github'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <label for="slide2" class="nav right">&gt;</label>
                </div>

                <!-- Project 2 -->
                <div class="slide slide-2">
                    <div class="content">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/_QpJk0kdoEA?si=7pTgXJ21rFJHkQyq"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                        <div class="info">
                            <h3>2. Library Management System</h3>
                            <p>This system is designed specifically for librarians, aiming to streamline and digitize
                                core library functions for improved efficiency and ease of use.</p>
                            <pre>🛠️ Features Overview:

📇 Member & Student Profile Management
📖 Book Cataloguing & Inventory Control
📆 Issuing and returning book history
🔐 Secure Login System for Admins</pre><br>
                            <div class="tags"><span>Java</span><span>Java Swing</span><span>OOP</span></div>
                            <div class="icon2">
                                <span id="gitspan">GitHub Repository link:</span>
                                <a href="https://github.com/Cyb3rSoldier/LibraryManagementSystem" target="_blank">
                                    <i class='bx bxl-github'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <label for="slide1" class="nav left">&lt;</label>
                </div>

            </div>
        </section>

        <!--CONTACT SECTION DESIGN-->

        <section class="contact" id="contact">
            <h2 class="heading">CONTACT <span id="span">ME</span></h2>
            <form action="config.php" method="post">
                <div class="input-box">
                    <input type="text" placeholder="Enter Your Name" name="name" required>
                    <input type="email" placeholder="Enter your Email" name="email" required>
                </div>
                <div class="input-box">
                    <input type="number" placeholder="Enter Your Mobile Number" name="mobile">
                </div>
                <textarea placeholder="Your Message/Feedback" name="message" required></textarea>
                <!-- Success message -->
                <div class="form-message">
                    <?php
                    if (isset($_SESSION['message_success'])) {
                        echo "<span>" . $_SESSION['message_success'] . "</span>";
                        unset($_SESSION['message_success']);
                    }
                    ?>
                </div>
                <input type="submit" value="Send Message" class="btn">
            </form>

        </section>
    </section>

    <!--FOOTER SECTION DESIGN-->

    <footer>
        <p id="thanks">Thanks For Visiting!</p>
        <div class="footer-detail">
            <img src="email.png" height="30px" align="center">&nbsp;<a href="mailto:omarfarukrakib26@gmail.com/"
                target="_blank"><u>omarfarukrakib26@gmail.com</u></a><br>
            <img src="whatsapp.png" height="30px" align="center">&nbsp;<a
                href="https://api.whatsapp.com/send/?phone=%2B8801306002238&text&type=phone_number&app_absent=0/"
                target="_blank"><u>WhatsApp</u></a><br>
            <img src="location.png" height="30px" align="center">&nbsp;DHAKA, BANGLADESH
        </div>
    </footer>

</body>

</html>