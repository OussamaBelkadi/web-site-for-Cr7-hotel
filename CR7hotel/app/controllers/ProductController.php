<?php

    require_once(MODELS.'/cr7.php');
    require_once(MODELS.'/cr7h.php');
    require_once(MODELS.'cr7R.php');
    class ProductController
    {
        public function home(){
            session_start();
            View::load('home');
        }
       
        public function event(){
            session_start();
            View::load('evenent');
        }
        public function getall()
        {
            View::load("signup");
        }
        //--- Page For Login Admin
        public function getform()
        {
            View::load("login");
            
        }
        //---Logout 
        public function logout(){
            session_destroy();
            View::load("login");
        }
        
        public function user(){
            if(isset($_POST['login'])){
                if(!empty($_POST["username"] && $_POST["password"])){
                    $data = array("username"=>$_POST["username"],
                                    "password"=>$_POST["password"]); 
                    $user = new user();
                            
                        if($user->testadmin($data)) {
                            session_start();
                            $_SESSION["admin"] = $_POST['username'];
                            header('location:'.BURL.'product/dashbord');
                        }else {
                                header('location:'.BURL.'product/getform');
                        }
                                
                            //     // View::load("login");
                            // }
                }
                else{
                    echo "input is failed";
                }
            }

        }
        //-----Page Signup << User >>
        public function for(){
            View::load("signup");
        }
        //----Page Login << User >>
        public function logins(){   
            View::load("logins");
        }
        //---Submit Login 
        public function loginuser(){
            if(isset($_POST['submit'])){
                if (empty($_POST['email'] && $_POST['password'])) {
                    $data["vide"]='vide';
                    View::load('logins',$data);
                }else {
                    
                    $data= array('email'=>$_POST['email']);
                    $chambre = new user();  
                    $test=$chambre->testuser($data);
                    $verify=password_verify($_POST['password'],$test->password);
                    if($verify){
                        session_start();
                        $_SESSION['email']=$test->email;
                        $_SESSION['id']=$test->id;
                        header('location:'.BURL.'product/chambre');
                    }
                    elseif(!$verify){
                        $data["data"]='error';
                        View::load('logins',$data);
                    }
                }
            }
        }
        //---Operation Signup
        public function signup(){
            if(isset($_POST['submit'])){
                $password=$_POST['motpass'];
                $repassword=$_POST['remotpass'];
                if ($password===$repassword) {
                    $pass= password_hash($password,PASSWORD_DEFAULT);
                    $repass = password_hash($repassword, PASSWORD_DEFAULT);
                    $data = array('name'=>$_POST['name'] ,
                    'username'=>$_POST['username'],
                    'email'=>$_POST['email'],
                    'num'=>$_POST['num'],
                    'password'=>$pass,
                    'repassword'=>$repass);
                    $test = new user();
                    $test->signup($data);
                    View::load("logins");
                }else{
                View::load('signup');
                }
            }
        }
        public function restaurant(){
            session_start();
            View::load('Restaurant');
        }
        
        //---Chambre Where type=lit single
        public function chambretype(){
    
            if(isset($_POST['submit']) && $_POST['option']=='Single'){
                session_start();
                $chambre = new product;
                $data['chambre']=$chambre->single();
                View::load('chambre', $data);
            }elseif(isset($_POST['submit']) && $_POST['option']=='Suite'){
                session_start();
                $chambre = new product;
                $data['chambre']=$chambre->suite();
                View::load('chambre', $data);
            }elseif(isset($_POST['submit']) && $_POST['option']=='Double'){
                session_start();
                $chambre = new product;
                $data['chambre']=$chambre->double();
                View::load('chambre', $data);
            }elseif (isset($_POST['submit']) && $_POST='All'){
                session_start();
                $chambre = new product;
                $data['chambre']=$chambre->affele();
                View::load('chambre', $data);
            }
            // if(isset($_POST['submit']) && $_POST['option']='double Single'){
            //     $chambre = new product;
            //     $data['chambre']=$chambre->affele();
            //     session_start();
            //     View::load('chambre', $data);
            // }
        }
        //----Chambre not reserve yet
        public function chambrenotre(){
            $chambre = new product;
            $data['chambre']=$chambre->affele();
            session_start();
            View::load('chambre', $data);
        }
        public function chambre(){
            session_start();
            $chambre = new product;
            $data['chambre']=$chambre->select();
            View::load('chambre',$data);
        }
        public function sort(){
            session_destroy();
            $chambre = new product;
            $data['chambre']=$chambre->select();
            View::load('chambre',$data);
        }
        public function addproduct(){
            View::load("add");
        }
        public function nvadd(){
            $data= array('img'=>$_FILES['files'],
            'name'=>$_POST['name'],
            'type'=>$_POST['type'],
            'des'=>$_POST['des'],
            'stype'=>$_POST['suitetype']
            ,'prix'=>$_POST['prix']
            ,'reserve'=>$_POST['reserve']);
            $chambre = new product;
            $chambre->add($data);
            header('location:'.BURL.'product/dashbord');
        }
        //---DashBord Admin
        public function dashbord(){
            session_start();
            $_SESSION["admin"];
            $chambre  = new product();
            $rol['product'] = $chambre->select();
            View::load("admin", $rol);
        }
        //---Delet Room
        public function delet($id){
            $chambre = new product;
            $chambre->del($id);
            header('location:'.BURL."Product/dashbord");
        }
        //--UDATE Room
        public function update($id){
            $chambre = new product();
            $ele['element']=$chambre->getelement($id);
            View::load('update',$ele);
       }

       public function upload($id){
            $data= array('img'=>$_FILES['files'],
            'name'=>$_POST['name'],
            'type'=>$_POST['type'],
            'stype'=>$_POST['suitetype'],
            'des'=>$_POST['des'],
            'prix'=>$_POST['prix']);
        
            $element = new product();
            $element->change($data, $id);
            header('location:'.BURL.'product/dashbord');
       }

       //-----dash borde for client
       public function clientD(){
           
       }
       //----Page Reserve whith IdRoom
       public function reservation($id){
        $cher['id']=$id;
        $reserve = new reserve;
        $result=$reserve->checkroom($id);
        if ($result == 'not reserve') {
            session_start();
            View::load("reservation",$cher);
        }elseif($result == 'reserver') {
            
            header('location:'.BURL.'product/chambrenotre'); 
        }
        
    }
    //----display product for booking
    public function book(){
        $chambre=new reserve;
        $element['product']=$chambre->clientDash();
        View::load("book",$element);      
    }
    
    //-----Operation Tcheck in 
    public function reservech(){
        $data= array('dated'=>date('y-m-d',strtotime($_POST['dated'])),
        'datef'=>date('y-m-d',strtotime($_POST['datef'])),
        'idch'=>$_POST['idc'],
        'iduser'=>$_POST['idu']
         );
        //  if(empty($_POST['dated'] || $_POST['datef'])) {
            $d=$_POST['idc'];
            $reserve = new reserve;
            $reserve->chambrer($d);
            $reserve->resch($data);
           header('location:'.BURL.'product/book');
         
    }
      
    } 
?>