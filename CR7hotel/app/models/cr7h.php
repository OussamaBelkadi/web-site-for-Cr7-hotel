<?php
    class product{
        public function add($data){
            $stmt = DB::connect()->prepare("INSERT INTO chambre (`img`, `name`, `type`, `descrption`, `suitetype`, `prix`, `reserver`) VALUES (:img , :name, :type, :desc, :stype, :prix, :reserve)");
            $file=$data['img']['full_path'];
            $tmp_img=$data['img']['tmp_name'];
            $stmt->bindParam(':img', $data['img']['name']);
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':type', $data['type']);
            $stmt->bindParam(':desc', $data['des']);
            $stmt->bindParam(':stype', $data['stype']);
            $stmt->bindParam(':prix', $data['prix']);
            $stmt->bindParam(':reserve', $data['reserve']);
            $stmt->execute();
            move_uploaded_file($tmp_img, $file);
        } 
        public function single(){
            $stmt=DB::connect()->prepare("SELECT * From chambre WHERE type='Singel';");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function suite(){
            $stmt=DB::connect()->prepare("SELECT * From chambre WHERE type='Suite';");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function double(){
            $stmt=DB::connect()->prepare("SELECT * From chambre WHERE type='Double';");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function affele(){
            $stmt = DB::connect()->prepare("SELECT * FROM chambre;");
           $stmt->execute();
           return $stmt->fetchAll();
        }

        public function select(){
            $stmt = DB::connect()->prepare("SELECT * FROM chambre");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function del($id){
            $stmt= DB::connect()->prepare("DELETE FROM chambre WHERE id = $id");
            $stmt->execute();
        }
        public function getelement($id){
            $stmt=DB::connect()->prepare("SELECT * FROM chambre WHERE id = $id");
            $stmt->execute();
            return $stmt->fetch();
        }
        public function change($data,$id){
            $file=$data['img']['full_path'];
            $tmp_name=$data['img']['tmp_name'];
            $indice= $id;
            $stmt=DB::connect()->prepare("UPDATE chambre SET `img`= :img ,`name`=:name ,`type`=:type ,`descrption`=:des ,`suitetype`=:stype, prix=:prix WHERE id = $indice");
            $stmt->bindParam(':img',$data['img']['name']);
            $stmt->bindParam(':name',$data['name']);
            $stmt->bindParam(':type',$data['type']);
            $stmt->bindParam(':des', $data['des']);
            $stmt->bindParam(':stype',$data['stype']);
            $stmt->bindParam(':prix',$data['prix']);
            $stmt->execute();
            move_uploaded_file($tmp_name, $file);
        }
       
    }
?>