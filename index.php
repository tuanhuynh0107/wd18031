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
                require_once "view/register.php";
                break;
            case 'product':
                if(isset($_GET['idProduct']) &&($_GET['idProduct']>0)){
                    $idDetailProduct=$_GET['idProduct'];
                    $itemDetailProduct= getProductDetail($idDetailProduct);
                    $itemAlbum=getOneAlbum($idDetailProduct);
                    $itemProduct= getProduct($idDetailProduct);
                    extract($itemProduct);
                   
                }
                require_once "view/product.php";
                break;
            default:
                $listCatalog= getCatalog();
                $listProduct= getDetailProduct();
                require_once "view/home.php";
                break;
        };
    }else{
        $listCatalog= getCatalog();
        $listProduct= getDetailProduct();
        require_once "view/home.php";
    }
    require_once "view/footer.php";
?>
