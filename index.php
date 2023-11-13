<?php
    require_once "model/db.php";
    require_once "model/product.php";
    require_once "view/header.php";

    if(isset($_GET['page'])&&($_GET['page'])!="") {
        $page = $_GET['page'];

        switch ($page) {
            case 'login':
                require_once "view/login.php";
                break;
            case 'register':
                require_once "view/sign.php";
                break;
            default:
                require_once "view/home.php";
                break;
        };
    }else{
        require_once "view/home.php";
    }
    require_once "view/footer.php";
?>
