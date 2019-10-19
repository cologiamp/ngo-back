<?php
class donation{
    public function __construct($db){
        $this->conn = $db;
    }

//for HTTP verb GET ,select all donations records
function get_donations(){
 
    // select donations info query
    //$query = "SELECT * FROM donation ORDER BY id ASC ";
    $query = "SELECT donation.*, ngo.* FROM donation INNER JOIN ngo ON donation.ngoId = ngo.id ORDER BY donation.id ASC ";

    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}

//for HTTP verb GET ,select single donation record by id
function get_single_donation(){
    $id=$this->id;
 
    // select donation info query
    $query = "SELECT * FROM donation where id=$id";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
    
}
    



// for HTTP verb POST ,create new donation 
function create_donation(){
 
    // query to insert record
    $query = "INSERT INTO donation SET ngoId=:ngoId, amount=:amount";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    
    // bind values
    //$stmt->bindParam(":id", $this->id);
    $stmt->bindParam(":ngoId", $this->ngoId);
    $stmt->bindParam(":amount", $this->amount);
    // execute query
    if($stmt->execute()){
        return true;
    }else{
        return $stmt->execute();
    }
 
    return false;
     
}

    
}