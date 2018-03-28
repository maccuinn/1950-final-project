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
    <main>
    <div class="two-column">
    <?php
        include 'templates/subnav.php';
    ?>
        <div class="lesson-content">
            <h1>Lesson 1</h1>
            <section class="lesson-section agenda">
                <h2>Agenda</h2>
                <ul>
                    <li>Introductions</li>
                    <li>Orientation</li>
                    <li>Web development tools</li>
                    <li>Standards based development</li>
                    <li>To Do</li>
                </ul>
            </section>
            <section class="lesson-section intros">
                <h2>Introductions</h2>
                <ul>
                    <li><strong>Instructors</strong>: Jeff Parker (<a href="mailto:jeffrey_parker@bcit.ca">jeffrey_parker@bcit.ca</a>), Michael Whyte (<a href="michael_whyte@bcit.ca">michael_whyte@bcit.ca</a>)</li>
                    <li><strong>Web site</strong>: this is it</li>
                    <li><strong>All about you</strong>...
                        <ul>
                            <li>your name</li>
                            <li>your background</li>
                            <li>what do you hope to achieve in this course? Be specific!</li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="lesson-section overview">
                <h2>Course Overview</h2>
                <p>Learn more <strong>about the course</strong> to help you determine if this is the right class for you.</p>
            </section>
            <section class="lesson-section orientation">
                <h2>Orientation</h2>
                <h3>Sharefile</h3>
                <p>BCIT lab computers are re-imaged each day. Files you save on the local C: drive of a lab computer will be erased after the computer power is cycled.</p>
                <p>Options For Saving Files:</p>
                <ul>
                    <li>Use <a href="http://kb.bcit.ca/sr/sharefile/2052.shtml">BCIT Sharefile</a> to save your work</li>
                    <li>Save your work to your personal USB or cloud storage account</li>
                    <li>Use your own laptop in class, and don’t use the BCIT lab computers</li>
                </ul>
                <h3>Course Materials</h3>
                <p>COMP 1950 homework assignments, quizzes, in class exercises and example code can be accessed via <a href="https://learn.bcit.ca/">Desire 2 Learn</a> (D2L). Use your BCIT student number and password to access D2L. Course materials will become available as the course progresses. It is your responsibility to log in and download files as they become available.</p>
                <p>If you have difficulty gaining access, consult the <a href="https://www.bcit.ca/distance/learnersupport/d2lhelp.shtml">D2L help documentation</a>, or contact BCIT Tech help desk at <strong>604-412-7444</strong> (Toll free: <strong>1-800-351-5533</strong>).</p>
                <h3>Web Space</h3>
                <p>Each student will get a personal webspace where you will publish your homework assignments. This is not a continuation of your COMP1850 site (if you had one). This site is primarily for you to house your exercises, assignments and group work. Make it a site that is usable and functional.</p>
                <ul>
                    <li>Your instructor will create webspaces for each of you.</li>
                    <li>Email your instructor this information:
                        <ul>
                            <li>your myBCIT email - eg: yourname123@my.BCIT.ca</li>
                            <li>your student number - eg: A00123456</li>
                            <li>a case sensitive password you will remember - ???</li>
                        </ul>
                    </li>
                    <li>Take the name portion of your <strong>my.bcit.ca</strong> email address and use it at the end of the URL described below (eg: if your email address is '<em>yourname123@my.bcit.ca</em>', your email name is '<em>yourname123</em>', so your url would be '<em>http://bcitcomp.ca/students/yourname123</em>'<br/>
                        For example: http://bcitcomp.ca/students/your_bcit_email_name
                    </li>
                </ul>
                <h4>Connect to your bcitcomp.ca account via FTP</h4>
                <p>Use Filezilla, or any FTP client to connect to bcitcomp.ca. The bcitcomp.ca server provides you with a space on the internet where you can publish your homework and assignments.</p>
                <ol>
                    <li>Choose: <strong>File->SiteManager->New Site</strong>, then describe the FTP server, eg "bcitcomp.ca"</li>
                    <li>Host: <strong>bcitcomp.ca</strong></li>
                    <li>Port: <strong>21</strong></li>
                    <li>User: <strong>{yourBCITStudentNumber}@bcitcomp.ca</strong> (use an uppercase <strong>A</strong> when typing your BCIT student number)</li>
                    <li>Password: <strong>???</strong></li>
                    <li>Servertype: <strong>FTP</strong> File Transfer Protocol</li>
                    <li>LogonType: <strong>Normal</strong></li>
                    <li>Click: <strong>Connect</strong></li>
                    <li>If you experience connectivity problems, re-check your input, or ask your instructor for assistance.</li>
                </ol>
                <img src="images/filezilla_screenshot.png" alt="Filezilla">
            </section>
            <section class="lesson-section tools">
                <h2>Tools</h2>
                
            </section>
            <section class="lesson-section standards">
                <h2>Standards</h2>
                
            </section>
            <section class="lesson-section todo">
                <h2>To Do</h2>
                
            </section>
        </div>       
    </div>
    </main>
    <?php
        include 'templates/footer.php';
    ?>
    </div>
</body>
</html>