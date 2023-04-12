<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- REDISGNING TEMPLATE https://preview.colorlib.com/#jackco --> 
    <!-- REDISGNING TEMPLATE https://hpanel.hostinger.com/ -->    

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Icluding Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="../CSS/mobileHome.css">
  </head>
  <body>



    <!-- Start of BOOTSTRAP GRID -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="https://lightintime.com/img/jw-web2.png" id="jw_logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-home" href="http://localhost/Portfolio/Local%20Static%20Code/PHP/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-about" href="http://localhost/Portfolio/Local%20Static%20Code/PHP/#about-row">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-portfolio" href="http://localhost/Portfolio/Local%20Static%20Code/PHP/portfolio.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-contact" href="http://localhost/Portfolio/Local%20Static%20Code/PHP/#footer-row">Contact</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End of BOOTSTRAP ROW -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="home-heading">
        <!-- Start of BOOTSTRAP COLUMN -->
        <div class="col" id="heading-txt-col">
            <h1 id="software-txt">Software Developer</h1>
            <h2 id="software-sub-txt">Hi, I am John Weiss, a passionate developer.</h2>
            <button id="btn" onmouseover="blackOut(this)" onclick="toContactme()" onmouseout="normalImg(this)" type="button" value="CONTACT ME">CONTACT ME</button>
            <button id="btn" onmouseover="blackOut(this)" onclick="goDesktop()" onmouseout="normalImg(this)" type="button" value="CONTACT ME">FOR DESKTOP</button>
        </div>
        <!-- END of BOOTSTRAP COLUMN -->
        
    </div>
    <!-- End of BOOTSTRAP ROW -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="about-row">
        <div id="about-form-header">
            <h4 id="about-txt">ABOUT MYSELF</h4>
            <br/>
            <h2 id="about-sub-txt">I am a highly motivated and progress-focused software developer with a degree in Bachelor of Information and Communication Technology. I am a capable and consistent problem-solver skilled at prioritizing and managing projects with proficiency. My main strengths lie in web development as a full stack developer.</h2>
            <br/>
            <a id="resume-btn" onmouseover="blackOut1(this)" onmouseout="normalImg1(this)" onclick="dwn_resume()">View my CV</a>
            
        </div>
    </div>
    <!-- End of BOOTSTRAP ROW -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="expertise-row">
        <div class="col" id="exp-panel">
            <h1 id="web-txt" class="active" onclick="switchVisible()">Web Dev Experience</h1>
            <h1 id="app-txt">Application Dev Experience</h1>
            <h1 id="ui-txt">UI Design dddddddd   Experience</h1>
            <h1 id="other-txt">Other Language Experience</h1>
        </div>
        <div class="col" id="description-txt">
            <h3 id="description-txt-1">From creating websites for fun at home to an education in Software Development to working for a Web Development Company, Web Development is my strongest card at play. Having experience in creating databases through PhP & MySQLi to static and dynamic functional websites I have a vast range of experience in the web development area.<br/><br/>Programming Languages Used: HTML, CSS, SASS, JavaScript, PhP-MySQLi, SQL, React, Twig & CMS's</h3>
            <h3 id="description-txt-2" style="display: none;">From creating Applications at University in Kotlin, Swift & Dart to developing a real mobile application for a client, I have the knowledge it takes to develop your next App. I have experience in styling and creating applications from scratch up to using a CMS for creating an application.</h3>
            <h3 id="description-txt-3" style="display: none;">Striving to achieve the most user-friendly interfaces with a futuristic design, are my goals when developing. As the internet has evolved so have the people using it and the software/program should be no exception this is why I strive to keep up to date with the latest technologies. For the end-user simplicity in navigation and handling is key.</h3>
            <h3 id="description-txt-4" style="display: none;">From developing a Java program with a university group for a local client that filtered through Big Data to developing an Excel macro in VBA to format payroll sheets, I have wide range of experience in other languages. Creating games in C# and developing an interactive maze in C has grown my data structures and algorithm knowledge. I am always working on personal projects in other languages to keep expanding my programming knowledge.</h3>
        </div>
    </div>
    <!-- End of BOOTSTRAP ROW -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="exp-row">
        <h1>Experience</h1>
    </div>
    <div class="row" id="exp-row-1">
        <h4>Web Developer Casual</h4>
        <h6>September 2022 - Present</h6>
        <h6>MMG (Media Marketing Group), Hobart, TAS</h6>
        <p>
            • Created dynamic websites.<br/>
            • Website functioned with a content management system.<br/>
            • Website were able to be updated and edited by clients in a secure manner.<br/>
            • Basic react native mobile application development.<br/>
            • Created an iOS and Android application for a client<br/>
            • Languages used git, JavaScript, HTML, CSS, SCSS, Twig, PhP and SQL.<br/>
            • Showed ability to learn and adapt in fast real working environment.<br/>
            • Made good use of previous references.<br/>
            • Completed work and training in a timely and resourceful manner.
        </p>
    </div>
    <div class="row" id="exp-row-2">
        <h4>ICT Contractor Skilled (Short Term Contract Placement)</h4>
        <h6>April 2022 - June 2022</h6>
        <h6>Cement Australia, Railton, TAS</h6>
        <p>
            • Worked flexible hours across night, weekend, and holiday shifts.<br/>
            • Worked to maintain outstanding attendance record, consistently arriving to work ready to start immediately.<br/>
            • Established new network for Cement Australia.<br/>
            • Programmed network switches through putty.<br/>
            • Installed new Aruba network switches.<br/>
            • Used critical thinking to break down problems, evaluate solutions and make decisions.<br/>
            • Adhered to social distancing protocols and wore mask or face shield.<br/>
            • Troubleshooted network errors.<br/>
            • Connected Cat 6 lines to server.<br/>
            • Installed new fibre optic cable lines to new network switches.
        </p>
    </div>
    <div class="row" id="exp-row-3">
        <h4>Utas Student Worker</h4>
        <h6>February 2021 - October 2021</h6>
        <h6>BIMulous, Launceston, TAS</h6>
        <p>
            • Convert Excel files to PDF through Java programming.<br/>
            • Data processing of large CSV files.<br/>
            • Data processing of large CSV files.<br/>
            • Programmed dynamic filter options.<br/>
            • Styled PDF through XML & XSLT programming.<br/>
            • Showed good communication skills and progress.<br/>
            • Made good use of problem-solving techniques and had a strong initiative in making the project a success.<br/>
            • Completed research, compiled data, and assisted in timely reporting.
        </p>
    </div>
    <div class="row" id="exp-row-4">
        <h4>Certificate III in Engineering</h4>
        <h6>January 2014 - February 2018</h6>
        <h6>Seattle Services Pty Ltd, Merseylea, TAS</h6>
        <p>
            • Read and interpreted blueprints, technical drawings, schematics and computer-generated reports.<br/>
            • Tracked hours and expenses for each project, detailing each action and charge.<br/>
            • Used 3rd party software IronCAD to draft assemblies, models and other technical drawings.<br/>
            • Completed projects by effectively applying engineering, technical and maintenance procedures.<br/>
            • Created Bills of Materials (BOM) and certifications.<br/>
            • Collaborated with engineers in new product introduction phases to develop and verify design changes.
        </p>
    </div>
    <!-- End of BOOTSTRAP ROW -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="breaker-row">
        <div class="col" id="breaker-img">
            <h3 id="core-txt">Core strengths</h3>
            <img src="https://lightintime.com/img/html-img.png" id="breaker-img-1" loading="lazy">
            <br/>
            <img src="https://lightintime.com/img/sql-img.png" id="breaker-img-3" loading="lazy">
            <br/>
            <img src="https://lightintime.com/img/php-img.png" id="breaker-img-4" loading="lazy">
            <br/>
            <img src="https://lightintime.com/img/javaScript-img.png" id="breaker-img-5" loading="lazy">
            <br/>
            <img src="https://lightintime.com/img/css-img.png" id="breaker-img-2" loading="lazy">
            <br/>
            <img src="https://lightintime.com/img/bootstrap-img.png" id="breaker-img-6" loading="lazy">
        </div>
        <div class="col" id="breaker-txt">
            <h1 id="breaker-h1-txt">MY ICT PROJECT STANDARDS:<br/><br/>Engagement, Planning, Documentating, Drawing, Problem Solving, Testing, Communicating and Finding the Solutions.</h1>
        </div>
    </div>
    <!-- End of BOOTSTRAP ROW -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="exp-row">
        <h1>Education</h1>
    </div>
    <div class="row" id="exp-row-1">
        <h4>Bachelor of Information & Communication Technology: Major: Software Development</h4>
        <h6>February 2019 - July 2022</h6>
        <h6>University of Tasmania, Tasmania Launceston, Invermay Campus</h6>
    </div>
    <div class="row" id="exp-row-2">
        <h4>High School / College Diploma</h4>
        <h6>January 2018 - December 2019</h6>
        <h6>University of Tasmania, Tasmania Launceston, Invermay Campus</h6>
    </div>
    <!-- End of BOOTSTRAP ROW -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="img-breaker-row">
        <div class="col" id="img-11">
            <img src="https://lightintime.com/img/breaker-img-1.jpg" id="img-101" loading="lazy">
        </div>
        <div class="col" id="img-12">
            <img src="https://lightintime.com/img/breaker-img-3.jpg" id="img-102" loading="lazy">
        </div>
        <div class="col" id="img-13">
            <img src="https://lightintime.com/img/breaker-img-5.jpg" id="img-103" loading="lazy">
        </div>
        <div class="col" id="img-14">
            <img src="https://lightintime.com/img/breaker-img-2.jpg" id="img-104" loading="lazy">
        </div>
    </div>
    <!-- End of BOOTSTRAP ROW -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="footer-row">
        <div class="row" id="footer-heading-row">
            <h1 id="contact-me-header">I'm a software developer, based in Australia, Tasmania. Feel free to contact me via the email form below.</h1>
        </div>
        <div class="row" id="form-row">
            <div class="col" id="form-col-1">
                <form method="post" name="myemailform" action="send-email.php">
                     <h5 id="email-txt">EMAIL ME</h5><input type="text" name="name" placeholder="Your Name" id="name-input">
                     <br/>
                    <input type="text" placeholder="Sample@email.com" id="email-input" name="email">
                    <br/>
                    <textarea name="message" id="message-text-area" placeholder="Your message here"></textarea>
                    <br/>
                    <input type="submit" onmouseover="blackOut(this)" onmouseout="normalImg(this)" id="submit-btn" value="Send Email">
                </form>
            </div>
            <div class="col" id="form-col-2">
                <h5 id="contact-footer">CONTACT ME</h5>
                <p>Glenorchy Tasmania</p>
                <p>04-09091-192</P>
                <p>John.Weiss1996@gmail.com</p>
                <a id="resume-btn-2" onmouseover="blackOut(this)" onmouseout="normalImg(this)" onclick="dwn_resume()">View my CV</a>
            </div>
        </div>
    </div>
    <!-- End of BOOTSTRAP ROW -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- My JavaScript Code -->
    <script async src="../JS/index.js"></script> 

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>