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
            case 'changeAdress':
                if(isset($_POST['change'])&&($_POST['change']>0)){
                    $phone=$_POST['phone'];
                    $name=$_POST['name'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    $id_user=$_POST['id_user'];

                    update_changeAdress($id_user, $phone, $name, $pass, $address);
                    $_SESSION['user_info']= getUser($phone, $pass);
                    header('Location: index.php?page=changeAdress');
                }
                require_once "view/changeAdress.php";
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
            case 'bill':      
                handleBill();
                break;    
            case 'showCatalog';
                handleShowCatalog();
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
