<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/facilities.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">    
    <title>SSIT | Facilities</title>
    {literal} 
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179928256-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-179928256-1');
    </script>
    {/literal}
</head>
<body>
    <!-- hero section start -->
    {include file="../template/includes/header.tpl"} 
    <div class="header-section position-relative">
        {include file="../template/includes/header2.tpl"}    
        <div class="container-fluid media-container position-absolute">
            <img src="{URLROOT}/img/landing/facility.jpg" class="video1 container-fluid">
        </div>    
        <div class="header-txt position-absolute">
            <div class="txt-container container">
                <p>Facilities</p>
                <p>At SSIT</p>
            </div>    
        </div>
    </div>
    {include file="../template/includes/header3.tpl"}    

    <!-- Facilities content start -->
    <div>        
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
        <!-- lab start -->
        <div class="scroll-start1" id="labs">
            <div class="container course__container">
                <h1>Labs</h1>
                <div class="labs-swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/department/computer">
                                <img src="{URLROOT}/public/img/lab/computer/2.jpg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Computer Engineering</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/department/civil">
                                <img src="{URLROOT}/public/img/lab/civil lab/2.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Civil Engineering</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/department/electrical">
                                <img src="{URLROOT}/public/img/lab/Electrical/3.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Electrical Engineering</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/department/EC">
                                <img src="{URLROOT}/public/img//lab/E.C/1.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">E.C Engineering</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/department/mechanical">
                                <img src="{URLROOT}/public/img/lab/mechanical/4.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Mechanical Engineering</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/department/MCA">
                                <img src="{URLROOT}/public/img/lab/MCA/3.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">MCA</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next lab-button-next"></div>
                    <div class="swiper-button-prev lab-button-prev"></div> 
                    <div class="swiper-pagination lab-pagination"></div>  
                </div>                  
            </div>
        </div>
        <!-- labs ends -->

        <!-- hostel start -->
        <div id="hostel" class='scroll-start2'>
            <div class="container course__container">
                <div class="card">
                    <div class="row no-gutters">                       
                        <div class="col-md-8">
                            <img src="{URLROOT}/img/hostel1.jpeg" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h1>Hostel @ SSIT</h1>
                                <p>Room available: 24</p>
                                <p>Total Bed: 48</p>
                                <p>Food Facilities</p>                                
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
                            <div class="card-body">
                                <h1>Library @ SSIT</h1>
                                <p>The collection in the library encompasses 15500 books of 3300 titles varying in subjects  Engineering, MCA and also includes reference books, number of CDs/DVDs and subscribed to 50 print journals and magazines in print and  e-books and other e-resources.
                                    All books of Library are classified as per Dewey Decimal Classification System (DDC). Book issue and return facilities, book search option, student membership is to be done through this Soul 2.o software.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <img src="{URLROOT}/public/img/IMG_2898-min.JPG" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
                <div class="lib-facilities">
                    <h1>Library Facilities</h1>
                    <div class="lib-swiper-container">
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
                        <div class="swiper-button-next lib-button-next"></div>
                        <div class="swiper-button-prev lib-button-prev"></div> 
                        <div class="swiper-pagination lib-pagination"></div>
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
                <div class="canteen-swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="{URLROOT}/public/img/canteen.JPG" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- club starts -->
        <div id="club" class="scroll-start5">
           <div class="container course__container">
                <h1>Clubs</h1>
                <nav class="navbar navbar-expand navbar-light  nav-pills nav-fill">                  
                    <ul class="nav navbar-nav  nav-fill ">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-gic-tab" data-toggle="pill" href="#gic">GIC club</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-ostc-tab" data-toggle="pill" href="#ostc">OSTC club</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-redhat-tab" data-toggle="pill" href="#redhat">RedHat club</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-eyantra-tab" data-toggle="pill" href="#eyantra">e - Yantra</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-robotics-tab" data-toggle="pill" href="#robotics">Robotics DIY club</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-solidworks-tab" data-toggle="pill" href="#solidworks">Solidworks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-ssip-tab" data-toggle="pill" href="#ssip">SSIP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-cad-tab" data-toggle="pill" href="#cad">3D Modeling Design</a>
                        </li>
                    </ul>
                </nav> 
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="gic" role="tabpanel" aria-labelledby="pills-gic-tab">
                        <div class="gic">
                            <img src="{URLROOT}/public/img/club/gic-logo.jpg" alt="">
                            <p>Imagination is the base of innovation. So we at GIC nurture the soft skills and talent of the students to lead their imagination in a proper way. GIC has been designed to establish close bonding between industries, entrepreneur and students to make research and development at the University relevant to the needs of industries at national and international levels. It aims to involve the industries, along with the students and faculty members, in an innovation campaign, whereby GTU rejuvenates technology education and develops quality research at the University and helps create a culture of design, new and improved products and processes in our industry.</p>
                        </div>
                    </div>                 
                    <div class="tab-pane fade" id="ostc" role="tabpanel" aria-labelledby="pills-ostc-tab">
                        <div class="gic">
                            <img src="{URLROOT}/public/img/club/ostc.png" alt="">
                            <p>OSTC provides an emerging education practice that allows students to capitalize on the scope and power of technology to create and manage their learning experiences and developed interactive application.</p>
                        </div>
                        <!-- <div class="club-swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/geotech & soil mechnics/IMG-4754-300x170.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/fluid mechanics & advance fluid mechanics/IMG-4767-300x235.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/fluid mechanics & advance fluid mechanics/IMG-4769.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/concrete technology/Picture3-300x200.jpg" class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{URLROOT}/img/civil/lab/environmental engineering/IMG_2063-300x200.jpg" class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div> -->
                    </div>          
                    <div class="tab-pane fade" id="redhat" role="tabpanel" aria-labelledby="pills-redhat-tab">
                        <div class="gic">
                            <img src="{URLROOT}/public/img/club/rha3.png" alt="">
                            <p>Red Hat® Academy is an academic training program designed to help institutions differentiate themselves by providing an enterprise-ready Linux and open-source curriculum.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="eyantra" role="tabpanel" aria-labelledby="pills-eyantra-tab">
                        <div class="gic">
                            <img src="{URLROOT}/public/img/club/eyantra.png" alt="">
                            <p>e-Yantra is a robotics outreach project, an initiative of the Department of Computer Science and Engineering at the (IIT Bombay). It is funded by the Ministry of Education, Government of India, under the National Mission on Education through ICT (NMEICT). The goal of e-Yantra is to complement existing Higher Education systems worldwide and solve local problems across a variety of domains such as: Agriculture, Disaster, Manufacturing Défense, Home, Smart Cities and Service Industries through technology.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="robotics" role="tabpanel" aria-labelledby="pills-robotics-tab">
                        <div class="gic">
                            <img src="{URLROOT}/public/img/club/robotics.png" alt="">
                            <p>The concept and creation of autonomously operating machines dates back a long time, but credible research into the functionality and potential uses of robots did not grow substantially until the 20th century. And today, robotics is a rapidly growing field, as we continue to research, design and build new robots that serve various practical purposes including domestic, commercial and military. </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="solidworks" role="tabpanel" aria-labelledby="pills-solidworks-tab">
                        <div class="gic">
                            <img src="{URLROOT}/public/img/club/solidworks.png" alt="">
                            <p>It is based on parametric modelling and is primarily used to create 3D models and assemblies. SOLIDWORKS has also been adopted in the world of additive manufacturing as it enables engineers to save their models in a STL format; the format needed for a 3D model to be processed by 3D printing software.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ssip" role="tabpanel" aria-labelledby="pills-ssip-tab">
                        <div class="gic">
                            <img src="{URLROOT}/public/img/club/logo.png" alt="">
                            <p>The Education Department, Government of Gujarat has issued Student Startup and Innovation Policy (SSIP) in year  2017.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cad" role="tabpanel" aria-labelledby="pills-cad-tab">
                        <div class="gic">
                            <!-- <h3 class="text-center">3D Modeling <br> Design</h3> -->
                            <img src="{URLROOT}/public/img/club/3dmodel.png" alt="">
                            <p>3D modeling is the process of developing a mathematical representation of any surface of an object (inanimate or living) in three dimensions via specialized software.  A 3D Model can also be displayed as a two-dimensional image through a process called 3D rendering or used in a computer simulation of physical phenomena. The 3D model can be physically created using 3D printing devices that form 2D layers of the model with three-dimensional material, one layer at a time. In terms of game development, 3D modeling is merely a stage in the entire development process.</p>
                        </div>
                    </div>
                </div>
           </div>
        </div>

        <!-- play ground start -->
        <div id="ground" class="scroll-start6">
            <div class="container course__container">
                <h1>Play Area</h1>
                <div class="play-swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="{URLROOT}/img/playground/Boys_satoliya.jpeg" class="img-fluid" alt="..."></div>
                      <div class="swiper-slide"><img src="{URLROOT}/img/playground/Cricket.jpeg" class="img-fluid" alt="..."></div>
                      <div class="swiper-slide"><img src="{URLROOT}/img/playground/Girl_Satoliya.jpeg" class="img-fluid" alt="..."></div>
                    </div>
                    <div class="swiper-pagination play-pagination"></div>  
                    <div class="swiper-button-next play-button-next"></div>
                    <div class="swiper-button-prev play-button-prev"></div> 
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
    <script type="module" src="{URLROOT}/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>
</body>
</html>