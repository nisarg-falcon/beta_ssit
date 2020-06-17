<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">    
    <title>SSIT | Contact us</title>
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
        {* <div class="container-fluid media-container position-absolute"> *}
            {* <img src="{URLROOT}/img/img2.jpg" class="video1 container-fluid"> *}
            <!-- <video class="video1 container-fluid" loop muted autoplay>
                <source src="videos/video1.mp4" type="video/mp4">
                </video> -->
        {* </div> *}
    </div>
  
    <!-- people starts -->
    <div>
        {* <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button> *}
        <!-- contact us form -->
        <div id="contact">
            <div class="container course__container">
                <div class="contact-container">
                    <h1>VISIT IN-PERSON</h1>
                    <p>
                        <cite>
                            Shree Swaminarayan Institute of Technology (SSIT)<br />
                            Near Agora Mall & Indira Bridge,<br />
                            Sardar patel Ring Road, Bhat Circle<br />
                            Ahmedabad Airport-Gandhinagar Highway,<br />
                            Bhat, Gandhinagar-382428<br />
                        </cite>
                            Email : <a href="mailto:info@ssit.co.in">info@ssit.co.in</a> | <a href="mailto:ssit.director@gmail.com">ssit.director@gmail.com</a><br />
                            Contact No : <a href="tel:+919408260607">+91 9408260607</a> | <a href="tel:+917043609281">+91 7043609281</a> | <a href="tel:+919099063433">+91 9099063433</a>
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
                            <input type="text" placeholder="Your Name" name="name">
                            <input type="email" placeholder="Your Email ID" name="email">
                            <input type="text" placeholder="Subject of Message" name="subject">
                            <textarea rows="2" placeholder="Your Answer" name="message"></textarea>                            
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
    {* <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script> *}
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>   
</body>
</html>