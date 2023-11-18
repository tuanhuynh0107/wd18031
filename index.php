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
                        $status=1   ;
                        $time = date('h:i:sa d/m/y');
                        $note=$_POST['note'];
                        // insert cart
                        $total=$_POST['total'];

                        $id_trans=$_POST['Exxpress'];
                        if($pay_ms===""){
                            $thongbao="Bạn chưa chọn phương thức thanh toán";
                        }else{
                            if($id_trans===""){
                                $thongbao="Bạn chưa chọn phương thức vận chuyển";
                            }else{
                                    $id_package=insert_Package($name, $address, $phone, $pay_ms, $total_All, $status, $time, $note, $id_user);                     
                                    foreach ($_SESSION['cart'] as $cart){
                                        insert_Detail_Package($cart['namePro'],$cart['pricePro'],$cart['pricePro'], $total,$id_package,$id_trans);
                                    }
                                    $_SESSION['cart']=[];
                                }
                            }
                        
                    }
                }
                require_once "view/payMent.php";
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
