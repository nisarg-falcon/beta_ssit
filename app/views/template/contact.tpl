<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">    
    <title>Contact us</title>
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/contact.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
   {include file="../template/includes/header.tpl"} 
    <div class="header-section position-relative">
        {include file="../template/includes/header2.tpl"}    
        <div class="container-fluid media-container position-absolute">
            <img src="{URLROOT}/img/img2.jpg" class="video1 container-fluid">
            <!-- <video class="video1 container-fluid" loop muted autoplay>
                <source src="videos/video1.mp4" type="video/mp4">
                </video> -->
        </div>
    </div>
  
    <!-- people starts -->
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
        <!-- contact us form -->
        <div id="contact">
            <div class="container course__container">
                <div class="contact-container">
                    <h1>VISIT IN-PERSON</h1>
                    <p>
                        <cite>
                            Shree Swaminarayan Institute of Technology (SSIT)<br />
                            Near Apollo Circle, Bhat,<br />
                            Gandhinagar, Gujarat,<br />
                            Email : ssit@gmail.com<br />
                            Contact No: 1234567890
                        </cite>
                    </p>
                </div>
                <div class="contact-container">
                    <h1>APPLY AT SSIT</h1>
                    <p>
                        <cite>
                            <a href="{URLROOT}/pages/admission">Apply for BE</a><br />
                            <a href="{URLROOT}/pages/admission">Apply for MCA</a>
                        </cite>
                    </p>
                </div>
                <div class="contact-container">
                    <h1>FEEDBACK & SUGGESTIONS</h1>
                        <form>
                            <input type="text" placeholder="Your Name" name="">
                            <input type="email" placeholder="Your Email ID" name="">
                            <textarea rows="2" placeholder="Your Answer" name=""></textarea>                            
                            <button type="submit">Submit</button>
                        </form>
                 </div>
            </div>
        </div>
    </div>
    {include file="../template/includes/footer.tpl"}  
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
    <script type="module"  src="{URLROOT}/node_modules/gsap/all.js"></script>
    <script type="module" src="{URLROOT}/js/scroll.js"></script>
    <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>   
</body>
</html>