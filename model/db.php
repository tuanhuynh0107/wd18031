<?php
    function db() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=duan1_hsmt", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully
    } catch(PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
    }
    // lấy nhiều
    function get_All($sql) {
        $conn = db();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listItems=$stmt->fetchAll();
        $conn = null;
        return $listItems;
    }
    function get_One($sql) {
        $conn = db();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listItems=$stmt->fetch();
        $conn = null;
        return $listItems;
    }
    
    // function get_del($sql) {
    //     $conn = db();
    //     $stmt = $conn->exec($sql);
    //     $stmt->execute();
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $listItems=$stmt->fetchAll();
    //     $conn = null;
    //     return $listItems;
    // }

    function update($sql) {
        $conn = db();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $conn = null;
    }


    function delete($sql) {
        $conn = db();
        $conn -> exec($sql);
        $conn = null;
    }    
    
    
    function inset($sql) {
        $conn = db();
        $conn -> exec($sql);
        $conn = null;
    }   
    // Truy vấn ví dụ để hiển thị danh mục (Duy)
    // function show($sql){
    //     $sql = "SELECT * FROM catalog";
    //     $result = $conn->query($sql);
    // } 
    function pdo_execute_return_lastInsertId($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = db();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            return $conn->lastInsertId();
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn =db();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
 ?>