<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Drew Cring </title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
        <meta name="description" content="Drew Cring's Personal Training website for clients and users to contact and learn about Drew's expierience and services">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">

    </head>
    <body>
        <?php

        ?>
    <img id="banner" src="images/DCPTLogoHiRes.png" alt="Drew Cring's Personal Training"/>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="programs.php">Programs</a></li>
            <li><a href="onlineTraining.php">Online Training</a></li>
            <li><a href="articles">Articles</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
      <h1>Contact Me</h1>
      <br/>
        <div class="container">
            <form action="action_page.php">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your first name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="program">Which Program are you interested in?</label>
                <select id="program" name="program">
                    <option value="strength training program">Strength Training Program</option>
                    <option value="aerobic training program">Aerobic Training Program</option>
                    <option value="sport specific training program">Activity/Sport Specific Training Program</option>
                    <option value="flexibility training program">Flexibility Program</option>
                    <option value="calisthenics training program">Calisthenics Training Program</option>
                    <option value="mixed training program">A Mixed Training Program</option>
                </select>
                
            <label for="package">Which Package are you interested in?</label>
                <select id="package" name="package">
                    <option value="6 week">6 Week</option>
                    <option value="12 week">12 Week</option>
                    <option value="24 week">24 Week</option>
                </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">

            </form>
        </div>

      <script src="" async defer></script>
    <footer>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="programs.php">Programs</a></li>
                <li><a href="onlineTraining.php">Online Training</a></li>
                <li><a href="articles">Articles</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <img id="smallLogo" src="images/DCPTLogoSmall.png" alt="Drew Cring's Personal Training Abreviation Logo"/>
      <p>Created By Andrew Cring</p>
    </footer>
    </body>
</html>
