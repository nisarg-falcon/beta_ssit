<?php 
class Auth extends Controller{
    public function index($data = ''){
        if(empty($data)){
            $this->view('php/auth/login');
        }
        else{
            $this->view('php/auth/login',$data);
        }
    }
    public function signup(){
        $this->view('php/auth/register');
    }
    public function register(){
        $auth = $this->model('connection');
        $connect_var = $auth->connect("ssit_users");
        $post_user = $_POST['username'];
        $post_pass = $_POST['password'];
        $post_name  = $_POST['name'];
        $post_pin= $_POST['pin'];
        $register = $this->model('register');
        $register_data_result = $register->signup_data($post_user,$post_pass,$post_name,$post_pin);
        if(!empty($register_data_result)){
            $register_result = $register->signup($connect_var,$register_data_result);
            if($register_result){
                $data = [
                    "register" => "registration successful please login."
                ];
                $this->index($data);
            }
        }
    }

    public function panel(){
        $this->view('php/auth/panel');
    }
    public function login(){
        $auth = $this->model('connection');
        $connect_var = $auth->connect("ssit_users");
        $post_user = $_POST['username'];
        $post_pass = $_POST['pin'];
        
        $login = $this->model('login');
        $login_result = $login->signin_with_pin($connect_var,$post_user,$post_pass);
        if($login_result){
            $data = [
                "login" => $login_result
            ];
            $this->view('php/auth/panel',$data);
        }
        else{

            if(!isset($_SESSION['counter'])){

                session_start();
                $_SESSION['counter'] = 3;
                $_SESSION['counter']= $_SESSION['counter']-1;
                $data= [
                    'counter' => $_SESSION['counter'],
                    'message' => 'you have '.$_SESSION['counter'].'tries remaining 1'
                ];
                header('Location: '.URLROOT.'/auth/index/'.$_SESSION['counter']);
            
            }
            elseif($_SESSION['counter'] == 0){

                    unset($_SESSION['counter']);
                    die("error");    
            
                }
            else{

                $_SESSION['counter'] = $_SESSION['counter']-1;
                $data= [
                    'counter' => $_SESSION['counter'],
                    'message' => 'you have '.$_SESSION['counter'].'tries remaining 2'
                ];
                header('Location: '.URLROOT.'/auth/index/'.$_SESSION['counter']);   
            
            }     
        }    
    }

}