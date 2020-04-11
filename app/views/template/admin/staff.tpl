<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{SITENAME}</title>
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="main">
        <div class="add_staff">
            <a href="{URLROOT}/admins">Go Back</a>  
            <h1>Add Staff Member</h1>
            <form action="add_staff" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Enter Name" required>
                {if $data['designations'] != null}
                    <select name="designation" required>
                        {foreach $data['designations'] as $designation}
                            <option value="{$designation['designation_id']}">
                                {$designation['name']}
                            </option>
                        {/foreach}
                    </select>
                {/if}
                {if $data['departments'] != null}
                    <select name="department" required>
                        {foreach $data['departments'] as $department}
                            <option value="{$department['dept_id']}">
                                {$department['name']}
                            </option>
                        {/foreach}
                    </select>
                {/if}
                <input type="file"  name="image">
                <input type="number" name="joined" min="2014" max="2019" required>
                <input type="submit" name="submit" value="submit">
            </form> 
        </div>
        {if $data['staff'] != null}
            <div class="show_staff">
                {foreach $data['staff'] as $member}
                    <h2>{$member['name']}</h2>
                   
                    <img src="{URLROOT}/public/img/staff/{$member['img']}" alt="not found" height="200" width="300">
                    <p><a href="{URLROOT}/admins/delete_staff/{$member['staff_id']}">Delete</a></p>
                {/foreach}
            </div>
        {/if}
    </div>    
</body>
</html>