<?php 
    session_start();
    ob_start()  ;
    require_once "../model/db.php";
    require_once "../model/product.php";
    require_once "../model/handleContainer.php";
    require_once 'view/header.php';
     if(isset($_GET['page'])&&($_GET['page'])!="") {
        $page = $_GET['page'];

        switch ($page) {
            case 'statistical':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $loadstatistics= getAminstatistics($_GET['id']);
                }
              
                require_once "view/statistical.php";
                break;
            case 'statisticalCatalog':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $loadstatisticsCatalog=getAminstatisticsCatalog($_GET['id']);
                }
                require_once "view/statisticalCatalog.php";
                break;
            case 'statisticalProduct':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $loadstatisticsProduct=getAminstatisticsProduct($_GET['id']);
                }
                require_once "view/statisticalProduct.php";
                break;     
            case 'showUser':
                $listUser=getAdminUser();
                $totalAllUser=getAdminAll_TotalUser();
                // $newUsersInMonth=getNewUsersInMonth(); Chưa có ngày đăng ký của khách hàng
                $vipUser=getAdminVipUser();
                require_once "view/showUser.php";
                break;
            case 'userVip':
                $LoadAllVipUser=getAllAdminVipUser();
                require_once "view/userVip.php";
                break;    
           
            case 'product':
                $listProduct=getAdminProduct();
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();
                require_once "view/product.php";
                break;
            case 'detailProduct':
                if(isset($_GET['idPro'])&&($_GET['idPro']>0)){
                    $listProductID=getAdminProductID($_GET['idPro']);
                }
               
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();

                $listCatalog=getAdminCatalog();
                require_once "view/detailProduct.php";
                break;    
             case "delProduct" :
                if (isset($_GET['id_Prd'])&&( $_GET['id_Prd']) >0) {
                    deleteProduct($_GET['id_Prd']);
                    
                }   
                $listProduct=getAdminProduct();
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();
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
                if(isset($_GET['id_Prd'])&&($_GET['id_Prd']>0)){
                    $listProductID=getAdminProductID($_GET['id_Prd']);
                }
               
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();

                $listCatalog=getAdminCatalog();
                require_once "view/update.php";
                break;  
            case 'updatePro':
                if(isset($_POST['btnUpdatePro'])){
                    $nameProduct=$_POST['nameProduct'];
                    $priceProduct=$_POST['priceProduct'];
                    $qtyProduct=$_POST['qtyProduct'];
                    $typeProduct=$_POST['typeProduct'];
                    $selectCatalog=$_POST['selectCatalog'];
                    $idProduct=$_POST['idProduct'];
                    
                    $hinh=$_FILES['imgProduct']['name'];
                    $target_dir = 'C:/xampp/htdocs/ky 4/change fisman/wd18031/assets/uploads/';
                    $target_file = $target_dir.basename($_FILES["imgProduct"]["name"]);
    
                    if (move_uploaded_file($_FILES["imgProduct"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        echo "Sorry, there was an error uploading your file.";
                      }
                      error_reporting(E_ALL);
                      ini_set('display_errors', 1);
                      
                      // Thêm các dòng sau trước các lời gọi move_uploaded_file
                      echo 'Thư Mục Đích: ' . $destinationDirectory . '<br>';
                      echo 'Tên Tệp Đã Tải Lên: ' . $uploadedFileName . '<br>';
                      updateAdminProduct($nameProduct,$priceProduct,$hinh,$qtyProduct,$typeProduct,$selectCatalog,$idProduct);
                      $thongbao="bạn đã udpate thành công sản phẩm";
                }
                $listProduct=getAdminProduct();
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();
                
                require_once "view/product.php";
                break;    
            case 'showUpdate':
                
                require_once "view/product.php";
                break;
            case '  Product':
                  
                break;
            case 'catalog':
                $listCatalog=getAdminCatalog();
                $countAllCatalog= getAdminCountCatalog();
                $workCatalog=getAdminWorkCatalog();
                require_once "view/catalog.php";
                break; 
            case 'DeleteCatalog':
                if (isset($_GET['id_catalog'])&&($_GET['id_catalog']) >0) {
                    deleteCatalog($_GET['id_catalog']);
                    
                }
                $countAllCatalog= getAdminCountCatalog();
                $workCatalog=getAdminWorkCatalog();
                $listCatalog=getAdminCatalog();
                require_once "view/catalog.php";
                break;
            case 'addCatalog':
                if(isset($_POST['addCata'])&&($_POST['addCata'])){
                    $nameCatalog=$_POST['nameCatalog'];
                    $qtyCatalog=$_POST['quantityCatalog'];
                    $satus=$_POST['satus'];

                    // hình banner catalog
                    $bannerCatalog=$_FILES['img_catalog']['name'];
                    $target_dir = ".../assets/uploads/";
                    $target_file = $target_dir . basename($_FILES["img_catalog"]["name"]);

                    if (move_uploaded_file($_FILES["img_catalog"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    //  hình icons catalog
                    $iconsCatalog=$_FILES['icon_catalog']['name'];
                    $target_dir = ".../assets/uploads/";
                    $target_file = $target_dir . basename($_FILES["icon_catalog"]["name"]);

                    if (move_uploaded_file($_FILES["icon_catalog"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }

                    insertCatalog($nameCatalog, $qtyCatalog,$satus,  $bannerCatalog, $iconsCatalog);
                    $thongbao="bạn đã thêm thành công";

                }
                $listItem=getAdminCatalog();
                $countAllCatalog= getAdminCountCatalog();
                $workCatalog=getAdminWorkCatalog();
                require_once "view/formAddCatalog.php";
                break;      
            case 'updateCatalog':
                if (isset($_GET['id_catalog'])&&($_GET['id_catalog']) >0) {
                    $catalogID = get_One_Admin_Catalog($_GET['id_catalog']);
                    $listItem=getAdminCatalog();

                }
                $countAllCatalog= getAdminCountCatalog();
                $workCatalog=getAdminWorkCatalog();
                require_once "view/formUpdateCatalog.php";
                break; 
            case 'updateCata':
              if(isset($_POST['btnUpdateCatalog'])&&($_POST['btnUpdateCatalog'])){
                $nameCatalog=$_POST['nameCatalog'];
                    $qtyCatalog=$_POST['quantityCatalog'];
                    $satus=$_POST['satus'];

                    // hình banner catalog
                    $bannerCatalog=$_FILES['img_catalog']['name'];
                    $target_dir = "../assets/uploads/";
                    $target_file = $target_dir . basename($_FILES["img_catalog"]["name"]);

                    if (move_uploaded_file($_FILES["img_catalog"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    //  hình icons catalog
                    $iconsCatalog=$_FILES['icon_catalog']['name'];
                    $target_dir = "../assets/uploads/";
                    $target_file = $target_dir . basename($_FILES["icon_catalog"]["name"]);

                    if (move_uploaded_file($_FILES["icon_catalog"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }

                $id=$_POST['id_catalog'];
                updateCatalog($nameCatalog, $qtyCatalog,$satus, $bannerCatalog, $iconsCatalog, $id);
                $thongbao="bạn đã cập nhật thành công";
              }
              $countAllCatalog= getAdminCountCatalog();
              $workCatalog=getAdminWorkCatalog();
              $listCatalog=getAdminCatalog();
              require_once "view/catalog.php";
                break;

            
           case 'loadCart':
            $countAllCart=getAdmin_AllCart();
            $shipCart=getAdmin_ShippCart();
            $newOrder=getAdmin_NewCart();
            $listCart= getAdminCart();
            require_once "view/cartAdmin.php";
            break;
            case 'loadCartStatus':
                if(isset($_GET['status'])&&($_GET['status'])){
                    $status = $_GET['status'];
                    $listCart=getAdminCartStatus($status);
                }
                $countAllCart=getAdmin_AllCart();
                $shipCart=getAdmin_ShippCart();
                $newOrder=getAdmin_NewCart();
                require_once "view/cartAdmin.php";
                break;
            case 'updateStatus':
                if(isset($_POST['updateStatus'])&&($_POST['updateStatus'])){
                    $indStatus = $_POST['indStatus'];
                    $idpackage = $_POST['id_package'];
                    $listDetail=getDetailPackage($idpackage);

                    if(isset($listDetail)&& $indStatus==2){
                        foreach($listDetail as $item){
                             extract($item);
                             setQtyProductReduce($id_prd,$qty);
                        }
                    }else if(isset($listDetail)&& $indStatus==4){
                        foreach($listDetail as $item){
                            extract($item);
                            setQtyProductPlus($id_prd,$qty);
                       }
                    }

                    updateCatalogStatus($idpackage, $indStatus);
                    $loadAll=getAllAdminCart($indStatus);
                }
                $countAllCart=getAdmin_AllCart();
                $shipCart=getAdmin_ShippCart();
                $newOrder=getAdmin_NewCart();
                
                require_once "view/cartStatus.php";
                break;
            case 'detailPackage':
                if(isset($_GET['idPackage'])&&($_GET['idPackage']) > 0) {
                    $id_package= $_GET['idPackage'];
                    $itemDetailPackage=getDetailPackage($id_package);
                }
                require_once "view/detailPackage.php";
                break;
            case 'comment':
                $loadComment=getAdminCommet();
                $AllComment=getAdminAllComment();
                require_once 'view/comment.php';
                break;   
            default:
            // khách hàng ưu tiên thì tôi cho mua 10 đơn hàng trở lên thành khách hàng vip
            // niếu muôn thay đổi khách hàng đó mua bao nhiêu đơn thi ngay dòng 751 model/product.php
            // chỉ càn thay số 10 đó thành số khác là được
                $loadKhachHangVip=getAdminLoadKhachHangVip();
                $vipUser=getAdminVipUser();
                $soldProduct=getAdminAll_SoldProduct();
                $loadAllUser=getAdmin_LoadAllUser();
                $loadNewCart=getAdmin_LoadNewCart();
                // bản thống kê theo tuần
                $loadstatistical=getAdminstatistical();
                require_once "view/home.php";
                break;
        };
    }else{
        $loadKhachHangVip=getAdminLoadKhachHangVip();
        $vipUser=getAdminVipUser();
        $soldProduct=getAdminAll_SoldProduct();
        $loadAllUser=getAdmin_LoadAllUser();
        $loadNewCart=getAdmin_LoadNewCart();
        // bản thống kê theo tuần
        $loadstatistical=getAdminstatistical();
        require_once "view/home.php";
    }
    $loadStatisticalDay =getAdminstatisticalDay();
    require_once 'view/footer.php';
?>
