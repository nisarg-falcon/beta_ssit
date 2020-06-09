<?php
/* Smarty version 3.1.33, created on 2020-06-08 18:11:16
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\department\mechanical.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ede6324b11181_69657547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a803fcf47f57306000c96cf99d223241210f5f60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\department\\mechanical.tpl',
      1 => 1591632674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede6324b11181_69657547 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="department" >
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
    <div class="departments_container">
        <div id="brochure" class="department__container container-fluid scroll-start1">
           <div class="branch_info container">
            <div class="branch_txt_container">
                <h1>Mechanical Engineering</h1>
                <ul>
                    <li>The Department of Mechanical Engineering is one of the largest departments in the Institute. The department has over 20 +  instructional and advance research and skill based  laboratories (like.. 3D Printer lab, CAD CAM Lab, Laser and Engraver Lab) fully equipped with all the necessary infrastructure.</li>
                    <li>The vision of the department is to produce world class technocrates who will serve the society and the Nation for its betterment. To achieve this goal, faculty members of the department  drive these activities through their teaching and diverse skill based programs, covering numerous facets of Mechanical Engineering Science and Applications.   The students in the department are exposed to the problems faced by today’s societies, and are trained to address those problems through innovative thinking to develop appropriate technological solutions.</li>
                </ul>
                <div class="branch_link">
                    <a href="<?php echo URLROOT;?>
/public/img/mech/borchure/Mechanical-Brochure.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Brochure</a>
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
/public/img/mech/industrial_visit/narmada_dam_visit/WP_20160912_17_13_07_Pro-300x169.jpg" class="card-img-top" alt="">                    
                    </a>                    
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn2" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/mech/industrial_visit/dr.dinesh&ramesh_engineers_pvt_ltd/Dr.-Dinesh-Ramesh-Engineers-Pvt.-Ltd.-2-300x241.jpg" class="card-img-top" alt="">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn3" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/mech/industrial_visit/GEB_gandhinagar/geb-300x221.jpg" class="card-img-top" alt="">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn4" class="button">
                        <img src="<?php echo URLROOT;?>
/public/img/mech/industrial_visit/charanka_solar_plant/WP_20160428_14_19_23_Pro-300x169.jpg" class="card-img-top" alt="">
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
/public/img/mech/industrial_visit/narmada_dam_visit/WP_20160912_17_13_07_Pro-300x169.jpg);"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/mech/industrial_visit/dr.dinesh&ramesh_engineers_pvt_ltd/Dr.-Dinesh-Ramesh-Engineers-Pvt.-Ltd.-2-300x241.jpg);"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/mech/industrial_visit/GEB_gandhinagar/geb-300x221.jpg);"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/mech/industrial_visit/charanka_solar_plant/WP_20160428_14_19_23_Pro-300x169.jpg);"></div>
                </div>
              </div>              
            </div>        
          </div>
        </div>
        <div id="ivmodal" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Narmada Dam Visit</h1>
                  <i class="fa fa-times closeBtn" id="ivcloseBtn" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/mech/industrial_visit/narmada_dam_visit/WP_20160912_17_13_07_Pro-300x169.jpg" class="card-img-top" alt="...">             
          </div>
        </div>
        <div id="ivmodal2" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>dr. dinesh & Ramesh Engineers Pvt Ltd</h1>
                  <i class="fa fa-times closeBtn" id="ivcloseBtn2" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/mech/industrial_visit/dr.dinesh&ramesh_engineers_pvt_ltd/Dr.-Dinesh-Ramesh-Engineers-Pvt.-Ltd.-2-300x241.jpg" class="card-img-top" alt="...">             
          </div>
        </div>
        <div id="ivmodal3" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>GEB Gandhinagar</h1>
                  <i class="fa fa-times closeBtn" id="ivcloseBtn3" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/mech/industrial_visit/GEB_gandhinagar/geb-300x221.jpg" class="card-img-top" alt="...">             
          </div>
        </div>
        <div id="ivmodal4" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Charanka Solar Plant</h1>
                  <i class="fa fa-times closeBtn" id="ivcloseBtn4" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/mech/industrial_visit/charanka_solar_plant/WP_20160428_14_19_23_Pro-300x169.jpg" class="card-img-top" alt="...">             
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
/public/img/lab/mechanical/1.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/mechanical/2.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/mechanical/3.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/mechanical/4.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/mechanical/5.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/mechanical/6.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/mechanical/7.JPG" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/lab/mechanical/8.JPG" width="100%"  />
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
/public/img/mech/placement/3.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/mech/placement/5.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/mech/placement/7.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/mech/placement/9.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/mech/placement/1-2.jpg." class="img-fluid" alt=""></div>
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
/img/mech/event/hands on with ic engine assembly & 3d printer/1-300x225.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hands on with IC Engine Assembly & 3D Printer</h5>
                        </div>
                    </div>
                </a>
                <a id="modalBtn2" class="button">
                    <div class="card">
                        <img src="<?php echo URLROOT;?>
/img/mech/event/Mechanical2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Practical Workshop</h5>
                        </div>
                    </div>
                </a>
              </div>                  
            </div>        
        </div>
        <div id="eventModal" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Hands on with IC Engine Assembly & 3D Printer</h1>
                  <i class="fa fa-times closeBtn" id="closeBtn" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/mech/event/hands on with ic engine assembly & 3d printer/1-300x225.jpg" class="card-img-top" alt="...">
                        </div>
        </div>
        <div id="eventModal2" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Practical Workshop</h1>
                  <i class="fa fa-times closeBtn" id="closeBtn2" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/mech/event/Mechanical2.jpg" class="card-img-top" alt="...">
                        </div>
        </div>
        <div id="staff" class="container-fluid scroll-start6">
          <div class="container">
            <h1>Staff</h1>
            <div class="card-grid">
              <a id="modalBtn" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/mech/staff/Sanjay Sharma.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Sanjay Sharma</h4>
                        <h5>Assistant Professor & Head of Dept.</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/mech/staff/Prof.-Vikas-Sheth-200x200.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Vikas Sheth</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/mech/staff/Prof.-Naresh-Kori-200x200.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Naresh Kori</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/mech/staff/Prof.-Sumitsingh-Sikarwar-200x200.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Sumitsingh Sikarwar</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/mech/staff/Prof.-Brijesh-Pokar-200x200.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Brijesh Pokar</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/mech/staff/Prof.-Ketan-Shah-200x200.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Ketan Shah</h4>
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
