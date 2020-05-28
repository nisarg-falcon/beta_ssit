<?php
/* Smarty version 3.1.33, created on 2020-05-28 20:14:17
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\activities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecfff79d74fd9_07902294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051b6b3b210c9c7b7fe954fdd4afa1b70e1e3901' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\activities.tpl',
      1 => 1590000894,
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
function content_5ecfff79d74fd9_07902294 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
/css/activities.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.css">    
    <title>Activities</title>
</head>
<body>
    <!-- hero section start -->
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
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    
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
                                    <img src="<?php echo URLROOT;?>
/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">GTU smart gujarat hackathon</h5>
                                                                            </div>
                                </div>
                            </a>
                            <div id="eventModal" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>GTU smart gujarat hackathon GTU smart gujarat hackathon</h1>
                                        <i class="fa fa-times closeBtn" id="closeBtn" aria-hidden="true"></i>
                                    </div>
                                    <img src="<?php echo URLROOT;?>
/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati eligendi, velit repudiandae illum ab harum, dolores consectetur recusandae aspernatur ut minus nam exercitationem deserunt debitis maxime consequuntur nobis odio nisi.
                                        Amet, atque delectus eligendi facere fuga id temporibus magnam ullam minus recusandae ipsam eaque nisi laudantium voluptate ad repellat itaque inventore, repudiandae est quos dolore obcaecati esse reiciendis! Perferendis, reiciendis.
                                        Facere perferendis rem sequi, obcaecati repellendus fugiat soluta commodi, neque natus facilis earum, praesentium in deleniti consequuntur assumenda! Quidem ea dolores maxime id illum voluptate nobis iste labore eum ullam?</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Tech-fest</h5>
                                                                            </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">cultural function</h5>
                                                                            </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">sports event</h5>
                                                                            </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/clgimg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Navratri festival</h5>
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
     <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>
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
</html>
<?php }
}
