<?php
require_once (MODELS."/user.php");
    class UserController{
        public function aff(){
            View::load('Login');
        }
        public function auth(){
            if (isset($_POST['submit'])){
                $data = array('email' => $_POST["email"] ,
                'password'=>$_POST["password"]); 
                $result = new product();
                $res=$result->add($data);
            
                if( $res["email"] == $_POST['email'] && $res["password"] == $_POST['password']){
                    print_r($res);
                   $_SESSION['login']=true; 
                   $_SESSION['id']=$res["id"];
                   $_SESSION['email']=$res["email"];
                   
                //    header('location: '.BURL.'Product/getAll');
                }else{
                    // Session::set('error','Email ou mot est incorrect ');
                    View::load('Login');
                }
            }
            else{
                echo"Error";
            }
        }
    }

?>
