<?php

class Register{
    public function signup_data($user,$pass,$name,$pin){
        if(!empty($user)){
            $register_data = array();
            $register_data['username'] = $user;
            if(!empty($pass)){
                $register_data['password'] = $pass;
                if(!empty($name)){
                    $register_data['name'] = $name;
                    if(!empty($pin)){
                        $register_data['pin'] = $pin;
                        return $register_data;
                    }
                }
            }
        }
        else{
            return false;
        }
    }
    public function signup($con,$data){
        $name = $data['name'];
        $user = $data['username'];
        $password = $data['password'];
        $pin = $data['pin'];
        $dept_id = 12;
        $sql = "INSERT INTO user_info (name, username, dept_id) VALUES ('$name','$user',$dept_id)";
        $result = mysqli_query($con,$sql);
        if($result){
            $sql = "insert into user_pass (password) values ('$password')";
            $result = mysqli_query($con,$sql);
            if($result){
                $sql = "insert into user_pin (pin) values ('$pin')";
                $result = mysqli_query($con,$sql);              
                if($result){
                    return true;
                }
            }
        }
       
    }

}