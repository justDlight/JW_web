<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- REDISGNING TEMPLATE https://preview.colorlib.com/#jackco -->    

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Icluding Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="../CSS/portfolio.css">
  </head>
  <body>
    <!-- Start of BOOTSTRAP GRID -->
    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <img src="https://lightintime.com/img/jw-low.png" id="jw_logo">
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
    <div class="row" id="port-row-txt">
        <h1 id="port-txt">Projects</h1>
    </div>
    <div class="row" id="portfolio-heading">
        <h1 id="portfolio-heading-txt">Projects I have created in the last year</h1>
    </div>
    <div class="row" id="project-row-3">
        <div class="col" id="project-5">
        <h3 id="portfolio-img-heading">Portfolio: Website</h3>
        <p id="shop-tas-dets4">Yes thats right I am talking about the current website you are on. This is my fully static 100% self coded portfolio website.<br/><br/>CODE LANGUAGES USED:<br/>HTML, JavaScript, PhP, ajax, CSS, Bootstrap<br/><br/><img id="github-img"src="https://lightintime.com/img/GitHub_Logo.png"><br/><br/>GitHub: <a onclick="web_github_link()" id="a-1">https://github.com/justDlight/JW_web</a></p>
        </div>
    </div>
    <div class="row" id="project-row-1">
        <div class="col" id="project-1">
            <h3 id="shop-tas-heading">Shop Tasmania: Mobile Application</h3>
            <p id="shop-tas-dets">Shop Tasmania is an online e-commerce website where users can buy the latest Tasmania products. Shop Tasmania the App is designed around the Shop Tasmania website and acts as a wrapper for the site. The mobile Shop Tasmania Application was made through Eazi-App CMS. The CSS code developed by me can be seen in my GitHub Repo provided below. The custom page HTML and CSS code is not available to the public but inquries can be made via the contact form below. This was the second project I created that was developed for a client.<br/><br/>CODE LANGUAGES USED:<br/>HTML, CSS & SCSS.<br/><br/>Android Link: <a onclick="android_link()" id="a-1">https://play.google.com/store/apps/details?id=com.eaziapps.cms.android635f10feb6de3&hl=en&gl=US</a><br/>iOS Link: <a onclick="iOS_link()" id="a-1">https://apps.apple.com/au/app/shop-tasmania/id6444770736</a><br/>GitHub: <a onclick="shop_github_link()" id="a-1">https://github.com/justDlight/list_web_app</a></p>
            <img src="https://lightintime.com/img/shop-tas.png" id="project-1-img">
        </div>
        <div class="col" id="project-2">
        <h3 id="list-heading">List Creator: Web Application</h3>
        <p id="shop-tas-dets1">The list Application is an application where a user can create a list. Users can register to the site if they would like to save their list and see their previous list. Options to download the list as a text file as well as deleting an item or the list are all there. Sorry for the confusing URL Planning to move this application to a different domain in the future.<br/><br/>CODE LANGUAGES USED:<br/>HTML, JavaScript, PhP & MySQLi, CSS, SQL, Bootstrap & ajax.<br/><br/>Website: <a onclick="climb_tas_link()" id="a-1">https://climbingtasmania.com/login.php</a><br/>GitHub: <a onclick="climb_tas_github()" id="a-1">https://github.com/justDlight/list_web_app</a></p>
            <img src="https://lightintime.com/img/list.png" id="project-2-img">
        </div>
    </div>
    <div class="row" id="project-row-2">
        <div class="col" id="project-3">
        <h3 id="macro-heading">VBA Macro: Excel VBA Macro</h3>
        <p id="shop-tas-dets2">Project underworks come back soon!</p>
            <img src="https://lightintime.com/img/coming_soon.jpg" id="project-3-img">
        </div>
        <div class="col" id="project-4">
        <h3 id="light-in-time-heading">Light In Time: Website</h3>
        <p id="shop-tas-dets3">Light In Time is the first fully static 100% self-coded website that I created for my first client. Light In Time is a showcase of Henry Lindner’s Photography and Videography. Henry Lindner has travelled the world collecting these photos. Some issues with the website like server load times and no SSL certificate are still being discussed out with the client.<br/><br/>CODE LANGUAGES USED:<br/>HTML, JavaScript, CSS, Bootstrap<br/><br/>Website: <a onclick="light_link()" id="a-1">http://www.lightintime.com/</a><br/>GitHub: <a onclick="light_github_link()" id="a-1">https://github.com/justDlight/Light_In_Time</a></p>
            <img src="https://lightintime.com/img/light-in-time.png" id="project-4-img">
        </div>
    </div>
    



    <!-- Start of BOOTSTRAP ROW -->
    <div class="row" id="footer-row">
        <div class="row" id="footer-heading-row">
            <h1 id="contact-me-header">I'm a software developer, based in Australia, Tasmania. Feel free to contact me via the email form below.</h1>
        </div>
        <div class="row" id="form-row">
            <div class="col" id="form-col-1">
                <form method="post" name="myemailform" action="send-email.php">
                     <h5 id="email-txt">EMAIL ME</h5><input type="text" name="name" value="Your Name" id="name-input">
                     <br/>
                    <input type="text" value="sample@email.com" id="email-input" name="email">
                    <br/>
                    <textarea name="message" id="message-text-area" placeholder="Type your message here"></textarea>
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

    <!-- My JavaScript Code -->
    <script async src="../JS/index.js"></script> 

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>