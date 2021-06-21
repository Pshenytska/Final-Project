<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kate Portfolio Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/lightbox.min.css" />
    <link rel="stylesheet" href="css/lightbox.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap"rel="stylesheet">
    <script src="js/script.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/lightbox-plus-jquery.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body> <!--main page and navigation-->
    <header>
        <h1 class="logo"><a href="template.html">Kateryna Kozakevych</a></h1>
        <button class="nav-toggle" aria-label="toggle navigation">
        <span class="hamburger"></span>
        </button>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="http://web-students.net/site90/it161/Kate/template.html#home" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="http://web-students.net/site90/it161/Kate/template.html#services" class="nav__link">My Services</a></li>
                <li class="nav__item"><a href="http://web-students.net/site90/it161/Kate/template.html#about" class="nav__link">About Me</a></li>
                <li class="nav__item"><a href="http://web-students.net/site90/it161/Kate/template.html#work" class="nav__link">My Works</a></li>
            </ul>
        </nav>
     </header>
<body> <!--main page and navigation-->
     <section class="contact-form">
     <h3 class="subheader">Contact Me</h3>
       <?php
        include 'include/contact_include.php'; #site keys & code here
        $toAddress = "veronika.pshenytska@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Veronika Pshenytska"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's websites
        echo loadContact('multiple.php');#demonstrates multiple form elements
	?> </section>

<footer class="footer">
    <!--replce to Kate's email-->
    <a href="mailto:cat.cat@gmail.com" class="footer--link">cat.cat@gmail.com</a>
    <ul class="social-list">
    
    <li class="social-list__item"><a class="social-list__link" href="https://www.facebook.com/SeattleFelineRescue/"><i class="fab fa-facebook"></i></a></li>
    
    <li class="social-list__item"><a class="social-list__link" href="https://www.instagram.com/cats_of_instagram/?hl=en"><i class="fab fa-instagram"></i></a></li>
    
    
    <li class="social-list__item"><a class="social-list__link" href="https://www.pinterest.com/pin/801851908660749194/"><i class="fab fa-pinterest-p"></i></a></li>
    
</ul>

<p><small>&copy; 2021 by <a href="http://web-students.net/site90/it161/big/index.html">Veronika Pshenytska</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site90/it161/Kate/template.html" target="_blank">Valid HTML</a> ~ <a href="../Kate/disclaimer.html">Disclaimer</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>


</footer>
<script src="js/index.js"></script>
<script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script>
</body>
</html>

  