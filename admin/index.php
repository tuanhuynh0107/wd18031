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
                $listProduct=getAdminProduct();
               require_once "view/product.php";
                break;
             case "delProduct" :
                if (isset($_GET['id_Prd'])&&( $_GET['id_Prd']) >0) {
                    deleteProduct($_GET['id_Prd']);
                    
                }   
                $listProduct=getAdminProduct();
                require_once "view/product.php";
                break;  
            case "addProduct":
                if(isset($_POST['btnAddPro'])&&($_POST['btnAddPro'])){
                    $name_product=$_POST['nameProduct'];
                    $price_product=$_POST['priceProduct'];
                    $id_catalog=$_POST['selectCatalog'];
                    $select_type=$_POST['selectType'];
                    // $describe_product=$_POST['describeProduct'];
                    $qty_product=$_POST['qtyProduct'];

                    // $img_product=$_FILES['imgProduct']['name'];
                    // $target_dir = "../uploads/";
                    // $target_file = $target_dir . basename($_FILES["imgProduct"]["name"]);
                    insert_product($id_catalog,$name_product,$price_product, $qty_product);
                }
                $listCatalog=getAdminCatalog();
                $listProduct=getAdminProduct();
                require_once "view/addProduct.php";
                break;
            case 'updateProduct':
                
                require_once "view/product.php";
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
            case 'DeleteCatalog':
                if (isset($_GET['id_catalog'])&&($_GET['id_catalog']) >0) {
                    deleteCatalog($_GET['id_catalog']);
                    
                }
                $listCatalog=getAdminCatalog();
                require_once "view/catalog.php";
                break;
            case 'addCatalog':
                if(isset($_POST['addCatalog'])&&($_POST['addCatalog'])){
                    $nameCatalog=$_POST['nameCatalog'];
                    $qtyCatalog=$_POST['quantityCatalog'];
                    insertCatalog($nameCatalog, $qtyCatalog );
                }
                $listItem=getAdminCatalog();
                require_once "view/addCatalog.php";
                break;      
            case 'updateCatalog':
                if (isset($_GET['id_catalog'])&&($_GET['id_catalog']) >0) {
                    $catalog = get_One_Admin_Catalog($_GET['id_catalog']);
                    $listItem=getAdminCatalog();

                }
                require_once "view/updateCatalog.php";
                break; 
            case 'updateCata':
              if(null !== $_POST['updateCatalog'] ){
                $nameCatalog=$_POST['nameCatalog'];
                $quantityCatalog=$_POST['quantityCatalog'];
                $id=$_POST['idCatalog'];
                updateCatalog($id, $nameCatalog, $quantityCatalog);
                
              }
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
            
           case 'loadCart':
            $listCart= getAdminCart();
            require_once "view/cartAdmin.php";
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
