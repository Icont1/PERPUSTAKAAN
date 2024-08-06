<?php
class database {
    public $server="localhost";
    public $user="root";
    public $pass="";
    public $db="db_perpustakaan";
    public $table;
    public $conn;
    public $data=[];
    public $field;
    public $db_value;
    public function __construct(){

        $this->conn = mysqli_connect($this->server,$this->user,$this->pass,$this->db);
      
    }
    public function getdata(){
        $query="SELECT*FROM $this->table";
        $result = mysqli_query($this->conn,$query);
        $rows=[];
        while ( $row=mysqli_fetch_assoc($result)){
            $rows[]= $row;
        }
        return $rows;
    }
    public function save(){
        $bd=count($this->data);
            if ($bd===2) {
             $this->db_value= "'".$this->data[0]."','".$this->data[1]."'";
        }elseif ($bd===3) {
            $this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."'";
        }elseif ($bd===4) {
            $this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."'";
        }elseif ($bd===5) {
            $this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."'";
        }elseif ($bd===6) {
            $this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."','".$this->data[5]."'";
        }elseif ($bd===7) {
            $this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."','".$this->data[5]."','".$this->data[6]."'";
        }
            echo $this->db_value;
            $query=	"INSERT INTO $this->table VALUES($this->db_value)";
            echo $query;
        mysqli_query($this->conn,$query);
        return mysqli_affected_rows($this->conn);
    }


public function delete($Nis){
   var_dump( mysqli_query($this->conn, "DELETE FROM $this->table WHERE ".$this->field[0]."='$Nis'"));
    return mysqli_affected_rows($this->conn);
}
public function getdatauser($username){
    $query="SELECT*FROM ".$this->table." WHERE ".$this->field[1]."='$username'";
    $result =mysqli_query($this->conn,$query);
    $rows= mysqli_fetch_assoc($result);
    return $rows;
}
public function getdataSingel($id){
    $query="SELECT*FROM ".$this->table." WHERE ".$this->field[0]."='$id'";
    $result =mysqli_query($this->conn,$query);
    $rows= mysqli_fetch_assoc($result);
    return $rows;
}
public function update (){
    $bd=count($this->data);
    if ($bd===2) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."'";
}elseif ($bd===3) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."'";
}elseif ($bd===4) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."',".$this->field[3]."='".$this->data[3]."'";
}elseif ($bd===5) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."',".$this->field[3]."='".$this->data[3]."',".$this->field[4]."='".$this->data[4]."'";
}elseif ($bd===6) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."',".$this->field[3]."='".$this->data[3]."',".$this->field[4]."='".$this->data[4]."',".$this->field[5]."='".$this->data[5]."'";
}elseif ($bd===7) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."',".$this->field[3]."='".$this->data[3]."',".$this->field[4]."='".$this->data[4]."',".$this->field[5]."='".$this->data[5]."',".$this->field[6]."='".$this->data[6]."'";
}
$query=	"UPDATE $this->table set ".$this->db_value." WHERE ".$this->field[0]."='".$this->data[0]."'";

mysqli_query($this->conn,$query);
return mysqli_affected_rows($this->conn);
}

public function cari($keyword){

    $bd=count($this->field);
    if ($bd===2) {
    $this->db_value=$this->field[0]." like '%$keyword%' OR ".$this->field[1]." like '%$keyword%'";
}elseif ($bd===3) {
    $this->db_value=$this->field[0]." like '%$keyword%' OR ".$this->field[1]." like '%$keyword%' OR ".$this->field[2]." like '%$keyword%'";
}elseif ($bd===4) {
    $this->db_value=$this->field[0]." like '%$keyword%' OR ".$this->field[1]." like '%$keyword%' OR ".$this->field[2]." like '%$keyword%' OR ".$this->field[3]." like '%$keyword%'";
}elseif ($bd===5) {
    $this->db_value=$this->field[0]." like '%$keyword%' OR ".$this->field[1]." like '%$keyword%' OR ".$this->field[2]." like '%$keyword%' OR ".$this->field[3]." like '%$keyword%' OR ".$this->field[4]." like '%$keyword%'";
}elseif ($bd===6) {
    $this->db_value=$this->field[0]." like '%$keyword%' OR ".$this->field[1]." like '%$keyword%' OR ".$this->field[2]." like '%$keyword%' OR ".$this->field[3]." like '%$keyword%' OR ".$this->field[4]." like '%$keyword%' OR ".$this->field[5]." like '%$keyword%'";
}elseif ($bd===7) {
    $this->db_value=$this->field[0]." like '%$keyword%' OR ".$this->field[1]." like '%$keyword%' OR ".$this->field[2]." like '%$keyword%' OR ".$this->field[3]." like '%$keyword%' OR ".$this->field[4]." like '%$keyword%' OR ".$this->field[5]." like '%$keyword%' OR ".$this->field[6]." like '%$keyword%'";
}
    $query ="SELECT*FROM $this->table WHERE ".$this->db_value;
    $result =mysqli_query($this->conn,$query);
    $rows=[];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] =$row;
    }
    return $rows;
}
}

?>