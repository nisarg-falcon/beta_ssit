<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/activities.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">    
    <title>Activities</title>
</head>
<body>
    <!-- hero section start -->
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
    {include file="../template/includes/header3.tpl"} 
    
    <!-- activities starts here -->
    <div>
        <!-- educational events start -->
        <div class="scroll-start1" id="educational">
            <div class="container course__container">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">2020</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">2019</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">2018</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card-grid">
                            <a href="#"  id="modalBtn" class="button">
                                <div class="card">
                                    <img src="{URLROOT}/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">GTU smart gujarat hackathon</h5>
                                        {* <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> *}
                                    </div>
                                </div>
                            </a>
                            <div id="eventModal" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>GTU smart gujarat hackathon GTU smart gujarat hackathon</h1>
                                        <i class="fa fa-times closeBtn" id="closeBtn" aria-hidden="true"></i>
                                    </div>
                                    <img src="{URLROOT}/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati eligendi, velit repudiandae illum ab harum, dolores consectetur recusandae aspernatur ut minus nam exercitationem deserunt debitis maxime consequuntur nobis odio nisi.
                                        Amet, atque delectus eligendi facere fuga id temporibus magnam ullam minus recusandae ipsam eaque nisi laudantium voluptate ad repellat itaque inventore, repudiandae est quos dolore obcaecati esse reiciendis! Perferendis, reiciendis.
                                        Facere perferendis rem sequi, obcaecati repellendus fugiat soluta commodi, neque natus facilis earum, praesentium in deleniti consequuntur assumenda! Quidem ea dolores maxime id illum voluptate nobis iste labore eum ullam?</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="card">
                                    <img src="{URLROOT}/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Tech-fest</h5>
                                        {* <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> *}
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="card">
                                    <img src="{URLROOT}/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">cultural function</h5>
                                        {* <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> *}
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="card">
                                    <img src="{URLROOT}/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">sports event</h5>
                                        {* <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> *}
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="card">
                                    <img src="{URLROOT}/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Navratri festival</h5>
                                        {* <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> *}
                                    </div>
                                </div>
                            </a>
                        </div>                     
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        234
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        456
                    </div>
                </div>
            </div>
        </div>
    </div>
     {include file="../template/includes/footer.tpl"}
    <script>
        var modal = document.getElementById('eventModal');
        var modalBtn = document.getElementById('modalBtn');
        var closeBtn = document.getElementById('closeBtn');

        modalBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);
        window.addEventListener('click', outsideClick);
        
        function openModal(){
            modal.style.display = 'block';
        }
        function closeModal(){
            modal.style.display = 'none';
        }
        function outsideClick(e){
            if(e.target == modal){
                modal.style.display = 'none';
            }
        }
    </script>
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
    <script type="module"  src="{URLROOT}/node_modules/gsap/all.js"></script>
    <script type="module" src="{URLROOT}/js/scroll.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>   
</body>
</html>
