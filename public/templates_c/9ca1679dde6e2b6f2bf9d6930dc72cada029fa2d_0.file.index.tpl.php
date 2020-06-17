<?php
/* Smarty version 3.1.33, created on 2020-06-14 21:55:43
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee680bf0be325_79595135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ca1679dde6e2b6f2bf9d6930dc72cada029fa2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\index.tpl',
      1 => 1592164541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/includes/header.tpl' => 1,
    'file:../template/includes/header2.tpl' => 1,
    'file:../template/includes/header3.tpl' => 1,
    'file:../template/includes/footer.tpl' => 1,
  ),
),false)) {
function content_5ee680bf0be325_79595135 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo URLROOT;?>
/img/logo.png">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/header.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/footer.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/index.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <title>SSIT | Shree Swaminarayan Institute Of Technology</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="header-section position-relative">
        <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
        <div class="container-fluid media-container position-absolute">
            <img src="<?php echo URLROOT;?>
/img/landing/hero-image.jpg" class="video1 container-fluid">
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
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

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
                            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['dept'])) {?>
                            <ol>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['dept'], 'department');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>
</li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                        <?php } else { ?>
                            <h2 class="h2">No courses found</h2>
                        <?php }?>
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
                    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['dm'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['dm'], 'dm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dm']->value) {
?>
                        <blockquote class="blockquote mb-0 text-justify">
                            <p class="mb-0"><q><?php echo $_smarty_tpl->tpl_vars['dm']->value['message'];?>
</q></p>
                            <footer class="blockquote-footer">Prof. Dharmesh N. Vandra. Executive Director at <cite title="Source Title">SSIT</cite></footer>
                        </blockquote>
                        
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <h2 class="h2">No message found.</h2>
                    <?php }?>
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
                            <a href="<?php echo URLROOT;?>
/pages/activities">
                                <img src="img/events/educational/HACKATHON 2019/1.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Hackathon 2019</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo URLROOT;?>
/pages/activities">
                                <img src="img/events/cultural/Ramzat/5.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Ramzat 2019</h5>
                                </div>
                            </a>
                        </div>                        
                        <div class="swiper-slide">
                            <a href="<?php echo URLROOT;?>
/pages/activities">
                                <img src="img/events/cultural/Cultural/4.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Cultural Festival</h5>
                                </div>
                            </a>
                        </div>                     
                        <div class="swiper-slide">
                            <a href="<?php echo URLROOT;?>
/pages/activities">
                                <img src="img/events/sports/Sports/1.JPG" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Sports Festival</h5>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo URLROOT;?>
/pages/activities">
                                <img src="img/civil/events/civil.jpeg" class="img-fluid" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Days celebration</h5>
                                </div>
                            </a>
                        </div>                    
                        <div class="swiper-slide">
                            <a href="<?php echo URLROOT;?>
/pages/activities">
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
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/B-1naewBUNq/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B-1naewBUNq/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/B-1naewBUNq/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by SSIT (@ssit.gandhinagar)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-04-11T10:46:50+00:00">Apr 11, 2020 at 3:46am PDT</time></p></div></blockquote> <?php echo '<script'; ?>
 async src="//www.instagram.com/embed.js"><?php echo '</script'; ?>
>
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/B-6leiVBG5K/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B-6leiVBG5K/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/B-6leiVBG5K/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by SSIT (@ssit.gandhinagar)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-04-13T09:06:07+00:00">Apr 13, 2020 at 2:06am PDT</time></p></div></blockquote> <?php echo '<script'; ?>
 async src="//www.instagram.com/embed.js"><?php echo '</script'; ?>
>
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
                                <img src="img/Events/cultural/Cultural/4.JPG" class="img-fluid" alt="">
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

        <!-- 360 tour -->
        <div class="tour">
            <a href="<?php echo URLROOT;?>
/pages/tour">
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
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="module"  src="<?php echo URLROOT;?>
/node_modules/gsap/all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="module" src="<?php echo URLROOT;?>
/js/scroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="module" src="<?php echo URLROOT;?>
/js/swiper.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/swiper/js/swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo URLROOT;?>
/js/backtotop.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/dbc30cce47.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/js/header.js"><?php echo '</script'; ?>
>   
</body>
</html><?php }
}
