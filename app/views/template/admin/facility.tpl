<!DOCTYPE html>
<html>

<head>
    <title>{SITENAME}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <a href='{URLROOT}/admins' class="btn btn-danger ml-4 my-4">Go back</a>
    <div class="container-fluid">

        <div class="container bg-light p-3">

            <h2 class="h2">Add Facility</h2>
            <div class="form-group">

                
                <form action="{URLROOT}/admins/add_facility" method="post" enctype="multipart/form-data">
                    <label for="name">Facility Name :</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <label for="one">Select photo :</label>
                    <input type="file" name="one">
                    <label for="two"">Select photo :</label>
                    <input type="file" name="two">
                    <label for="three">Select photo :</label>
                    <input type="file" name="three">
                    <label for="four">Select photo :</label>
                    <input type="file" name="four">
                    <label for="five">Select photo :</label>
                    <input type="file" name="five">
                    <label for="dept">Department</label>
                    {if $data['dept'] == null}
                        <h4 class="h4">No Departments added yet...</h4>
                    {else}
                        <select name="dept" id="dept" class="form-control custom-select">
                            {foreach $data['dept'] as $dept}
                            <option value="{$dept['dept_id']}">{$dept['name']}</option>
                            {/foreach}
                        </select>
                    {/if}
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="40" rows="10" class="form-control"></textarea>
                    <input type="submit" name="submit" value="Add" class="btn btn-primary form-control mt-3">
                </form>
            </div>
        </div>
        <div class="container bg-light mt-3">
            <h2 class="h2">Facilities</h2>
             {if $data['facilities'] != null}
             {foreach $data['facilities'] as $facility}
             <div class="container  btn-outline-secondary p-2 border my-2">
                <h3 class="h3">{$facility['name']}</h3>
                
                <div class="row p-2">
                    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl p-2">
                        <img src="{URLROOT}/public/img/facility/{$facility['img1']}" alt="{$facility['img1']}" class="img rounded img-fluid">
                    </div>
                    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl p-2">
                        <img src="{URLROOT}/public/img/facility/{$facility['img2']}" alt="{$facility['img2']}" class="img rounded img-fluid">
                    </div>
                    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl p-2">
                        <img src="{URLROOT}/public/img/facility/{$facility['img3']}" alt="{$facility['img3']}" class="img rounded img-fluid">
                    </div>
                    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl p-2">
                        <img src="{URLROOT}/public/img/facility/{$facility['img4']}" alt="{$facility['img4']}" class="img rounded img-fluid">
                    </div>
                    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl p-2">
                        <img src="{URLROOT}/public/img/facility/{$facility['img5']}" alt="{$facility['img5']}" class="img rounded img-fluid">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="p-2  col-sm-12 col-md-7 col-lg-7 col-xl-9">
                        <h4 class="h4">
                            Description
                        </h4>
                        <p>{$facility['description']}</p>
                    </div>
                    <div class="p-2 col-sm-12 col-md-3 col-lg-3 col-xl-2 text-sm-center">
                        <h4 class="h4">
                            Department
                        </h4>
                        <p>
                            {$facility['departments']}
                        </p>
                    </div>
                    <div class="p-2 col-sm-12 col-md-2 col-lg-2 col-xl-1 text-sm-center">
                        <a href="{URLROOT}/admins/delete_facility/{$facility['id']}" class="btn btn-danger">Delete</a>

                    </div>
                </div>
            </div>

                 {/foreach}
            {else}
                 No Facilities.
            {/if}


        </div>
    </div>

  
</body>

</html>