<?php 
    require_once "../model/db.php";
    require_once "../model/product.php";
    
    require_once 'view/header.php';


     if(isset($_GET['page'])&&($_GET['page'])!="") {
        $page = $_GET['page'];

        switch ($page) {
            case 'product':
                $product = getProduct();
                require_once "view/product.php";
                break;
            case 'showUpdate':
                if(isset($_GET['idSP'])&&($_GET['idSP'])>0) {
                    $id = $_GET['idSP'];
                    $item=getProductDetailAdmin($id);
                }
                $listItem = getCatalog();
                require_once "view/Update.php";
                break;
            case 'form_addProduct':
                    if(isset($_GET['idSP'])&&($_GET['idSP'])>0) {
                        $id = $_GET['idSP'];
                        $item=getProductDetailAdmin($id);
                    }
                    $listItem = getCatalog();
                    require_once "view/form_addProduct.php";
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
                if(isset($_POST['addProduct'])&&($_POST['addProduct'])){
                    $pice = $_POST['pice'];
                    $name = $_POST['name'];
                    $id_catalog = $_POST['loaiHang'];
                    $img = $_FILES['img']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);

                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        echo "Error: " . $_FILES["img"]["error"];
                    }
                    insetProduct($name,$img,$pice,$id_catalog);
                }
                $product = getProduct();
                require_once "view/product.php";
            case 'updataProduct':
                if(isset($_POST['btnUpPro']) && ($_POST['btnUpPro'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $pice = $_POST['pice'];
                    $id_catalog = $_POST['loaiHang'];
                    update_Product($name,$img, $pice, $id_catalog,$id);
                }
                $product = getProduct();
                require_once "view/product.php";
                break;
            case "delProduct" :
                        if(isset($_GET['idSP'])&&($_GET['idSP'])>0) {
                                $id = $_GET['idSP'];
                                delProduct($id);
                        }
                        $product = getProduct();
                        require_once "view/product.php";
                        break;
            default:
                require_once "view/home.php";
                break;
        };
    }else{
        $product = getProduct();
        require_once "view/home.php";
    }


    require_once 'view/footer.php';
?>
