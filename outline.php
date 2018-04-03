<!DOCTYPE html>
<html lang="en">
    <?php 
        include 'templates/head.php';
    ?>
<body>
    <div class="wrapper">
    <main>
    <div class="banner-content">
        <?php
            include 'templates/header.php';
        ?>
    </div>
    <div class="outline-page">
        <img srcset="/images/outline.jpg 1920w,
                            /images/outline-medium.png 850w,
                            /images/outline-small.png 420w"
                    src="/images/outline.jpg"
                    sizes="(max-width: 1200px) 100%"
                    alt="Computer screens overlayed with 1s and 0s.">
        <div class="outline-head">
            <h2>Course Outline:</h2>
            <p class="left-one">Course: COMP 1950</p>
            <p class="right-one">Credits: 3</p>
            <p class="left-two">Length: 36 Lecture Hours</p>
            <p class="right-two">Cost: $448.00</p>
            <p class="prereq">Prerequisites: <a href="#0">COMP 1850</a> or Equivalent CSS & HTML Knowledge</p>
        </div>

        <section class="description">
            <h2>Course Description</h2>
            <p>This hands-on course follows on from COMP 1850 Applied Web Development Level 1. Students who already understand HTML and CSS will explore web development in more depth with new topics and techniques. </p>
            <p>Participants will gain a deeper understanding of the latest technologies including HTML5 and CSS3 for developing web sites and applications. There is a focus on responsive design and mobile presentation through the use of Media Queries. Adding behavior to web sites using JavaScript frameworks such as jQuery is introduced. </p>
            <p>Labs and exercises focus on industry standard web development methodology. Students gain experience creating templates for content management systems and presentation. </p>
            <p>Additional topics will include: source control for managing your code, and web-based fonts for professional typography.</p>
            <p>By the end of this course successful students will be able to build dynamic and semantically marked-up content that is viewable on mobile and desktop screen sizes. </p>
        </section>

        <div class="goals">
            <h2>Course Goals</h2>
            <ul class="goal-desc">
                <li>To gain a deeper understanding of HTML, CSS and advanced topics in web development.</li>
                <li>To focus on best practices in web page and web site design.</li>
            </ul>
        </div>

        <section class="outcomes">
        <h2>Course Learning Outcomes / Competencies</h2>
        <p>Upon successful completion of this course, the student will be able to:</p>
        <ul>
            <li>To gain a deeper understanding of HTML, CSS and advanced topics in web development.</li>
            <li>To focus on best practices in web page and web site design.</li>
            <li>Add behaviour to any web page using JavaScript.</li>
            <li>Create dynamic content using JavaScript frameworks like jQuery.</li>
            <li>Employ Web Standards when building web sites for maximum compatibility.</li>
            <li>Understand basic development methodology.</li>
            <li>Use media queries to create responsive designs for mobile and desktop presentation.</li>
            <li>Use HTML5 technologies to present rich content such as video and audio.</li>
            <li>Create professional looking typography using web-based fonts.</li>
            <li>Understand source control using GIT.</li>
        </ul>
        </section>

        <section class="evaluation">
            <table>
                <caption>Evaluation Criteria</caption>
                <tbody>
                    <tr>
                        <td>Assignments 1-7</td>
                        <td>20% <span>(2.86% per assignment)</span></td>
                    </tr>
                    <tr>
                        <td>Project 1</td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <td>Mid-Term Exam</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>Final</td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <td>Final Project</td>
                        <td>30%</td>
                    </tr>
                    <tr class="bottom">
                        <td>Total</td>
                        <td>100%</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    </main>
    <?php
        include 'templates/footer.php';
    ?>
    </div>
    <?php 
        include 'templates/scripts.php';
    ?>
</body>
</html>