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
            case 'registerNew':
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
                            // Kiểm tra tên đăng nhập phải có ít nhất 6 ký tự (chữ và số)
                            if (!preg_match("/^[a-zA-Z0-9]{6,12}$/", $pass) || !preg_match("/^[a-zA-Z0-9]{6,12}$/", $interPass)) {
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
                break;
            case 'loginUser':
                if (isset($_POST['loginUser']) && ($_POST['loginUser'])) {
                    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

                    $getUser = getUser($phone, $pass);

                  if (is_array($getUser)) {
                        extract($getUser);
                       
                        if($role_user==1){
                            $_SESSION['user']=$getUser;
                            header("location: admin/index.php");
                        }else{
                            $_SESSION['user']=$getUser;
                            header('location: index.php');
                        }
                       
                    }
                }

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
                
            case 'payMent':
                require_once('view/payMent.php');
                break;
            default:
            $listItemLimitRanDom = getDetailProductLimitRanDom();
            $listItemLimit = getDetailProductLimit();
            $listCatalog= getCatalog();
            $listProduct= getDetailProduct();
                require_once "view/home.php";
                break;
        };
    }else{
        $listItemLimitRanDom = getDetailProductLimitRanDom();
        $listItemLimit = getDetailProductLimit();
        $listCatalog= getCatalog();
        $listProduct= getDetailProduct();
        require_once "view/home.php";
    }
    require_once "view/footer.php";
?>
