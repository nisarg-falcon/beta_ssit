<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/notification.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">
    <title>SSIT | Recruitment</title>
</head>
<body>   
    {include file="../template/includes/header.tpl"} 
    {include file="../template/includes/header2.tpl"}    

    <div class="notification container">
        <h1>Latest circular</h1>
        <ul>
            <li>    
                <div class="info">
                    <h5>07-05-2021</h5>
                    <h6>Fee circular</h6>
                    <a href="{URLROOT}/public/notification/FEE CIRCULAR.pdf">Click here</a>
                </div>
            </li>
            
            <li>
                <div class="info">
                    <h5>10-04-2021</h5>
                    <h6>Recruitment Notification</h6>
                    <a href="{URLROOT}/pages/recruitment">Click here</a>
                </div>
            </li>
        </ul>
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
    {literal} 
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179928256-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-179928256-1');
        </script>
    {/literal}
</body>
</html>