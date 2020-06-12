<?php
/* Smarty version 3.1.33, created on 2020-06-09 14:45:21
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5edf8461d5ec32_16242122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e969b9550912b7dfc5794057c9182e4d6bb7063e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\about.tpl',
      1 => 1591706715,
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
function content_5edf8461d5ec32_16242122 (Smarty_Internal_Template $_smarty_tpl) {
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
/css/about.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.css">   
    <title>SSIT | About us</title>
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
/img/about-hero-edit.jpg" class="video1 container-fluid">
        </div>
         <div class="header-txt position-absolute">
            <div class="txt-container container">
                <p>About</p>
                <p>SSIT</p>
            </div>    
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
        <div id="why-ssit" class="scroll-start1">
            <div class="container course__container">
                <h1>Why SSIT ?</h1>
                <ul>
                    <li><b>Dedicated Faculties</b> : We proudly hold the record of lowest attrition rate till date to accomplish dedication.</li>
                    <li><b>Skill Development Activities</b> : We address the opportunities and challenges to encounter new demands of changing global and innovative technologies.</li>
                    <li><b>Excellent Placement Record</b> : We proudly hold a good placement record and assure that each eligible student gets an opportunity to be placed in a recognized firm.</li>
                    <li><b>Disciplined Environment</b> : Message and Calling System  for parents to track the progression of students. Mobile phones and related gadgets are strictly prohibited for students within the institute premises.</li>
                    <li><b>Extra-curricular</b> : We provide a platform for the cultural fest  (Annual day), Ramzat (Navratri festival), GTU (Technical Fest), Cricket (Annual Sports week), etc.</li>
                </ul>                    
            </div>
        </div>
        <div id="about-trust"  class="scroll-start2">
            <div class="container course__container">    
                <img src="<?php echo URLROOT;?>
/img/about-trust.jpg" class="img-fluid" alt="...">
                <div>
                    <h1>Satsang Shiksha Parishad (Estd. 1971)</h1>
                    <p>Over the last forty-nine years, Shree Swaminarayan Gurukul has established itself as premier education organization providing excellent education from kindergarten to Post Graduation in the district Ahmedabad, Gandhinagar, Bhavnagar, Narmada etc.</p>
                </div>
            </div>
        </div>      
        <div id="people-1">
            <div class="container course__container">
                <div class="people-image">
                    <img src="<?php echo URLROOT;?>
/img/shastri-swamiji.png" class="img-fluid" alt="...">
                </div>
                <div class="people-content">
                    <h1>Shastri Swami Shree Hariprakashdasji</h1>
                    <p><q>Shastri Swami Shree Hariprakashdasji, accolade a degree of M.A.Vedantacharya, is the Secretary Shree Satsang Shiksha Parishad, Gandhinagar. He has published well known Religious Granth (Text Book) of Shree Swaminarayan Sect. The main thrust is to "equip students to go on learning after graduation and to grow through their lives in professional and personal stature and in usefulness as citizens."</q></p>
                </div>
            </div>
        </div>
        <div id="people-2">
            <div class="container course__container">
                <div class="people-content">
                    <h1>Shree Ramkrishan Swamiji</h1>
                    <p><q>With the rapid advances in science and technology during the last few decades, computers and computing systems have risen to be the key technology supporting and expanding almost every area of life, from education and research, to commerce and entertainment. With the recent growth of networking systems—such as the global Internet system connecting millions of people engaged in business, education, and research—computing has become one of the most powerful aspects of progress in human life.</q></p>
                </div>
                <div class="people-image">
                    <img src="<?php echo URLROOT;?>
/img/ram swamiji.png" class="card-img" alt="...">            
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
