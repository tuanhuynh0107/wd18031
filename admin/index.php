<?php 
    session_start();
    ob_start()  ;
    require_once "../model/db.php";
    require_once "../model/product.php";
    require_once 'view/header.php';
     if(isset($_GET['page'])&&($_GET['page'])!="") {
        $page = $_GET['page'];

        switch ($page) {
            case 'product':
               
                break;
            case 'showUpdate':
                
                require_once "view/Update.php";
                break;
            case 'form_addProduct':
                  
                break;
            case 'catalog':
                $listCatalog=getAdminCatalog();
                require_once "view/catalog.php";
                break;    
            // case "addProduct" :
            //         if(isset($_POST['addProduct'])&&($_POST['addProduct'])){
            //                 // $id = $_POST['idDM'];
            //                 $pice = $_POST['pice'];
            //                 $name = $_POST['name'];
            //                 $id_catalog = $_POST['loaiHang'];
            //                 $img = $_FILES['img']['name'];
            //                 $target_dir = "uploads/";
            //                 $target_file = $target_dir . basename($_FILES["img"]["name"]);
            //                 // move_uploaded_file($_FILES['img']['tmp_name'], $file);
            //                 insetProduct($name,$img,$pice,$id_catalog);
            //                 }
            //                 $product = getProduct();
            //                 require_once  "view/product.php";
            //                 break;

            case "addProduct":
               
                require_once "view/product.php";
            case 'updataProduct':
               
                require_once "view/product.php";
                break;
            case "delProduct" :
                 
                        require_once "view/product.php";
                        break;
            default:
                require_once "view/home.php";
                break;
        };
    }else{
       
        require_once "view/home.php";
    }


    require_once 'view/footer.php';
?>
