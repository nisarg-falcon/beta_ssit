<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" href="{URLROOT}/img/logo.png">
    {if $data['department'] != 'all'}
        <title>SSIT | Department | {$data['department']|ucfirst}</title>    
    {else}
        <title>SSIT | Departments</title>
    {/if}
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/department.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    {if $data['department'] != 'all'}
        <link rel="stylesheet" href="{URLROOT}/css/branch.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    {/if}
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
        {include file="../template/includes/header.tpl"} 
        <div class="header-section position-relative">
            {include file="../template/includes/header2.tpl"}    
            <div class="container-fluid media-container position-absolute">
                <img src="{URLROOT}/img/img2.jpg" class="video1 container-fluid">
            </div>  
        </div>
        <div class="header-txt position-absolute">
            <div class="txt-container container">
                {if $data['department'] == 'all'}
                    <p>Departments</p>
                    <p>At SSIT</p>
                {else}
                    <p>{$data['department']}</p>
                    <p>department</p>
                {/if}
            </div>    
        </div>
        
        {include file="../template/includes/header3.tpl"} 
        {if $data['department'] == 'all'}
            {include file="../template/department/alldepartment.tpl"}        
        {else}
            {include file="../template/department/{$data['department']}.tpl"}
        {/if}
        {include file="../template/includes/footer.tpl"}
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/CSSPlugin.min.js"></script>
    <script src="{URLROOT}/js/department.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="{URLROOT}/js/scroll.js"></script>
    <script src="{URLROOT}/js/branch_swiper.js"></script>
    <script src="{URLROOT}/js/header.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>