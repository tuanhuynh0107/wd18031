<?php

    function handleRegistration() {
        if (isset($_POST['registerNew']) && ($_POST['registerNew'])) {
            $phone = $_POST['phone'];
            $pass = $_POST['pass'];
            $interPass = $_POST['interPass'];
        
            if (empty($phone) || empty($pass) || empty($interPass)) {
                $thongbao = "Vui lòng điền đầy đủ thông tin.";
            } else {
                if (!preg_match("/^(0[3|5|7|8|9])+([0-9]{8})$/", $phone)) {
                    $thongbao = "Số điện thoại của bạn không hợp lệ.";
                } else {
                    if (!preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{6,}$/", $pass) && !preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{6,}$/", $interPass)) {
                        $thongbao = "Mật khẩu phải có ít nhất 6 ký tự (chữ và số) nhiều nhất là 12 kí tự.";
                    } else {
                        if ($pass == $interPass) {
                            insetUser($phone,$pass);
                            $thongbao = "Đăng ký thành công";
                        } else {
                            $thongbao = "Mật khẩu không trùng nhau";
                        }
                    }
                }
            }
        }
        require_once "view/register.php";

    }
    function handleUserLogin() {
        if (isset($_POST['loginUser']) && !empty($_POST['loginUser'])) {
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
            $getUser = getUser($phone, $pass);
        
            if (is_array($getUser)) {
                $userId = $getUser['user_id'];
                $role_user = $getUser['role_user'];
                
                if ($role_user == 1) {
                    $_SESSION['user_id'] = $userId;
                    header("location: admin/index.php");
                    exit();
                } else if ($role_user == 0) {
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['user_info']= $getUser;
                    header('location: index.php');
                    exit();
                } else {
                    $thongbao = "Tài khoản mật khẩu không đúng";
                    exit();
                }
            } else {
                $thongbao = "Tài khoản mật khẩu không đúng";
            }
        }
        
        if (isset($thongbao)) {
            $_SESSION['thongbao'] = $thongbao;
           require_once "view/login.php";
            exit();
        }
       
    }

    function handleUserAddCart() {
        if(isset($_POST['addCart']) &&($_POST['addCart'])){
            $idProduct=$_POST['idPro'];
            $imgPro=$_POST['imgPro'];
            $namePro=$_POST['namePro'];
            $pricePro=$_POST['pricePro'];
            $nameCata=$_POST['nameCata'];
            $typePro=$_POST['typePro'];
            $index=$_POST['index'];

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
                $item = ["typePro"=>$typePro,"idProduct"=> $idProduct,"imgPro"=> $imgPro,"pricePro"=> $pricePro,"namePro"=> $namePro,"qtyPro"=> $qtyPro,"nameCata"=>$nameCata,"index"=>$index];
                $_SESSION['cart'][] = $item;
            }    
        }
        header("location: index.php");
    }

    function handleUserbyNow() {
        if(isset($_POST['byNow']) &&($_POST['byNow'])){
            $idProduct=$_POST['idPro'];
            $imgPro=$_POST['imgPro'];
            $namePro=$_POST['namePro'];
            $pricePro=$_POST['pricePro'];
            $nameCata=$_POST['nameCata'];
            $typePro=$_POST['typePro'];

            // echo var_dump($pricePro);

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
        header("location: index.php?page=payMent");
    }

    function handleUserDelCart() {
        if(isset($_GET['id'])){
            array_splice($_SESSION['cart'],$_GET['id'],1);
      }else{
           $_SESSION['cart']=[];
      }
      header('location: index.php?page=cart');
    }
    
    function handleProduct() {
        if(isset($_GET['idProduct']) &&($_GET['idProduct']>0)){
            $idDetailProduct=$_GET['idProduct'];
            $itemDetailProduct= getProductDetail($idDetailProduct);
            $itemAlbum=getOneAlbum($idDetailProduct);
            $itemProduct= getProduct($idDetailProduct);
            extract($itemProduct);
        }
        require_once "view/product.php";
    }
    // function handleCatalog() {
    //     $listCatalog = getItemCatalog();
    //     extract($listCatalog);
    //     require_once('view/catalog/'.$name_catalog.'.php');
    // }
    function handleBill() {
          // check người dùng không đăng nhập thì không cho đặt hàng
          if(!isset($_SESSION['user_info']['username']) || empty($_SESSION['user_info']['username']) && !isset($_SESSION['user_info']['phone']) || empty($_SESSION['user_info']['phone']) && !isset($_SESSION['user_info']['address']) || empty($_SESSION['user_info']['address'])){
            $thongbao='Bạn chưa điền thông tin.';
         }else{
             $note="";
             if(isset($_POST['order'])&&($_POST['order'])){ 
                 // insert bill
                 $name=$_POST['name'];              
                 $phone=$_POST['phone'];
                 $address=$_POST['address'];
                 $total_All=$_POST['total_All'];
                 $id_user=$_POST['idUser'];
                 $pay_ms=$_POST['pttt'];                    
                 $status=1 ;
                 $time = date('Y-m-d H:i:s');
                 $note=$_POST['note'];
                 // insert cart
                 $total=$_POST['total'];
                 $idProduct=$_POST['idProduct'];

                 $id_trans=$_POST['Exxpress'];
                 if($pay_ms===""){
                     $thongbao="Bạn chưa chọn phương thức thanh toán";
                 }else{
                     if($id_trans===""){
                         $thongbao="Bạn chưa chọn phương thức vận chuyển";
                     }else{
                             $id_package=insert_Package($name, $address, $phone, $pay_ms, $total_All, $status, $time, $note, $id_user);                     
                             foreach ($_SESSION['cart'] as $cart){
                                 insert_Detail_Package($cart['namePro'],$cart['qtyPro'],$cart['pricePro'], $total,$id_package,$id_trans,$idProduct);
                             }
                             $_SESSION['cart']=[];
                             $thongbao="Bạn đã đặt hàng thành công";
                         }
                     }
                 
             }
         }
         require_once "view/payMent.php";
    }

    function handleShowCatalog() {
        if(isset($_GET['id_Cata'])&& ($_GET['id_Cata']>0)){
            $id_Cata=$_GET['id_Cata'];
            $listCatalog = getItemCatalog($id_Cata);
            $banner = getBannerCatalog($id_Cata);
        }         
        require_once('view/catalog/itemcatalog.php');
    }

    function handleDefault() {
        
        $listItemLimitRanDom = getDetailProductLimitRanDom();
        $listItemLimit = getDetailProductLimit();
        $listProduct = getDetailProduct();
        require_once "view/home.php";
    };
?>
