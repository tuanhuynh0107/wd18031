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

    function getAlbum() {
        $sql = "SELECT product.*, album.img_main as img_main, album.id_prd as id_prd 
                FROM product
                LEFT JOIN album ON album.id_prd = product.id limit 5";
        return get_All($sql);
    }
    function getProduct($id_pro){
        $sql= "SELECT * FROM product WHERE id=".$id_pro;
        return get_One($sql);
    }
    function getDetailProduct() {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        c.name_catalog AS category_name,
        p.price AS product_price,
        dp.type AS product_type,
        dp.production AS product_image,
        dp.sale AS product_sale,
        a.img_main AS album_image
      FROM
        product p
      JOIN
        catalog c ON p.id_catalog = c.id_catalog
      JOIN
        detail_product dp ON p.id = dp.id_prd
      LEFT JOIN
        album a ON p.id = a.id_prd";
        return get_All($sql);
    }

    function showProduct($listItems){
        $kq = "";
        foreach ($listItems as $Item) {
            
            extract($Item);
            // if($product_sale != ""){
            //     $priceSale = $product_price * ($product_sale /100);
            //     $sale .='<del class="price-del">'.number_format($priceSale,0,",",".").'</del>';
            // }else{
            //     $sale .='';
            // }
            $linkProduct = 'index.php?page=product&idProduct='.$product_id;
            $kq .= '<div class="course-item">
            <a href="'.$linkProduct.'">
                <img src="./assets/img/img_main/'.$album_image.'.png" alt="Basic web design" class="thumb" />
            </a>
            <div class="info row">

                <div class="body row">
                    <h3 class="title">
                        <a href="#!" class="line-clamp break-all">
                            '.$product_name.'
                        </a>
                    </h3>

                    <div class="add__to-Cart">
                        <form action="#!" method="post">
                            <label for="add__Cart" class="icon__addCart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                    viewBox="0 0 19 19" fill="none">
                                    <path
                                        d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                        fill="black" />
                                </svg>
                            </label>
                            <input type="submit" value="" class="none" id="add__Cart">
                        </form>
                    </div>
                </div>
                <div class="foot row">
                    <span class="price">'.number_format($product_price,0,",",".").' VND</span><span class="type">/ '.$product_type.'</span>
                   
                    <div class="rating">
                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                            fill="none" class="star">
                            <path
                                d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                fill="#FCE75F" />
                        </svg>
                        <span class="value">Hot</span>
                    </div>
                </div>
            </div>
            <input type="submit" value="Mua ngay" class="btn book-btn">
        </div>';
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
        $sql = "SELECT *  FROM detail_product where id_DP=".$idProduct;
        return get_One($sql);
    }
    function getOneAlbum($idProduct){
        $sql = "SELECT *  FROM album where id=".$idProduct;
        return get_One($sql);
    }
    // sản phẩm cùng loại
    function sameTypeProducts($idCatalog){
        $sql= "SELECT
        p.id AS product_id,
        p.name AS product_name,
        c.name_catalog AS category_name,
        p.price AS product_price,
        dp.type AS product_type,
        dp.production AS product_image,
        a.img1 AS album_image
      FROM
        product p
      JOIN
        catalog c ON p.id_catalog = c.id_catalog
      JOIN
        detail_product dp ON p.id = dp.id_prd
      LEFT JOIN
        album a ON p.id = a.id_prd
      WHERE
        c.name_catalog =".$idCatalog;
        return get_All($sql);
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
    //     $sql = "SELECT *  FROM product ";
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