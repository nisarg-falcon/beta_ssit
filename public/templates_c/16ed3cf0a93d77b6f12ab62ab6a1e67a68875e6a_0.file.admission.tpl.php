<?php
/* Smarty version 3.1.33, created on 2020-06-16 20:20:34
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\admission.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee90d72486c49_90703694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ed3cf0a93d77b6f12ab62ab6a1e67a68875e6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\admission.tpl',
      1 => 1592248093,
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
function content_5ee90d72486c49_90703694 (Smarty_Internal_Template $_smarty_tpl) {
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
/css/admission.css">
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.css">    
    <title>SSIT | Admission</title>
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
/img/landing/admission.jpg" class="video1 container-fluid">
        </div> 
        <div class="header-txt position-absolute">
            <div class="txt-container container">
                <p>Admission</p>
                <p>At SSIT</p>
            </div>    
        </div>   
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    
    <!-- admission section start -->
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
        <div id="admission" class="scroll-start1">
          <div class="container course__container">
            <nav>
              <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-BEfresh-tab" data-toggle="pill" href="#pills-BEfresh" role="tab" aria-controls="pills-BEfresh" aria-selected="true">BE (Fresh)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-BEd2d-tab" data-toggle="pill" href="#pills-BEd2d" role="tab" aria-controls="pills-BEd2d" aria-selected="false">BE (D2D)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-mca-tab" data-toggle="pill" href="#pills-mca" role="tab" aria-controls="pills-mca" aria-selected="false">MCA</a>
                  </li>
              </ul>
            </nav>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-BEfresh" role="tabpanel" aria-labelledby="pills-BEfresh-tab">
                <div class="timeline">
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 1</p>
                        <p>BE fresh 12 science passout</p>
                      </div>
                  </div>
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 2</p>
                        <p>regiser through acpc</p>
                      </div>
                  </div>
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 3</p>
                        <p>get merit choose course and etc....</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-BEd2d" role="tabpanel" aria-labelledby="pills-BEd2d-tab">
                <div class="timeline">
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 1</p>
                        <p>BE d2d diploma passout</p>
                      </div>
                  </div>
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 2</p>
                        <p>regiser through acpc</p>
                      </div>
                  </div>
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 3</p>
                        <p>get merit choose course and etc....</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-mca" role="tabpanel" aria-labelledby="pills-mca-tab">
                <div class="timeline">
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 1</p>
                        <p>MCA admission</p>
                      </div>
                  </div>
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 2</p>
                        <p>regiser through acpc</p>
                      </div>
                  </div>
                  <div class="text-container right">
                      <div class="content">
                        <p>Step 3</p>
                        <p>get merit choose course and etc....</p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="timeline">
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 1</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nostrum?</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 2</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, id!</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 3</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, pariatur.</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 4</p>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, commodi.</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 5</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, soluta.</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 6</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, dolorem.</p>
                  </div>
              </div>
            </div> -->
          </div>
        </div>

        <!-- mq-admission -->
        <div id="mq" class="scroll-start2">
          <div class="container course__container">            
            <div class="mq">
              <h1>Admission to Management Quota Seats (BE & MCA)</h1>
              <p>Applications are invited from eligible candidates enlisted in concerned ACPC merit list for admission against 25% Management Quota Seats in with form fees RS.350/- at SSIT Campus</p>
            </div>
            <div class="mq-seats">
                <table>
                    <thead>
                      <tr>
                        <th scope="col">Branch</th>
                        <th scope="col">Computer</th>
                        <th scope="col">Civil</th>
                        <th scope="col">Electrical</th>
                        <th scope="col">E.C.</th>
                        <th scope="col">Mechanical</th>
                        <th scope="col">MCA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Seats</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                      </tr>
                    </tbody>
                </table>                                
            </div>
            <div class="mq-imp-dates">
                <h1>Schedule for MQ Admission</h1>
                <table class="table">
                    <thead>
                      <tr>
                        <th>Activities</th>
                        <th>Important Dates for Admission In BE</th>
                        <th>Important Dates for Admission In MCA</th>                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Issue and Acceptance of application form</td>
                        <td>08-07-2019 <b>to</b> 15-07-2019</td>
                        <td>18-07-2019 <b>to</b> 26-07-2019</td>                       
                      </tr>
                      <tr>
                        <td>Display Merit List</td>
                        <td>25-07-2019</td>
                        <td>27-07-2019</td>                       
                      </tr>
                      <tr>
                        <td>Counselling for MQ Quota</td>
                        <td>25-07-2019</td>
                        <td>30-07-2019</td>                       
                      </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>

        <!-- merit list -->
        <div id="merit-list" class="scroll-start3">
          <div class="container course__container">          
            <h1>MERIT LIST FOR : <u>BE Management Quota Admission : 2019-20</u></h1>
            <P class="ml-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est sapiente aliquid accusantium unde alias error cumque possimus exercitationem rem rerum?</P>
            <!-- <nav class="navbar ml-search">
              <form class="form-inline">
                <input class="form-control" type="search" placeholder="Enter Your Name Here" aria-label="Search">
                <button class="btn" type="submit">Search</button>
              </form>
            </nav> -->
            <!-- <div class="ml-lists">
              <table>
                <thead>
                  <tr>
                    <td>Sr. No</td>
                    <td>Inter-Sc Merit list</td>
                    <td>ACPC Merit No</td>
                    <td>GUJCET Roll No</td>
                    <td>Name of the Candidate</td>
                    <td>Category</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>SSIT_1</td>
                    <td>18832</td>
                    <td>826213</td>
                    <td>FULL NAME OF CANDIDATE</td>
                    <td>MQ</td>
                  </tr>
                </tbody>
              </table>
              <nav aria-label="ml-pagination">
                <ul class="pagination pagination-sm justify-content-end">
                  <li class="page-item active" aria-current="page">
                    <span class="page-link">
                      1
                      <span class="sr-only">(current)</span>
                    </span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                </ul>
              </nav>
            </div> -->
            <div class="ml-download">
              <p>Merit List for <u>BE Management Quota Admission 2019-20</u></p>
              <button class="btn" type="submit">Download</button>
            </div>
          </div>
        </div>

        <!-- FAQs -->
        <div id="faq" class="scroll-start4">
          <div class="container course__container">          
            <h1>Frequntly Asked Question (FAQs)</h1>
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Admission in Bachelor in Engineering
                    </button>
                  </h2>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Admission in MCA
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Admission in Falcon Inc.
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Admission in Falcon Networks.
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Admission in Falcon Servers.
                    </button>
                  </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
        
    </div>
    
    <!-- admission section ends -->
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
