<?php
/* Smarty version 3.1.33, created on 2020-09-16 09:50:33
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\activities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f61c3c95a6a43_69200904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '051b6b3b210c9c7b7fe954fdd4afa1b70e1e3901' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\activities.tpl',
      1 => 1593961708,
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
function content_5f61c3c95a6a43_69200904 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">    
    <link rel="stylesheet" href="<?php echo URLROOT;?>
/node_modules/bootstrap/dist/css/bootstrap.css">
    <title>SSIT | Activities</title>
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
/img/landing/act.jpg" class="video1 container-fluid">
            <!-- <video class="video1 container-fluid" loop muted autoplay>
                <source src="videos/video1.mp4" type="video/mp4">
                </video> -->
        </div>
        <div class="header-txt position-absolute">
            <div class="txt-container container">
                <p>Activities</p>
                <p>At SSIT</p>
            </div>    
        </div>          
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../template/includes/header3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    
    <!-- activities starts here -->
    <div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
        <!-- educational events start -->
        <div class="scroll-start1" id="educational">
            <div class="container course__container">
                <h1>Educational</h1>
                                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card-grid">
                            <a id="modalBtn" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/educational/Arduino/4.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">workshop on arduino</h5>
                                    </div>
                                </div>
                            </a>
                            <a id="modalBtn2" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/educational/Autodesk Workshop/1.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Autodesk Workshop</h5>
                                    </div>
                                </div>
                            </a>
                            <a id="modalBtn3" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/educational/Civil Workshop/1.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Civil Engineering Workshop</h5>
                                    </div>
                                </div>
                            </a>
                            <a id="modalBtn4" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/educational/HACKATHON 2019/1.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">HACKATHON 2019</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- Educational modal 1 -->
                            <div id="eventModal" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Workshop on Arduino</h1>
                                        <i class="fa fa-times closeBtn" id="closeBtn" aria-hidden="true"></i>
                                    </div>
                                    <div  id="Arduino-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Arduino/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Arduino/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Arduino/3.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Arduino/4.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Educational modal 2 -->
                            <div id="eventModal2" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Autodesk Workshop</h1>
                                        <i class="fa fa-times closeBtn" id="closeBtn2" aria-hidden="true"></i>
                                    </div>
                                    <div  id="Autodesk-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Autodesk Workshop/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Autodesk Workshop/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Autodesk Workshop/3.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Autodesk Workshop/4.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Autodesk Workshop/5.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Autodesk Workshop/6.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="content">
                                        <p>Student expert boot camp-fusion 360 held at ssit , bhat , Gandhinagar organized by Autodesk and Khodiyar. 
                                            150+ students from various 15 colleges participated in 3-Days hands on practicle sessions</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Educational modal 3 -->
                            <div id="eventModal3" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Civil Engineering Workshop</h1>
                                        <i class="fa fa-times closeBtn" id="closeBtn3" aria-hidden="true"></i>
                                    </div>
                                    <div  id="civil-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Civil Workshop/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Civil Workshop/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Civil Workshop/3.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Civil Workshop/4.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Civil Workshop/5.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/educational/Civil Workshop/6.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="content">
                                    <p>gujcost supported workshop on JD Designing , Modeling & 3d Printing on Robotic arm with Solidworks</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Educational modal 4 -->
                            <div id="eventModal4" class="eventmodal">
                            <div class="modal-content">
                                <div class="header">
                                    <h1>Hackathon 2019</h1>
                                    <i class="fa fa-times closeBtn" id="closeBtn4" aria-hidden="true"></i>
                                </div>
                                <div  id="hackathon-swiper-container" class="activities-swiper-container swiper-container">
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/1.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/2.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/3.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/4.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/5.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/6.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/7.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/8.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/9.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/10.JPG" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/11.JPG" style="object-fit: contain;" width="100%"  />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="<?php echo URLROOT;?>
/public/img/events/educational/HACKATHON 2019/12.JPG" width="100%"  />
                                      </div>
                                    </div>                       
                                    <div class="swiper-button-next act-next"></div>
                                    <div class="swiper-button-prev act-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            </div>                                                    
                        </div>                     
                    </div>
                    <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">                       
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    </div> -->
                </div>            
            </div>
        </div>          
        <div class="scroll-start2" id="cultural">
            <div class="container course__container">
                <h1>Cultural</h1>        
                                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card-grid">
                            <a id="CmodalBtn" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/cultural/Cultural/4.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Cultural Festival</h5>
                                    </div>
                                </div>
                            </a>
                            <a id="CmodalBtn2" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/cultural/Guruupurnima/1.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Guru Purnima</h5>
                                    </div>
                                </div>
                            </a>
                            <a id="CmodalBtn3" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/cultural/Ramzat/5.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Ramzat 2019</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- Cultural modal 1 -->
                            <div id="CeventModal" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Cultural Festival</h1>
                                        <i class="fa fa-times closeBtn" id="CcloseBtn" aria-hidden="true"></i>
                                    </div>
                                    <div  id="cultural-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/3.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/4.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/5.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/6.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/7.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/8.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Cultural/9.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cultural modal 2 -->
                            <div id="CeventModal2" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Guru Purnima</h1>
                                        <i class="fa fa-times closeBtn" id="CcloseBtn2" aria-hidden="true"></i>
                                    </div>  
                                    <div id="Guruupurnima-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Guruupurnima/1.JPG" width="100%"  />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Guruupurnima/2.JPG" width="100%"  />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Guruupurnima/3.JPG" width="100%"  />
                                        </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cultural modal 3 -->
                            <div id="CeventModal3" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Ramzat 2019</h1>
                                        <i class="fa fa-times closeBtn" id="CcloseBtn3" aria-hidden="true"></i>
                                    </div>
                                    <div  id="Ramzat-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/3.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/4.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/5.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/6.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/7.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/8.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/cultural/Ramzat/9.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </div>
                    <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">                       
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    </div> -->
                </div>
            </div>
        </div>
        <div class="scroll-start3" id="sports">
            <div class="container course__container">
                <h1>Sports</h1>                
                                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card-grid">
                            <a id="SmodalBtn" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/sports/Indoor Activity/1.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Indoor Activity</h5>
                                    </div>
                                </div>
                            </a>
                            <a id="SmodalBtn2" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/sports/Sports/1.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Sports Festival</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- sports modal 1 -->
                            <div id="SeventModal" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Indoor Activity</h1>
                                        <i class="fa fa-times closeBtn" id="ScloseBtn" aria-hidden="true"></i>
                                    </div>
                                    <div  id="indoor-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Indoor Activity/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Indoor Activity/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Indoor Activity/3.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Indoor Activity/4.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Indoor Activity/5.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Indoor Activity/6.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Indoor Activity/7.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- sports modal 2 -->
                            <div id="SeventModal2" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Sports Festival</h1>
                                        <i class="fa fa-times closeBtn" id="ScloseBtn2" aria-hidden="true"></i>
                                    </div>
                                    <div id="sports-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/3.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/4.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/5.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/6.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/7.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/8.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/9.JPG" style="object-fit: contain;" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/10.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/11.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/12.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/13.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/14.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/15.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/16.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/17.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/18.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/sports/Sports/19.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>                                                    
                        </div>                     
                    </div>
                       <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">                       
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    </div> -->
                </div>
            </div>
        </div>
        <div class="scroll-start4" id="other">
            <div class="container course__container">
                <h1>Other</h1>
                                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card-grid">
                            <a id="OmodalBtn" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/other/Blood Donation Camp/1.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Blood Donation Camp</h5>
                                    </div>
                                </div>
                            </a>
                            <a id="OmodalBtn2" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/other/E-Yantra/1.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">E-Yantra</h5>
                                    </div>
                                </div>
                            </a>
                            <a id="OmodalBtn3" class="button">
                                <div class="card">
                                    <img src="<?php echo URLROOT;?>
/img/events/other/Youth Day/2.JPG" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Youth Day</h5>
                                    </div>
                                </div>
                            </a>
                            <!-- other modal 1 -->
                            <div id="OeventModal" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Blood Donation Camp</h1>
                                        <i class="fa fa-times closeBtn" id="OcloseBtn" aria-hidden="true"></i>
                                    </div>
                                    <div  id="Camp-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Blood Donation Camp/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Blood Donation Camp/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Blood Donation Camp/3.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cultural modal 2 -->
                            <div id="OeventModal2" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>E-Yantra</h1>
                                        <i class="fa fa-times closeBtn" id="OcloseBtn2" aria-hidden="true"></i>
                                    </div>  
                                    <div id="EYantra-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?php echo URLROOT;?>
/public/img/events/other/E-Yantra/1.JPG" width="100%"  />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?php echo URLROOT;?>
/public/img/events/other/E-Yantra/2.JPG" width="100%"  />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?php echo URLROOT;?>
/public/img/events/other/E-Yantra/3.JPG" width="100%"  />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?php echo URLROOT;?>
/public/img/events/other/E-Yantra/4.JPG" width="100%"  />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?php echo URLROOT;?>
/public/img/events/other/E-Yantra/5.JPG" width="100%"  />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?php echo URLROOT;?>
/public/img/events/other/E-Yantra/6.JPG" width="100%"  />
                                            </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cultural modal 3 -->
                            <div id="OeventModal3" class="eventmodal">
                                <div class="modal-content">
                                    <div class="header">
                                        <h1>Youth Day</h1>
                                        <i class="fa fa-times closeBtn" id="OcloseBtn3" aria-hidden="true"></i>
                                    </div>
                                    <div  id="Youth-swiper-container" class="activities-swiper-container swiper-container">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Youth Day/1.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Youth Day/2.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Youth Day/3.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Youth Day/4.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Youth Day/5.JPG" width="100%"  />
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="<?php echo URLROOT;?>
/public/img/events/other/Youth Day/6.JPG" width="100%"  />
                                          </div>
                                        </div>                       
                                        <div class="swiper-button-next act-next"></div>
                                        <div class="swiper-button-prev act-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>                                             
                        </div>                     
                    </div>
                    <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">                       
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    </div> -->
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
 type="module" src="<?php echo URLROOT;?>
/node_modules/gsap/all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="module" src="<?php echo URLROOT;?>
/js/scroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/swiper/swiper-bundle.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/swiper/swiper-bundle.min.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 type="module" src="<?php echo URLROOT;?>
/js/activities_swiper.js"><?php echo '</script'; ?>
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
