<?php
    session_start();
    ob_start();
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

            case "cart":
                require_once "view/cart.php";
                break;
            case "addCart":
                if(isset($_POST['addCart']) &&($_POST['addCart'])){
                    $idProduct=$_POST['idPro'];
                    $imgPro=$_POST['imgPro'];
                    $namePro=$_POST['namePro'];
                    $pricePro=$_POST['pricePro'];
                    $nameCata=$_POST['nameCata'];
                    $typePro=$_POST['typePro'];

                    if(isset($_POST['qtyPro'])&&($_POST['qtyPro'])){
                        $qtyPro=$_POST['qtyPro'];
                    }else{
                        $qtyPro = 1;
                    }
                    
                   
                    // check_trung_sanpham
                    if(checkDuplicates( $idProduct)>=0){
                        $vitritrung = checkDuplicates( $idProduct);
                        upDataQty($vitritrung);
                    }else{
                        $item = ["typePro"=>$typePro,"idProduct"=> $idProduct,"imgPro"=> $imgPro,"pricePro"=> $pricePro,"namePro"=> $namePro,"qtyPro"=> $qtyPro,"nameCata"=>$nameCata];
                        $_SESSION['cart'][] = $item;
                    }    
                }
                header("location: index.php?page=cart");
                break;    
            case 'delCart':
               if(isset($_GET['id'])){
                     array_splice($_SESSION['cart'],$_GET['id'],1);
               }else{
                    $_SESSION['cart']=[];
                    
               }
               header('location: index.php?page=cart');
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
