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
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">    
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
    <div>
        
        <!-- lab start -->
        <div class="scroll-start1" id="labs">
            <div class="container course__container">
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
                        <div class="labs-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/geotech & soil mechnics/IMG-4754-300x170.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/fluid mechanics & advance fluid mechanics/IMG-4767-300x235.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/fluid mechanics & advance fluid mechanics/IMG-4769.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/concrete technology/Picture3-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/environmental engineering/IMG_2063-300x200.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="computer" role="tabpanel" aria-labelledby="pills-computer-tab">
                        <div class="labs-swiper-container">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/MG_5010-300x168.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/IMG_2173-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/Simulation-Lab1-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/IMG_2146-1-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/IMG_2148-300x200.jpg" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="electrical" role="tabpanel" aria-labelledby="pills-electrical-tab">
                         <div class="labs-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mechanical" role="tabpanel" aria-labelledby="pills-mechanical-tab">
                         <div class="labs-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="electronics" role="tabpanel" aria-labelledby="pills-electronics-tab">
                         <div class="labs-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mca" role="tabpanel" aria-labelledby="pills-mca-tab">
                         <div class="labs-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>                      
            </div>
        </div>
        <!-- labs ends -->

        <!-- hostel start -->
        <div id="hostel" class='scroll-start2'>
            <div class="container course__container">
                <div class="rounded hostel-facility">
                    <div class="card">
                        <div class="card-img-overlay">
                            <div class="content">
                                <h1>Hostel @ SSIT</h1>
                                <p>50+ rooms<br> 100+ student capacity<br> 2 times food facility</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hostel end -->        

        <!-- library start -->
        <div id="library" class='scroll-start3'>
            <div class="container course__container">
                <!-- library img and text section -->
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="{URLROOT}/img/library-showcase.jpg" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-6">
                        <div class="card-body">
                            <h1>Library @ SSIT</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus labore qui suscipit repudiandae possimus nemo impedit consequatur quae veritatis aliquid, corrupti earum iusto tempora explicabo aliquam unde reiciendis! Aspernatur velit tenetur facilis, at magnam eaque sed, fuga maiores quos facere nesciunt rem esse culpa animi, odit eos ipsa distinctio veniam.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="lib-facilities">
                    <h1>Library Facilities</h1>
                    <div class="labs-swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{URLROOT}/img/book-shelf-min.jpg" class="img-fluid" alt="">
                                <div class="facility-name"><h2>Book Shelf</h2></div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{URLROOT}/img/IMG_2890-min.JPG" class="img-fluid" alt="">
                                <div class="facility-name"><h2>Reading Area</h2></div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{URLROOT}/img/IMG_2891-min.JPG" class="img-fluid" alt="">
                                <div class="facility-name"><h2>Reference Books</h2></div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{URLROOT}/img/IMG_2903-min.JPG" class="img-fluid" alt="">
                                <div class="facility-name"><h2>Newspaper Section</h2></div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{URLROOT}/img/IMG_2896-min.JPG" class="img-fluid" alt="">
                                <div class="facility-name"><h2>Digital Library</h2></div>
                            </div>
                            <div class="swiper-slide">
                                <img src="{URLROOT}/img/work-area-zoom.jpg" class="img-fluid" alt="">
                                <div class="facility-name"><h2>Work Area</h2></div>
                            </div>
                        </div>                     
                        <div class="swiper-pagination"></div>
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
           </div>
        </div>
        <!-- library ends -->

        <!-- canteen start -->
        <div id="canteen" class="scroll-start4">
            <div class="container course__container">
                <h1>Canteen</h1>
                <div class="labs-swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">Slide 1</div>
                      <div class="swiper-slide">Slide 2</div>
                      <div class="swiper-slide">Slide 3</div>
                      <div class="swiper-slide">Slide 4</div>
                      <div class="swiper-slide">Slide 5</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- club starts -->
        <div id="club" class="scroll-start5">
           <div class="container course__container">
                <h1>Clubs</h1>
                <nav class="navbar navbar-expand-lg navbar-light  nav-pills nav-fill">
                    <button type="button" class="navbar-toggler navbar-light flex-row p-md-2 p-lg-2 " data-toggle="collapse" data-target="#clubtabs" aria-controls="navbarSupportContent" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-text">clubs</span>&nbsp;    
                    </button>
                    <div class="inner-nav navbar-collapse collapse" id="clubtabs">
                        <ul class="nav navbar-nav  nav-fill ">
                            <li class="nav-item"><p class="nav-link h5 font-weight-normal m-0">Clubs</p></li>
                            <li class="nav-item"><a class="nav-link active" id="pills-ostc-tab" data-toggle="pill" href="#ostc">OSTC club</a></li>
                            <li class="nav-item"><a class="nav-link" id="pills-gic-tab" data-toggle="pill" href="#gic">GIC club</a></li>
                            <li class="nav-item"><a class="nav-link" id="pills-tc-tab" data-toggle="pill" href="#tc">Think-Tech club</a></li>                           
                        </ul>
                    </div>
                </nav> 
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="ostc" role="tabpanel" aria-labelledby="pills-ostc-tab">
                        <div class="labs-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/geotech & soil mechnics/IMG-4754-300x170.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/fluid mechanics & advance fluid mechanics/IMG-4767-300x235.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/fluid mechanics & advance fluid mechanics/IMG-4769.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/concrete technology/Picture3-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/environmental engineering/IMG_2063-300x200.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gic" role="tabpanel" aria-labelledby="pills-gic-tab">
                        <div class="labs-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/MG_5010-300x168.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/IMG_2173-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/Simulation-Lab1-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/IMG_2146-1-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/comp/lab/IMG_2148-300x200.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tc" role="tabpanel" aria-labelledby="pills-tc-tab">
                         <div class="labs-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>

        <!-- play ground start -->
        <div id="ground" class="scroll-start6">
            <div class="container course__container">
                <h1>Play Area</h1>
                <div class="labs-swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="{URLROOT}/img/IMG_2914-min.JPG" class="img-fluid" alt="..."></div>
                      <div class="swiper-slide"><img src="{URLROOT}/img/img2.jpg" class="img-fluid" alt="..."></div>
                      <div class="swiper-slide"><img src="{URLROOT}/img/IMG_2914-min.JPG" class="img-fluid" alt="..."></div>
                    </div>
                </div>
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
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>    
    <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>
</body>
</html>