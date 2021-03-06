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

    <div class="contact-page">
        <img srcset="/images/coffee-cropped.jpg 1920w,
                            /images/coffee-medium.png 850w,
                            /images/coffee-small.png 420w"
                    src="/images/coffee-cropped.jpg"
                    sizes="(max-width: 1200px) 100%"
                    alt="Close up picture of coffee on a table with pen and paper.">
        <div class="contact-info">
            <div class="course-contact">
                <h2>Give Us A <span>Shout</span></h2>
                <ul>
                    <li><a href="#0">Talk With An Advisor</a></li>
                    <li><a href="#0">Financial Aid</a></li>
                    <li><a href="#0">Register</a></li>
                </ul>
            </div>
            <div class="instructor-info">
                <h3>Instructor Information</h3>
                <p>Instructor: Michael Whyte</p>
                <p>Email:<a href="mailto:mywhyte13@learn.bcit.ca"> mywhyte13@learn.bcit.ca</a></p>
            </div>
        </div>
        <section class="contact-form">
            <div class="form-container">
                <form onsubmit="document.forms[0].checkValidity() && alert('Thank You. Your request has been sent.')">
                    <label for="radio-1">Current Student </label><input id="radio-1" type="radio" name="student" value="current" required>
                    <label for="radio-2">Prospective Student </label><input id="radio-2" type="radio" name="student" value="prospective" required>
                    <input type="text" name="fname" placeholder="first name*" required>
                    <input type="text" name="snumber" placeholder="student number" pattern="^A\d{8}$">
                    <input type="text" name="lname" placeholder="last name*" required>
                    <input type="email" name="email" placeholder="email*" required>
                    <textarea name="message" rows="5" placeholder="what can we help you with*" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
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