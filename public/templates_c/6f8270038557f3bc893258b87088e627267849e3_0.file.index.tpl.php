<?php
/* Smarty version 3.1.33, created on 2019-10-11 13:41:44
  from '/home/adminwebpoint/public_html/beta.ssit.co.in/app/views/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da08698389037_43511082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f8270038557f3bc893258b87088e627267849e3' => 
    array (
      0 => '/home/adminwebpoint/public_html/beta.ssit.co.in/app/views/template/index.tpl',
      1 => 1570801302,
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
function content_5da08698389037_43511082 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en">
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
/img/img2.jpg" class="video1 container-fluid">
            <!-- <video class="video1 container-fluid" loop muted autoplay>
                <source src="videos/video1.mp4" type="video/mp4">
                </video> -->
        </div>    
        <div class="header-txt position-absolute">
            <div class="txt-container container">
                <p>Welcome</p>
                <p>To SSIT</p>
            </div>    
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

    <!-- index page starts -->
    <div class="container-fluid">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>

    <!-- course info -->
    <div class="container-fluid row scroll-start1" id="courses">
        <div class="course-info col-md-7">
            <h1>Shree Swaminarayan Institute of Technology</h1>
            <p>We are an academic excellent Technical College made up of commited scholer students ,old collegians and staff members our rich history is the foundation for our values.
                    We are diverse, dedicated, welcoming, accepting and Passionate about being the best We can be join us to make your college experience unforgettable and best Techanocrate future.                    
            <b>Welcome, Jay Swaminarayan</b></p>
        </div>
        <div class="course-name col-md-5">
                <h1>Available courses</h1>
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
   
    <!-- director's message -->
    <div class="container-fluid row scroll-start2" id="director">
        <div class="director-info col-md-5">
            <img src="img/dharmeshsir.jpg" class="img" alt="">
        </div>
        <hr/>
        <div class="director-message col-md-7">
            <h1>Director's Message</h1>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['dm'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['dm'], 'dm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dm']->value) {
?>
                <blockquote class="blockquote mb-0 text-justify">
                    <p class="mb-0"><?php echo $_smarty_tpl->tpl_vars['dm']->value['message'];?>
</p>
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

    <!-- about institute -->
    <div class="container-fluid row scroll-start3" id="institute">
        <div class="institute-name col-md-7">
            <h1>About Institute</h1>
            <p class="text-justify mb-0">
                SSIT is committed to nurture academic, personal and social values in the students; and expects the students to practice the core commitments of academic, personal and social responsibility. The commitments are achieving excellence, and academic integrity, contributing to a larger community, enlightening ethical and moral reasoning. SSIT wants all students to achieve their highest academic potential and makes faculty and academic support resources available to assist each student in meeting his/her academic goals. Goal of SSIT is to teach students how to live and to help them experience long-term social success. many activities, and events are organized to enhance student’s social interactions and skills. In fact, SSIT promotes: dignity in behavior, upholding social and moral values. Thus, SSIT strongly believes that a student’s life at the campus should be comfortable and hassle-free, and for the purpose it has carefully designed various services for the students like Library, Hostel, and Transport facility, Stationery, Training and Placement etc. A vast range of cultural and social activities are also available to SSIT students along with the faculty and staff getting involved in campus life. Campus life activities are built around the concepts of encouraging each and every member to express his or her talents.
            </p>
        </div>
        <div class="institute-info col-md-5">
            <img src="img/clgimg.jpg" class="img img-fluid" alt="">
        </div>
    </div>
    
    <!-- event start -->
    <div class="container-fluid event-contain scroll-start4" id="events">
        <div class="event-contain">
            <a class="h4 m-0 p-0">Events</a> <span style="color:red;" class="h5"> *under testing</span>
            <div class="events my-1">
                <a class="h6">Educational</a>
                <div class="img-wrapper">
                    <div class="event1 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event2 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event3 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event4 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="btn-cont px-md-2 pt-2">
                        <button type="button" class="btn btn-dark btn-more btn-secondary" data-toggle="tooltip" data-placement="top" title="under construction" disabled><a class="px-2">More</a><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </div> 
            <div class="events my-1">
                <a class="h6">Cultural</a>
                <div class="img-wrapper">
                    <div class="event1 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event2 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event3 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event4 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="btn-cont px-md-2 pt-2">
                        <button type="button" class="btn btn-dark btn-more btn-secondary" data-toggle="tooltip" data-placement="top" title="under construction" disabled><a class="px-2">More</a><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </div> 
            <div class="events my-1">
                <a class="h6">Sports</a>
                <div class="img-wrapper">
                    <div class="event1 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event2 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event3 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="event4 event-cont p-2"><div class="event-detail">Event</div><img src="img/texture.jpg" class="img-fluid img-responsive" alt=""></div>
                    <div class="btn-cont px-md-2 pt-2">
                        <button type="button" class="btn btn-dark btn-more btn-secondary" data-toggle="tooltip" data-placement="top" title="under construction" disabled><a class="px-2">More</a><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <!-- experience at ssit -->
    <div class="container-fluid row scroll-start5" id="experience">
        <div class="institute-info col-md-5">
            <img src="img/IMG_2904.JPG" class="img rounded mx-auto d-block img-fluid" style="filter:brightness(80%)" alt="">
        </div>
        <div class="experience-name col-md-7">
            <h2>Experience at SSIT</h2>
            <p class="text-justify">We are an academic excellent Technical College made up of commited scholer students ,old collegians and staff members our rich history is the foundation for our values. We are diverse, dedicated, welcoming, accepting and Passionate about being the best We can be join us to make your college experience unforgettable and best Techanocrate future. Welcome, <b>Jay Swaminarayan</b></p>
        </div>
    </div>

    <!-- gallery -->
    <div class="container-fluid scroll-start6" id="gallery">
        <div class="gallery">
            <a class="h5">Gallery</a>   <span style="color:red;" class="h5"> *under testing</span>
            <div class="gallery-img-wrapper">
                <div class="gallery-img1 gallery-cont p-2"><img src="img/texture.jpg" style="filter: contrast(70%);" class="img-fluid img-responsive" alt=""></div>
                <div class="gallery-img2 gallery-cont p-2"><img src="img/texture.jpg" style="filter: contrast(70%);" class="img-fluid img-responsive" alt=""></div>
                <div class="gallery-img3 gallery-cont p-2"><img src="img/texture.jpg" style="filter: contrast(70%);" class="img-fluid img-responsive" alt=""></div>
                <div class="gallery-img4 gallery-cont p-2"><img src="img/texture.jpg" style="filter: contrast(70%);" class="img-fluid img-responsive" alt=""></div>
                <div class="gallery-img5 gallery-cont p-2"><img src="img/texture.jpg" style="filter: contrast(70%);" class="img-fluid img-responsive" alt=""></div>
                <div class="gallery-img6 gallery-cont p-2"><img src="img/texture.jpg" style="filter: contrast(70%);" class="img-fluid img-responsive" alt=""></div>
                <div class="gallery-img7 gallery-cont p-2"><img src="img/texture.jpg" style="filter: contrast(70%);" class="img-fluid img-responsive" alt=""></div>
                <div class="gallery-img8 gallery-cont p-2"><img src="img/texture.jpg" style="filter: contrast(70%);" class="img-fluid img-responsive" alt=""></div>
                <div class="btn-cont px-md-2 pt-2">
                    <button type="button" class="btn btn-dark btn-more" disabled><a class="px-2">More</a><i class="fas fa-angle-right"></i></button>
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