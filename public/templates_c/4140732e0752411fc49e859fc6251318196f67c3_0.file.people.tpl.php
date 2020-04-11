<?php
/* Smarty version 3.1.33, created on 2019-10-11 15:27:36
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\people.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da0834893f544_47872180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4140732e0752411fc49e859fc6251318196f67c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\people.tpl',
      1 => 1570797773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/includes/header.tpl' => 1,
    'file:../template/includes/header2.tpl' => 1,
    'file:../template/includes/footer.tpl' => 1,
  ),
),false)) {
function content_5da0834893f544_47872180 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/header.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/people.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/css/footer.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
  
    <!-- people starts -->
    <div class="container-fluid">

        <div class="card my-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo URLROOT;?>
/img/shastri-swamiji.png" class="card-img" alt="...">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body">
                        <blockquote class="blockquote text-justify people-txt">
                        <h5 class="card-title people-name h3">Shastri Swami Shree Hariprakashdasji</h5>
                        <p class="mb-0 indent">Shastri Swami Shree Hariprakashdasji, accolade a degree of M.A.Vedantacharya, is the Secretary Shree Satsang Shiksha Parishad, Gandhinagar. He has published well known Religious Granth (Text Book) of Shree Swaminarayan Sect. The Educational Institute Started by Satsang shiksha Parishad will spread the light of education with religion and cultural values. We will create educated and responsible citizens who will lead towards the growth and property of the nation. We have a long tradition of being innovative in education. Our commitment to enhance the learning and problem-solving skills of students started with the founding of Shri Satsang Shiksha Parishad in 1971. The main thrust is to "equip students to go on learning after graduation and to grow through their lives in professional and personal stature and in usefulness as citizens."</p>
                                                </blockquote>  
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-3">
            <div class="row no-gutters">
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body pb-0">
                        <blockquote class="blockquote people-txt text-justify ">
                        <h5 class="card-title people-name h3">Shree Ramkrishan Swamiji</h5>
                        <p class="mb-0 indent">With the rapid advances in science and technology during the last few decades, computers and computing systems have risen to be the key technology supporting and expanding almost every area of life, from education and research, to commerce and entertainment. With the recent growth of networking systems—such as the global Internet system connecting millions of people engaged in business, education, and research—computing has become one of the most powerful aspects of progress in human life.</p>
                                                </blockquote>  
                    </div>
                </div>
                <div class="col-md-4">
                <img src="<?php echo URLROOT;?>
/img/ram swamiji.png" class="card-img" alt="...">
                </div>
            </div>
        </div>
        
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo URLROOT;?>
/img/dharmeshsir.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body">
                        <blockquote class="blockquote people-txt text-justify">
                        <h5 class="card-title people-name h3">Prof. Dharmesh N. Vandra</h5>
                        <p class="mb-0 indent">It is my privilege to welcome you to Shree Swaminarayan Institute of technology (SSIT),BHAT and invite you to explore the multidimensional facets of this Technical Institute using the official website.Its strengths and standing are best evidenced by the high quality of the national and international students admitted in various programs and well qualified faculty. With the support of highly qualified faculty members and excellent infrastructure I hope we shall be able to continue to add to the intellectual and professional development of the country. Apart from academic activities, the co-curricular activities, sports, adventure, cultural and social- service activities, form important parts of the life of the students. This importance is well indicated in the spread of facilities at the SSIT campus.</p>
                        <footer class="blockquote-footer people-designation text-right">Director in <cite title="Source Title">SSIT</cite></footer>
                        </blockquote>  
                    </div>
                </div>
            </div>
        </div>
        
        
    <!-- people ends -->
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/js/bootstrap.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
