<?php

class Leave{
 
    // database connection and table name
    private $conn;
    private $table_name = "leave";
 
    // object properties
    public $id;
    public $reason;
    public $startDate;
    public $endDate;
    public $userId;
    public $username;
    public $created;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){
    
        // select all query
        $query = "SELECT
                    c.firstName as username, p.id, p.reason, p.startDate,p.endDate, p.userId, p.created
                FROM
                    " . $this->table_name . " p
                    LEFT JOIN
                        users c
                            ON p.userId = c.id
                ORDER BY
                    p.created DESC";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // create leave
    function create(){
        // query to insert record

        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    reason=:reason, 
                    startDate=:startDate, 
                    endDate=:endDate, 
                    userId=:userId, 
                    created=:created";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->reason=htmlspecialchars(strip_tags($this->reason));
        $this->startDate=htmlspecialchars(strip_tags($this->startDate));
        $this->endDate=htmlspecialchars(strip_tags($this->endDate));
        $this->userId=htmlspecialchars(strip_tags($this->userId));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":reason", $this->reason);
        $stmt->bindParam(":startDate", $this->startDate);
        $stmt->bindParam(":endDate", $this->endDate);
        $stmt->bindParam(":userId", $this->userId);
        $stmt->bindParam(":created", $this->created);
    
        // execute query
        if($stmt->execute()){
            
            return  json_encode(array("message" => "yayy."));
        }
        return false;
    }

    // used when filling up the update product form
    function readOne(){
    
        // query to read single record
        $query = "SELECT
                    c.firstName as username, p.id, p.reason, p.startDate,p.endDate, p.userId, p.created
                FROM
                    " . $this->table_name . " p
                    LEFT JOIN
                        users c
                            ON p.userId = c.id
                WHERE
                    p.id = ?
                LIMIT
                    0,1";
    
        // prepare query statement
        $stmt = $this->conn->prepare( $query );
    
        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);
    
        // execute query
        $stmt->execute();
    
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // set values to object properties
        $this->reason = $row['reason'];
        $this->startDate = $row['startDate'];
        $this->endDate = $row['endDate'];
        $this->userId = $row['userId'];
        $this->username = $row['username'];
    }

    // update the shift
    function update(){
    
        // update query
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    reason=:reason, startDate=:startDate, endDate=:endDate, userId=:userId
                WHERE
                    id = :id";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->reason=htmlspecialchars(strip_tags($this->reason));
        $this->startDate=htmlspecialchars(strip_tags($this->startDate));
        $this->endDate=htmlspecialchars(strip_tags($this->endDate));
        $this->userId=htmlspecialchars(strip_tags($this->userId));
        $this->id=htmlspecialchars(strip_tags($this->id));
    
        // bind new values
        $stmt->bindParam(":reason", $this->reason);
        $stmt->bindParam(":startDate", $this->startDate);
        $stmt->bindParam(":endDate", $this->endDate);
        $stmt->bindParam(":userId", $this->userId);
        $stmt->bindParam(':id', $this->id);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }

    // delete the product
    function delete(){
    
        // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));
    
        // bind id of record to delete
        $stmt->bindParam(1, $this->id);
    
        // execute query
        if($stmt->execute()){
            return true;
        }
    
        return false;
        
    }

    // search products
    function search($keywords){
    
        // select all query
        $query = "SELECT
                    c.firstName as username, p.id, p.reason, p.startDate,p.endDate, p.userId, p.created
                FROM
                    " . $this->table_name . " p
                    LEFT JOIN
                        users c
                            ON p.userId = c.id
                WHERE
                    p.reason LIKE ? OR p.startDate LIKE ? OR p.endDate LIKE ?  OR c.firstName LIKE ?
                ORDER BY
                    p.created DESC";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $keywords=htmlspecialchars(strip_tags($keywords));
        $keywords = "%{$keywords}%";
    
        // bind
        $stmt->bindParam(1, $keywords);
        $stmt->bindParam(2, $keywords);
        $stmt->bindParam(3, $keywords);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // read products with pagination
    public function readPaging($from_record_num, $records_per_page){
    
        // select query
        $query = "SELECT
                    c.firstName as username, p.id, p.reason, p.startDate,p.endDate, p.userId, p.created
                FROM
                    " . $this->table_name . " p
                    LEFT JOIN
                        users c
                            ON p.userId = c.id
                ORDER BY p.created DESC
                LIMIT ?, ?";
    
        // prepare query statement
        $stmt = $this->conn->prepare( $query );
    
        // bind variable values
        $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);
    
        // execute query
        $stmt->execute();
    
        // return values from database
        return $stmt;
    }

    // used for paging products
    public function count(){
        $query = "SELECT COUNT(*) as total_rows FROM " . $this->table_name . "";
    
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $row['total_rows'];
    }
}
?>