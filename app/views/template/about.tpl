<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/about.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">    
    <title>About us</title>
</head>
<body>
    <!-- hero section start -->
    {include file="../template/includes/header.tpl"} 
    <div class="header-section position-relative">
        {include file="../template/includes/header2.tpl"}    
        <div class="container-fluid media-container position-absolute">
            <img src="{URLROOT}/img/about-hero-edit.jpg" class="video1 container-fluid">
        </div>  
    </div>
    {include file="../template/includes/header3.tpl"}    
    <div class="container-fluid">
        <div id="why-ssit" class="scroll-start1">
            <h1>Why SSIT ?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque ratione assumenda atque officiis minima blanditiis iste soluta aliquam illo necessitatibus commodi sed repudiandae reprehenderit odio, illum vero labore voluptatibus!
            Sunt atque laborum quibusdam quam, odio laboriosam quaerat voluptatum exercitationem maiores eligendi consequatur architecto facilis voluptatem amet inventore corrupti minus totam libero asperiores aliquid harum voluptate. Cum officia obcaecati numquam.
            Minus eum sit assumenda, ducimus ullam unde nulla maxime ex asperiores amet doloribus esse nostrum odio alias quia mollitia quae eos voluptas ad quo corrupti. Temporibus amet culpa enim. Amet?
            Deserunt veritatis numquam, modi, quas quisquam ex laudantium asperiores ullam laboriosam odit atque officia voluptatibus nobis perspiciatis quos. Deserunt at eos, nesciunt facere quia quae saepe pariatur quibusdam beatae qui?
            Consequatur aliquid, placeat quis dignissimos excepturi dolore saepe. Atque qui dolorum nobis, nihil expedita beatae aperiam mollitia voluptates officia numquam neque voluptatum vitae alias dolor quam sequi? Consequuntur, quisquam libero?</p>
        </div>
        <div id="about-trust"  class="scroll-start2">
            <h1>Satsang Siksha Prishad</h1>
            <div class="row m-0">    
                <div class="col-md-4 col-sm-12 bg-white pb-3">
                    <img src="{URLROOT}/img/about-trust.jpg"  height="100%" class="card-img p-0 m-0" alt="...">
                </div>
                <div class="col-md-8 col-sm-12 p-0">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, cupiditate voluptatum voluptatem, nulla deleniti quasi numquam provident molestias culpa harum odio sapiente quam deserunt animi ipsa dolores dolore reiciendis! Totam.
                    Sint odio ex fuga, similique debitis animi placeat laborum, eveniet quis quae, consequuntur accusamus quisquam! Facere nisi dignissimos illo vitae officiis eum quasi nulla cum alias impedit? Provident, nesciunt atque.
                    Non exercitationem vero animi nisi adipisci iste quidem consectetur facilis placeat maiores repudiandae cum, aperiam a. Praesentium temporibus sequi dignissimos placeat? Et veniam fugiat commodi est doloribus, quia deleniti eligendi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolorem, accusantium provident non at dolorum eaque cum natus quidem deserunt commodi voluptas error aspernatur perspiciatis ullam deleniti aliquam porro sapiente!
                    </p>           
                </div>
            </div>
        </div>
        <div id="ssit-family" class="scroll-start3">
            <h1>SSIT Family</h1>
            <img src="{URLROOT}/img/ssit-family.jpg" class="card-img" height="100%">
        </div>
    </div>
    
    {include file="../template/includes/footer.tpl"}
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
    <script type="module"  src="{URLROOT}/node_modules/gsap/all.js"></script>
    <script type="module" src="{URLROOT}/js/scroll.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>
</body>
</html>