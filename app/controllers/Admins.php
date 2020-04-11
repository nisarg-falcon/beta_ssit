<?php
// this is admin panel , changes made by kv for git testing 
 class Admins extends Controller {
     // load admin_panel
    public function index(){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['username'] == 'admin'){
                $this->view('php/admin_panel');
            }
        }else{
            $data = [];
            $this->view('php/admin',$data);
        }
    }
    // load views
    public function panel(){
        $this->kick();
        $this->view('php/admin_panel');
    }
    public function designation(){
        $this->kick();
        $this->view('admin/designation');
    }
    public function users(){
        $this->kick();
        $this->view('admin/users');
    }
    public function departments(){
        $this->kick();
        $this->view('admin/departments');
    }
    public function staff(){
        $this->kick();
        $this->view('admin/staff');
    }
    public function facility(){
        $this->kick();
        $this->view('admin/facility');
    }
    public function material(){
        $this->kick();
        $this->view('admin/material');
    }
    public function events(){
        $this->kick();
        $this->view('admin/events');
    }
    // if user is not admin then kick him out.
    public function kick(){
        session_start();
        if(!isset($_SESSION['username']) || $_SESSION['username']!="admin"){
            die("Please <a href='".URLROOT."/admins'>Login</a> first");
        }
    }

    // login and logout methods
    public function login(){
      
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $admin = $this->model('user');
        $res = $admin->login($user,$pass);
        if($res){
            header('location: panel');
        }else{
            echo 'user does not exist.';
        }
    }
    public function logout(){
        session_start();
        session_destroy();
        $this->view('php/admin');
    }
    
// methods of user
    public function add_user(){
        $this->kick();

        $name = $_POST['name'];
        $uname = $_POST['username'];
        $pass =  $_POST['password'];
        $dept = $_POST['department'];
        $user = $this->model('User');
        $exist = $user->get_user($uname);
        if($exist){
            echo 'user already exists.<a href="'.URLROOT.'/admins/users">Go Back</a>';
        }else{
            $user->register($name,$uname,$pass,$dept);
            echo 'user added.<a href="'.URLROOT.'/admins/users">Go Back</a>';
        }
    }
     public function delete_user($id){
        $this->kick();

        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $delete = "DELETE from users WHERE user_id =" . $id;
        $deleted = mysqli_query($con,$delete);
        if($deleted){
            $this->view("admin/users");
        }else{
            die("error");
        }
    }
    // methods of desgn
    public function add_dsgn(){
        $this->kick();

        if(isset($_POST['add'])){
            $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            if(!empty($_POST['name'])){
                $name = $_POST['name'];
                $designation = $this->model('designation');
                $added = $designation->add($name);
                if($added){
                    $data = [
                        'message' => 'designation added'
                    ];
                    $this->view('admin/designation',$data);
                }else{
                     $data = [
                        'message' => 'department not added'
                    ];
                    $this->view('admin/designation',$data);
                }
            }
        }
    }
    public function delete_desgn($id){
        $this->kick();
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $delete = "DELETE from designation WHERE designation_id =" . $id;
        $deleted = mysqli_query($con,$delete);
        if($deleted){
            $this->view("admin/designation");
        }else{
            die("error");
        }
    }
    // methods of staff
    public function add_staff(){
        $this->kick();
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $photo=$_FILES['image']['name'];
        $phototmp=$_FILES['image']['tmp_name'];
        $phototype=$_FILES['image']['type'];
        $imagearray=array("image/jpeg","image/png","image/gif","image/bmp","image/jpg");
        $path="img/staff/".$photo;
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $joined = $_POST['joined'];
        $department = $_POST['department'];
        if(isset($_POST['submit'])){
            if(empty($_FILES['image']['name']))
            {
                $insert = "INSERT INTO staff(staff_id,name, designation_id, dept_id, joined_at) VALUES('','$name','$designation','$department','$joined');";
                mysqli_query($con, $insert);
                $this->view('admin/staff');
            }else{
                if(!in_array($phototype,$imagearray))
                {	
                    die("select valid photos");			
                }
                else
                {
                    move_uploaded_file($phototmp,$path);
                    $insert = "INSERT INTO staff(staff_id,name, designation_id, dept_id, img, joined_at) VALUES('','$name','$designation','$department','$photo','$joined');";
                    mysqli_query($con, $insert);
                    $this->view('admin/staff');
                }
            }
        }
    }
    public function delete_staff($id){
        $this->kick();
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $delete = "DELETE from staff WHERE staff_id =" . $id;
        $deleted = mysqli_query($con,$delete);
        if($deleted){
            $this->view("admin/staff");
        }else{
            die("error");
        }
    }
    // methods of dept
    public function add_dept(){
        $this->kick();
        if(isset($_POST['add'])){
            $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            if(!empty($_POST['name']) || !empty($_POST['code'])){
                if(empty($_POST['description'])){
                    $name = $_POST['name'];
                    $code = $_POST['code'];
                    $description = null;
                }else{
                    $name = $_POST['name'];
                    $code = $_POST['code'];
                    $description = $_POST['description'];
                    
                }
                $dept = $this->model('dept');
                $added = $dept->add($name,$code,$description);
                if($added){
                    $data = [
                        'message' => 'department added'
                    ];
                    $this->view('admin/departments',$data);
                }else{
                        $data = [
                        'message' => 'department not added'
                    ];
                    $this->view('admin/departments',$data);
                }
            }
        }
    }
    public function delete_dept($id){
        $this->kick();
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $delete = "DELETE from departments WHERE dept_id =" . $id;
        $deleted = mysqli_query($con,$delete);
        if($deleted){
            $this->view("admin/departments");
        }else{
            die("error");
        }
    }
    // methods for facility 
    public function add_facility(){
        $this->kick();
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $path = "img/facility/";
        //img name with directory
        $img1 = $path . basename($_FILES["one"]["name"]);
        $img2 = $path . basename($_FILES["two"]["name"]);
        $img3 = $path . basename($_FILES["three"]["name"]);
        $img4 = $path . basename($_FILES["four"]["name"]);
        $img5 = $path . basename($_FILES["five"]["name"]);
        //upload done or not 
        $uploadOk1 = 1;
        $uploadOk2 = 1;
        $uploadOk3 = 1;
        $uploadOk4 = 1;
        $uploadOk5 = 1;
        //images types
        $type1 = strtolower(pathinfo($img1,PATHINFO_EXTENSION));
        $type2 = strtolower(pathinfo($img2,PATHINFO_EXTENSION));
        $type3 = strtolower(pathinfo($img3,PATHINFO_EXTENSION));
        $type4 = strtolower(pathinfo($img4,PATHINFO_EXTENSION));
        $type5 = strtolower(pathinfo($img5,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check1 = getimagesize($_FILES["one"]["tmp_name"]);
            $check2 = getimagesize($_FILES["two"]["tmp_name"]);
            $check3 = getimagesize($_FILES["three"]["tmp_name"]);
            $check4 = getimagesize($_FILES["four"]["tmp_name"]);
            $check5 = getimagesize($_FILES["five"]["tmp_name"]);
            if($check1 !== false) {
                echo "<br/>File is an image - " . $check1["mime"] . ".";
                $uploadOk1 = 1;
            } else {
                echo "<br/>File is not an image.";
                $uploadOk1 = 0;
            }
            if($check2 !== false) {
                echo "<br/>File is an image - " . $check2["mime"] . ".";
                $uploadOk2 = 1;
            } else {
                echo "<br/>File is not an image.";
                $uploadOk2 = 0;
            }
            if($check3 !== false) {
                echo "<br/>File is an image - " . $check3["mime"] . ".";
                $uploadOk3 = 1;
            } else {
                echo "<br/>File is not an image.";
                $uploadOk3 = 0;
            }
            if($check4 !== false) {
                echo "<br/>File is an image - " . $check4["mime"] . ".";
                $uploadOk4 = 1;
            } else {
                echo "<br/>File is not an image.";
                $uploadOk4 = 0;
            }
            if($check5 !== false) {
                echo "<br/>File is an image - " . $check5["mime"] . ".";
                $uploadOk5 = 1;
            } else {
                echo "<br/>File is not an image.";
                $uploadOk5 = 0;
            }
            if (file_exists($img1)) {
                echo "<br/>Sorry, file already exists.";
                $uploadOk1 = 0;
            }
            if (file_exists($img2)) {
                echo "<br/>Sorry, file already exists.";
                $uploadOk2 = 0;
            }
            if (file_exists($img3)) {
                echo "<br/>Sorry, file already exists.";
                $uploadOk3 = 0;
            }
            if (file_exists($img4)) {
                echo "<br/>Sorry, file already exists.";
                $uploadOk4 = 0;
            }
            if (file_exists($img5)) {
                echo "<br/>Sorry, file already exists.";
                $uploadOk5 = 0;
            }
            if ($_FILES["one"]["size"] > 3145728) {
                echo "<br/>Sorry, your file is too large.";
                $uploadOk1 = 0;
            }
            if ($_FILES["two"]["size"] > 3145728) {
                echo "<br/>Sorry, your file is too large.";
                $uploadOk2 = 0;
            }
            if ($_FILES["three"]["size"] > 3145728) {
                echo "<br/>Sorry, your file is too large.";
                $uploadOk3 = 0;
            }
            if ($_FILES["four"]["size"] > 3145728) {
                echo "<br/>Sorry, your file is too large.";
                $uploadOk4 = 0;
            }
            if ($_FILES["five"]["size"] > 3145728) {
                echo "<br/>Sorry, your file is too large.";
                $uploadOk5 = 0;
            }

            if($type1 != "jpg" && $type1 != "png" && $type1 != "jpeg"
            && $type1 != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk1 = 0;
            }
            if($type2 != "jpg" && $type2 != "png" && $type2 != "jpeg"
            && $type2 != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk2 = 0;
            }
            if($type3 != "jpg" && $type3 != "png" && $type3 != "jpeg"
            && $type3 != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk3 = 0;
            }
            if($type4 != "jpg" && $type4 != "png" && $type4 != "jpeg"
            && $type4 != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk4 = 0;
            }
            if($type5 != "jpg" && $type5 != "png" && $type5 != "jpeg"
            && $type5 != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk5 = 0;
            }

            if ($uploadOk1 == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["one"]["tmp_name"], $img1)) {
                    echo "The file ". basename( $_FILES["one"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            if ($uploadOk2 == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["two"]["tmp_name"], $img2)) {
                    echo "The file ". basename( $_FILES["two"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            if ($uploadOk3 == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["three"]["tmp_name"], $img3)) {
                    echo "The file ". basename( $_FILES["three"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            if ($uploadOk4 == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["four"]["tmp_name"], $img4)) {
                    echo "The file ". basename( $_FILES["four"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            if ($uploadOk5 == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["five"]["tmp_name"], $img5)) {
                    echo "The file ". basename( $_FILES["five"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

        }
    }
    public function delete_facility($id){
        $this->kick();
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $getphoto = "SELECT img1,img2,img3,img4,img5 FROM facilities WHERE id ='$id';";
        $photos = mysqli_query($con,$getphoto);
        $delete = "DELETE from facilities WHERE id =" . $id;
        $deleted = mysqli_query($con,$delete);
        if($deleted){
            while ($photo = mysqli_fetch_assoc($photos)) {
                if($photo['img1'] != null || !empty($photo['img1'])){
                    $deleted = unlink(URLROOT."/public/img/facility/".$photo['img1']);
                    if(!$deleted){
                        break;
                    }
                }
                if($photo['img2'] != null || !empty($photo['img2'])){
                    $deleted = unlink(URLROOT."/public/img/facility/".$photo['img2']);
                    if(!$deleted){
                        break;
                    }
                }
                if($photo['img3'] != null || !empty($photo['img3'])){
                    $deleted = unlink(URLROOT."/public/img/facility/".$photo['img3']);
                    if(!$deleted){
                        break;
                    }
                }
                if($photo['img4'] != null || !empty($photo['img4'])){
                    $deleted = unlink(URLROOT."/public/img/facility/".$photo['img4']);
                    if(!$deleted){
                        break;
                    }
                }
                if($photo['img5'] != null || !empty($photo['img5'])){
                    $deleted = unlink(URLROOT."/public/img/facility/".$photo['img5']);
                    if(!$deleted){
                        break;
                    }
                }
            }
            $this->view("admin/facility");
        }else{
            die("error");
        }
    }
}