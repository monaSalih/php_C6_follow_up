<?php
class Student{
    private $table_name;
    private $conn;

    function __construct($conn_table){
        $this->table_name="students";
        $this->conn=$conn_table;
    }

    public function read_data(){
        $query= 'SELECT * FROM ' . $this->table_name;
        $stmt=$this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create_new_std($data){ 
    $query='INSERT INTO '.$this->table_name.'(`first_name`, `last_name`, `email`, `date_of_birth`, `gender`, `major`, `enrollment_year`) VALUES (:first_name,:last_name,:email,:dob,:std_gen,:std_maj,:std_enr)';
    $statment=$this->conn->prepare($query);
    
    $data_res= $statment->execute([
        'first_name'=>$data['first_name'],
        'last_name'=>$data['last_name'],
        'email'=>$data['email'],
        'dob'=>$data['dob'],
        'std_gen'=>$data['std_gen'],
        'std_maj'=>$data['std_maj'],
        'std_enr'=>$data['std_enr'],
    ]);
    return $data_res;
    }

    public function delete_item($id){
          $query='DELETE FROM '.$this->table_name.' WHERE `student_id`=:std_id';
         $statment=$this->conn->prepare($query);
         $statment->bindParam(':std_id',$id);
         $statment->execute();
    }


    public function id_read_data($id){
        $query = 'SELECT * FROM ' . $this->table_name . ' WHERE `student_id`=:id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}



?>