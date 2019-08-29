<?php

class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $created;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
 
    // create product
    function create(){
    
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    firstName=:firstName, 
                    lastName=:lastName, 
                    email=:email, 
                    password=:password, 
                    created=:created";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->firstName=htmlspecialchars(strip_tags($this->firstName));
        $this->lastName=htmlspecialchars(strip_tags($this->lastName));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":firstName", $this->firstName);
        $stmt->bindParam(":lastName", $this->lastName);
        $stmt->bindParam(":email", $this->email);
        // hash the password before saving to database
        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);
        $stmt->bindParam(":created", $this->created);
    
        // execute query
        if($stmt->execute()){
            return true;
        }
    
        return false;
        
    }

    // check if given email exist in the database
    function emailExists(){
    
        // query to check if email exists
        $query = "SELECT id, firstName, lastName, password
                FROM " . $this->table_name . "
                WHERE email = ?
                LIMIT 0,1";
    
        // prepare the query
        $stmt = $this->conn->prepare( $query );
    
        // sanitize
        $this->email=htmlspecialchars(strip_tags($this->email));
    
        // bind given email value
        $stmt->bindParam(1, $this->email);
    
        // execute the query
        $stmt->execute();
    
        // get number of rows
        $num = $stmt->rowCount();
    
        // if email exists, assign values to object properties for easy access and use for php sessions
        if($num>0){
    
            // get record details / values
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // assign values to object properties
            $this->id = $row['id'];
            $this->firstName = $row['firstName'];
            $this->lastName = $row['lastName'];
            $this->password = $row['password'];
    
            // return true because email exists in the database
            return true;
        }
    
        // return false if email does not exist in the database
        return false;
    }
}