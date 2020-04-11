<?php

class Login{
    public function signin($con,$user,$pass){
        $sql = "SELECT username,password FROM users  WHERE username = '$user' AND password = '$pass'";
        $result = mysqli_query($con,$sql);
        $res = mysqli_fetch_assoc($result);
        return $result;
    }
    public function signin_with_pin($con,$user,$pin){
        $sql = "SELECT p.user_id,p.pin FROM user_pin p,user_info u WHERE u.username = '$user' AND u.user_id = p.user_id AND p.pin = '$pin'";
        $result = mysqli_query($con,$sql);
        

        if(mysqli_num_rows($result) > 0){
            session_start();
            $_SESSION['active'] = $user; 
            return true;
        } else{
            return false;
        }
    }
}