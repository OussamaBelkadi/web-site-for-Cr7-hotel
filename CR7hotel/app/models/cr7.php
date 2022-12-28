<?php
    class user
    {
        public function testuser($data){
            $stmt = DB::connect()->prepare("SELECT id,email,password FROM `user` WHERE email=:email;");
            $stmt->bindParam(":email",$data['email']);
            $stmt->execute();
            return $stmt->fetchObject();
        }
        public function testadmin($data){
            $stmt = DB::connect()->prepare("select username,password from admin WHERE username = :username AND password = 
            :password;");
            $stmt->bindParam(":username", $data["username"]);
            $stmt->bindParam(":password", $data["password"]);
            $stmt->execute();
            return $stmt->fetch();
        }
        public function signup($data){
            $stmt = DB::connect()->prepare("insert into user (`nom`,`username`, `email`,`num`, `password`, `repassword`) VALUES (:name,:username, :email, :num, :password, :repass);");
            $stmt->bindParam(':name',$data["name"]);
            $stmt->bindParam(':username',$data["username"]);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':num', $data['num']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->bindParam(':repass', $data['repassword']);
            $stmt->execute();
        }
    }
?>