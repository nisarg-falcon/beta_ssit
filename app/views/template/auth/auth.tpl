<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{block name='title'}{/block}</title>
    <link rel="stylesheet" href="{URLROOT}/css/auth_parent.css">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/js/scroll.js"></script>
</head>
<body>
    {include file='../../template/includes/header.tpl'}
    <div class="main" id="main-section">
        <div class="form__section">
            {block name='login'}{/block}
            {block name='register'}{/block}
        </div>
    </div>
</body>
</html>