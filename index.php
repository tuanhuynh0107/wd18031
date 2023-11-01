<?php
    require_once "model/db.php";
    require_once "model/product.php";
    require_once "view/header.php";

    if(isset($_GET['page'])&&($_GET['page'])!="") {
        $page = $_GET['page'];

        switch ($page) {
            case 'product':
                require_once "view/product.php";
                break;
            case 'cart':
                require_once "view/cart.php";
                break;
            case 'payMent':
                require_once "view/payMent.php";
                break;
            case 'login':
                require_once "view/login.php";
                break;
            case 'sign':
                require_once "view/sign.php";
                break;
            case 'admin':
                require_once "admin/view/index.php";
                break;
            default:

            $product = getProduct();
                require_once "view/home.php";
                break;
        };
    }else{
        $product = getProduct();
        require_once "view/home.php";
    }
    require_once "view/footer.php";
?>
