<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container row d-flex justify-content-center ">

    <div class="container col-lg-5 bg-light text-center p-3 m-4">
        <h2 class="h2 ">Admin Login</h2>
        <form method="POST" action="{URLROOT}/admins/login" >
            <div class="form-group">
                <label for="username" class="float-left">Username :</label>
                <input type="text" name="username" placeholder="username" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="password" class="float-left">Password :</label>
                <input type="password" name="password" placeholder="password" class="form-control" id="password">
            </div>
            <input type="submit" name="submit" class="btn btn-success form-control ">
        </form> 
    </div>
</div>
    
</body>
</html>