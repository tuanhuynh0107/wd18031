<?php 
  function upDataQty($index) {
    if (isset($_SESSION['cart'][$index])) {
        $_SESSION['cart'][$index]["qtyPro"] += 1;
    }
}

function checkDuplicates($id) {
    foreach ($_SESSION['cart'] as $index => $item) {
        if ($item["idProduct"] == $id) {
            return $index;
        }
    }
    return -1;
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
        a.img1 AS album_image
      FROM
        product p
      JOIN
        catalog c ON p.id_catalog = c.id_catalog
      JOIN
        detail_product dp ON p.id = dp.id_prd
      LEFT JOIN
        album a ON p.id = a.id_prd" ;
        return get_All($sql);
    }

    

    function getDetailProductLimitRanDom() {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        c.name_catalog AS category_name,
        p.price AS product_price,
        dp.type AS product_type,
        dp.production AS product_image,
        dp.sale AS product_sale,
        a.img1 AS album_image
      FROM
        product p
      JOIN
        catalog c ON p.id_catalog = c.id_catalog
      JOIN
        detail_product dp ON p.id = dp.id_prd
      LEFT JOIN
        album a ON p.id = a.id_prd ORDER BY RAND() limit 5";
        return get_All($sql);
    }

    function getDetailProductLimit() {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        c.name_catalog AS category_name,
        p.price AS product_price,
        dp.type AS product_type,
        dp.production AS product_image,
        dp.sale AS product_sale,
        a.img1 AS album_image
      FROM
        product p
      JOIN
        catalog c ON p.id_catalog = c.id_catalog
      JOIN
        detail_product dp ON p.id = dp.id_prd
      LEFT JOIN
        album a ON p.id = a.id_prd limit 5";
        return get_All($sql);
    }

    function showProduct($listItems){
        $kq = "";
        $id_lable=1;
       
        foreach ($listItems as $Item) {
            
            extract($Item);
            $sale = "";
            if($product_sale > 0){
                $priceSale = $product_price * ($product_sale /100);
                $sale .='<del class="price-del">'.number_format($priceSale,0,",",".").' đ</del>';
            }else{
                $sale .='';
            }
          
            $linkAddCart='index.php?page=addCart&idProduct='.$product_id;
            $linkProduct = 'index.php?page=product&idProduct='.$product_id;
            $proQty=1;
            $kq .= '<div class="course-item">
            <a href="'.$linkProduct.'">
                <img src="./assets/img/img_main/'.$album_image.'.png" alt="Basic web design" class="thumb" />
            </a>
            <div class="info row">
                <div class="body row">
                    <h3 class="title">
                        <a href="'.$linkProduct.'" class="line-clamp break-all">
                            '.$product_name.'
                        </a>
                    </h3>

                    <div class="add__to-Cart">
                        <form action="'.$linkAddCart.'" method="post">
                            <input type="hidden" name="idPro" value="'.$product_id.'">
                            <input type="hidden" name="imgPro" value="'.$album_image.'">
                            <input type="hidden" name="namePro" value="'.$product_name.'">
                            <input type="hidden" name="pricePro" value="'.$product_price.'">
                            <input type="hidden" name="typePro" value="'.$product_type.'">
                            <input type="hidden" name="qtyPro" value="'.$proQty.'">
                            <input type="hidden" name="nameCata" value="'.$category_name.'">
                            <input type="submit" name="addCart" class="none" value="Thêm" id="addCart'.$id_lable.'">
                            <label for="addCart'.$id_lable.'" class="icon__addCart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                    <path d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z" fill="black"/>
                                </svg>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="foot row">
                    <span class="price">'.number_format($product_price,0,",",".").' VND / '.$product_type.'</span>'.$sale.'
                   
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
        $id_lable++;
        }
        return $kq;
    }
    // Show sản phẩm theo catalog
    function getBannerCatalog($id_Cata){
        $sql = "SELECT * FROM catalog Where id_catalog=".$id_Cata;
        return get_All($sql);
    }
    function showBannerCatalog($banner_catalog){
        foreach($banner_catalog as $itemBaner){
            extract($itemBaner);
            echo '<a href="">
                    <img src="./assets/img/banner_product/'.$banner_catalog.'.png" alt="">
                </a>';
        }
    }
    function getItemCatalog($id_Cata) {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        c.name_catalog AS category_name,
        p.price AS product_price,
        dp.type AS product_type,
        dp.production AS product_image,
        dp.sale AS product_sale,
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
        c.id_catalog=".$id_Cata ;
        return get_All($sql); 
    }
// load user
function showImgUser(){
    if(!isset($_SESSION['user_info'])){
        $name_user="";
       echo' <a href="index.php?page=login" class="btn sign-up-btn">Đăng nhập</a>';
    }else{
        if(isset($_SESSION['user_info'])&& $_SESSION['user_info']['img']!=""){
               $name_user=$_SESSION['user_info']['username'];
            echo '<a href="index.php?page=login">
                    <img src="./assets/user/'.$_SESSION['user_info']['img'].'.png" alt="">
                      <div class="action__name-user">'.$name_user.' </div>
                </a>
              
                ';
        }else{
            if(isset($_SESSION['user_info'])&& $_SESSION['user_info']['img'] ==""){
                   $name_user=$_SESSION['user_info']['username'];
                echo '
                <a href="index.php?page=login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none" class="action__incons">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25 0C38.8075 0 50 11.1925 50 25C50.0088 30.7697 48.0134 36.3634 44.355 40.825L44.405 40.88L44.075 41.16C41.7305 43.933 38.8089 46.1608 35.5143 47.6877C32.2196 49.2145 28.6313 50.0037 25 49.9999C17.625 49.9999 11 46.8074 6.42502 41.7325L5.92502 41.1575L5.59502 40.8825L5.64502 40.8225C1.98692 36.3617 -0.00841855 30.7689 2.66985e-05 25C2.66985e-05 11.1925 11.1925 0 25 0ZM25 37.5C20.35 37.5 16.1475 38.98 13.0175 41.0125C16.4732 43.6065 20.679 45.0061 25 44.9999C29.321 45.0061 33.5268 43.6065 36.9825 41.0125C33.4056 38.7215 29.2476 37.5026 25 37.5ZM25 4.99999C21.2363 4.99989 17.549 6.06178 14.3618 8.06362C11.1747 10.0655 8.61703 12.926 6.98292 16.3164C5.34881 19.7068 4.70453 23.4896 5.12415 27.2298C5.54376 30.97 7.01024 34.5159 9.35502 37.46C13.4075 34.5525 18.9375 32.5 25 32.5C31.0625 32.5 36.5925 34.5525 40.645 37.46C42.9898 34.5159 44.4562 30.97 44.8759 27.2298C45.2955 23.4896 44.6512 19.7068 43.0171 16.3164C41.383 12.926 38.8253 10.0655 35.6382 8.06362C32.451 6.06178 28.7637 4.99989 25 4.99999ZM25 9.99999C27.6522 9.99999 30.1957 11.0536 32.0711 12.9289C33.9464 14.8043 35 17.3478 35 20C35 22.6521 33.9464 25.1957 32.0711 27.071C30.1957 28.9464 27.6522 30 25 30C22.3478 30 19.8043 28.9464 17.9289 27.071C16.0536 25.1957 15 22.6521 15 20C15 17.3478 16.0536 14.8043 17.9289 12.9289C19.8043 11.0536 22.3478 9.99999 25 9.99999ZM25 15C23.6739 15 22.4021 15.5268 21.4645 16.4644C20.5268 17.4021 20 18.6739 20 20C20 21.3261 20.5268 22.5978 21.4645 23.5355C22.4021 24.4732 23.6739 25 25 25C26.3261 25 27.5978 24.4732 28.5355 23.5355C29.4732 22.5978 30 21.3261 30 20C30 18.6739 29.4732 17.4021 28.5355 16.4644C27.5978 15.5268 26.3261 15 25 15Z" fill="black"/>
                    </svg>
                     <div class="action__name-user">'.$name_user.' </div>
                </a>';
            }
        }
    }
}
function showImgAdmin(){
    if(!isset($_SESSION['user_info'])){
        $name_user="";
       echo' <a href="index.php?page=login" class="btn sign-up-btn">Đăng nhập</a>';
    }else{
        if(isset($_SESSION['user_info'])&& $_SESSION['user_info']['img']!=""){
               $name_user=$_SESSION['user_info']['username'];
            echo '<img src="../assets/user/'.$_SESSION['user_info']['img'].'.png" alt="" class="user__clon"
                    style="height: 30px; width: 30px; object-fit: cover;">
                <p class="user__title">
                    '.$name_user.'
                </p>
              
                ';
        }else{
            if(isset($_SESSION['user_info'])&& $_SESSION['user_info']['img'] ==""){
                   $name_user=$_SESSION['user_info']['username'];
                echo '
                <a href="index.php?page=login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none" class="action__incons">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25 0C38.8075 0 50 11.1925 50 25C50.0088 30.7697 48.0134 36.3634 44.355 40.825L44.405 40.88L44.075 41.16C41.7305 43.933 38.8089 46.1608 35.5143 47.6877C32.2196 49.2145 28.6313 50.0037 25 49.9999C17.625 49.9999 11 46.8074 6.42502 41.7325L5.92502 41.1575L5.59502 40.8825L5.64502 40.8225C1.98692 36.3617 -0.00841855 30.7689 2.66985e-05 25C2.66985e-05 11.1925 11.1925 0 25 0ZM25 37.5C20.35 37.5 16.1475 38.98 13.0175 41.0125C16.4732 43.6065 20.679 45.0061 25 44.9999C29.321 45.0061 33.5268 43.6065 36.9825 41.0125C33.4056 38.7215 29.2476 37.5026 25 37.5ZM25 4.99999C21.2363 4.99989 17.549 6.06178 14.3618 8.06362C11.1747 10.0655 8.61703 12.926 6.98292 16.3164C5.34881 19.7068 4.70453 23.4896 5.12415 27.2298C5.54376 30.97 7.01024 34.5159 9.35502 37.46C13.4075 34.5525 18.9375 32.5 25 32.5C31.0625 32.5 36.5925 34.5525 40.645 37.46C42.9898 34.5159 44.4562 30.97 44.8759 27.2298C45.2955 23.4896 44.6512 19.7068 43.0171 16.3164C41.383 12.926 38.8253 10.0655 35.6382 8.06362C32.451 6.06178 28.7637 4.99989 25 4.99999ZM25 9.99999C27.6522 9.99999 30.1957 11.0536 32.0711 12.9289C33.9464 14.8043 35 17.3478 35 20C35 22.6521 33.9464 25.1957 32.0711 27.071C30.1957 28.9464 27.6522 30 25 30C22.3478 30 19.8043 28.9464 17.9289 27.071C16.0536 25.1957 15 22.6521 15 20C15 17.3478 16.0536 14.8043 17.9289 12.9289C19.8043 11.0536 22.3478 9.99999 25 9.99999ZM25 15C23.6739 15 22.4021 15.5268 21.4645 16.4644C20.5268 17.4021 20 18.6739 20 20C20 21.3261 20.5268 22.5978 21.4645 23.5355C22.4021 24.4732 23.6739 25 25 25C26.3261 25 27.5978 24.4732 28.5355 23.5355C29.4732 22.5978 30 21.3261 30 20C30 18.6739 29.4732 17.4021 28.5355 16.4644C27.5978 15.5268 26.3261 15 25 15Z" fill="black"/>
                    </svg>
                     <div class="action__name-user">'.$name_user.' </div>
                </a>';
            }
        }
    }
}
// admin


    function getProductDetail($idProduct) {
        $sql = "SELECT *  FROM detail_product where id_prd=".$idProduct;
        return get_One($sql);
    }
    function getOneAlbum($idProduct){
        $sql = "SELECT *  FROM album where id_prd=".$idProduct;
        return get_One($sql);
    }
    // sản phẩm cùng loại
    function sameTypeProducts($id_catalog){
        $sql = "SELECT
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
            c.name_catalog = '$id_catalog'";
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


    function getUser($phone, $pass) {
        $conn = db();
        $sql = "SELECT * FROM user WHERE phone=:phone AND pass=:pass";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetch();
        $conn = null;
    
        return $user; // Return the entire user row
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

    // function insetUser($name,$pass,$sdt,$diaChi,$role,$hoVaTen) {
    //     $sql = "INSERT INTO khachhang (nameKH, pass, diachi, sdt, role, ten)
    //     VALUES ('".$name."', '".$pass."', '".$diaChi."','".$sdt."','".$role."','".$hoVaTen."')";
    //     inset($sql);
    // }

    function  insetUser($phone,$pass) {
        
        $sql = "INSERT INTO user (phone, pass) VALUES ('".$phone."', '".$pass."')";
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
            $linkItems = "index.php?page=showCatalog&id_Cata=".$id_catalog;
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

    // add cart
    function showCart($listCart){
        $listCart=$_SESSION['cart'];  
            if(isset($listCart)&&is_array($listCart))  {
                $cart="";
                $idCart= 1;
                $total_qty=0;
                foreach ($listCart as $item) {
                    extract($item);
                    $total = $pricePro * $qty;
                    $linkDeleCart = "index.php?page=delCart&ind=".$idCart;
                    $cart.= '
                    <div class="cart__content--item">
                            <div class="cart--item__nav row">
                                <ul class="cart__nav row">
                                    <li class="row">Danh mục: <span class="cart__nav--li__catalog">'.$nameCata.'</span>
                                    </li>
                                    <li class="cart__nav--li row">
                                        <p>ngày thêm: 04-10/2026</p>
                                        <p>trạng thái: <span>còn hàng</span></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart--item__box  row">
                                <input type="checkbox" name="" id="">
                                <img src="../assets/img/combo1.png" alt="" class="cart--item__box--img">
                                <div class="cart--item__desc">
                                    <div class="cart--desc__title">'.$namePro.'</div>
                                    <div class="cart--desc__classly">
                                        Phân loại: '.$typePro.'
                                    </div>
                                    <div class="cart--desc__pice">Giá:'.number_format($pricePro,0,",",".").' VNĐ</div>
                                    <div class="cart--desc-trash">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31"
                                            viewBox="0 0 31 31" fill="none">
                                            <path
                                                d="M7.02856 7.0625L8.13134 20.6989C8.18372 21.4868 8.92534 22.0625 9.89579 22.0625H20.0413C21.0156 22.0625 21.7435 21.4868 21.8058 20.6989L22.9086 7.0625"
                                                stroke="#333333" stroke-width="1.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5.15356 7.0625H25.1536H5.15356Z" fill="#CCCCCC" />
                                            <path d="M5.15356 7.0625H25.1536" stroke="#333333" stroke-width="1.875"
                                                stroke-miterlimit="10" stroke-linecap="round" />
                                            <path
                                                d="M11.7161 6.03978V4.33523C11.7155 4.20081 11.7515 4.06765 11.822 3.94339C11.8925 3.81912 11.996 3.70622 12.1267 3.61118C12.2574 3.51613 12.4127 3.44081 12.5835 3.38955C12.7544 3.3383 12.9375 3.31211 13.1223 3.3125H17.8098C17.9946 3.31211 18.1777 3.3383 18.3486 3.38955C18.5195 3.44081 18.6747 3.51613 18.8054 3.61118C18.9361 3.70622 19.0396 3.81912 19.1101 3.94339C19.1806 4.06765 19.2166 4.20081 19.2161 4.33523V6.03978M15.4661 8.76705V18.3125M11.2473 8.76705L11.7161 18.3125M19.6848 8.76705L19.2161 18.3125"
                                                stroke="#333333" stroke-width="1.875" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="cart--hendel row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                                        fill="none">
                                        <path d="M11.8856 5.25L7.96606 11.4093L4.04648 5.25L11.8856 5.25Z"
                                            fill="#C0C0C0" stroke="black" stroke-width="0.5" />
                                    </svg>
                                    <input type="text" value="01" name="" id="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                                        fill="none">
                                        <path d="M4.04648 9.75L7.96606 3.59066L11.8856 9.75H4.04648Z" fill="#C0C0C0"
                                            stroke="black" stroke-width="0.5" />
                                    </svg>
                                </div>
                                <div class="cart-total">
                                   '.$total.'
                                </div>
                                <div class="cart-operation"><a href="'.$linkDeleCart.'">xóa</a></div>
                            </div>
                        </div>
                    ';
                    $idCart++;
                    $total_qty += $total;
                    
                }
                 return $cart;
            }
           
    }
    function insert_Package($name, $address, $phone, $pay_ms, $total_All, $status, $time, $note, $id_user) {
        $sql="INSERT INTO package (name, address, phone, pay_ms, total, status, time, note, id_user) 
             VALUES ('$name', '$address', '$phone', '$pay_ms', '$total_All', '$status', '$time', '$note', '$id_user')";
             return pdo_execute_return_lastInsertId($sql);
    }
    function insert_Detail_Package($name_prd,$qty,$price, $total,$id_package,$id_trans) {
        $sql="INSERT INTO detail_package (name_prd, qty, price, total, id_package, id_trans) 
             VALUES ('$name_prd','$qty','$price', '$total','$id_package','$id_trans')";
             return pdo_execute_return_lastInsertId($sql);
    }
    function   update_changeAdress($id_user, $phone, $name, $pass, $address){
        $sql = "UPDATE user SET username='".$name."',pass='".$pass."',address='".$address."',phone='".$phone."' WHERE id_user=".$id_user;
        return update($sql);
    }
    // function removeFromCart($product_id) {
    //     if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    //         foreach($_SESSION['cart'] as $key => $item) {
    //             if($item['idProduct'] == $product_id) {
    //                 // Xóa sản phẩm khỏi giỏ hàng
    //                 unset($_SESSION['cart'][$key]);
    //                 break; // Dừng khi tìm thấy sản phẩm cần xóa
    //             }
    //         }
    //     }
    // }


    // funtion admin viết ở đây

    function getAdminCatalog(){
        $sql="SELECT * FROM catalog ";
        return get_All($sql);
    }
    // Xoa catalog
    function deleteCatalog($id){
        $sql= "DELETE FROM catalog where id_catalog=".$id;
         delete($sql);
    }
    function get_One_Admin_Catalog($id){
        $sql = "SELECT * FROM catalog WHERE id_catalog=".$id;
        return get_One($sql);
    }
    function insertCatalog($nameCatalog, $qtyCatalog) {
        $sql = "INSERT INTO catalog( name_catalog, qty_catalog) 
        VALUES ('$nameCatalog', '$qtyCatalog')";
        inset($sql);
    }
    function updateCatalog($id, $nameCatalog, $quantityCatalog) {
        $sql = "UPDATE catalog SET name_catalog='".$nameCatalog."', qty_catalog='".$quantityCatalog."' WHERE id_catalog=".$id;
        update($sql);
    }
    function get_List_Catalog($listCatalog){
        foreach($listCatalog as $cata){
            extract($cata);
            $linkUpdateCatalog='index.php?page=updateCatalog&id_catalog='.$id_catalog;
            $linkDeleteCatalog='index.php?page=DeleteCatalog&id_catalog='.$id_catalog;
            echo 
            '
            <tr>
                <td><a href="">#'.$id_catalog.'</a></td>
                <td>'.$name_catalog.'</td>
                <td>'.$qty_catalog.'</td>
                <td>
                    <a href="'.$linkUpdateCatalog.'" class="hendel-update-act">Sửa</a>|
                    <a href="'.$linkDeleteCatalog.'" class="hendel-delete-act">Xóa</a>
                </td>
            </tr>
            ';
        }
    }
    // product
    function getAdminProduct(){
        $sql="SELECT 
        p.id AS product_id,
        p.name AS product_name,
        p.price AS product_price,
        p.qty AS product_qty,
        dp.sale AS detail_product_sale,
        dp.type AS detail_product_type
    FROM 
        product p
    JOIN 
        detail_product dp ON p.id = dp.id_prd";
        return get_All($sql);
    }
?>