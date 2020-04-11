<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSIT</title>
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    {if !empty($message)}
        {$message}
    {/if}
    <a href='{URLROOT}/admins'>Go back</a>
        <div class="list">
                {if $designations != null}
                {foreach $designations as $department}
                    <ol>
                        <li>{$department['designation_id']}</li>     
                        <li>{$department['name']}</li> 
                        <li><a href="{URLROOT}/admins/delete_desgn/{$department['designation_id']}">DELETE</a></li>    
                    </ol>
                {/foreach}
                {/if}
        </div>
        <div class="add">
            <form action="{URLROOT}/admins/add_dsgn" method="post">
                <input type="text" name="name"  placeholder="enter designation name" required>
                <input type="submit" name="add">
            </form>
        </div>
</body>
</html>