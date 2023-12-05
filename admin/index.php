<?php 
    session_start();
    ob_start()  ;
    if (!isset($_SESSION['user_info']) ||$_SESSION['user_info']['role_user'] != 1) {
        // Nếu không đăng nhập, chuyển hướng đến trang đăng nhập hoặc trang lỗi
        header('Location: index.php?page=login'); // Thay thế bằng trang đăng nhập của bạn
        exit;
    }
    require_once "../model/db.php";
    require_once "../model/product.php";
    require_once "../model/handleContainer.php";
    $pageName ="ahahha";
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
                if(isset($_GET['offset'])) {
                    $offset = $_GET['offset'];
                    $listUser=getAdminUser($offset);
                }else {
                    $listUser=getAdminUser(0);
                } 
                $totalAllUser=getAdminAll_TotalUser();
                $newUsersBlackList=getNewUsersBlackList(); 
                $vipUser=getAdminVipUser();
                require_once "view/showUser.php";
                break;
            case 'userVip':
                $totalAllUser=getAdminAll_TotalUser();
                $newUsersBlackList=getNewUsersBlackList(); 
                $vipUser=getAdminVipUser();
                $LoadAllVipUser=getAllAdminVipUser();
                require_once "view/userVip.php";
                break;    
            case 'userBlack':
                $totalAllUser=getAdminAll_TotalUser();
                $newUsersBlackList=getNewUsersBlackList(); 
                $vipUser=getAdminVipUser();
                $LoadAllBlackUser=getAllAdminBlackUser();
                require_once "view/userBlack.php";
                break;    
            case 'customerOrder':
                if(isset($_GET['id_user'])&&($_GET['id_user']>0)){
                    $loadUserCartAdmin=getAdminDetailUser($_GET['id_user']);
                }
                $listUser=getAdminUser();
                $totalAllUser=getAdminAll_TotalUser();
                $newUsersBlackList=getNewUsersBlackList(); 
                $vipUser=getAdminVipUser();
                require_once "view/customerOrder.php";
                break;
            case 'product':
                if(isset($_GET['offset'])) {
                    $offset = $_GET['offset'];
                    $listProduct=getAdminProduct($offset);
                }else {
                    $listProduct=getAdminProduct(0);
                }                
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();
                require_once "view/product.php";
                // require_once ""
                break;

            case 'addDetailProduct':
                if(isset($_POST['btnAddDetailPro'])){
                    if(empty($_POST['nameProduct'])&&empty($_POST['saleProduct'])&&empty($_POST['productionProduct'])&&empty($_POST['typeProduct'])&&empty($_POST['textProduct'])){
                        $thongbao="Bạn không dược để trống";
                    }else{
                        $name_product=$_POST['nameProduct'];
                        $sale=$_POST['saleProduct'];
                        $production=$_POST['productionProduct'];
                        $type=$_POST['typeProduct'];
                        $text=$_POST['textProduct'];
                        $net_weight=$_POST['weightProduct'];
                        $id_prd=$_POST['selectProduct'];
                        $id_album=$_POST['selectAlbum'];
    
                        insert_Admin_DetailProduct($name_product, $sale, $production,  $type, $text, $net_weight, $id_prd, $id_album);
                        $thongbao="bạn đã thêm chi tiết sản phẩm thành công";
                    }
                   
                }


                // load thống kê
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();
                // load sản phẩm
                $loadSelectProduct=getAdminSelectProduct();
                // laod album
                $loadSelectAlbum=getAdminSelectAlbum();
                require_once 'view/addDetailProduct.php';
                break;
            case 'addAdminAlbum':
                if(isset($_POST['btnAddImg'])){
                    $target_dir = "../assets/uploads/";

                    $images = array('mainImg', 'imgone', 'imgtwo', 'imgthree', 'imgfour', 'imgfive');
                    $imgMain = $_FILES[$images[0]]['name'];
                    $id_prd = $_POST['selectProduct'];
                    
                    for ($i = 1; $i <= 5; $i++) {
                        $currentImage = $images[$i];
                        ${"img" . $i} = $_FILES[$currentImage]['name'];
                    
                        if (!empty($_FILES[$currentImage]['name'])) {
                            $target_file = $target_dir . basename($_FILES[$currentImage]["name"]);
                            move_uploaded_file($_FILES[$currentImage]["tmp_name"], $target_file);
                        }
                        $thongbaoImg="Bạn đã nhập ảnh thành công";
                    }
                    
                    insert_Admin_Album($imgMain, $img1, $img2, $img3, $img4, $img5, $id_prd);
                    
                }
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();
                // load sản phẩm
                $loadSelectProduct=getAdminSelectProduct();
                // laod album
                $loadSelectAlbum=getAdminSelectAlbum();
                require_once 'view/addDetailProduct.php';
                break;   
                    
            case 'detailProduct':
                if(isset($_GET['idPro'])&&($_GET['idPro']>0)){
                    $listDetailProductID=showUpdateDetailProuct($_GET['idPro']);
                }


                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();

                $listCatalog=getAdminCatalog();
                require_once "view/detailProduct.php";
                break;   
            
             case "delProduct" :
                if (isset($_GET['id_Prd'])&&( $_GET['id_Prd']) >0 && isset($_GET['status'])){

                    updateStautsPro($_GET['status'],$_GET['id_Prd']);
                    
                }   
                $listProduct=getAdminProduct();
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();
                require_once "view/product.php";
                break;  
            case "addProduct":
                if(isset($_POST['btnAddPro'])){
                    if(empty($_POST['nameProduct'])&&empty($_POST['priceProduct'])&& empty($_POST['qtyProduct'])){
                        $thongbao="bạn không được để trống";
                    }else{
                        $addNamePro=$_POST['nameProduct'];
                        $addPricePro=$_POST['priceProduct'];
                        $addQtyPro=$_POST['qtyProduct'];
                        $addCatalogPro=$_POST['selectCatalog'];
    
                        addAdminProduct( $addNamePro, $addPricePro, $addQtyPro, $addCatalogPro);
                        $thongbao="bạn đã thêm thành công sản phẩm";
                    }
                }
                $listCatalog=getAdminCatalog();
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();
                require_once "view/addProduct.php";
                break;
            case 'showUpdatePro':
                if(isset($_GET['id_Prd'])&&($_GET['id_Prd']>0)){
                    $listProductID=showUpdateProuct($_GET['id_Prd']);
                }
               
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();

                $listCatalog=getAdminCatalog();
                require_once "view/updatePro.php";
                break;    
            case 'updatePro':
                if(isset($_POST['btnUpdatePro'])&&($_POST['btnUpdatePro'])){
                    $addNamePro=$_POST['nameProduct'];
                    $addPricePro=$_POST['priceProduct'];
                    $addQtyPro=$_POST['qtyProduct'];
                    $addCatalogPro=$_POST['selectCatalog'];
                    $idProduct=$_POST['idProduct'];

                    update_admin_product($addNamePro, $addPricePro, $addQtyPro, $addCatalogPro,$idProduct);
                    $thongbao="Bạn update thành công";
                }
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();

                $listCatalog=getAdminCatalog();
                if(isset($_GET['offset'])) {
                    $offset = $_GET['offset'];
                    $listProduct=getAdminProduct($offset);
                }else {
                    $listProduct=getAdminProduct(0);
                }   
                require_once "view/product.php";
                break;
            case 'updateDetailProduct':
                if(isset($_GET['id_Prd'])&&($_GET['id_Prd']>0)){
                    $listDetailProductID=showUpdateDetailProuct($_GET['id_Prd']);
                }


                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();

                $listCatalog=getAdminCatalog();

                require_once "view/updateDetailProduct.php";
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
            case 'updateAlbum_DetailProduct':
                if(isset($_POST['btnUpdateAlbum_DetailPro']) &&($_POST['btnUpdateAlbum_DetailPro'])){
                    // lấy từ detail_product
                    $name_product=$_POST['nameProduct'];
                    $sale=$_POST['saleProduct'];
                    $production=$_POST['productionProduct'];
                    $type=$_POST['typeProduct'];
                    $text=$_POST['textProduct'];
                    $net_weight=$_POST['weightProduct'];
                    // lấy từ album


                    $target_dir = "../assets/uploads/";

                    $images = array('mainImg', 'imgone', 'imgtwo', 'imgthree', 'imgfour', 'imgfive');
                    $imgMain = $_FILES[$images[0]]['name'];
                    
                    for ($i = 1; $i <= 5; $i++) {
                        $currentImage = $images[$i];
                        ${"img" . $i} = $_FILES[$currentImage]['name'];
                    
                        if (!empty($_FILES[$currentImage]['name'])) {
                            $target_file = $target_dir . basename($_FILES[$currentImage]["name"]);
                            
                            if (move_uploaded_file($_FILES[$currentImage]["tmp_name"], $target_file)) {
                                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                              } else {
                                // echo "Sorry, there was an error uploading your file.";
                              }
                        }
                        $thongbaoImg="Bạn đã nhập ảnh thành công";
                    }
                    // lấy id sản phẩm
                    $idProduct=$_POST['id_product'];

                    update_Admin_DetailProduct_album($imgMain, $img1, $img2, $img3, $img4, $img5,$name_product, $sale, $production,  $type, $text, $net_weight, $idProduct);
                    $thongbao="bạn đã update thành công";
                }
                $totalAllProducts=getAdminAll_TotalProduct();
                $soldProduct=getAdminAll_SoldProduct();
                $inventoryProduct=getAdmin_inventoryProduct();

                $listCatalog=getAdminCatalog();
                if(isset($_GET['offset'])) {
                    $offset = $_GET['offset'];
                    $listProduct=getAdminProduct($offset);
                }else {
                    $listProduct=getAdminProduct(0);
                }   
                require_once "view/product.php";
                break;    
            case 'updatePro':
                if(isset($_POST['btnUpdatePro'])){
                    if(empty($_POST['nameProduct'])&&empty($_POST['priceProduct'])&& empty($_POST['qtyProduct'])&&empty($_POST['typeProduct'])){
                        $thongbao="bạn không được để trống";
                    }else{
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
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            // echo "Sorry, there was an error uploading your file.";
                          }
                        //   error_reporting(E_ALL);
                        //   ini_set('display_errors', 1);
                          
                          // Thêm các dòng sau trước các lời gọi move_uploaded_file
                        //   echo 'Thư Mục Đích: ' . $destinationDirectory . '<br>';
                        //   echo 'Tên Tệp Đã Tải Lên: ' . $uploadedFileName . '<br>';
                          updateAdminProduct($nameProduct,$priceProduct,$hinh,$qtyProduct,$typeProduct,$selectCatalog,$idProduct);
                          $thongbao="bạn đã udpate thành công sản phẩm";
                    }
                    
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
            case 'showCatalogWork':
              
                $showCatalogWork=getAdminCatalogWork();
                $listCatalog=getAdminCatalog();
                $countAllCatalog= getAdminCountCatalog();
                $workCatalog=getAdminWorkCatalog();
                require_once "view/showCatalogWork.php";
                break;    
            case 'showDetailCatalogWork':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                      $listDetailCatalog=getAdminDetailCatalog($_GET['id']);
                }
              
                $listCatalog=getAdminCatalog();
                $countAllCatalog= getAdminCountCatalog();
                $workCatalog=getAdminWorkCatalog();
                require_once "view/showDetailCatalogWork.php";
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
                    if(empty($_POST['nameCatalog'])&&empty($_POST['quantityCatalog'])&&empty($_POST['satus'])){
                        $thongbao="Bạn không được để trống";
                    }else{
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

                    insertCatalog($nameCatalog, $qtyCatalog,$satus,  $bannerCatalog, $iconsCatalog);
                    $thongbao="bạn đã thêm thành công";
                    }
                    

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
            // if(isset($_POST['findCart'])&&$_POST['findCart']!=""){
            //    $findidCart= $_POST['findCart'];                
            // }else{
            //     $findidCart="";
            // }
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
                if(isset($_POST['updateStatus']) && isset($_POST['indStatus']) && isset($_POST['id_package']) && $_POST['updateStatus']){
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
                if(isset($_GET['offset'])) {
                    $offset = $_GET['offset'];
                    $loadComment=getAdminCommet($offset);
                }else {
                    $loadComment=getAdminCommet(0);
                }
                $loadNoResponded = getAdminNoResponded();
                $loadResponded = getAdmiResponded();
                $AllComment=getAdminAllComment();
                require_once 'view/comment.php';
                break;   
            case 'noComment':
                $loadNoResponded = getAdminNoResponded();
                $loadResponded = getAdmiResponded();
                $AllComment=getAdminAllComment();
                $loadNoComment =  getAdminNoCommet();
                require_once "view/noComment.php";
                break;
            case 'replayComment':
                $loadNoResponded = getAdminNoResponded();
                $loadResponded = getAdmiResponded();
                $AllComment=getAdminAllComment();
                $loadReplayComment =  getAdminReplayComment();
                require_once "view/replayComment.php";
                break;    
            case 'replatComment':
                if (isset($_POST['btnReplay']) && ($_POST['btnReplay'])) {
                    $content = $_POST['contentReplay'];
                    $idpro = $_POST['idProReplay'];
                    $iduser = $_SESSION['user_info']['id_user'];
                    $id_replay=$_POST['idCmtReplay'];
                    $dateComment = date('Y-m-d H:i:s');
                    $status_userReplay=1;
                    update_Status_Replay($id_replay,$status_userReplay);
                    insert_replay($content, $iduser, $idpro, $dateComment, $id_replay, $status_userReplay);
                  
                   
                }
                $loadNoResponded = getAdminNoResponded();
                $loadResponded = getAdmiResponded();
                $AllComment=getAdminAllComment();
                $loadNoComment = getAdminNoCommet();
                require_once "view/noComment.php";
                break;  
            case 'showProductSold':
                $showSoldPro=getAdminSoldPro();
                require_once "view/showSoldProductTable.php";
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
        $pageName .="Trang chủ";
        require_once "view/home.php";
    }
    $loadCommentNew=getAdminCommetNew();
    $loadStatisticalDay =getAdminstatisticalDay();
    require_once 'view/footer.php';
?>
