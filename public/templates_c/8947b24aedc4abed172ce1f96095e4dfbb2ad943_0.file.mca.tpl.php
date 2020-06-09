<?php
/* Smarty version 3.1.33, created on 2020-06-08 13:40:36
  from 'C:\xampp\htdocs\ssit_rebuild\app\views\template\department\mca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ede23b4f020d8_36745951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8947b24aedc4abed172ce1f96095e4dfbb2ad943' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ssit_rebuild\\app\\views\\template\\department\\mca.tpl',
      1 => 1591616431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede23b4f020d8_36745951 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="department" >
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-arrow-up"></span></button>
    <div class="departments_container">
        <div id="brochure" class="department__container container-fluid scroll-start1">
           <div class="branch_info container">
            <div class="branch_txt_container">
                <h1>Electrical Engineering</h1>
                <ul>
                    <li>To be a nodal agency for advancement of Electrical Engineering academics,
                        research & development within and in close collaboration with industry, society
                        and leading institutions. To develop responsible professionals and citizens
                        through awareness and by acceptance of ethical values.</li>
                    <li>To impart programme oriented knowledge in mathematical, scientific and
                        engineering fundamentals required to solve engineering problems so as to
                        comprehend, analyse, design and create novel products and solutions for real
                        life problems.</li>
                    <li>To strive for excellence in academics, research in engineering and technology
                        to contribute to the development of the region and the nations and develop
                        centre of research in the area of relevance in industry and enterprise in the
                        region through continuous up gradation of faculty and facilities.</li>
                    <li>The Department organizes guest lectures, short term training program, workshop
                        and seminar on various specialized field. This is an opportunity to meet eminent
                        speaker and exchange ideas.</li>
                </ul>
                <div class="branch_link">
                    <a href="<?php echo URLROOT;?>
/public/img/elec/brochure/Electrical-Eng.-BOOKLET-2018-format_1.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Brochure</a>
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
/public/img/elec/industrial_visit/charanka_solar_power_plant/IMG_9944-300x200.jpg" class="card-img-top" alt="">
                    </a>                    
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn2" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/elec/industrial_visit/charanka_solar_power_plant/IMG_9914-300x200.jpg" class="card-img-top" alt="">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn3" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/elec/industrial_visit/switch_ex-po/IMG_20161007_112339-300x225.jpg" class="card-img-top" alt="">
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a id="ivbtn4" class="button">
                      <img src="<?php echo URLROOT;?>
/public/img/elec/industrial_visit/switch_ex-po/IMG_20161007_134019-300x225.jpg" class="card-img-top" alt="">
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
/public/img/elec/industrial_visit/charanka_solar_power_plant/IMG_9944-300x200.jpg);"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/elec/industrial_visit/charanka_solar_power_plant/IMG_9914-300x200.jpg);"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/elec/industrial_visit/switch_ex-po/IMG_20161007_112339-300x225.jpg);"></div>
                  <div class="swiper-slide" style="background-image:url(<?php echo URLROOT;?>
/public/img/elec/industrial_visit/switch_ex-po/IMG_20161007_134019-300x225.jpg);"></div>
                </div>
              </div>              
            </div>        
          </div>
        </div>
        <div id="ivmodal" class="eventmodal">
          <div class="modal-content">
            <div class="header">
                <h1>Charanka Solar Power Plant</h1>
                <i class="fa fa-times closeBtn" id="ivcloseBtn" aria-hidden="true"></i>
            </div>
            <img src="<?php echo URLROOT;?>
/public/img/elec/industrial_visit/charanka_solar_power_plant/IMG_9944-300x200.jpg" class="card-img-top" alt="...">             
          </div>          
        </div>
        <div id="ivmodal2" class="eventmodal">
          <div class="modal-content">
            <div class="header">
                <h1>Charanka Solar Power Plant</h1>
                <i class="fa fa-times closeBtn" id="ivcloseBtn2" aria-hidden="true"></i>
            </div>
            <img src="<?php echo URLROOT;?>
/public/img/elec/industrial_visit/charanka_solar_power_plant/IMG_9914-300x200.jpg" class="card-img-top" alt="...">             
          </div>
        </div>
        <div id="ivmodal3" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>switch Expo</h1>
                  <i class="fa fa-times closeBtn" id="ivcloseBtn3" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/public/img/elec/industrial_visit/switch_ex-po/IMG_20161007_112339-300x225.jpg" class="card-img-top" alt="...">             
          </div>
        </div>
        <div id="ivmodal4" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>switch Expo</h1>
                  <i class="fa fa-times closeBtn" id="ivcloseBtn4" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/public/img/elec/industrial_visit/switch_ex-po/IMG_20161007_134019-300x225.jpg" class="card-img-top" alt="...">             
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
/public/img/elec/lab/ac machine/DSC_0108-300x199.jpg" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/elec/lab/dc machine and transformer/DSC_0112-300x199.jpg" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/elec/lab/dc machine and transformer/DSC_0117-300x199.jpg" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/elec/lab/high voltage/DSC_0122-300x199.jpg" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/elec/lab/high voltage/DSC_0126-300x199.jpg" width="100%"  />
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo URLROOT;?>
/public/img/elec/lab/switch gear and protection/DSC_0123-300x199.jpg" width="100%"  />
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
/public/img/elec/placement/evercrest_logo.png" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/elec/placement/Greenfield Control System.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/elec/placement/Snabar Pumps & Motors.jpg" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/elec/placement/PCB planet.gif" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="<?php echo URLROOT;?>
/public/img/elec/placement/IPR .png" class="img-fluid" alt=""></div>
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
/img/elec/events/Electrical3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Panel Design workshop</h5>
                        </div>
                    </div>
                </a>
                <a id="modalBtn2" class="button">
                    <div class="card">
                        <img src="<?php echo URLROOT;?>
/img/elec/events/Electrical2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Energy Conservation workshop</h5>
                        </div>
                    </div>
                </a>
              </div>                  
            </div>        
        </div>
        <div id="eventModal" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Panel Design Workshop</h1>
                  <i class="fa fa-times closeBtn" id="closeBtn" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/elec/events/Electrical3.jpg" class="card-img-top" alt="...">
              <!-- <div class="content">
                <p></p>
              </div> -->
          </div>
        </div>
        <div id="eventModal2" class="eventmodal">
          <div class="modal-content">
              <div class="header">
                  <h1>Energy Conservation Workshop</h1>
                  <i class="fa fa-times closeBtn" id="closeBtn2" aria-hidden="true"></i>
              </div>
              <img src="<?php echo URLROOT;?>
/img/elec/events/Electrical2.jpg" class="card-img-top" alt="...">
              <!-- <div class="content">
                <p></p>
              </div> -->
          </div>
        </div>
        <div id="staff" class="container-fluid scroll-start6">
          <div class="container">
            <h1>Staff</h1>
            <div class="card-grid">
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/elec/staff/Prof. Urvish Mewada.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Urvish Mewada</h4>
                        <h5>Assistant Professor & Head of Dept.</h5>                        
                    </div>
                </div>
              </a>
              <a id="modalBtn" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/public/img/elec/staff/Prof. Suvas Vora.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Suvas Vora</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>
              <a id="modalBtn2" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/elec/staff/Prof. Ripan Patel.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Ripan Patel</h4>
                        <h5>Assistant Professor</h5>
                    </div>
                </div>
              </a>              
              <a id="modalBtn" class="button">
                <div class="card">
                    <img src="<?php echo URLROOT;?>
/img/elec/staff/Prof. Nishit Chotaliya.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Prof. Nishit Chotaliya</h4>
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
