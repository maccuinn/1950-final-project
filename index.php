<!DOCTYPE html>
<html lang="en">
    <?php 
        include 'templates/head.php';
    ?>
<body>
    <div class="wrapper">
    <?php
        include 'templates/header.php';
    ?>
    <main class="home-page">
        <div class="banner">
            <img src="/images/banner-img.jpg" alt="Three Students Sitting On Grass Looking At Laptops">
            <h1 class="header-1">Web Development</h1>
            <h1 class="header-2">And Design 2</h1>
        </div>

        <section class="intro">
            <div class="intro-header">
                <h2>Launch Your <span>New</span> Career</h2>
                <p>With Web Development And Design 2</p>
            </div>

            <div class="skills">
                <h3>Hands On Learning of In <span>Demand</span> Skills</h3>
                <ul class="left">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Media Queries</li>
                    <li>JQuery</li>
                </ul>
                <ul class="right">
                    <li>SSI</li>
                    <li>Sass</li>
                    <li>Git and Github</li>
                    <li>SEO</li>
                </ul>
                <div class="outcomes">
                    <a href="#0">Learning Outcomes</a>
                </div>
            </div>

            <div class="advantage">
                <h3>The <span>BCIT</span> Advantage</h3>
                <ul>
                    <li>Small Class Sizes</li>
                    <li>Hands On Learning...Every Class</li>
                    <li>Taught By Industry Professionals</li>
                    <li>Work In a Team To Create a Functional Website</li>
                </ul>
                <div class="btn">
                    <a href="#0">Learn More</a>
                </div>
            </div>

            <div class="secondary-nav">
                <h2>About This Course</h2>
                <ul>
                    <li><a href="ouline.php">Course Details</a></li>
                    <li><a href="#lo">Learning Outcomes</a></li>
                    <li><a href="schedule.php">Course Schedule</a></li>
                    <li><a href="lessons.php">Lessons</a></li>
                </ul>
                <h2>Registration Info</h2>
                <ul>
                    <li><a href="#0">Registration Info</a></li>
                    <li><a href="#0">Talk With An Advisor</a></li>
                    <li><a href="#0">Contact Us</a></li>
                </ul>
                <div class="prereq">
                    <h3>Prerequisites</h3>
                    <p>COMP 1850</p>
                    <P>or</P>
                    <p>Equivalent HTML5</p>
                    <p>and</p>
                    <p>CSS3 Knowledge</p>
                </div>
                <div class="register-btn">
                    <a href="#0" class="register">Register Now</a>
                </div>
            </div>
        </section>

        <section class="employment">
            <h2>96% Of BCIT Grads Are <span>Employed</span></h2>
            <div class="content">
                <p>Prepare yourself for a career in web. Take one course, or apply this course to a part-time certificate. Work at your own pace, in the evenings or weekends. A Flexible schedule that fits your lifestyle.</p>
                <a href="#0">Student Outcomes</a>
            </div>
        </section>

        <section id="lo" class="description">
            <h2>Upon Successful Completion Of This Course, You Will Be Able To:</h2>
        <ul>
            <li>Mark up pages using latest HTML technologies, including HTML5.</li>
            <li>Utilize CSS to control page layout and presentation, including CSS3.</li>
            <li>Add behaviour to any web page using JavaScript.</li>
            <li>Create dynamic content using JavaScript frameworks like jQuery.</li>
            <li>Employ Web Standards when building web sites for maximum compatibility.</li>
            <li>Understand concepts for Search Engine Optimized content (SEO).</li>
            <li>Implement Server Side Includes for efficient web development.</li>
            <li>Create template-driven pages for use in Content Management systems.</li>
            <li>Understand basic development methodology.</li>
            <li>Use media queries to create Responsive designs for mobile and desktop presentation.</li>
            <li>Use HTML5 technologies to present rich content such as video, audio and geolocation.</li>
            <li>Create professional looking typography using web-based fonts.</li>
            <li>Understand source control using GIT.</li>
        </ul>
        </section>

    </main>
    <?php
        include 'templates/footer.php';
    ?>
    </div>
</body>
</html>