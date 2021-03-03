<?php
/* Smarty version 3.1.33, created on 2020-12-24 12:05:54
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\admission.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fe476120d1f78_78614508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ed3cf0a93d77b6f12ab62ab6a1e67a68875e6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\admission.tpl',
      1 => 1608807947,
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
function content_5fe476120d1f78_78614508 (Smarty_Internal_Template $_smarty_tpl) {
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
            <!-- <h5 class="text-black">*Admission open on 50% Seats on Management Quota</h5> -->
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
          </div>
        </div>

        <!-- mq-admission -->
        <div id="mq" class="scroll-start2">
          <div class="container course__container">            
            <div class="mq">
              <h1>Admission to Vacant Quota Seats (BE & MCA)</h1>
              <!-- <h5>Advertisement Detail <a href="<?php echo URLROOT;?>
/public/document/ADVT_MQ_2020.jpg">Download Here</a></h5> -->
              <!-- <p>Applications are invited from eligible candidates for admission in Degree Engineering Vacant
                Quota Seats in with form fees RS. 500/- at SSIT Campus</p> -->
              <p>Applications are invited from eligible candidates for admission in MCA Vacant Quota Seats in with form
                fees RS.350/- at SSIT Campus.</p>
              <h6>Steps for Admission in VQ</h6>
              <ul>
                <li>Online Registration in MCA</li><a href="https://forms.gle/WeyFKhV5sEwpkmCWA">https://forms.gle/WeyFKhV5sEwpkmCWA</a>
                <li>Schedule for VQ Admission &amp; Display of Vacant Seats :- (Date:- 14-12-2020)</li>
                <!-- <li>Online Registration in B.E.</li><a href="https://forms.gle/FbGFHjiQCEi4UYbj8">https://forms.gle/FbGFHjiQCEi4UYbj8</a>
                <li>Online Registration in D2D</li><a href="https://forms.gle/FbGFHjiQCEi4UYbj8">https://forms.gle/FbGFHjiQCEi4UYbj8</a> 
                <li>Schedule for VQ Admission &amp; Display of Vacant Seats :- (Date:- 17-11-2020)</li>
                <li>Display Merit List :- (Date:- 24-11-2020)</li>
                <li>Counselling Round :- (Date:- 26-11-2020 &amp; 27-11-2020)</li> -->
              </ul>
              <!-- <p>Applications are invited from eligible candidates enlisted in concerned ACPC merit list for admission against 25% Management Quota Seats in with form fees RS.350/- at SSIT Campus</p> -->
            </div>
            <!-- Vacant Seats of B.E. & D2D -->
            <div class="mq-seats">
              <!-- <h1>Vacant Seats of B.E. &amp; D2D</h1>   -->
              <h1>Vacant Seats of M.C.A</h1>  
              <table>
                    <thead>
                      <tr>
                        <th scope="col">Branch</th>
                        <th scope="col">MCA</th>
                        <!-- <th scope="col">Computer</th>
                        <th scope="col">Civil</th>
                        <th scope="col">Electrical</th>
                        <th scope="col">E.C.</th>
                        <th scope="col">Mechanical</th>
                        <th scope="col"><b>Total</b></th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Vacant Seats M.C.A</td>
                        <td>67</td>
                        <!-- <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><b>67</b></td> -->
                      </tr>
                      <!-- <tr>
                        <td>Vacant Seats D2D</td>
                        <td>3</td>
                        <td>12</td>
                        <td>73</td>
                        <td>29</td>
                        <td>33</td>
                        <td><b>150</b></td>
                        <td>30</td>
                      </tr> -->
                    </tbody>
                </table>                                
            </div>
            <!-- schudule for MQ admission  -->
            <div class="mq-imp-dates">
                <h1>Schedule for VQ Admission</h1>
                <table class="table">
                    <thead>
                      <tr>
                        <th>Activities</th>
                        <!-- <th>Important Dates for Admission In BE</th> -->
                        <th>Important Dates for Admission In MCA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Online/ Offline Distribution &amp; Submission of Filled Form</td>
                        <td>15-12-2020 <b>to</b> 19-12-2020</td>
                        <!-- <td>will be updated soon</td> -->
                        <!-- <td>15-10-2020 <b>to</b> 25-10-2020</td>                        -->
                      </tr>
                      <tr>
                        <td>Online Declaration of Merit List</td>
                        <td>22-12-2020</td>
                        <!-- <td>will be updated soon</td> -->
                        <!-- <td>29-10-2020</td>-->
                      </tr>
                      <tr>
                        <td>Counselling for VQ Quota</td>
                        <td>23-12-2020 <b>to</b> 24-12-2020</td>
                        <!-- <td>will be updated soon</td> -->
                        <!-- <td>01-11-2020 <b>to</b> 02-11-2020</td> -->
                      </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>

        <!-- merit list -->
        <div id="merit-list" class="scroll-start3">
          <div class="container course__container">          
            <h1>MERIT LIST FOR : <u>MCA Vacant Quota Admission : 2020-21</u></h1>
            <!-- <h1>MERIT LIST FOR : <u>BE/ D2D Vacant Quota Admission : 2020-21</u></h1> -->
            <!-- <P class="ml-details">We will Declare Merit list on 29-10-2020</P> -->
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
              <ul>
                <!-- <li>
                  <p>BE Vacant Quota Admission 2020-21
                  <a href="<?php echo URLROOT;?>
/public/document/BE_Vacant_Quota_Admission_2020-21.pdf"><button class="btn" type="submit">Download</button></a></p>
                </li>
                <li>
                  <p>D2D E.C. Engineering Vacant Quota Admission 2020-21
                  <a href="<?php echo URLROOT;?>
/public/document/D2D EC Engineering Vacant Quota Admission 2020-21.pdf"><button class="btn" type="submit">Download</button></a></p>
                </li>
                <li>
                  <p>D2D Civil Engineering Vacant Quota Admission 2020-21
                  <a href="<?php echo URLROOT;?>
/public/document/D2D Civil Engineering Vacant Quota Admission 2020-21.pdf"><button class="btn" type="submit">Download</button></a></p>
                </li>                
                <li>
                  <p>D2D Electrical Engineering Vacant Quota Admission 2020-21
                  <a href="<?php echo URLROOT;?>
/public/document/D2D Electrical Engineering Vacant Quota Admission 2020-21.pdf"><button class="btn" type="submit">Download</button></a></p>
                </li>   
                <li>
                  <p>D2D Computer Engineering Vacant Quota Admission 2020-21
                  <a href="<?php echo URLROOT;?>
/public/document/D2D Computer Engineering Vacant Quota Admission 2020-21.pdf"><button class="btn" type="submit">Download</button></a></p>
                </li>                          
                <li>
                  <p>D2D Mechanical Engineering Vacant Quota Admission 2020-21
                  <a href="<?php echo URLROOT;?>
/public/document/D2D Mechanical Engineering Vacant Quota Admission 2020-21.pdf"><button class="btn" type="submit">Download</button></a></p>
                </li> -->
                <li>
                  <p>MCA Vacant Quota Admission 2020-21
                  <a href="<?php echo URLROOT;?>
/public/document/MERIT_LIST_MCA.pdf"><button class="btn" type="submit">Download</button></a></p>                  
                </li>
              </ul>
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
                      Eligibility for Admission  in Engineering
                    </button>
                  </h2>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <u>AFTER 12 TH SCIENCE</u>
                    <ul>
                      <li>The aspiring candidate shall have passed Std. 12 (Science Stream) from single board
                        with minimum 45% (40% for SC/ST/SEBC/EWSs candidates) in three subjects with
                        Physics and Mathematics as two compulsory subjects and third subject as optional
                        subject from Chemistry or Biotechnology or Biology or any Technical Vocational
                        Subject as prescribed by the concerned board, and shall have appeared in Entrance
                        examination as specified for respective criteria of seats as mentioned below.
                      </li>
                      <li>
                        Candidates who have cleared the qualifying examination from an eligible board from
                        school located in India (Including Gujarat State) with minimum eligibility criteria as
                        prescribed by AICTE from time to time, and have appeared in JEE(Main) / GUJCET
                        examination for the corresponding academic year.
                      </li>
                      <li>
                        Candidates who have cleared the qualifying examination from school located outside
                        India with minimum eligibility criteria as prescribed by AICTE from time to time, and
                        equivalency defined by Association of Indian Universities (AIU), New Delhi shall be
                        eligible for admission.
                      </li>
                      <p>It is not mandatory for candidate to have ACPC merit rank to be eligible for management seats.</p>
                    </ul>
                    <u>AFTER DIPLOMA</u>
                      <ul>
                        <li>
                          In the Government Notification for Diploma to Degree Engineering admissions, the
                          eligibility for admission is specified as per the norms and guidelines of AICTE. For
                          the year 2019-20, the AICTE guidelines specified 45% for open category and 40% for
                          reserved category candidates in qualifying examination to be eligible for admission.
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Category Wise Eligibility
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body scroll">
                    <img src="<?php echo URLROOT;?>
/img/faq_admission.png" alt="">
                  </div>
                </div>
              </div>
              <!-- extra faq cards -->
              <!-- <div class="card">
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
              </div> -->
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
     
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-179928256-1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-179928256-1');
    <?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
