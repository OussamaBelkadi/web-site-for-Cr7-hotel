<?php 
    class reserve{
        public function checkroom($id){
            $stmt=DB::connect()->query("Select reserver From chambre where id=$id");
            $stmt->execute();
            return $stmt->fetchColumn();
        }
        public function chambrer($d){
            $stmt= DB::connect()->query("UPDATE chambre SET `reserver`= 'reserver' where id=$d");
            // $stmt->bindParam(':id', $d);
            $stmt->execute();
        }
        public function resch($data){
            $stmt = DB::connect()->prepare("INSERT INTO `reservation` (`dated`, `datef`,`idchambre`, `iduser`) VALUES (:db,:df, :idc, :idu)");
            $stmt->bindParam(':db',$data['dated']);
            $stmt->bindParam(':df',$data['datef']);
            $stmt->bindParam(':idc', $data['idch']);
            $stmt->bindParam(':idu', $data['iduser']);
            $stmt->execute();
        }
        public function clientDash(){
            $stmt = DB::connect()->query("Select reservation.dated, reservation.datef, chambre.name, chambre.type From reservation 
            inner join chambre on chambre.id=reservation.idchambre 
            inner join user on reservation.iduser=user.id");
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
?>