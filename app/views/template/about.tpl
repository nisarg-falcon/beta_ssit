<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">    
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/about.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">   
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
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
                <img src="{URLROOT}/img/about-trust.jpg" class="img-fluid" alt="...">
                <div>
                    <h1>Satsang Shiksha Parishad</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, cupiditate voluptatum voluptatem, nulla deleniti quasi numquam provident molestias culpa harum odio sapiente quam deserunt animi ipsa dolores dolore reiciendis! Totam.
                    Sint odio ex fuga, similique debitis animi placeat laborum, eveniet quis quae, consequuntur accusamus quisquam! Facere nisi dignissimos illo vitae officiis eum quasi nulla cum alias impedit? Provident, nesciunt atque.
                    </p>
                </div>
            </div>
        </div>      
        <div id="people-1">
            <div class="container course__container">
                <div class="people-image">
                    <img src="{URLROOT}/img/shastri-swamiji.png" class="img-fluid" alt="...">
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
                    <img src="{URLROOT}/img/ram swamiji.png" class="card-img" alt="...">            
                </div>
            </div>
        </div>      
        {* <div id="ssit-family" class="scroll-start3">
            <h1>SSIT Family</h1>
        </div> *}

    </div>
    
    {include file="../template/includes/footer.tpl"}
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
    <script type="module"  src="{URLROOT}/node_modules/gsap/all.js"></script>
    <script type="module" src="{URLROOT}/js/scroll.js"></script>
    <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>
</body>
</html>