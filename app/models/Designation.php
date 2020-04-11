<?php

class Designation {
    public function add($name){
        $query = "INSERT INTO designation(designation_id,name) VALUES('','$name');";
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $result = mysqli_query($con,$query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}