<?php

class Dept {
    public function add($name,$code,$description = null){
        if($description == null){
            $query = "INSERT INTO departments(name,code) VALUES('$name','$code');";
        }else{
            $query = "INSERT INTO departments(name,code,description) VALUES('$name','$code','$description');";
        }
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $result = mysqli_query($con,$query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}