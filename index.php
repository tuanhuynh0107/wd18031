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
            case 'changeImgUser':
                $id_user=$_POST['idImgUser'];
                // lấy file hình ảnh
                $hinh=$_FILES['imgUser']['name'];
                $target_dir = "./assets/uploads/";
                $target_file = $target_dir.basename($_FILES["imgUser"]["name"]);

                if (move_uploaded_file($_FILES["imgUser"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                    // echo "Sorry, there was an error uploading your file.";
                  }
                
                updateImgUser($id_user,$hinh);
                $loadUser=loadAllUser($id_user);
                header('location: index.php?page=proFile');
                break;
            case 'changeProfile':
                if (isset($_POST['saveUser'])) {
                    $name_user = $_POST['name_user'];
                    $email_user = $_POST['email_user'];
                    $gender_user = $_POST['gender_user'];
                    $dob_user = $_POST['dob_user'];
                    $phone_user = $_POST['phone_user'];
                    $adress_user = $_POST['adress_user'];
                    $id_user = $_POST['id_user'];
                
                    updateProfile($name_user, $email_user, $gender_user, $dob_user, $phone_user, $adress_user, $id_user);
                   
                    $thongbao="Bạn đã lưu thay đổi thành công";
                }
                $loadUser=loadAllUser($id_user);
                require_once "view/proFile/userProFile.php";
                break;    
            case 'proFile':
                $loadUser=loadAllUser($id_user);
                require_once "view/proFile/userProFile.php";
                break;
            case 'yourCard':
                if (isset($_GET['id_user'])&&($_GET['id_user']>0)) {
                    $listCart= getYourCart($_GET['id_user']);
                }
                
                $loadUser=loadAllUser($id_user);
                require_once "view/proFile/yourCard.php";
                break;
            case 'userFeadBack':
               
                if(isset($_POST['btnComment'])){
                    $idPackage=$_POST['idPackage'];
                    $idUser=$_POST['idUser'];
                    $textComment=$_POST['comment'];
                    $dateComment = date('Y-m-d H:i:s');
                    $idProduct= getIdPackage($idPackage);
                    $stastusPb=$_POST['statusfb'];
        
                    if(isset($idProduct)){
                        foreach($idProduct as $item){
                            extract($item);
                            insertCommentFeadBack($idPackage, $dateComment,$textComment);
                        }
                    }
                    insertPackage($idPackage, $stastusPb);
                    $listCart= getYourCart($idUser);
                    $flagStatus=1;
                }
                require_once "view/proFile/yourCard.php";
                break;    
            case 'delpackage': 
                handleDelPackage();
                break;
            case 'yourProduct':
                if (isset($_GET['id_user'])&&($_GET['id_user']>0)) {
                    $listCartProduct= getYourProduct($_GET['id_user']);
                }
                require_once "view/proFile/yourProduct.php";
                break;    
            case 'logOut':
                session_unset();
                header('Location: index.php');
                break;    
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
            case 'forgotPassword':
                require_once "view/forgotPassword.php";
                break;
            case 'forPass':
                if(isset($_POST['forgotPass'])){
                    $phone=$_POST['phone'];
                    $check_pass=forgotPassUser($phone);
                   
                }
                require_once "view/forgotPassword.php";
                break; 
            case 'resetPassWord':
                if(isset($_GET['id_user'])&&($_GET['id_user']>0)){
                    $loadOneResetPass=loadAllUser($id_user);
                }
                require_once "view/resetPassword.php";
                break;    
            case 'reserPass':
                if(isset($_POST['resetpass'])){
                    $id_user=$_POST['idUser'];
                    $oldPass=$_POST['oldPass'];
                    $newPass=$_POST['newPass'];
                    $comfrimNewPass=$_POST['comfrimNewPass'];
                    
                    $updatePass= updatePassWord($oldPass, $newPass, $comfrimNewPass, $id_user);
                }
                require_once "view/resetPassword.php";
                break;    
            case 'product':
                handleProduct();
                break;
            case "cart":
                $listItemLimitRanDom = getDetailProductLimitRanDom();
                 require_once "view/cart.php";
                break;
            case "addCart":           
                handleUserAddCart();
                break;    
            case "byNow":
                handleUserbyNow();
                break;    
            case 'delCart':
                handleUserDelCart();
                break;    
                
            case 'payMent':
                if(isset($_SESSION['user_info'])){
                    extract($_SESSION['user_info']);
                    $loadUser=loadAllUser($id_user);
                }

                require_once('view/payMent.php');
                break;
            case 'bill':      
                handleBill();
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
