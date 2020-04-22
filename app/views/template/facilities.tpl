<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/facilities.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">    
    <title>Facilities</title>
</head>
<body>
    <!-- hero section start -->
    {include file="../template/includes/header.tpl"} 
    <div class="header-section position-relative">
        {include file="../template/includes/header2.tpl"}    
        <div class="container-fluid media-container position-absolute">
            <img src="{URLROOT}/img/clg-downview-min.jpg" class="video1 container-fluid">
        </div>    
    </div>
    {include file="../template/includes/header3.tpl"}    

    <!-- Facilities content start -->
    <div class="container-fluid">
        
        <!-- lab start -->
        <div class="rounded scroll-start1" id="labs">
            <!-- labs nav start -->
            <nav class="navbar navbar-expand-lg navbar-light  nav-pills nav-fill">
                <button type="button" class="navbar-toggler navbar-light flex-row p-md-2 p-lg-2 " data-toggle="collapse" data-target="#labSupportContent2" aria-controls="navbarSupportContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-text">Labs</span>&nbsp;    
                </button>
            <div class="inner-nav navbar-collapse collapse" id="labSupportContent2">
                <ul class="nav navbar-nav  nav-fill ">
                    <li class="nav-item"><p class="nav-link h5 font-weight-normal m-0">Labs</p></li>
                    <li class="nav-item"><a class="nav-link active" id="pills-civil-tab" data-toggle="pill" href="#civil">&nbsp; Civil &nbsp;</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-computer-tab" data-toggle="pill" href="#computer">Computer</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-electrical-tab" data-toggle="pill" href="#electrical">Electrical</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-mechanical-tab" data-toggle="pill" href="#mechanical">Mechanical</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-electronics-tab" data-toggle="pill" href="#electronics">Electronics</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-mca-tab" data-toggle="pill" href="#mca">MCA</a></li>
                </ul>
            </div>
            </nav>                  
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="civil" role="tabpanel" aria-labelledby="pills-civil-tab">
                    <div class="labs-image">
                        <figure>
                            <img src="{URLROOT}/img/civil/lab/surveying/civil-lab-1.jpg" alt="">
                        </figure>
                    </div>  
                    <div class="labs-info">
                        <p class="h4">Civil Engineering</p>
                        <blockquote class="blockquote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi asperiores esse repudiandae sapiente beatae cupiditate officia, exercitationem rerum iusto ducimus quasi blanditiis quaerat corporis qui nesciunt dignissimos eum. Doloribus, corporis?</blockquote>
                    </div>
                </div>
                <div class="tab-pane fade" id="computer" role="tabpanel" aria-labelledby="pills-computer-tab">
                    <div class="labs-image">
                        <figure>
                            <img src="{URLROOT}/img/img2.jpg" alt="">                           
                        </figure>
                    </div>  
                    <div class="labs-info">
                        <p class="h4">Computer Engineering</p>
                        <blockquote class="blockquote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi asperiores esse repudiandae sapiente beatae cupiditate officia, exercitationem rerum iusto ducimus quasi blanditiis quaerat corporis qui nesciunt dignissimos eum. Doloribus, corporis?</blockquote>
                    </div>
                </div>
                <div class="tab-pane fade" id="electrical" role="tabpanel" aria-labelledby="pills-electrical-tab">
                    <div class="labs-image">
                        <figure>
                            <img src="{URLROOT}/img/hostel.jpg" alt="">
                        </figure>
                    </div>  
                    <div class="labs-info">
                        <p class="h4">Electrical Engineering</p>
                        <blockquote class="blockquote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi asperiores esse repudiandae sapiente beatae cupiditate officia, exercitationem rerum iusto ducimus quasi blanditiis quaerat corporis qui nesciunt dignissimos eum. Doloribus, corporis?</blockquote>
                    </div>
                </div>
                <div class="tab-pane fade" id="mechanical" role="tabpanel" aria-labelledby="pills-mechanical-tab">
                    <div class="labs-image">
                        <figure>
                            <img src="{URLROOT}/img/library.jpg" alt="">
                        </figure>
                    </div>  
                    <div class="labs-info">
                        <p class="h4">Mechanical Engineering</p>
                        <blockquote class="blockquote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi asperiores esse repudiandae sapiente beatae cupiditate officia, exercitationem rerum iusto ducimus quasi blanditiis quaerat corporis qui nesciunt dignissimos eum. Doloribus, corporis?</blockquote>
                    </div>
                </div>
                <div class="tab-pane fade" id="electronics" role="tabpanel" aria-labelledby="pills-electronics-tab">
                    <div class="labs-image">
                        <figure>
                           <img src="{URLROOT}/img/img2.jpg" alt="">
                        </figure>
                    </div>  
                    <div class="labs-info">
                        <p class="h4">Electronics Engineering</p>
                        <blockquote class="blockquote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi asperiores esse repudiandae sapiente beatae cupiditate officia, exercitationem rerum iusto ducimus quasi blanditiis quaerat corporis qui nesciunt dignissimos eum. Doloribus, corporis?</blockquote>
                    </div>
                </div>
                <div class="tab-pane fade" id="mca" role="tabpanel" aria-labelledby="pills-mca-tab">
                    <div class="labs-image">
                        <figure>
                            <img src="{URLROOT}/img/hostel.jpg" alt="">
                        </figure>
                    </div>  
                    <div class="labs-info">
                        <p class="h4">MCA Engineering</p>
                        <blockquote class="blockquote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi asperiores esse repudiandae sapiente beatae cupiditate officia, exercitationem rerum iusto ducimus quasi blanditiis quaerat corporis qui nesciunt dignissimos eum. Doloribus, corporis?</blockquote>
                    </div>
                </div>
            </div>                      
        </div>
        <!-- labs ends -->

        <!-- hostel start -->
        <div id="hostel" class='scroll-start2'>
            <div class="rounded hostel-facility">
                <div class="card">
                    <img src="{URLROOT}/img/hostel.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <div class="content">
                            <h5 class="card-title">Hostel @ SSIT</h5>
                            <p class="card-text">50+ rooms<br> 100+ student capacity<br> 2 times food facility</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hostel end -->        

        <!-- library start -->
        <div id="library" class='scroll-start3'>
            <!-- library img and text section -->
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{URLROOT}/img/library.jpg" height="100%" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Library @ SSIT</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus labore qui suscipit repudiandae possimus nemo impedit consequatur quae veritatis aliquid, corrupti earum iusto tempora explicabo aliquam unde reiciendis! Aspernatur velit tenetur facilis, at magnam eaque sed, fuga maiores quos facere nesciunt rem esse culpa animi, odit eos ipsa distinctio veniam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum dignissimos incidunt amet obcaecati ratione nostrum a atque qui neque inventore!</p>
                    </div>
                    </div>
                </div>
            </div>

            <div class="lib-facilities">
                <nav class="navbar navbar-expand-lg navbar-light  nav-pills nav-fill">
                <button type="button" class="navbar-toggler navbar-light flex-row p-md-2 p-lg-2 " data-toggle="collapse" data-target="#library-facilities" aria-controls="navbarSupportContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-text">Library Facilities</span>&nbsp;    
                </button>
                <div class="inner-nav navbar-collapse collapse" id="library-facilities">
                    <ul class="nav navbar-nav nav-fill">
                        <li class="nav-item"><p class="nav-link h5 font-weight-normal m-0">Library Facilities</p></li>
                        <li class="nav-item"><a class="nav-link" href="#">Book shelf</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Reading Area</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Reference books</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Newspaper Section</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Digital Library</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Work Area</a></li>
                    </ul>
                </div>
                </nav>
                <!-- <img src="{URLROOT}/img/library.jpg" class="img-fluid" alt=""> -->
                <div class="labs-image">
                    <figure>
                        <img src="{URLROOT}/img/book-shelf-min.jpg" alt="">
                        <img src="{URLROOT}/img/IMG_2890-min.JPG" alt="">
                        <img src="{URLROOT}/img/IMG_2891-min.JPG" alt="">
                        <img src="{URLROOT}/img/IMG_2903-min.JPG" alt="">
                        <img src="{URLROOT}/img/IMG_2896-min.JPG" alt="">
                    </figure>
                </div>
            </div>
                
            <!-- librarian details -->
            <!-- <div class=" d-flex flex-column flex-sm-column flex-md-row justify-content-around">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{URLROOT}/img/img1.jpg" height="100%" class="card-img" alt="">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Librarian Details</h5>
                            <p class="card-text">Pritesh barot</p>
                            <p class="card-text">Email id: library@ssit.co.in</p>
                                <small class="text-muted">Library Attendant</small>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{URLROOT}/img/img1.jpg" height="100%" class="card-img" alt="">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Librarian Details</h5>
                            <p class="card-text">Pritesh barot</p>
                            <p class="card-text">Email id: library@ssit.co.in</p>
                                <small class="text-muted">Library Attendant</small>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!-- upcoming books details -->
            <!-- <p class="h5">Upcoming Books</p>
            <div class="card-deck">
                <div class="card">
                    <img src="{URLROOT}/img/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">- Will arrive on July onwards</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{URLROOT}/img/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">- Will arrive on July onwards</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="{URLROOT}/img/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">- Will arrive on July onwards</small></p>
                    </div>
                </div>
            </div> -->

        </div>
        <!-- library ends -->

        <!-- canteen start -->
        <div id="canteen" class="scroll-start4">
        <p class="h5">Canteen</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{URLROOT}/img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{URLROOT}/img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{URLROOT}/img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- club starts -->
        <div id="club" class="scroll-start5">
            <nav class="navbar navbar-expand-lg navbar-light p-0">                
            <button type="button" class="navbar-toggler navbar-light flex-row p-md-2 p-lg-2 " data-toggle="collapse" data-target="#club-navbar" aria-controls="navbarSupportContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-text">Clubs</span>&nbsp;
            </button>
            </nav>
            <div class="department-links" id="department-links">
                <div class="link-grd">
                    <div class="link-cont navbar-collapse collapse" id="club-navbar">
                        <div class="department-staff link-cont-item">
                            <a class="staff-link">OSTC club</a>
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </div>
                        <div class="department-facilities link-cont-item">
                            <a class="staff-link">Robotics Lab</a>
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </div>
                        <div class="department-events link-cont-item">
                            <a class="staff-link">makers Lab</a>
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </div>
                        <div class="department-events link-cont-item">
                            <a class="staff-link">GIC club</a>
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </div>
                        <div class="department-events link-cont-item">
                            <a class="staff-link">Entrepreneur club</a>
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </div>
                        <div class="department-events link-cont-item">
                            <a class="staff-link">Placement club</a>
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content department-content">
                            <div class="staff-content">
                                <img src="{URLROOT}/img/ostc.png" class="img-fluid" alt="">
                                <blockquote class="blockquote">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iure, doloremque odio asperiores iste veniam explicabo. Dignissimos laudantium rem aliquid, quaerat harum id nulla omnis minus tempora? Fugit deserunt commodi provident fugiat voluptates. Alias a magni qui neque quo! Non.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. temporibus fuga tenetur iste? Eaque nobis deleniti facere!
                                </blockquote>
                            </div>
                            <div class="staff-content" >
                                <img src="{URLROOT}/img/ostc.png" class="img-fluid" alt="">
                                <blockquote class="blockquote">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iure, doloremque odio asperiores iste veniam explicabo. Dignissimos laudantium rem aliquid, quaerat harum id nulla omnis minus tempora? Fugit deserunt commodi provident fugiat voluptates. Alias a magni qui neque quo! Non.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. temporibus fuga tenetur iste? Eaque nobis deleniti facere!
                                </blockquote>
                            </div>
                            <div class="staff-content">
                                <img src="{URLROOT}/img/ostc.png" class="img-fluid" alt="">
                                <blockquote class="blockquote">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iure, doloremque odio asperiores iste veniam explicabo. Dignissimos laudantium rem aliquid, quaerat harum id nulla omnis minus tempora? Fugit deserunt commodi provident fugiat voluptates. Alias a magni qui neque quo! Non.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. temporibus fuga tenetur iste? Eaque nobis deleniti facere!
                                </blockquote>
                            </div>
                            <div class="staff-content">
                                <img src="{URLROOT}/img/ostc.png" class="img-fluid" alt="">
                                <blockquote class="blockquote">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iure, doloremque odio asperiores iste veniam explicabo. Dignissimos laudantium rem aliquid, quaerat harum id nulla omnis minus tempora? Fugit deserunt commodi provident fugiat voluptates. Alias a magni qui neque quo! Non.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. temporibus fuga tenetur iste? Eaque nobis deleniti facere!
                                </blockquote>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- play ground start -->
        <div id="ground" class="scroll-start6">
            <p class="h5">Play Area</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{URLROOT}/img/IMG_2914-min.JPG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{URLROOT}/img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{URLROOT}/img/IMG_2914-min.JPG" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    <!-- facilities ends -->
    </div>

    {include file="../template/includes/footer.tpl"}
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
    <script type="module"  src="{URLROOT}/node_modules/gsap/all.js"></script>
    <script type="module" src="{URLROOT}/js/scroll.js"></script>
    {* <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script> *}
     <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>
</body>
</html>