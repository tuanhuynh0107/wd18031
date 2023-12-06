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
    $sql= "SELECT p.*,  c.name_catalog AS category_name  FROM product p
    JOIN
        catalog c ON p.id_catalog = c.id_catalog 
    WHERE id=".$id_pro;
    return get_One($sql);
}
    function getDetailProduct() {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        p.qty AS product_qty,
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
    WHERE p.status_prd = 1" ;
        return get_All($sql);
    }

    function getDetailProductLimitRanDom() {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        p.qty AS product_qty,
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
    WHERE p.status_prd = 1

    ORDER BY RAND() limit 10";
        return get_All($sql);
    }

    function getDetailProductLimit() {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        p.qty AS product_qty,
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
      WHERE p.status_prd = 1
        limit 10";
        return get_All($sql);
    }
    function getDetailSaleProductLimit() {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        c.name_catalog AS category_name,
        p.price AS product_price,
        dp.type AS product_type,
        dp.production AS product_image,
        dp.sale AS product_sale,
        a.img1 AS album_image,
        p.qty AS product_qty 

      FROM
        product p
      JOIN
        catalog c ON p.id_catalog = c.id_catalog
      JOIN
        detail_product dp ON p.id = dp.id_prd
      LEFT JOIN
        album a ON p.id = a.id_prd 
      WHERE 
        dp.sale > 0 AND p.status_prd = 1 limit 10";
        return get_All($sql);
    }
    function getDetailSpecialtyProductLimit() {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        p.qty AS product_qty,
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
        c.id_catalog = 2 AND p.status_prd = 1 limit 10";
        return get_All($sql);
    }
    function showProduct($listItems){
        $kq = "";
        $id_lable=1;
       
        foreach ($listItems as $Item) {
            
            extract($Item);
            $saleShow = "";
            if($product_sale > 0){
                $priceSale = $product_price * ($product_sale / 100 );
                $afterPriceReduction = $product_price - $priceSale;
                $saleShow .='                    
                    <span class="price">'.number_format( $afterPriceReduction,0,",",".").' VND / '.$product_type.'</span> <del class="price-del">'.number_format($product_price,0,",",".").' đ</del>
                ';
            }else{
                $saleShow .='

                <span class="price">'.number_format($product_price,0,",",".").' VND / '.$product_type.'</span> 

                ';
            }

            if($product_sale > 0){
               $showInputHidden= '<input type="hidden" name="pricePro" value="'. $afterPriceReduction.'">';
            }else{
                $showInputHidden='<input type="hidden" name="pricePro" value="'.$product_price.'">';
            }
            $linkAddCart='index.php?page=addCart&idProduct='.$product_id;
            $linkByNow='index.php?page=byNow&idProduct='.$product_id;
            $linkProduct = 'index.php?page=product&idProduct='.$product_id;
            $proQty=1;
            $kq .= '<div class="course-item">
            <a href="'.$linkProduct.'" class="course__images">
                <img src="./assets/img/img_main/'.$album_image.'" alt="Basic web design" class="thumb" />
                
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
                            '.$showInputHidden.'
                            <input type="hidden" name="typePro" value="'.$product_type.'">
                            <input type="hidden" name="qtyPro" value="'.$proQty.'">
                            <input type="hidden" name="nameCata" value="'.$category_name.'">
                            <input type="hidden" name="qty" value="'.$product_qty.'">
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
                    '.$saleShow.'
                </div>
            </div>
            
            <form action="'.$linkByNow.'" method="post">
                <input type="hidden" name="idPro" value="'.$product_id.'">
                <input type="hidden" name="imgPro" value="'.$album_image.'">
                <input type="hidden" name="namePro" value="'.$product_name.'">
                '. $showInputHidden.'
                <input type="hidden" name="typePro" value="'.$product_type.'">
                <input type="hidden" name="qtyPro" value="'.$proQty.'">
                <input type="hidden" name="nameCata" value="'.$category_name.'">
                <input type="submit" value="Mua ngay" class="btn book-btn" name="byNow">
            </form>
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
                    <img src="./assets/img/banner_product/'.$banner_catalog.'" alt="">
                </a>';
        }
    }
    function getItemCatalog($id_Cata) {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        p.qty AS product_qty,
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
     p.status_prd = 1 AND c.id_catalog=".$id_Cata ;
        return get_All($sql); 
    }
    function getItemCatalogLimit($id_Cata, $limit) {
        $sql = "SELECT
            p.id AS product_id,
            p.name AS product_name,
            p.qty AS product_qty ,
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
            c.id_catalog = '$id_Cata' 
          LIMIT $limit";
        
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
            echo '<a href="index.php?page=proFile">
                    <img src="./assets/uploads/'.$_SESSION['user_info']['img'].'" alt=""  class="sidebar--top__left--img">
                      <div class="action__name-user">'.$name_user.' </div>
                </a>
              
                ';
        }else{
            if(isset($_SESSION['user_info'])&& $_SESSION['user_info']['img'] ==""){
                   $name_user=$_SESSION['user_info']['username'];
                echo '
                <a href="index.php?page=proFile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 30 30" fill="none">
                        <rect width="30" height="30" rx="15" fill="white"/>
                        <path d="M15.0601 25.2C9.42011 25.2 4.86011 20.64 4.86011 15C4.86011 9.36005 9.42011 4.80005 15.0601 4.80005C20.7001 4.80005 25.2601 9.36005 25.2601 15C25.2601 20.64 20.6401 25.2 15.0601 25.2ZM15.0601 6.00005C10.0801 6.00005 6.06011 10.02 6.06011 15C6.06011 19.98 10.0801 24 15.0601 24C20.0401 24 24.0601 19.98 24.0601 15C24.0601 10.02 19.9801 6.00005 15.0601 6.00005Z" fill="#333333"/>
                        <path d="M9.1801 22.38L8.1001 21.9C8.4001 21.18 9.3601 20.76 10.3801 20.28C11.4001 19.8 12.6601 19.26 12.6601 18.6V17.7C12.3001 17.4 11.7001 16.74 11.5801 15.78C11.2801 15.48 10.8001 14.94 10.8001 14.22C10.8001 13.8 10.9801 13.44 11.1001 13.2C10.9801 12.72 10.8601 11.82 10.8601 11.1C10.8601 8.75995 12.4801 7.19995 15.0601 7.19995C15.7801 7.19995 16.6801 7.37995 17.1601 7.91995C18.3001 8.15995 19.2601 9.47995 19.2601 11.1C19.2601 12.12 19.0801 12.96 18.9601 13.38C19.0801 13.56 19.2001 13.86 19.2001 14.22C19.2001 15 18.7801 15.54 18.4201 15.78C18.3001 16.74 17.7601 17.34 17.4001 17.64V18.6C17.4001 19.14 18.4801 19.56 19.4401 19.92C20.5801 20.34 21.7801 20.82 22.2001 21.78L21.0601 22.2C20.8801 21.72 19.9201 21.36 19.0201 21.06C17.7001 20.58 16.2001 20.04 16.2001 18.66V17.1L16.5001 16.92C16.5001 16.92 17.2201 16.44 17.2201 15.48V15.06L17.5801 14.88C17.6401 14.88 17.9401 14.7 17.9401 14.22C17.9401 14.1 17.8201 13.92 17.7601 13.86L17.5201 13.62L17.6401 13.32C17.6401 13.32 17.9401 12.36 17.9401 11.16C17.9401 10.02 17.2801 9.17995 16.7401 9.17995H16.3801L16.2001 8.87995C16.2001 8.63995 15.7801 8.39995 15.0601 8.39995C13.2001 8.39995 12.0601 9.41995 12.0601 11.1C12.0601 11.88 12.3601 13.2 12.3601 13.2L12.4201 13.5L12.1801 13.8C12.1201 13.8 12.0001 13.98 12.0001 14.22C12.0001 14.52 12.3601 14.88 12.5401 15L12.7801 15.18V15.48C12.7801 16.38 13.5601 16.86 13.5601 16.92L13.8601 17.1V18.66C13.8601 20.1 12.3001 20.82 10.8601 21.42C10.2001 21.66 9.3001 22.08 9.1801 22.38Z" fill="#333333"/>
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

// user
function loadAllUser($id_user){
    $sql = "SELECT * FROM user WHERE id_user = ".$id_user;
    return get_One($sql);
}
 function updateImgUser($id_user,$hinh){
    if($hinh!==""){
         $sql="UPDATE `user`
    SET 
      `img` = '$hinh'
    WHERE 
      `id_user` =".$id_user;
      update($sql);
        return $hinh;
    }else{
        return null;
    }
 
   
 }
 function updateProfile($name_user, $email_user, $gender_user, $dob_user, $phone_user, $adress_user, $id_user) {
           $sql = "UPDATE `user` 
           SET 
             `dob` = '$dob_user',
             `phone` = '$phone_user',
             `username` = '$name_user',
             `address` = '$adress_user',
             `gender` = '$gender_user',
             `email` = '$email_user'
           WHERE 
             `id_user` = ".$id_user;
            update($sql);
}
// Forfie
function getIdPackage($idPackage){
    $sql="SELECT * FROM detail_package WHERE id_package=".$idPackage;
    return get_All($sql);
}
function insertCommentFeadBack($idPackage, $dateComment,$textComment){
    $sql= "INSERT INTO fead_back(id_package, content_feedback, time) VALUES ('".$idPackage."', '".$textComment."','".$dateComment."')";
    inset($sql);
}
function insertPackage($idPackage, $stastusPb){
    $sql="UPDATE package SET status_feadback = '$stastusPb' WHERE id_package = $idPackage";
    update($sql);
}
function getYourCart($id_user){
    $sql="SELECT * FROM package WHERE id_User=".$id_user;
    $sql.=" ORDER BY id_package DESC limit 10";
    return get_All($sql);
}
function getYourProduct($id_user){
    $sql="SELECT
        dp.*
    FROM
        detail_package dp
    JOIN
        package pa ON dp.id_package = pa.id_package
    LEFT JOIN
        user u ON pa.id_User = u.id_user
    WHERE
        u.id_user =".$id_user;
    $sql.=" ORDER BY dp.id_Detail_Package DESC";   
        return get_All($sql);
}
function generateRandomPassword($length = 8) {
    $pattern = "/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{6,}$/";
    $password = '';

    do {
        $password = '';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
    } while (!preg_match($pattern, $password));

    return $password;
}
function forgotPassUser($phone) {
    // Kiểm tra xem trường "phone" có bị để trống không
    if (empty($phone)) {
       $notify_pass = "Số điện thoại của bạn chưa được nhập";
    } else {
        if(!preg_match("/^(0[3|5|7|8|9])+([0-9]{8})$/", $phone)){
            $notify_pass = "Sai định dang";
        }else{
             // Kiểm tra xem tên loại đã tồn tại trong cơ sở dữ liệu chưa
            $sql = "SELECT * FROM user WHERE phone = ?";
            $existingphone = pdo_query_one($sql, $phone);

            if (!$existingphone) {
                $notify_pass = "Sai số điện thoại";
            } else {       
                $phoneNumber = $phone; 
                // Tạo mật khẩu ngẫu nhiên
                $newPassword = generateRandomPassword();
                // Cập nhật mật khẩu mới trong cơ sở dữ liệu
                $sql = "UPDATE user SET pass = '$newPassword' WHERE phone = '$phoneNumber'";
                update($sql);
                $notify_pass = $newPassword;        
            }
        }
       
    }
       return $notify_pass;
   }
   function updatePassWord($oldPass, $newPass, $comfrimNewPass, $id_user){
        if(empty($oldPass)||empty($newPass)||empty($comfrimNewPass)){
            $notify_passWord="Không được để trống";
        }else{
            if(!preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{6,}$/", $oldPass) &&
            !preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{6,}$/", $newPass) &&
            !preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{6,}$/", $comfrimNewPass)){
                $notify_passWord= "Mật khẩu không đúng địng dạng";
            }else{
                $sql = "SELECT * FROM user WHERE id_user = ? AND pass= ?";
                $existingidUser = pdo_query_one($sql, $id_user,$oldPass);

                if (!$existingidUser) {
                    $notify_passWord= " Mật khẩu cũ không đúng";
                }else{
                    if($newPass != $comfrimNewPass){
                        $notify_passWord= "Mật khẩu mới không trùng nhau";
                    }else{
                        $sql = "UPDATE user SET pass = '$newPass' WHERE id_user = ".$id_user;
                        update($sql);
                        $notify_passWord= "Cập nhật mật khẩu thành công";
                    }
                } 
            }
         
        }
           return $notify_passWord;
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
    // function delCartUser($id_user, $) {
    //     $sql = "DELETE FROM danhmuc WHERE idDM = ".$idDM;
    //     delete($sql);
    // }
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
                            <img src="./assets/icons/'.$img_catalog.'" alt="" class="catalog__act--icon">
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
    function insert_Detail_Package($name_prd,$qty,$price, $total,$id_package,$id_trans,$idProduct) {
        $sql="INSERT INTO detail_package (name_prd, qty, price, total, id_package, id_trans,id_prd) 
             VALUES ('$name_prd','$qty','$price', '$total','$id_package','$id_trans','$idProduct')";
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
        // $sql="SELECT * FROM catalog";
        $sql="SELECT catalog.id_catalog,
                catalog.name_catalog,
                catalog.banner_catalog,
                catalog.img_catalog,
                COUNT(product.id) AS product_count
        FROM catalog
        LEFT JOIN product ON catalog.id_catalog = product.id_catalog
        GROUP BY catalog.id_catalog, catalog.name_catalog,  catalog.banner_catalog, catalog.img_catalog;
 ";
        return get_All($sql);
    }
    function getAdminCatalogWork(){
        $sql="SELECT c.id_catalog, c.name_catalog
         FROM catalog c
         JOIN product p ON p.id_catalog = c.id_catalog
          GROUP BY c.id_catalog, c.name_catalog
        ";
        return get_All($sql);
    }
    function getAdminDetailCatalog($id){
        $sql="SELECT 
            p.id AS product_id,
            p.name AS product_name,
            -- p.price AS product_price,
            -- p.qty AS product_qty,
            -- p.status_prd AS product_status,
            c.name_catalog AS catalog_name
        FROM 
            product p
        JOIN 
            catalog c ON p.id_catalog = c.id_catalog 
        WHERE p.id_catalog = ".$id;
            
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
    function insertCatalog($nameCatalog, $qtyCatalog,$satus,  $bannerCatalog, $iconsCatalog) {
        $sql = "INSERT INTO catalog (name_catalog, qty_catalog, status_catalog, banner_catalog, img_catalog)
         VALUES ('$nameCatalog', $qtyCatalog, '$satus', '$bannerCatalog', '$iconsCatalog')";
        inset($sql);
    }
    function updateCatalog($nameCatalog, $qtyCatalog,$satus, $bannerCatalog, $iconsCatalog, $id){
        if($bannerCatalog !== "" && $iconsCatalog !== ""){
            $sql = "UPDATE catalog SET name_catalog='$nameCatalog', qty_catalog=$qtyCatalog,  status_catalog='$satus', banner_catalog='$bannerCatalog', img_catalog='$iconsCatalog' WHERE id_catalog=$id";
        }else{
            if($bannerCatalog !== "" && $iconsCatalog == ""){
                $sql = "UPDATE catalog SET name_catalog='$nameCatalog', qty_catalog=$qtyCatalog,  status_catalog='$satus', banner_catalog='$bannerCatalog' WHERE id_catalog=$id";
            }else{
                if($bannerCatalog == "" && $iconsCatalog !== ""){
                    $sql = "UPDATE catalog SET name_catalog='$nameCatalog', qty_catalog=$qtyCatalog,  status_catalog='$satus', img_catalog='$iconsCatalog'  WHERE id_catalog=$id";
                }else{
                    $sql = "UPDATE catalog SET name_catalog='$nameCatalog', qty_catalog=$qtyCatalog,  status_catalog='$satus'  WHERE id_catalog=$id";
                }
            }
        }
      
        update($sql);
    }
    function updateCatalogStatus($id_package, $indStatus) {
        $sql = "UPDATE package SET status='".$indStatus."' WHERE id_package=".$id_package;
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
                <td><img src="../assets/icons/'.$img_catalog.'" alt="" style=" width:30px; height:30px"></td>
                <td><img src="../assets/img/banner_product/'.$banner_catalog.'" alt="" style=" width:100px; height:50px"></td>
                <td>'.$name_catalog.'</td>
                <td>'.$product_count.'</td>
                <td>
                    <a href="'.$linkUpdateCatalog.'" class="hendel-update-act">Sửa</a>|
                    <a href="'.$linkDeleteCatalog.'" class="hendel-delete-act">Xóa</a>
                </td>
            </tr>
            ';
        }
    }
      // Admin home
      function getAdmin_LoadNewCart(){
            $sql="SELECT *
            FROM package
            WHERE DATE(time) BETWEEN CURDATE() - INTERVAL 2 DAY AND CURDATE() limit 3";
            return get_All($sql);
        }
      function getAdmin_LoadAllUser(){
            $sql="SELECT count(id_user) as allUser FROM user";
            return get_All($sql);
        }
    function getAdminVipUser(){
        $sql="SELECT COUNT( u.id_user) as total_customers
        FROM user u
        WHERE u.id_user IN (
            SELECT p.id_user
            FROM package p
            WHERE status = 3
            GROUP BY p.id_User
            HAVING SUM(p.total) >= 10000000
        );
        ";
         return get_All($sql);
    }
    function getAllAdminVipUser(){
        $sql="SELECT
        u.id_user,
        u.username AS customer_name,
        u.phone,
        u.email,
        COUNT(p.id_package) AS total_orders,
        SUM(p.total) AS total_order_amount
    FROM
        user u
    JOIN
        package p ON u.id_user = p.id_User
    WHERE
        u.id_user IN (
            SELECT id_User
            FROM package
            WHERE status = 3
            GROUP BY id_User
            HAVING SUM(total) >= 10000000
        )
    GROUP BY
        u.id_user, u.username, u.phone, u.email;
    ";
    return get_All($sql);
    }
    function getAllAdminBlackUser(){
        $sql="SELECT
        u.id_user,
        u.username AS customer_name,
        u.phone,
        u.email,
        COUNT(p.id_package) AS total_orders,
        SUM(p.total) AS total_order_amount
    FROM
        user u
    JOIN
        package p ON u.id_user = p.id_user
    WHERE
        u.id_user   IN (
            SELECT id_user
            FROM package
            WHERE status = 5
            GROUP BY id_user
            HAVING COUNT(id_package) >= 1
        )
        AND p.status = 5    
    GROUP BY
       p.id_User, u.id_user, u.username, u.phone, u.email
    ;";
    return get_All($sql);
    }
    function getAdminLoadKhachHangVip(){
        $sql="SELECT u.id_user as id_user, u.username as name, SUM(p.total) as total_all, u.phone as phone, u.address as address, u.email as email 
        FROM user u
        JOIN package p ON u.id_user = p.id_User AND p.status = 3
        GROUP BY u.id_user
        HAVING SUM(p.total) >= 10000000;
        ";
         return get_All($sql);
    }
    // thống kê catalog
    function getAdminCountCatalog(){
        $sql="SELECT count(DISTINCT id_catalog) as count_catalog FROM catalog";
        return get_All($sql);
    }
    function getAdminWorkCatalog(){
        $sql="SELECT COUNT(DISTINCT id_catalog) AS total_catalogs
        FROM product;";
        return get_All($sql);
    }

    // product
    function getAdminProductQty(){
        $sql= "UPDATE product ";
    }
    // function getAdminProduct(){
    //     $sql="SELECT 
    //     p.id AS product_id,
    //     p.name AS product_name,
    //     p.price AS product_price,
    //     p.qty AS product_qty,
    //     dp.sale AS detail_product_sale,
    //     dp.type AS detail_product_type
    // FROM 
    //     product p
    // JOIN 
    //     detail_product dp ON p.id = dp.id_prd 
    // ORDER BY p.id ASC";
    //     return get_All($sql);
    // }
    function getAdminProduct($offset = 0) {
        $sql = "SELECT 
                    p.id AS product_id,
                    p.name AS product_name,
                    p.price AS product_price,
                    p.qty AS product_qty,
                    p.status_prd AS product_status,
                    c.name_catalog AS catalog_name
                FROM 
                    product p
                JOIN 
                    catalog c ON p.id_catalog = c.id_catalog 
                ORDER BY p.id ASC
                LIMIT 8 OFFSET $offset";
    
        return get_All($sql);
    }
    // thêm admin detailProduct 
    function showUpdateDetailProuct($idPro){
        $sql="SELECT dp.*, a.*
        FROM detail_product dp
        JOIN album a ON dp.id_album = a.id
        WHERE dp.id_prd = ".$idPro;
        return get_All($sql);
    }
    function update_Admin_DetailProduct_album($imgMain, $img1, $img2, $img3, $img4, $img5,$name_product, $sale, $production,  $type, $text, $net_weight, $idProduct){
        $sql="UPDATE detail_product
        SET
            name_prd = '$name_product',
            sale = '$sale',
            production = '$production',
            type = '$type',
            text = '$text',
            net_weight = '$net_weight'
        WHERE
            id_prd = '$idProduct';";
        update($sql);

        if ($imgMain !== "" || $img1 !== "" || $img2 !== "" || $img3 !== "" || $img4 !== "" || $img5 !== "") {
            $sql = "UPDATE album SET";
        
            // Kiểm tra và thêm các trường cần cập nhật vào câu lệnh SQL nếu chúng không rỗng
            if ($imgMain !== "") {
                $sql .= " img_main = '$imgMain',";
            }
            if ($img1 !== "") {
                $sql .= " img1 = '$img1',";
            }
            if ($img2 !== "") {
                $sql .= " img2 = '$img2',";
            }
            if ($img3 !== "") {
                $sql .= " img3 = '$img3',";
            }
            if ($img4 !== "") {
                $sql .= " img4 = '$img4',";
            }
            if ($img5 !== "") {
                $sql .= " img5 = '$img5',";
            }
        
            // Loại bỏ dấu ',' ở cuối câu lệnh SQL
            $sql = rtrim($sql, ',');
        
            $sql .= " WHERE id_prd = '$idProduct'";
        
            update($sql);
        }


    }
    function showUpdateProuct($idpro){
        $sql="SELECT p.*, c.id_catalog as idCatalog, c.name_catalog as nameCatalog FROM product p
        JOIN
            catalog c ON p.id_catalog = c.id_catalog 
        WHERE id=".$idpro;
        return get_One($sql);
    }
    function getAdminSelectProduct(){
        $sql="SELECT * FROM product ORDER BY id ASC";
        return get_All($sql);
    }
    function getAdminSelectAlbum(){
        $sql="SELECT * FROM album ORDER BY id ASC";
        return get_All($sql);
    }
    function getAdminProductID($idPro){
        $sql="SELECT
        p.id AS product_id,
        p.name AS product_name,
        c.name_catalog AS category_name,
        c.id_catalog AS id_catalog,
        p.price AS product_price,
        dp.type AS product_type,
        dp.production AS product_image,
        dp.sale AS product_sale,
        p.qty AS product_qty,
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
        dp.id_prd =".$idPro;
        $sql.=" ORDER BY id_DP ASC";
        return get_All($sql);
    }
    function updateStautsPro($status,$id){
        $sql = "UPDATE product SET status_prd = '$status' WHERE id = ".$id;
        update($sql);
    }
    function insert_product($id_catalog,$name_product,$price_product, $qty_product) {
        $sql = "INSERT INTO product(id_catalog, name, price, qty) 
        VALUES ('$id_catalog','$name_product','$price_product', '$qty_product')";
        inset($sql);
    }
    // trang thống kê
    function getAminstatistics($id){

        if($id==1 || $id == null){
            // thống kê tổng đơn hàng trong ngày
            $sql="SELECT
                u.phone as phone,
                u.username as name,
                SUM(CASE WHEN p.status = 3 THEN p.total ELSE 0 END) AS total_status_3,
                SUM(CASE WHEN p.status = 4 THEN p.total ELSE 0 END) AS total_status_4,
                SUM(CASE WHEN p.status = 5 THEN p.total ELSE 0 END) AS total_status_5
            FROM
                package p
            JOIN
                user u ON p.id_User = u.id_user
            WHERE
                p.status IN (3, 4, 5) AND WEEK(p.time) = WEEK(CURRENT_DATE)
            GROUP BY
                name
            ORDER BY
                name;
        ";

        }else if($id==2){
            // Thống kê theo tổng đơn hàng trong tuần
            $sql="SELECT
                    u.phone as phone,
                    u.username as name,
                    SUM(CASE WHEN p.status = 3 THEN p.total ELSE 0 END) AS total_status_3,
                    SUM(CASE WHEN p.status = 4 THEN p.total ELSE 0 END) AS total_status_4,
                    SUM(CASE WHEN p.status = 5 THEN p.total ELSE 0 END) AS total_status_5
                FROM
                    package p
                JOIN
                    user u ON p.id_User = u.id_user
                WHERE
                    p.status IN (3, 4, 5) AND MONTH(p.time) = MONTH(CURRENT_DATE)
                GROUP BY
                    name
                ORDER BY
                    name;
        ";
        }else if($id==3){
            $sql="SELECT
                    u.phone as phone,
                    u.username as name,
                    SUM(CASE WHEN p.status = 3 THEN p.total ELSE 0 END) AS total_status_3,
                    SUM(CASE WHEN p.status = 4 THEN p.total ELSE 0 END) AS total_status_4,
                    SUM(CASE WHEN p.status = 5 THEN p.total ELSE 0 END) AS total_status_5
                FROM
                    package p
                JOIN
                    user u ON p.id_User = u.id_user
                WHERE
                    p.status IN (3, 4, 5) AND YEAR(p.time) = YEAR(CURRENT_DATE)
                GROUP BY
                    name
                ORDER BY
                    name;";
        }
        return get_All($sql);
    }
    function getAminstatisticsCatalog($id){
        if($id==4){
            $sql="SELECT qty_catalog as qty, name_catalog as namePro FROM catalog";
        }
        return get_All($sql);
    }
    function getAminstatisticsProduct($id){
        if($id==5){
            $sql="SELECT name_prd as nameProduct, SUM(qty) as qtysold 
            FROM  detail_package
            GROUP BY
            name_prd";
        }
        return get_All($sql);
    }   
    // thống kê home
    function getAdminstatistical(){
        $sql = "SELECT
            DATE_FORMAT(time, '%Y-%m') AS month,
            SUM(total) AS monthly_sales
        FROM
            package
        WHERE
            YEAR(time) = YEAR(CURRENT_DATE) -- Lấy dữ liệu cho cùng một năm
        GROUP BY
            month
        ORDER BY
            month
        ";
        return get_All($sql);
    }
    function getAdminstatisticalDay(){
        $sql="SELECT WEEKDAY(time) AS day_of_week, SUM(total) AS daily_sales, status 
        FROM package 
        WHERE status = 3 AND  WEEK(time) = WEEK(CURRENT_DATE)
        GROUP BY day_of_week 
        ORDER BY  DAYOFWEEK(day_of_week)";
        return get_All($sql);
    }
    // thống kê user
    function getAdminAll_TotalUser(){
        $sql="SELECT COUNT(DISTINCT id_user) AS total_user FROM user;";
        return get_All($sql);
    }

    function getNewUsersBlackList() {
        $sql = "SELECT COUNT( u.id_user) as total_customers
        FROM user u
        WHERE u.id_user IN (
            SELECT p.id_user
            FROM package p
            WHERE status = 5
            GROUP BY p.id_User
            HAVING Count(p.id_package) = 1
        );";
    
        return get_All($sql);
    }

    // Thống kê product
    function getAdminAll_TotalProduct(){
        $sql="SELECT COUNT(DISTINCT id) AS total_product FROM product;";
        return get_All($sql);
    }
    function getAdminAll_SoldProduct(){
        $sql="SELECT COUNT(DISTINCT id_Detail_Package) AS sold_product FROM detail_package;";
        return get_All($sql);
    }
    function getAdmin_inventoryProduct(){
        $sql= "SELECT SUM(qty) AS total_qty FROM product";
        return get_All($sql);
    }
    function updateAdminProduct($nameProduct,$priceProduct,$hinh,$qtyProduct,$typeProduct,$selectCatalog,$idProduct){
        $sql = "UPDATE product p
        JOIN catalog c ON p.id_catalog = c.id_catalog
        JOIN detail_product dp ON p.id = dp.id_prd
        LEFT JOIN
        album a ON p.id = a.id_prd
        SET
            p.name = '$nameProduct',
            p.price = $priceProduct, -- Giá mới của sản phẩm
            dp.type = '$typeProduct',
            p.qty = '$qtyProduct', -- Số lượng tồn kho mới
            c.id_catalog = '$selectCatalog',
            a.img1='$hinh'
        WHERE
            dp.id_prd = ".$idProduct;
        pdo_execute($sql);;
    }
    function update_admin_product($addNamePro, $addPricePro, $addQtyPro, $addCatalogPro,$idProduct){
        $sql="UPDATE product
            SET
            name = '$addNamePro',
            price = $addPricePro,
            qty = $addQtyPro,
            id_catalog = $addCatalogPro
        WHERE
            id = $idProduct;
         ";
        update($sql);
    }
    function addAdminProduct( $addNamePro, $addPricePro, $addQtyPro, $addCatalogPro) {
        // Insert product
        $sql = "INSERT INTO product (name, price, id_catalog, qty) VALUES ('$addNamePro', '$addPricePro', '$addCatalogPro', '$addQtyPro')";
        inset($sql);;
    }
    function insert_Admin_DetailProduct($name_product, $sale, $production,  $type, $text, $net_weight, $id_prd, $id_album){
        $sql="INSERT INTO detail_product (name_prd, sale, production, type, text, net_weight, id_prd, id_album)
        VALUES ('$name_product', $sale, '$production', '$type', '$text', $net_weight, $id_prd, $id_album);
        ";
        inset($sql);
    }
    function insert_Admin_Album($imgMain, $img1, $img2, $img3, $img4, $img5, $id_prd){
        $sql = "  INSERT INTO album ( img_main, img1, img2, img3, img4, img5, id_prd)
                VALUES ('$imgMain', '$img1', '$img2', '$img3', '$img4',' $img5', '$id_prd')";
        inset($sql);
    }
    
    function showAdminProduct($listProduct){
        foreach($listProduct as $item){
            extract($item);
            $linkDeleteProduct="index.php?page=delProduct&status=1&id_Prd=".$product_id;
            $linkUpdateProduct="index.php?page=showUpdatePro&id_Prd=".$product_id;
            $showHidden="";
            if($product_status == 0){
                $showHidden='<a href="index.php?page=delProduct&status=1&id_Prd='.$product_id .'"class="hendel-delete-act">Hiện</a>';
            }else{
                $showHidden='<a href="index.php?page=delProduct&status=0&id_Prd='.$product_id .'" class="hendel-delete-act">Ẩn</a>';
            }
            echo 
            '
            <tr>
                <td class="table__packgeNew--Yellow"><a href="index.php?page=detailProduct&idPro='.$product_id.'">#'.$product_id.'</a></td>
                <td>'.$product_name.'</td>
                <td>'.number_format($product_price,0,",",".").'đ</td>
                <td>'.$catalog_name.'</td>
                <td>'.$product_qty.'</td>
                <td>
                    <a href="'. $linkUpdateProduct.'" class="hendel-update-act">Sửa</a>|
                    '.$showHidden.'
                </td>
            </tr>
            
            ';
        }

    }
    function showAdminUser($listProduct){
        foreach($listProduct as $item){
            extract($item);
            $linkBlockProduct="index.php?page=customerOrder&id_user=".$id_user;
            $genderShơw="";
            $role_userShow= "";
            if($gender==1) {
                $genderShơw.= '
                    Nam
                ';
            }elseif($gender == 2) {
                $genderShơw.= '
                    Nữ
                ';
            }elseif($gender == 3) {
                $genderShơw.= '
                    Khác
                ';
            }
            if($role_user==1) {
                $role_userShow.= '
                    Quản trị
                ';
            }elseif($role_user == 0) {
                $role_userShow.= '
                    Khách hàng
                ';
            }else {

            }
            echo 
            '
            <tr>
                <td>'.$id_user.'</td>
                <td>'.$username.'</td>
                <td>'.$phone.'</td>
                <td>'.$email.'</td>
                <td>'.$genderShơw.'</td>
                <td class="line-clamp">'.$address.'</td>
                <td>'.$role_userShow.'</td>
                <td>
                    <a href="'.$linkBlockProduct.'" class="hendel-delete-act">Xem chi tiết</a>
                </td>
            </tr>
            
            ';
        }

    }

    // get user admin
    function getAdminUser($offset= 0){
        $sql="SELECT * FROM user LIMIT 8 OFFSET $offset ";
        return get_All($sql);
    }
    function getAdminDetailUser($id_user){
        $sql= "SELECT * FROM package WHERE id_User=".$id_user;
        return get_All($sql);
    }

    // cart 
    function getAdminCartStatus($status){
        $sql="SELECT * FROM package where status=".$status;
        return get_All($sql);
    }

    function getAdminCart(){
        // $sql="SELECT * FROM package ORDER BY time DESC ";
        // $sql = "SELECT * FROM package WHERE DATE(time) = CURDATE() ORDER BY time DESC";
        $sql = "SELECT * FROM package ";
        $sql.=" ORDER BY id_package DESC";
        return get_All($sql);
    }
    function getAllAdminCart($indStatus){
        $sql= "SELECT * FROM package WHERE status=".$indStatus;
        return get_All($sql);
    }
    
    // thống kế đơn hàng 
    function getAdmin_AllCart(){
        $sql="SELECT COUNT(DISTINCT id_package) AS total_package FROM package;";
        return get_All($sql);
    }
    function getAdmin_ShippCart(){
        $sql="SELECT COUNT(*) as shipCart FROM package WHERE status = 2;";
        return get_All($sql);
    }
    // DAYOFWEEK(CURDATE()) trả về số ngày trong tuần cho ngày hiện tại.
    // CURDATE() - INTERVAL DAYOFWEEK(CURDATE()) - 1 DAY sẽ là ngày đầu tiên của tuần.
    // CURDATE() + INTERVAL 7 - DAYOFWEEK(CURDATE()) DAY sẽ là ngày cuối cùng của tuần.
    function getAdmin_NewCart(){
        $sql="SELECT COUNT(*) AS new_orders
        FROM package
        WHERE DATE(time) = CURDATE();";
        return get_All($sql);
    }
    function getDetailPackage($id_package) {
        $sql = "SELECT * from detail_package where id_package=".$id_package;
        return get_All($sql);
    }
    function getPackage($id_package) {
        $sql = "SELECT * from package where id_package=".$id_package;
        return get_One($sql);
    }

    // tăng giảm số lượng product
    function setQtyProductReduce($id_prd,$qty){
        $sql="UPDATE product SET qty=qty-'$qty' where id=".$id_prd;
        update($sql);

    }
    function setQtyProductPlus($id_prd,$qty){
        $sql="UPDATE product SET qty=qty+'$qty' where id=".$id_prd;
        update($sql);

    }
    // load comment ở đây
    function getUserComment($idpro){
        $sql= "SELECT comment.id_cmt , comment.id_user, comment.id_prd, comment.text, comment.time,
         user.username, comment.replay_comment
        FROM comment
        LEFT JOIN user ON comment.id_user = user.id_user  WHERE 1";
        if($idpro>0){
            $sql.=" AND comment.id_prd ='".$idpro."'";
        }
        $sql.=" ORDER BY comment.id_cmt DESC ";
        return get_All($sql);
    }
    function getReplies($id_cmt){
        $sql= "SELECT comment.id_cmt , comment.id_user, comment.id_prd, comment.text, comment.time,
         user.username, comment.replay_comment, comment.status_comment
        FROM comment
        LEFT JOIN user ON comment.id_user = user.id_user  WHERE 1";
        if($id_cmt>0){
            $sql.=" AND comment.replay_comment ='".$id_cmt."'";
        }
        $sql.=" ORDER BY comment.id_cmt DESC ";
        return get_All($sql);
    }
    function  insert_binhluan($content, $iduser, $idpro, $dateComment,$status_userReplay){
        $sql = "INSERT INTO comment(text, id_user, id_prd, time, status_comment) VALUES ('$content', '$iduser', '$idpro', '$dateComment','$status_userReplay')";
        inset($sql);
    }
    function insert_replay($content, $iduser, $idpro, $dateComment, $id_replay, $status_userReplay){
        $sql = "INSERT INTO comment(text, id_user, id_prd, time, replay_comment,status_comment) VALUES ('$content', '$iduser', '$idpro', '$dateComment','$id_replay','$status_userReplay')";
        inset($sql);
    }
    function update_Status_Replay($id_replay,$status_userReplay){
        $sql= "UPDATE comment 
        SET status_comment = '$status_userReplay' 
        WHERE id_cmt = $id_replay";
        update($sql);
    }
    function getAdminCommet($offset = 0){
        $sql="SELECT
        p.name AS product_name,
        p.qty AS product_qty,
        c.time AS comment_time,
        c.text AS comment_text,
        u.username AS user_username
    FROM
        comment c
    JOIN
        user u ON c.id_user = u.id_user
    JOIN
        product p ON c.id_prd = p.id 
        LIMIT 8 OFFSET $offset;";
        return get_All($sql);
    }
    function getAdminAllComment(){
        $sql= "SELECT COUNT(*) AS total_comments FROM comment;";
        return get_All($sql);
    }
    function getAdminNoResponded(){
        $sql="SELECT COUNT(replay_comment) as No_replay FROM comment WHERE replay_comment = 0 AND status_comment=0";
        return get_All($sql);
    }
    function getAdminNoCommet(){
        $sql="SELECT
        p.name AS product_name,
        p.qty AS product_qty,
        p.id AS product_id,
        c.time AS comment_time,
        c.text AS comment_text,
        c.id_cmt as comment_id,
        c.replay_comment AS comment_replay,
        c.status_comment AS comment_status,
        u.username AS user_username
    FROM
        comment c
    JOIN
        user u ON c.id_user = u.id_user
    JOIN
        product p ON c.id_prd = p.id
    WHERE c.status_comment = 0
    ORDER BY c.id_cmt DESC";
        return get_All($sql);
    }
    function getAdminReplayComment(){
        $sql="SELECT
        p.name AS product_name,
        p.qty AS product_qty,
        p.id AS product_id,
        c.time AS comment_time,
        c.text AS comment_text,
        c.id_cmt as comment_id,
        c.replay_comment AS comment_replay,
        c.status_comment AS comment_status,
        u.username AS user_username,
        r.text AS reply_text,
        r.status_comment AS reply_status
    FROM
        comment c
    JOIN
        user u ON c.id_user = u.id_user
    JOIN
        product p ON c.id_prd = p.id
    LEFT JOIN
        comment r ON c.id_cmt = r.replay_comment
    ORDER BY
        c.id_cmt DESC;
    ";
        return get_All($sql);
    }
    function getAdminCommetNew(){
        $sql="SELECT *
        FROM comment
        WHERE status_comment = 0
        ORDER BY id_cmt DESC
        LIMIT 1";
        return get_All($sql);
    }
    function getAdmiResponded(){
        $sql="SELECT COUNT(id_cmt) as replay FROM comment WHERE replay_comment > 0 AND status_comment =1";
        return get_All($sql);
    }
    //show chi tiết Nút trắng Vuống bự
    function getAdminSoldPro(){
        $sql="SELECT id_prd as idProduct, name_prd as nameProduct, SUM(qty) as qtysold 
            FROM  detail_package
            GROUP BY
            name_prd";
            return get_All($sql);
    } 
    // tìm kiếm sản phảm 

    

    function  getItemSearch($contentSearch) {
        $sql = "SELECT
        p.id AS product_id,
        p.name AS product_name,
        p.qty AS product_qty,
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
    WHERE p.status_prd = 1 and name LIKE '%$contentSearch%'" ;
        return get_All($sql);
    }
?>
