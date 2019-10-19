<?php
class ngo{
    public function __construct($db){
        $this->conn = $db;
    }

//for HTTP verb GET ,select all ngos records
function get_ngos(){
 
    // select ngo info query
    $query = "SELECT * FROM ngo ORDER BY id ASC";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}

//for HTTP verb GET ,select single ngo record by id
function get_single_ngo(){
    $id=$this->id;
 
    // select ngo info query
    $query = "SELECT * FROM ngo where id=$id";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
    
}

}