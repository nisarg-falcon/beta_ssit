// educational modal 1
var modal = document.getElementById('eventModal');
var modalBtn = document.getElementById('modalBtn');
var closeBtn = document.getElementById('closeBtn');

modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

function openModal(){
    modal.style.display = 'block';
    var swiper = new Swiper('#Arduino-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function closeModal(){
    modal.style.display = 'none';
}
function outsideClick(e){
    if(e.target == modal){
        modal.style.display = 'none';
    }
}
    
// educational modal 2
var modal2 = document.getElementById('eventModal2');
var modalBtn2 = document.getElementById('modalBtn2');
var closeBtn2 = document.getElementById('closeBtn2');

modalBtn2.addEventListener('click', openModal2);
closeBtn2.addEventListener('click', closeModal2);
window.addEventListener('click', outsideClick2);

function openModal2(){
    modal2.style.display = 'block';
    var swiper = new Swiper('#Autodesk-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function closeModal2(){
    modal2.style.display = 'none';
}
function outsideClick2(e){
    if(e.target == modal2){
        modal2.style.display = 'none';
    }
}

// educational modal 3
var modal3 = document.getElementById('eventModal3');
var modalBtn3 = document.getElementById('modalBtn3');
var closeBtn3 = document.getElementById('closeBtn3');

modalBtn3.addEventListener('click', openModal3);
closeBtn3.addEventListener('click', closeModal3);
window.addEventListener('click', outsideClick3);

function openModal3(){
    modal3.style.display = 'block';
    var swiper = new Swiper('#civil-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function closeModal3(){
    modal3.style.display = 'none';
}
function outsideClick3(e){
    if(e.target == modal3){
        modal3.style.display = 'none';
    }
}

// educational modal 4
var modal4 = document.getElementById('eventModal4');
var modalBtn4 = document.getElementById('modalBtn4');
var closeBtn4 = document.getElementById('closeBtn4');

modalBtn4.addEventListener('click', openModal4);
closeBtn4.addEventListener('click', closeModal4);
window.addEventListener('click', outsideClick4);

function openModal4(){
    modal4.style.display = 'block';
    var swiper = new Swiper('#hackathon-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function closeModal4(){
    modal4.style.display = 'none';
}
function outsideClick4(e){
    if(e.target == modal4){
        modal4.style.display = 'none';
    }
}

// cultural modal 1
var Cmodal = document.getElementById('CeventModal');
var CmodalBtn = document.getElementById('CmodalBtn');
var CcloseBtn = document.getElementById('CcloseBtn');

CmodalBtn.addEventListener('click', CopenModal);
CcloseBtn.addEventListener('click', CcloseModal);
window.addEventListener('click', CoutsideClick);

function CopenModal(){
    Cmodal.style.display = 'block';
    var swiper = new Swiper('#cultural-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function CcloseModal(){
    Cmodal.style.display = 'none';
}
function CoutsideClick(e){
    if(e.target == Cmodal){
        Cmodal.style.display = 'none';
    }
}

// cultural modal 2
var Cmodal2 = document.getElementById('CeventModal2');
var CmodalBtn2 = document.getElementById('CmodalBtn2');
var CcloseBtn2 = document.getElementById('CcloseBtn2');

CmodalBtn2.addEventListener('click', CopenModal2);
CcloseBtn2.addEventListener('click', CcloseModal2);
window.addEventListener('click', CoutsideClick2);

function CopenModal2(){
    Cmodal2.style.display = 'block';
    var swiper = new Swiper('#Guruupurnima-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function CcloseModal2(){
    Cmodal2.style.display = 'none';
}
function CoutsideClick2(e){
    if(e.target == Cmodal2){
        Cmodal2.style.display = 'none';
    }
}

// cultural modal 3
var Cmodal3 = document.getElementById('CeventModal3');
var CmodalBtn3 = document.getElementById('CmodalBtn3');
var CcloseBtn3 = document.getElementById('CcloseBtn3');

CmodalBtn3.addEventListener('click', CopenModal3);
CcloseBtn3.addEventListener('click', CcloseModal3);
window.addEventListener('click', CoutsideClick3);

function CopenModal3(){
    Cmodal3.style.display = 'block';
    var swiper = new Swiper('#Ramzat-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function CcloseModal3(){
    Cmodal3.style.display = 'none';
}
function CoutsideClick3(e){
    if(e.target == Cmodal3){
        Cmodal3.style.display = 'none';
    }
}

// sports modal 1
var Smodal = document.getElementById('SeventModal');
var SmodalBtn = document.getElementById('SmodalBtn');
var ScloseBtn = document.getElementById('ScloseBtn');

SmodalBtn.addEventListener('click', SopenModal);
ScloseBtn.addEventListener('click', ScloseModal);
window.addEventListener('click', SoutsideClick);

function SopenModal(){
    Smodal.style.display = 'block';
    var swiper = new Swiper('#indoor-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function ScloseModal(){
    Smodal.style.display = 'none';
}
function SoutsideClick(e){
    if(e.target == Smodal){
        Smodal.style.display = 'none';
    }
}
    
// sports modal 2
var Smodal2 = document.getElementById('SeventModal2');
var SmodalBtn2 = document.getElementById('SmodalBtn2');
var ScloseBtn2 = document.getElementById('ScloseBtn2');

SmodalBtn2.addEventListener('click', SopenModal2);
ScloseBtn2.addEventListener('click', ScloseModal2);
window.addEventListener('click', SoutsideClick2);

function SopenModal2(){
    Smodal2.style.display = 'block';
    var swiper = new Swiper('#sports-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function ScloseModal2(){
    Smodal2.style.display = 'none';
}
function SoutsideClick2(e){
    if(e.target == Smodal2){
        Smodal2.style.display = 'none';
    }
}

// other modal 1
var Omodal = document.getElementById('OeventModal');
var OmodalBtn = document.getElementById('OmodalBtn');
var OcloseBtn = document.getElementById('OcloseBtn');

OmodalBtn.addEventListener('click', OopenModal);
OcloseBtn.addEventListener('click', OcloseModal);
window.addEventListener('click', OoutsideClick);

function OopenModal(){
    Omodal.style.display = 'block';
    var swiper = new Swiper('#Camp-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function OcloseModal(){
    Omodal.style.display = 'none';
}
function OoutsideClick(e){
    if(e.target == Omodal){
        Omodal.style.display = 'none';
    }
}

// other modal 2
var Omodal2 = document.getElementById('OeventModal2');
var OmodalBtn2 = document.getElementById('OmodalBtn2');
var OcloseBtn2 = document.getElementById('OcloseBtn2');

OmodalBtn2.addEventListener('click', OopenModal2);
OcloseBtn2.addEventListener('click', OcloseModal2);
window.addEventListener('click', OoutsideClick2);

function OopenModal2(){
    Omodal2.style.display = 'block';
    var swiper = new Swiper('#EYantra-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function OcloseModal2(){
    Omodal2.style.display = 'none';
}
function OoutsideClick2(e){
    if(e.target == Omodal2){
        Omodal2.style.display = 'none';
    }
}

// other modal 3
var Omodal3 = document.getElementById('OeventModal3');
var OmodalBtn3 = document.getElementById('OmodalBtn3');
var OcloseBtn3 = document.getElementById('OcloseBtn3');

OmodalBtn3.addEventListener('click', OopenModal3);
OcloseBtn3.addEventListener('click', OcloseModal3);
window.addEventListener('click', OoutsideClick3);

function OopenModal3(){
    Omodal3.style.display = 'block';
    var swiper = new Swiper('#Youth-swiper-container', {  
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.act-next',
            prevEl: '.act-prev',
        },
    });
}
function OcloseModal3(){
    Omodal3.style.display = 'none';
}
function OoutsideClick3(e){
    if(e.target == Omodal3){
        Omodal3.style.display = 'none';
    }
}