<?php

function checkExistingUsername($username) {
    $db =  kosapachaConnect();
    $sql = "SELECT employee_username FROM employees WHERE employee_username = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $match = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if(empty($match)){
        return 0;
    } else {
        return 1;
    }
}

function getUser($username){
    $db = kosapachaConnect();
    $sql = 'SELECT employee_username, employee_fname, employee_lname, employee_password
             FROM employees WHERE employee_username = :username';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $userData;
}


?>