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
                require_once "view/proFile/userProFile.php";
                break;
            case 'yourCard':
                require_once "view/proFile/yourCard.php";
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
            case 'resetPassword':
                require_once "view/resetPassword.php";
                break;
            case 'changeAdress':
                if(isset($_POST['change'])&&($_POST['change']>0)){
                    $phone=$_POST['phone'];
                    $name=$_POST['name'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    $id_user=$_POST['id_user'];

                    update_changeAdress($id_user, $phone, $name, $pass, $address);
                    $_SESSION['user_info']= getUser($phone, $pass);
                    header('Location: index.php?page=changeAdress');
                }
                require_once "view/changeAdress.php";
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
            case "byNow":
                handleUserbyNow();
                break;    
            case 'delCart':
                handleUserDelCart();
                break;    
                
            case 'payMent':
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
