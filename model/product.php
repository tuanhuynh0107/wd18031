<?php 
    function upDataQty($ind) {
        for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { 
            if($i==$ind){
                $_SESSION['cart'][$i]["qty"]+=1;
            }
        }
    }
    function checkDuplicates($id) {
        $ind = -1;
        for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { 
            if($_SESSION['cart'][$i]["id"]==$id){
                return $ind = $i;
            }
        }
        return $ind;

    }
    function getProduct() {
        $sql = "SELECT *  FROM product";
        return get_All($sql);
    }

    function showProduct($listItems) {
        $kq = "";

        foreach ($listItems as $item) {
            extract($item);
            $linkProduct = 'index.php?page=product&idProduct='.$id;
            $kq .= '
            <div class="course-item">
            <a href="'.$linkProduct .'">
                <img src="./assets/img/'.$img.'.png" alt="Basic web design" class="thumb" />
            </a>
            <div class="info">
                <div class="head">
                    <h3 class="title">
                        <a href="'.$linkProduct .'" class="line-clamp break-all">
                            '.$name.'
                        </a>
                    </h3>
                </div>
                <div class="foot">
                    <span class="price">'.number_format($pice,0,",",".").'</span>
                    <span class="price">/ combo</span>
                    <div class="rating">
                        <img src="./assets/icons/hot.svg" alt="Star" class="star" />
                        <span class="value"></span>
                    </div>
                </div>


            </div>
            <button class="btn book-btn">
                Thêm vào giỏ hàng
            </button>
            </div>
            ';
        }

        return $kq;
    }

// admin
    function showProductAdmin($listItems) {
        $kq = ""; 
        $stt = 1;

        foreach ($listItems as $item) {
            extract($item);
            $kq .= '
                <tr>
                    <td>'.$stt.'</td>
                    <td>'.$name.'</td>
                    <td><img src="../uploads/'.$img.'" style="" alt="" class="card-image" /> </td>
                    <td>'.number_format($pice,0,",",".").' đ</td>
                    <td>122</td>
                    <td>'.$id_catalog.'</td>
                    <td><a href="index.php?page=showUpdate&idSP='.$id.'">Sửa</a> 
                    | <a href="index.php?page=delProduct&idSP='.$id.'">Xóa</a>|
                    </td>
                </tr>
            ';
            $stt++;
        }
        return $kq;

    }

    function getProductDetail($idProduct) {
        $conn = db();
        $sql = "SELECT *  FROM product where id=".$idProduct;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listItems = $stmt->fetch();
        $conn = null;
        return $listItems;
    }
    function get_idCatalog($idProduct) {
        $conn = db();
        $sql = "SELECT loaiHang FROM sanpham where idSP=".$idProduct;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listItems = $stmt->fetch();
        extract( $listItems);
        $conn = null;
        return $loaiHang;
    }
    function getCatalogDetail($idCatalog,$idProduct) {
        $sql = "SELECT * FROM sanpham where loaiHang=".$idCatalog." AND idSP<>".$idProduct." " ;
        $conn = db();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listItems = $stmt->fetchAll();
        $conn = null;
        return $listItems;
    }


    function getUser($user,$pass) {
        $conn = db();
        $sql = "SELECT * FROM khachhang where nameKH='".$user."' AND pass='".$pass."' " ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listItems = $stmt->fetchAll();
        $conn = null;
        if(count($listItems)>0){ 
            return $listItems[0]['role'];
        }else{
            return 0;
        }
    }


    function getUserInfo($user, $pass) {
        $sql = "SELECT * FROM khachhang WHERE nameKH = :user AND pass = :pass";
        $conn = db();
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $conn = null;
        return $result;
    }

    // admin

    function delProduct($id) {
        $sql = "DELETE FROM product WHERE id = ".$id;
        delete($sql);
    }
    function delCatalog($idDM) {
        $sql = "DELETE FROM danhmuc WHERE idDM = ".$idDM;
        delete($sql);
    }
    function delUser($idKH) {
        $sql = "DELETE FROM khachhang WHERE idKH= ".$idKH;
        delete($sql);
    }

    function  insetProduct($name,$img,$pice,$id_catalog) {
        $sql = "INSERT INTO product (name, pice, img, id_catalog)
                    VALUES ('".$name."', '".$pice."', '".$img."','".$id_catalog."')";
        inset($sql);
    }

    function insetCatalog($name,$qty,$loaiHang) {
        $sql = "INSERT INTO danhmuc (tenLH, soluong, idDM)
                    VALUES ('".$name."', '".$qty."','".$loaiHang."')";
        inset($sql);
    }

    function insetUser($name,$pass,$sdt,$diaChi,$role,$hoVaTen) {
        $sql = "INSERT INTO khachhang (nameKH, pass, diachi, sdt, role, ten)
        VALUES ('".$name."', '".$pass."', '".$diaChi."','".$sdt."','".$role."','".$hoVaTen."')";
        inset($sql);
    }

    function  insetUserView( $ten,$nameKH,$pass) {
        $sql = "INSERT INTO khachhang (nameKH, pass, ten) VALUES ('".$nameKH."', '".$pass."','".$ten."')";
        inset($sql);
    }

    
    function getPartner() {
        $sql = "SELECT *  FROM partner ";
        return get_All($sql);
    }
    // function getProduct() {
    //     $sql = "SELECT *  FROM sanpham ";
    //     return get_All($sql);
    // }
    function getCatalog() {
        $sql = "SELECT *  FROM catalog ";
        return get_All($sql);
    }

    function showCatalog($listItems){
        $show = "";
        foreach($listItems as $Item){
            extract($Item);
            $linkItems = "index.php?page=catalog&id=".$id_catalog;
            $show .= '<li class="menu__catalog">
                        <a href="'.$linkItems.'" class="menu__catalog--act row">
                            <img src="./assets/icons/'.$img_catalog.'.png" alt="" class="catalog__act--icon">
                            <span class="catalog__act--title">'.$name_catalog.'</span>
                        </a>
                    </li>';
        }
        return $show;

    }

    function getUserShow() {
        $sql = "SELECT *  FROM khachhang ";
        return get_All($sql);
    }
    function getWatch() {
        $sql = "SELECT *  FROM sanpham where loaiHang= 3 limit 4 ";
        return get_All($sql);
    }
    // update


    function update_Product($name,$img, $pice, $id_catalog,$id) {
        $sql = "UPDATE product SET name='$name', img='$img', pice='$pice', id_catalog='$id_catalog' WHERE id=".$id;
        update($sql);
    }
    
    function update_Catalog($id, $name, $qty) {
        $sql = "UPDATE danhmuc SET tenLH='$name', soluong='$qty' WHERE idDM=".$id;
        update($sql);
    }
    
    function  update_User($idKH,$name,$pass,$sdt,$diaChi,$role,$ten) {
        $sql = "UPDATE khachhang SET ten='$ten', nameKH='$name', pass='$pass', sdt='$sdt', diachi='$diaChi', role='$role' WHERE idKH=".$idKH;
        update($sql);
    }
    
    function getCatalogDetailAdmin($idDM) {
        $sql = "SELECT *  FROM danhmuc where idDM=".$idDM;
        return get_One($sql);
    }
    function getProductDetailAdmin($id) {
        $sql = "SELECT *  FROM product where id=".$id;
        return get_One($sql);
    }
    function getUserDetailAdmin($id) {
        $sql = "SELECT *  FROM khachhang where idKH=".$id;
        return get_One($sql);
    }
?>