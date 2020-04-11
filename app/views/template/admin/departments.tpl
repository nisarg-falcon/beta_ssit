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
    <a href='{URLROOT}/admins'>Go back</a>
        <div class="list">
                {if $departments != null}
                {foreach $departments as $department}
                    <ol>
                        <li>{$department['name']}</li>     
                        <li>{$department['code']}</li>     
                        <li>{$department['description']}</li>     
                        <li><a href="{URLROOT}/admins/delete_dept/{$department['dept_id']}">Delete</a></li>
                    </ol>
                {/foreach}
                {/if}
        </div>
        <div class="add">
            <form action="{URLROOT}/admins/add_dept" method="post">
                <input type="text" name="name"  placeholder="enter name" required>
                <input type="number" name="code"  placeholder="enter code" required>
                <input type="text" name="description" placeholder="enter description">
                <input type="submit" name="add">
            </form>
        </div>
</body>
</html>