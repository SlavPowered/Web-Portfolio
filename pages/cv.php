<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:../index.html");
    }

?>
<meta charset="utf-8">
<html>
    <head>
        <title>CV</title>
        <link rel="stylesheet" href="../style/cv.css">
    </head>
    <div id="navbar">
        <a href="./menu.php">Menu</a>
        <a href="./gallery.php">Gallery</a>
        <a href="./contact.php">Contact Us</a>
    </div>
    <body>
        <div id="highest">
            <div id="side-bar">
                <div id="img-div">
                    <img src="../assets/idPhoto.jpeg" id="my-photo"></a>
                </div>
                <h3><u>Name</u>: John Doe</h3>
                <hr>
                <h4><img src="../assets/phone-custom.svg"><br>+961 81-598-332</h4>
                <h4><img src="../assets/envelope-custom.svg"><br> john.doe1234@gmail.com</h4>
                <img src="../assets/computer-desktop-custom.svg" style="height:16px;">
                <a href="https://www.linkedin.com/feed/"><br>LinkedIn</a>
                <hr>
                <h4>Skills</h4>
                <ul>
                    <li>Web Programming</li>
                    <li>Databases</li>
                    <li>Full Stack</li>
                    <li>Microsoft Office</li>
                </ul>
                <hr>
                <h4>Languages</h4>
                <ul>
                    <li>English</li>
                    <li>Arabic</li>
                    <li>Russian</li>
                </ul>
            </div>
            <div id="main-part" style="padding-left: 2ex;">
                <div>
                    <h2 class="section-head">Eduction</h2>
                    <p>Lebanese American University (LAU)- Beirut, Lebanon<br>
                        Aug. 2021 - Present</p>
                    <p>Bachelor of Science Majoring in Computer Science<br>(2nd year)</p>
               </div>
               <div>
                    <h2 class="section-head">Professional Experience</h2>
                    <p>Internship at Alfa Telecommunications (June 1- August 9)</p>
                    <p>Department of Business Enterprise Applications</p>
                    <p>Mainly worked as a full stack developer on a single project<br>
                    which was developing an updated reception application for managing 
                    visits and mail that are received by the building reception</p>
                    <p>Technologies learned: Asp.Net Core, MS SqlServer</p>
               </div>
               <div>
                    <h2 class="section-head">Soft Skills</h2>
                    <p>Team worker, dependable, flexible, detail-oriented, problem solver, always open to 
                        learning new things from every field possible in order to diversify my knowledge base, 
                        and looking forward to applying my knowledge in real life situations.</p>
               </div>
               <div>
                    <h2 class="section-head">Programming Languages</h2>
                    <p>Languages I've come across and learned</p>
                    <ul>
                        <li>C</li>
                        <li>Java</li>
                        <li>Go</li>
                        <li>Rust</li>
                        <li>C#</li>
                        <li>Web (HTML, CSS, JavaScript)</li>
                    </ul>
               </div>
            </div>
        </div>
    </body>
</html>


<style>
    #navbar {
        display:flex;
    }

    #navbar a {
        background-color: #5a002c;
        color: pink;
        text-decoration: none;
        height:2em;
        width: 5em;
    }

    #navbar a:hover{
        background-color: pink;
        color: #5a002c;
    }
</style>

