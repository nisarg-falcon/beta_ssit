<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSIT</title>
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{URLROOT}/css/admin_panel.css">
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <a href="{URLROOT}/admins/logout" class="btn btn-danger m-4">Logout</a>
        <div class="container row mx-auto" id="admin-nav">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="{URLROOT}/admins/users"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Users</a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="{URLROOT}/admins/departments"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Departments</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="{URLROOT}/admins/designation"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Designation</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="{URLROOT}/admins/staff"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Staff
                    Info</a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="{URLROOT}/admins/facility"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Facilities</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="{URLROOT}/admins/material"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Study
                    Material</a></div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                <a href="{URLROOT}/admins/events"
                    class="h-100 w-100 d-flex align-items-center justify-content-center bg-dark  h4 text-white">Events</a>
            </div>
        </div>

    </div>
</body>

</html>