<?php
class User 
{

    public $error = '';
    public function login($username,$password){
        
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        session_start();
        // $hash = password_hash(1234,PASSWORD_DEFAULT);
        // $sql= "insert into users (username,password) values ('$username','$hash')";
        // mysqli_query($con,$sql);
        if($username == 'admin'){
            $sql = mysqli_query($con,'SELECT password FROM admin WHERE username = "'.$username.'"');
            $arr = mysqli_fetch_assoc($sql);
            $pass = $arr['password'];
            $row = password_verify($password,$pass);
            if($row){
                $_SESSION['session_state'] = 'active';
                $_SESSION['username']= $username;
                return $row;
            }
            else{
                $error = 'Incorrect password ';
                return $row;
            }
        }else{

            
            $sql = mysqli_query($con,"SELECT password FROM users WHERE username = '$username'");
            $arr = mysqli_fetch_assoc($sql);
            $pass = $arr['password'];
            $row = password_verify($password,$pass);
            if($row){
                $_SESSION['session_state'] = 'active';
                $_SESSION['username']= $username;
                return $row;
            }
            else{
                $error = 'Incorrect password ';
                return $row;
            }
        }
    }
    public function register($name,$uname,$pass,$dept){
        // this function will register the user 
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $name = mysqli_real_escape_string($con,$name);
        $uname = mysqli_real_escape_string($con,$uname);
        $pass = mysqli_real_escape_string($con,$pass);
        $dept = mysqli_real_escape_string($con,$dept);
        $qry = "INSERT INTO users(name,username,dept_id,password) VALUES('$name','$uname','$dept','$pass');";
        mysqli_query($con,$qry);
    }
    public function get_user($uname){
        // this function checks for the user 
        // and if the user exists then it returns the user data without password
        // and if user doesn't exist then it returns false
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $qry = "SELECT user_id,username,name,dept_id FROM users WHERE username='$uname'";
        $result = mysqli_query($con,$qry);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_assoc($result);
        }else{
            return false;
        }
    }
    public function get_user_with_password($uname){
        // this function checks for the user 
        // and if the user exists then it returns the user data with password
        // and if user doesn't exist then it returns false
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $qry = "SELECT * FROM users WHERE username='$uname'";
        $result = mysqli_query($con,$qry);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_assoc($result);
        }else{
            return false;
        }
    }
}
