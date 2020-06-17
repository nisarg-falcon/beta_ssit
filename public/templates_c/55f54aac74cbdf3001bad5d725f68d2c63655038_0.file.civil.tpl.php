<?php
/* Smarty version 3.1.33, created on 2020-06-17 15:10:32
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\department\civil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eea164870c440_48086364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55f54aac74cbdf3001bad5d725f68d2c63655038' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\department\\civil.tpl',
      1 => 1592399296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eea164870c440_48086364 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="department" >
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
    <div class="departments_container">
        <div id="brochure" class="department__container container-fluid scroll-start1">
           <div class="branch_info container">
            <div class="branch_txt_container">
                <h1>Civil Engineering</h1>
                <ul>
                  <li>Civil engineering is a broad field encompassing several distinct areas of specialization. It is also the oldest
                    of the engineering professions.</li>
                  <li>Civil engineers get recruited by Construction Firms, Defence Forces Development Boards Municipal Bodies, etc.. They also work in quality testing laboratories, Military and defence services and as consultants.</li>
                  <li>Civil engineering focuses on the infrastructure of the world which include Water works, Sewers, Dams, Power Plants, Transmission Towers/Lines,
                    Railroads, Highways, Bridges, Tunnels, Irrigation Canals, River Navigation, Shipping Canals, Traffic Control, Mass
                    Transit, Airport Runways, Terminals, Industrial Plant Buildings, Skyscrapers, etc.</li>
                  <li>Most people can not imagine life without the many contributions of civil engineers to the public’s health, safety and
                    standard of living. Only by exploring civil engineering’s influence in shaping the world we know today, can we
                    creatively envision the progress of our tomorrows</li>
                </ul>
                <div class="branch_link">
                    <a href="<?php echo URLROOT;?>
/public/img/civil/brochure/CIVIL BROCHURE 2020-21.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Brochure</a>
                </div>
            </div>
           </div>
        </div>
        <div id="industrial_visit" class="container-fluid scroll-start2">
          <div class="branch_iv container">
            <div class="iv_heading">
                <h1>Industrial Visit</h1>
            </div>
            <div class="iv_swiper">
              <div class="swiper-container iv_gallery_top gallery-top">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a id="ivbtn" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/civil/industrial_visit/RMC_plant_visit/rmc1.jpeg" class="card-img-top" alt="">
                    </a>                    
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn2" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/civil/industrial_visit/mudra_port/mudra1.jpg" class="card-img-top" alt="">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn3" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/civil/industrial_visit/RMC_plant_visit/rmc2.jpeg" class="card-img-top" alt="">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn4" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/civil/industrial_visit/iv.jpg" class="card-img-top" alt="">
                    </a>
                    </div>
                </div>
                <!-- <div class="swiper-pagination labs-swiper-pagination"></div>-->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
              </div>
              <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/civil/industrial_visit/RMC_plant_visit/rmc1.jpeg);"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/civil/industrial_visit/mudra_port/mudra1.jpg);"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/civil/industrial_visit/RMC_plant_visit/rmc2.jpeg"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/civil/industrial_visit/iv.jpg);"></div>
                </div>
              </div>              
            </div>        
          </div>
        </div>
        <div id="ivmodal" class="eventmodal">
          <div class="modal-content">
            <div class="header">
                <h1>RMC Plant Visit</h1>
                <i class="fa fa-times closeBtn" id="ivcloseBtn" aria-hidden="true"></i>
            </div>
            <img src="<?php echo URLROOT;?>
/public/img/civil/industrial_visit/RMC_plant_visit/rmc1.jpeg" class="card-img-top" alt="...">             
          </div>          
        </div>
        <div id="ivmodal2" class="eventmodal">
          <div class="modal-content">
            <div class="header">
                <h1>Mudra Port</h1>
                <i class="fa fa-times closeBtn" id="ivcloseBtn2" aria-hidden="true"></i>
            </div>
            <img src="<?php echo URLROOT;?>
/public/img/civil/industrial_visit/mudra_port/mudra1.jpg" class="card-img-top" alt="...">             
          </div>
        </div>
        <div id="ivmodal3" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Industrial Visit</h1>
                  <i class="fa fa-times closeBtn" id="ivcloseBtn3" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/public/img/civil/industrial_visit/RMC_plant_visit/rmc2.jpeg" class="card-img-top" alt="...">             
          </div>
        </div>
        <div id="ivmodal4" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Industrial Visit</h1>
                  <i class="fa fa-times closeBtn" id="ivcloseBtn4" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/public/img/civil/industrial_visit/iv.jpg" class="card-img-top" alt="...">             
          </div>
        </div>
        <div id="branch_labs" class="container-fluid scroll-start3">
          <div class="labs_container container">
            <div class="labs_heading">
                <h1>Laboratory</h1>
            </div>
            <div class="labs_swiper">
              <div class="swiper-container labs-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/civil lab/1.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/civil lab/2.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/civil lab/3.JPG" width="100%"  />
                  </div>          
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/civil lab/4.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/civil lab/5.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/civil lab/6.JPG" width="100%"  />
                  </div>          
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/civil lab/7.JPG" width="100%"  />
                  </div>          
                </div>                       
                <div class="swiper-button-next labs-swiper-next"></div>
                <div class="swiper-button-prev labs-swiper-prev"></div>
                <div class="swiper-pagination labs-swiper-pagination"></div>                        
              </div>
            </div>
          </div>
        </div>
        <div id="placement" class="container-fluid scroll-start4">
          <div class="department_info container">
            <h1>Placement</h1>              
              <div class="placement-swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/civil/placement/1-1.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/civil/placement/download-1.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/civil/placement/2-2-300x160.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/civil/placement/download-3.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/civil/placement/images-1-300x137.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/civil/placement/download-7-300x144.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/civil/placement/download-6.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
            </div>        
        </div>
        <div id="events" class="container-fluid scroll-start5">
            <div class="container">
              <h1>Events</h1>
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                    <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">2018</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Other</a> -->
                </div>
              </nav>
              <div class="card-grid">
                <a id="modalBtn" class="button">
                    <div class="card">
                        <img src="<?php echo URLROOT;?>
/img/civil/events/Civil.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Civil engineers days celebration</h5>
                        </div>
                    </div>
                </a>
                <a id="modalBtn2" class="button">
                    <div class="card">
                        <img src="<?php echo URLROOT;?>
/img/civil/events/Civil3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Model presentation</h5>
                        </div>
                    </div>
                </a>
              </div>                  
            </div>        
        </div>
        <div id="eventModal" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Civil engineers days celebration</h1>
                  <i class="fa fa-times closeBtn" id="closeBtn" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/civil/events/Civil.jpeg" class="card-img-top" alt="...">
              <!-- <div class="content">
                <p></p>
              </div> -->
          </div>
        </div>
        <div id="eventModal2" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Model presentation</h1>
                  <i class="fa fa-times closeBtn" id="closeBtn2" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/civil/events/Civil3.jpeg" class="card-img-top" alt="...">
              <!-- <div class="content">
                <p></p>
              </div> -->
          </div>
        </div>
        <div id="staff" class="container-fluid scroll-start6">
          <div class="container">
            <h1>Staff</h1>
            <div class="card-grid">
              <a id="modalBtn" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/civil/staff/Amrish Bhavsar.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Amrish Bhavsar</h4>
                        <h5>Assistant Professor & Head of Dept.</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/civil/staff/Vaibhav Solanki.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Vaibhav Solanki</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>              
              <a id="modalBtn" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/civil/staff/Avani Medam.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Avani M. Mistry</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/civil/staff/Dipika Shah.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Dipika D Shah</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a> 
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/civil/staff/Rishi Pandya.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Rishi Pandya</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/civil/staff/Ashwin Sharma.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Ashwin Sharma</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>                                                             
            </div>  
          </div>        
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
  // modal 1
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

  // modal 2
  var modal2 = document.getElementById('eventModal2');
  var modalBtn2 = document.getElementById('modalBtn2');
  var closeBtn2 = document.getElementById('closeBtn2');

  modalBtn2.addEventListener('click', openModal2);
  closeBtn2.addEventListener('click', closeModal2);
  window.addEventListener('click', outsideClick2);

  function openModal2(){
      modal2.style.display = 'block';
  }
  function closeModal2(){
      modal2.style.display = 'none';
  }
  function outsideClick2(e){
      if(e.target == modal2){
          modal2.style.display = 'none';
      }
  }

  // iv 1
  var ivmodal = document.getElementById('ivmodal');
  var ivbtn = document.getElementById('ivbtn');
  var ivcloseBtn = document.getElementById('ivcloseBtn');

  ivbtn.addEventListener('click', openivModal);
  ivcloseBtn.addEventListener('click', closeivModal);
  window.addEventListener('click', ivoutsideClick);

  function openivModal(){
      ivmodal.style.display = 'block';
  }
  function closeivModal(){
      ivmodal.style.display = 'none';
  }
  function ivoutsideClick(e){
      if(e.target == ivmodal){
          ivmodal.style.display = 'none';
      }
  }

  // iv 2
  var ivmodal2 = document.getElementById('ivmodal2');
  var ivbtn2 = document.getElementById('ivbtn2');
  var ivcloseBtn2 = document.getElementById('ivcloseBtn2');

  ivbtn2.addEventListener('click', openivModal2);
  ivcloseBtn2.addEventListener('click', closeivModal2);
  window.addEventListener('click', ivoutsideClick2);

  function openivModal2(){
      ivmodal2.style.display = 'block';
  }
  function closeivModal2(){
    ivmodal2.style.display = 'none';
  }
  function ivoutsideClick2(e){
      if(e.target == ivmodal2){
        ivmodal2.style.display = 'none';
      }
  }

  // iv 3
  var ivmodal3 = document.getElementById('ivmodal3');
  var ivbtn3 = document.getElementById('ivbtn3');
  var ivcloseBtn3 = document.getElementById('ivcloseBtn3');

  ivbtn3.addEventListener('click', openivmodal3);
  ivcloseBtn3.addEventListener('click', closeivmodal3);
  window.addEventListener('click', ivoutsideClick3);

  function openivmodal3(){
      ivmodal3.style.display = 'block';
  }
  function closeivmodal3(){
    ivmodal3.style.display = 'none';
  }
  function ivoutsideClick3(e){
      if(e.target == ivmodal3){
        ivmodal3.style.display = 'none';
      }
  }
  // iv 4
  var ivmodal4 = document.getElementById('ivmodal4');
  var ivbtn4 = document.getElementById('ivbtn4');
  var ivcloseBtn4 = document.getElementById('ivcloseBtn4');

  ivbtn4.addEventListener('click', openivModal4);
  ivcloseBtn4.addEventListener('click', closeivModal4);
  window.addEventListener('click', ivoutsideClick4);

  function openivModal4(){
      ivmodal4.style.display = 'block';
  }
  function closeivModal4(){
    ivmodal4.style.display = 'none';
  }
  function ivoutsideClick4(e){
      if(e.target == ivmodal4){
        ivmodal4.style.display = 'none';
      }
  }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo URLROOT;?>
/js/backtotop.js"><?php echo '</script'; ?>
>
<?php }
}
