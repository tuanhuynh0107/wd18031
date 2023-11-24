<?php
function loadAll_user(){
    $sql="select * from user ";
    $listUser = pdo_execute_return_lastInsertId($sql);
    return $listUser;
}
?>
