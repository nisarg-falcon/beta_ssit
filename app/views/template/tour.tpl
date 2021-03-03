<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">    
    <title>Contact us</title>
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/tour.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
   {include file="../template/includes/header.tpl"} 
    <div class="header-section position-relative">
        {include file="../template/includes/header2.tpl"}           
    </div>

    <!-- tour -->
    <h1 class="h1">Virtual Campus Tour</h1>
    <div class="tour">
        {* <iframe src="https://www.google.com/maps/embed?pb=!4v1590432769765!6m8!1m7!1sCAoSK0FGMVFpcE5SdU16dGRmTHNJcWd4NTJzUVVnSUpYSjZ1UFpYMDNjV3NTbms.!2m2!1d23.11541420479152!2d72.63023034527203!3f0!4f10!5f0.7820865974627469" width="80%" height="90%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> *}
        <iframe src="https://www.google.com/maps/embed?pb=!4v1614065699980!6m8!1m7!1sCAoSLEFGMVFpcFBuSWd1VkwxMW0yYk5lVkxPX3Y3MTVEcEJtV2lxbVNINGU5UTk5!2m2!1d23.1151226!2d72.6302689!3f240!4f20!5f0.7820865974627469" width="80%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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