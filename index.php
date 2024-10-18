<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jesse Mungai</title>

    <!-------------CSS FILES-------------->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
</head>
<body>

<nav id="desktop-nav">
    <div class="logo">Jesse Mungai</div>
    <div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>

<nav id="hamburger-nav">
    <div class="logo">Jesse Mungai</div>
    <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="menu-links">
            <li><a href="#about" onclick="toggleMenu()">About</a></li>
            <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
            <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>

    </div>
</nav>

<section id="profile">
    <div class="section-pic-container">
        <img style="  border-radius: 50%;" src="./assets/profile-pic.png" alt="Jesse picture">
    </div>

    <div class="section_text">
        <p class="section_text_p1">Hello I'm</p>
        <h1 class="title">Jesse Mungai</h1>
        <p class="section_text_p2">Full Stack Developer</p>
        <div class="btn-container">
            <button class="btn btn-color-2" onclick="window.open('./assets/Jesse-Resume.pdf')">View CV</button>
            <button class="btn btn-color-1" onclick="location.href = './#contact'">Contact Info</button>
        </div>

        <div id="socials-container">
            <img src="./assets/linkedin.png" alt="Linkedin Profile" class="icon" onclick="location.href= 'https://www.linkedin.com/in/jesse-mburu-6421a1327?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BNOJiin9BRVybCMm8CUbnxw%3D%3D'">
            <img src="./assets/github.png" alt="Github Profile" class="icon" onclick="location.href= 'https://github.com/JesseMburu'">
        </div>
    </div>
</section>

<section id="about">
    <p class="section_text_p1">Get to know more</p>
    <h1 class="title">About Me</h1>
    <div class="section-container">
        <div class="section-pic-container">
            <img src="./assets/about-pic.png" alt="Profile Picture" class="about-pic">
        </div>

        <div class="about-details-container">
            <div class="about-containers">
                <div class="details-container">
                    <img src="./assets/experience.png" alt="experience icon" class="icon">
                    <h3>Experience</h3>
                    <p>2+ years <br>Full Stack Development</p>
                </div>

                <div class="details-container">
                    <img src="./assets/education.png" alt="education icon" class="icon">
                    <h3>Education</h3>
                    <p>KCSE. Secondary Education<br>B.Sc. Computer Science</p>
                </div>
            </div>

            <div class="text-container">
                <p>
                I am a student at Strathmore University, pursuing a bachelor’s degree in Informatics and Computer Science. 
                As a dedicated computer science student, I possess a strong foundation in programming and web development. 
                I am proficient in HTML, PHP, CSS, MySQL, Git and JavaScript, just to mention a few. 
                I also have experience with the Laravel framework which enhances my ability to build good and robust applications efficiently. 
                I am also skilled in using design software such as Figma and Draw.io, which are essential during project planning to create intuitive user interfaces. 
                My effective project management skills allow me to effectively coordinate tasks, prioritize deliverables and ensure timely completion of objectives. 
                I do well in collaborative environments by valuing the expertise of my teammates. 
                I am eager and open to learning and improving as I look to thrive in my area of expertise.
                </p>
            </div>
        </div>
    </div>

    <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#experience'">

</section>

<br>

<section id="experience">
    <p class="section_text_p1">Explore my</p>
    <h1 class="title">Experience</h1>
    <div class="experience-details-container">
        <div class="about-containers">
            <div class="details-containers">
                <h2 class="experience-sub-title">Frontend Development</h2>
                <div class="article-container">
                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>HTML</h3>
                            <p>Experienced</p>
                        </div>
                    </article>

                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>CSS</h3>
                            <p>Experienced</p>
                        </div>
                    </article>

                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>PHP</h3>
                            <p>Experienced</p>
                        </div>
                    </article>

                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>JAVASCRIPT</h3>
                            <p>Intermediate</p>
                        </div>
                    </article>

                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>KOTLIN</h3>
                            <p>Basic</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="details-containers">
                <h2 class="experience-sub-title">Backend Development</h2>
                <div class="article-container">
                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>NODE JS</h3>
                            <p>Basic</p>
                        </div>
                    </article>

                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>GIT</h3>
                            <p>Experienced</p>
                        </div>
                    </article>

                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>FIREBASE</h3>
                            <p>Basic</p>
                        </div>
                    </article>

                    <article>
                        <img src="./assets/checkmark.png" alt="Experience icon" class="icon">
                        <div>
                            <h3>MySQL</h3>
                            <p>Experienced</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects">
    <p class="section_text_p1">Browse My Recent</p><img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#projects'">
    <h1 class="title">Projects</h1>
    <div class="experience-details-container">
        <div class="about-containers">
            <div class="details-containers color-container">
                <div class="article-container">
                    <img src="./assets/project-1.png" alt="project 1" class="project-img">
                </div>
                <h2 class="experience-sub-title project-title">Nurturing Lives</h2>
                <div class="btn-container">
                    <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/JesseMburu/MentalHealth.git'">Github</button>
                    <button class="btn btn-color-2 project-btn" onclick="location.href='#'">Live Demo</button>
                </div>
            </div>

        
            
            <div class="details-containers color-container">
                <div class="article-container">
                    <img src="./assets/project-2.png" alt="project 2" class="project-img">
                </div>
                <h2 class="experience-sub-title project-title">E-Learning</h2>
                <div class="btn-container">
                    <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/JesseMburu/E-Learning.git'">Github</button>
                    <button class="btn btn-color-2 project-btn" onclick="location.href='#'">Live Demo</button>
                </div>
            </div>

            <div class="details-containers color-container">
                <div class="article-container">
                    <img src="./assets/project-3.png" alt="project 3" class="project-img">
                </div>
                <h2 class="experience-sub-title project-title">Sparkle & Silk</h2>
                <div class="btn-container">
                    <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/JesseMburu/SPARKLE-SILK.git'">Github</button>
                    <button class="btn btn-color-2 project-btn" onclick="location.href='#'">Live Demo</button>
                </div>
            </div>
        </div>
    </div>

    <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#contact'">

</section>

<section id="contact">
    <p class="section_text_p1">Get In Touch</p>
    <h1 class="title">Contact Me</h1>
    <div class="contact-info-upper-container">
        <div class="contact-info-container">
            <img src="./assets/email.png" alt="Email icon" class="icon contact-icon email-icon">
            <p><a href="mailto:jessemburu42@gmail.com">jessemburu42@gmail.com</a></p>
        </div>
        <div class="contact-info-container">
            <img src="./assets/linkedin.png" alt="Linkedin icon" class="icon contact-icon">
            <p><a href="https://www.linkedin.com/in/jesse-mburu-6421a1327?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BNOJiin9BRVybCMm8CUbnxw%3D%3D">Linkedin</a></p>
        </div>
        <div class="contact-info-container">
        <img src="./assets/phone.png" alt="Linkedin icon" class="icon contact-icon">
            <p><a href="tel:+254759585992">Phone</a></p>
        </div>
    </div>
</section>

<footer>
    <nav>
        <div class="nav-links-container">
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <p>Copyright &#169; 2024 Jesse Mungai. All Rights Reserved</p>

</footer>
    
<!-----------SCRIPT FILES------------>
<script src="js/script.js"></script>
</body>
</html>