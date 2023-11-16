<?php
    session_start();
    ob_start();
    require_once "model/db.php";
    require_once "model/product.php";
    require_once "model/handleContainer.php";
    $listCatalog= getCatalog();
    require_once "view/header.php";
   $thongbao = "";
    if(isset($_GET['page'])&&($_GET['page'])!="") {
        $page = $_GET['page'];

        switch ($page) {
            case 'login':
                require_once "view/login.php";
                break;
            case 'register':
                require_once "view/register.php";
                break;
            case 'registerNew':
                handleRegistration();
                break;
            case 'loginUser':
                handleUserLogin();
                break;
            case 'product':
                handleProduct();
                break;

            case "cart":
                require_once "view/cart.php";
                break;
            case "addCart":
                handleUserAddCart();
                break;    
            case 'delCart':
                handleUserDelCart();
                break;    
                
            case 'payMent':
                require_once('view/payMent.php');
                break;
            case 'showCatalog';
            if(isset($_GET['id_Cata'])&& ($_GET['id_Cata']>0)){
                $id_Cata=$_GET['id_Cata'];
                $listCatalog = getItemCatalog($id_Cata);
            }
           
            require_once('view/catalog/itemcatalog.php');
                break;
            default:
            handleDefault();
                break;
        };
    }else{
        handleDefault();
    }
    require_once "view/footer.php";
?>
