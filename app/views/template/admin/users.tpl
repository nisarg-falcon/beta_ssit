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
    <div class="container-fluid p-5 row main no-gutters">
        <div class="form-group p-1 col-12">
            <a href="{URLROOT}/admins" class="btn btn-danger form-control w-auto">Go Back</a>
        </div>
        <div
            class="container add_user form-group bg-light p-4 mt-5 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <h1 class="h2 mb-4 text-center">Add User</h1>
            <form action="add_user" method="post">
                <input type="text" name="name" placeholder="Enter Name" class="form-control mb-3" required>
                <input type="text" name="username" placeholder="Enter Username" class="form-control mb-3" required>
                <input type="password" name="password" placeholder="Enter Password" class="form-control mb-3" required>
                {if $data['departments'] != null}
                <select name="department" class="form-control mb-3 custom-select" required>
                    {foreach $data['departments'] as $department}
                        <option value="{$department['dept_id']}">
                            {$department['name']}
                        </option>
                    {/foreach}
                </select>
                {/if}
                    
                    <div class="form-group p-1 text-center">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary form-control">
                    </div>

            </form>
        </div>
        <div class="container show_users mt-5 col-sm-12 col-md-8 col-lg-8 col-xl-8 pl-xl-5 pl-lg-4 pl-md-3 pl-sm-0">
            {if $data['users'] != null}
            <h2 class="h2 mb-4 text-center">Active Users</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $data['users'] as $user}
                    <tr>
                        <td>{$user['user_id']}</td>
                        <td>{$user['username']}</td>
                        <td>{$user['name']}</td>
                        <td><a href="{URLROOT}/admins/delete_user/{$user['user_id']}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
            {else}
            <p>There are no users active</p>
            {/if}
        </div>
        
    </div>
</body>
</html>