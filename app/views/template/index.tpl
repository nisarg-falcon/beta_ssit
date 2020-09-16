<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/index.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>SSIT | Shree Swaminarayan Institute Of Technology</title>
</head>
<body>
    {include file="../template/includes/header.tpl"} 
    <div class="header-section position-relative">
        {include file="../template/includes/header2.tpl"}    
        <div class="container-fluid media-container position-absolute">
            <img src="{URLROOT}/img/landing/hero-image.jpg" class="video1 container-fluid">
            <!-- <video class="video1 container-fluid" loop muted autoplay>
                <source src="videos/video1.mp4" type="video/mp4">
                </video> -->
        </div>    
        <div class="header-txt position-absolute">
            <div class="txt-container container">
                <p>SSIT</p>
                <p>Welcomes You</p>
            </div>    
        </div>
    </div>
    {include file="../template/includes/header3.tpl"} 

    <!-- index page starts -->
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
        <!-- course info -->
        <div class="scroll-start1" id="courses">
            <div class="container course__container">
                <div class="course-info">
                    <h1>Shree Swaminarayan Institute of Technology</h1>
                    <p>We are an academic excellent Technical College made up of commited scholer students ,old collegians and staff members our rich history is the foundation for our values.                                          
                    <a>Welcome, Jay Swaminarayan</a></p>
                </div>
                <div class="course-name">
                        <h1>Top 6 Courses</h1>
                    <div class="course__names">
                            {if !empty($data['dept'])}
                            <ol>
                            {foreach $data['dept'] as $department}
                                <li>{$department['name']}</li>
                            {/foreach}
                            </ol>
                        {else}
                            <h2 class="h2">No courses found</h2>
                        {/if}
                    </div>
                </div>
            </div>        
        </div>
   
        <!-- director's message -->
        <div class="scroll-start2" id="director">
            <div class="container course__container">
                <div class="director-info">
                    <img src="img/Dharmesh Sir.jpg" class="img" alt="">
                </div>    
                <div class="director-message">
                    <h1>Director's Message</h1>
                    {if !empty($data['dm'])}
                        {foreach $data['dm'] as $dm}
                        <blockquote class="blockquote mb-0 text-justify">
                            <p class="mb-0"><q>{$dm['message']}</q></p>
                            <footer class="blockquote-footer">Prof. Dharmesh N. Vandra. Executive Director at <cite title="Source Title">SSIT</cite></footer>
                        </blockquote>
                        
                        {/foreach}
                    {else}
                        <h2 class="h2">No message found.</h2>
                    {/if}
                </div>
            </div>
        </div>

        <!-- about institute -->
        <div class="scroll-start3" id="institute">
            <div class="institute-info">
                <div class="bg-effect">
                    <div class="container d-flex justify-content-end">
                        <div class="institute-name">
                            <h1>About Institute</h1>
                            <p class="text-justify mb-0">
                                SSIT is committed to nurture academic, personal and social values in the students; and expects the students to practice the core commitments of academic, personal and social responsibility. The commitments are achieving excellence, and academic integrity, contributing to a larger community, enlightening ethical and moral reasoning. 
                                <!-- SSIT wants all students to achieve their highest academic potential and makes faculty and academic support resources available to assist each student in meeting his/her academic goals. Goal of SSIT is to teach students how to live and to help them experience long-term social success. many activities, and events are organized to enhance student’s social interactions and skills. -->
                                In fact, SSIT promotes: dignity in behavior, upholding social and moral values. Thus, SSIT strongly believes that a student’s life at the campus should be comfortable and hassle-free, and for the purpose it has carefully designed various services for the students like Library, Hostel, and Transport facility, Stationery, Training and Placement etc. A vast range of cultural and social activities are also available to SSIT students along with the faculty and staff getting involved in campus life.
                        </p>
                        </div>  
                    </div>
                </div>  
            </div>
        </div>
    
        <!-- event start -->
        <div class="scroll-start4" id="events">
            <div class="container course__container">
                <h1>Events</h1> 
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/activities">
                                <img src="img/events/educational/HACKATHON 2019/1.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Hackathon 2019</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/activities">
                                <img src="img/events/cultural/Ramzat/1.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Ramzat 2019</h5>
                                </div>
                            </a>
                        </div>                        
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/activities">
                                <img src="img/events/cultural/Cultural/4.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Cultural Festival</h5>
                                </div>
                            </a>
                        </div>                     
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/activities">
                                <img src="img/events/sports/Sports/1.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Sports Festival</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/activities">
                                <img src="img/civil/events/civil.jpeg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Days celebration</h5>
                                </div>
                            </a>
                        </div>                    
                        <div class="swiper-slide">
                            <a href="{URLROOT}/pages/activities">
                                <img src="img/events/educational/Autodesk Workshop/1.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Autodesk Workshop</h5>
                                </div>
                            </a>
                        </div>                                              
                    </div>   
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> 
                    <div class="swiper-pagination"></div>                        
                </div>            
            </div>
        </div>

        <!-- social presence -->
        <div class="scroll-start5" id="socialmedia">
            <div class="container course__container">
                <div class="insta-container">
                    <div class="container-heading">
                        <h1>From Instagram</h1>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <div class="scroll">
                        <div class="content-container">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/B-1naewBUNq/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B-1naewBUNq/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/B-1naewBUNq/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by SSIT (@ssit.gandhinagar)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-04-11T10:46:50+00:00">Apr 11, 2020 at 3:46am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/B-6leiVBG5K/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B-6leiVBG5K/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/B-6leiVBG5K/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by SSIT (@ssit.gandhinagar)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-04-13T09:06:07+00:00">Apr 13, 2020 at 2:06am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                        </div>
                    </div>
                </div>
                <div class="facebook-container">
                    <div class="container-heading">
                        <h1>From Youtube</h1>
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </div>
                    <div class="scroll">
                        <div class="content-container">
                            <iframe width="99%" height="315" style="margin-bottom: 20px;" src="https://www.youtube.com/embed/mipDRIQkKYM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="99%" height="315" style="margin-bottom: 20px;" src="https://www.youtube.com/embed/nhDsaIqHABk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="99%" height="315" src="https://www.youtube.com/embed/x9F5JGij0Fw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>

        <!-- gallery -->
        <div class="scroll-start6" id="gallery">
            <div class="container course__container">
                <!-- <div class="gallery-contain"> -->
                    <h1>Gallery</h1> 
                    <div class="gallery-swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="img/events/educational/HACKATHON 2019/1.JPG" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title"></h5>
                                </div> -->
                            </div>
                            <div class="swiper-slide">
                                <img src="img/gallery/Hackathon.jpg" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">Hackathon At ssit</h5>
                                </div> -->
                            </div>
                            <div class="swiper-slide">
                                <img src="img/events/cultural/Cultural/4.JPG" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title"></h5>
                                </div> -->
                            </div>                                                     
                            <div class="swiper-slide">
                                <img src="img/gallery/SSIT16.jpeg" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">Day celebration</h5>
                                </div> -->
                            </div>
                            <div class="swiper-slide">
                                <img src="img/gallery/SSIT6.jpeg" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">with CM shree Vijaybhai rupani </h5>
                                </div> -->
                            </div>                          
                            <div class="swiper-slide">
                                <img src="img/gallery/Sports.jpg" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">Cricket tournament</h5>
                                </div> -->
                            </div>
                            <div class="swiper-slide">
                                <img src="img/events/sports/Sports/8.JPG" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title"></h5>
                                </div> -->
                            </div>
                            <div class="swiper-slide">
                                <img src="img/events/sports/Sports/10.JPG" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title"></h5>
                                </div> -->
                            </div>
                            <div class="swiper-slide">
                                <img src="img/gallery/SHIKSHAPATRI.JPG" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">SHIKSHAPATRI by ssit</h5>
                                </div> -->
                            </div>                          
                            <div class="swiper-slide">
                                <img src="img/gallery/SSIT9.jpeg" class="img-fluid" alt="">
                                <!-- <div class="card-body">
                                    <h5 class="card-title">visit to Gujarat vidhansabha</h5>
                                </div> -->
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination"></div>  
                        <div class="swiper-button-next swiper-button-next"></div>
                        <div class="swiper-button-prev swiper-button-prev"></div>
                    </div>
                    <div class="gallery-swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide" style="background-image:url('img/events/educational/HACKATHON 2019/1.JPG'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/gallery/Hackathon.jpg'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/events/cultural/Cultural/4.JPG'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/gallery/SSIT16.jpeg'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/gallery/SSIT6.jpeg'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/gallery/Sports.jpg'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/events/sports/Sports/8.JPG'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/events/sports/Sports/10.JPG'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/gallery/SHIKSHAPATRI.JPG'); background-size: cover;"></div>
                          <div class="swiper-slide" style="background-image:url('img/gallery/SSIT9.jpeg'); background-size: cover;"></div>
                        </div>
                    </div>                    
                <!-- </div> -->
            </div> 
        </div>

        <!-- fees -->
        <div class="scroll-start7" id="fees">
            <div class="container course__container">
                <h1>Online Fees</h1> 
                <nav>
                    <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-paynow-tab" data-toggle="pill" href="#pills-paynow" role="tab" aria-controls="pills-paynow" aria-selected="true">Pay Now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-feespolicy-tab" data-toggle="pill" href="#pills-feespolicy" role="tab" aria-controls="pills-feespolicy" aria-selected="false">Fees & Refund Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-tc-tab" data-toggle="pill" href="#pills-tc" role="tab" aria-controls="pills-tc" aria-selected="false">Terms & Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-privacypolicy-tab" data-toggle="pill" href="#pills-privacypolicy" role="tab" aria-controls="pills-privacypolicy" aria-selected="false">Privacy Policy</a>
                        </li>
                    </ul>
                </nav>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-paynow" role="tabpanel" aria-labelledby="pills-paynow-tab">
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="pills-feespolicy" role="tabpanel" aria-labelledby="pills-feespolicy-tab">
                        <p>
                            Fees once paid will not be refundable. <br>
                            All fees fixed by the college are to be paid according to the procedure and with the time limit set by the college. <br>
                            A penalty of Rs 500/- will have to be paid if fees are not paid within the specified dates. Repeated non-payment of fees on time will render the student liable for expulsion from the college. <br>
                            Fees are to be paid as per the Schedule given below. <br>
                            Semester 3rd,5th & 7th in All Branch <br>
                            Last Week of July – 2020
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-tc" role="tabpanel" aria-labelledby="pills-tc-tab">
                        <p>
                            Welcome to our website. If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Shree Swaminarayan Institute of Technology Gandhinagar relationship with you in relation to this website. <br>
                            <u>The use of this website is subject to the following terms:</u> <br>
                            The content of the pages of this website is for your general information and use only. It is subject to change without notice. <br>
                            Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law. <br>
                            Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements. <br> 
                            This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions. <br>
                            All trade-marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website. <br>
                            Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence. <br>
                            From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s). <br>
                            You may not create a link to this website from another website or document without prior written consent from ‘Shree Swaminarayan Institute of Technology Gandhinagar’, Gandhinagar - Gujarat. <br>
                            Your use of this website and any dispute arising out of such use of the website is subject to the laws of India or other regulatory authority. <br>
                            Any type of fee / charges charged for providing services of online deposit of college fee shall be borne by the parents. <br>
                            Parents can pay fee online as well as at college office. Kindly use any of either mode to pay your wards fee for a particular quarter. <br>
                            The issue, if any, related to online payment of college fee will be taken care by college office only. <br>
                            Parents paying college fee through online mode will get fee receipt for the same which will be generated online after successful processing of transaction. <br>
                            In case of successful transaction where fee receipt has not been generated after paying fee, the parents may contact the college office. <br>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-privacypolicy" role="tabpanel" aria-labelledby="pills-privacypolicy-tab">
                        <p>
                            We, Shree Swaminarayan Institute of Technology, Gandhinagar value the relationship we have with our candidates and web site visitors. The following privacy commitment has been created to demonstrate our policy on privacy. Shree Swaminarayan Institute of Technology, Gandhinagar is not responsible for the privacy practices or the content of such other Websites. <br>
                            We use your IP address to help diagnose problems with our server and/or to administer our Web site. This gives us an idea of which parts of our site users are visiting. We do not link IP addresses to anything personally identifiable. This means that a user’s session will be tracked, but the user will be anonymous. <br>
                            You can visit most pages on our site without giving us any information about yourself. However, our Web site may at various occasions require you to give us contact information like your name and email address and other personal information. We use the contact information only to respond to your queries or send you information about our company. <br>
                            We occasionally engage other parties to provide limited services to us or on our behalf. We will only provide those other parties the information they need to deliver the service, and they are prohibited from using that information for any other purpose. <br>
                            When you give us personal information, Shree Swaminarayan Institute of Technology, Gandhinagar will not share that information with third parties without your permission, other than for the limited exceptions already listed. It will only be used for the purposes stated above. However, you are requested to review their privacy policies to learn more about what, why, and how they collect and use personally identifiable information. <br>
                            When you visit our site, our privacy policy only applies to www.dps-gandhinagar.com network. It does not apply to non-network sites that you connect to from our site. We recommend that you read their privacy policy to understand how they manage personal information. We are not responsible for the content or practices of web sites operated by third parties that are linked to our sites. These links may have been provided as a service to our users. Unless otherwise stated, they do not constitute our endorsement, sponsorship or approval of their content, policies or practices. <br>
                            When someone visits the site, a cookie is placed on the user’s machine (if the user accepts cookies) or is read if the customer has visited the site previously. One use of cookies is to assist in the collection of the site visitation statistics described above. <br>
                            Web beacons, also known as clear gif technology or action tags, may be used to assist in delivering the cookie on our site. This technology tells us how many visitors clicked on key elements (such as links or graphics) on a webpage. We do not use this technology to access your personal information on www.dps-gandhinagar.com.It is a tool we use to compile aggregated statistics about our Web site usage. We may share aggregated site statistics with partner companies but do not allow other companies to place clear gifs on our sites. <br>
                            If you choose to not have your browser accept cookies from www.dps-gandhinagar.com you will be able to view the text on the screens; however, you will not experience a personalized visit nor will you be able to subscribe to the service offerings on the site. <br>
                            This site has security measures in place to protect the loss, misuse, and/or alteration of information under our control. The data resides behind a firewall, with access restricted to authorized Shree Swaminarayan Institute of Technology, Gandhinagar personnel. <br>
                            Shree Swaminarayan Institute of Technology, Gandhinagar will occasionally update this privacy statement. We will give you as much notice as possible prior to implementation. In rare cases, just like with any company or person, we may need to disclose certain information to comply with a valid legal process, such as a court order, subpoena or search. We also may choose to establish or exercise our legal rights or defend against legal claims. <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 360 tour -->
        <div class="tour">
            <a href="{URLROOT}/pages/tour">
                <button><i class="fa fa-camera" aria-hidden="true"></i>Virtual Campus Tour</button>
            </a>
        </div>

        <!-- placement -->
        <div class="placement">
            <div class="container">
                <h1>Our Partners</h1>
                <div class="placement-swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/civil/placement/1-1.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/civil/placement/download-1.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/comp/placement/NSSPL-Gandhinagar.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/comp/placement/way2web.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/mca/placement/images-1.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/ec/placement/TEKSUN.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/ec/placement/electro-1-300x88.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/mca/placement/silverwing-300x81.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/mca/placement/royal-300x76.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/mech/placement/3.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="img/mech/placement/9.jpg" class="img-fluid" alt=""></div>
                    </div>
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
    <script type="module" src="{URLROOT}/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>   
</body>
</html>