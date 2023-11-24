<?php
    print_r($listProductID);

?>
<main class="main row">
                <div class="main-content row">
                    <article class="box-total row">
                        <section class="total_product row">
                            <div class="total_product__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <rect x="0.000976562" width="30" height="30" rx="6" fill="#B2C2FC" />
                                    <path
                                        d="M26.2135 7.75188L15.901 2.1093C15.6254 1.95706 15.3158 1.8772 15.001 1.8772C14.6862 1.8772 14.3765 1.95706 14.101 2.1093L3.78848 7.75423C3.49397 7.91536 3.24813 8.15262 3.07662 8.44121C2.90512 8.7298 2.81424 9.05914 2.81348 9.39485V20.6027C2.81424 20.9384 2.90512 21.2677 3.07662 21.5563C3.24813 21.8449 3.49397 22.0821 3.78848 22.2433L14.101 27.8882C14.3765 28.0405 14.6862 28.1203 15.001 28.1203C15.3158 28.1203 15.6254 28.0405 15.901 27.8882L26.2135 22.2433C26.508 22.0821 26.7538 21.8449 26.9253 21.5563C27.0968 21.2677 27.1877 20.9384 27.1885 20.6027V9.39602C27.1883 9.05972 27.0978 8.72964 26.9262 8.44038C26.7547 8.15111 26.5085 7.91331 26.2135 7.75188ZM15.001 3.74993L24.4158 8.90618L20.9271 10.8163L11.5111 5.66009L15.001 3.74993ZM15.001 14.0624L5.58613 8.90618L9.55879 6.73118L18.9736 11.8874L15.001 14.0624ZM4.68848 10.5468L14.0635 15.6773V25.7308L4.68848 20.6038V10.5468ZM25.3135 20.5991L15.9385 25.7308V15.682L19.6885 13.63V17.8124C19.6885 18.0611 19.7872 18.2995 19.9631 18.4753C20.1389 18.6512 20.3773 18.7499 20.626 18.7499C20.8746 18.7499 21.1131 18.6512 21.2889 18.4753C21.4647 18.2995 21.5635 18.0611 21.5635 17.8124V12.6034L25.3135 10.5468V20.598V20.5991Z"
                                        fill="#FEFEFD" />
                                </svg>
                            </div>
                            <div class="total_product__content row">
                                <p class="total_product__content--title">Tổng sản phẩm</p>
                                <div class="total_product__content--qty"><?=$totalAllProducts[0]['total_product']?></div>
                                <p class="total_product__content--desc">Tất cả sản phẩm trong database</p>
                            </div>
                        </section>
                        <section class="total_product row">
                            <div class="total_product__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <rect x="0.000976562" width="30" height="30" rx="6" fill="#B2C2FC" />
                                    <path
                                        d="M26.2135 7.75188L15.901 2.1093C15.6254 1.95706 15.3158 1.8772 15.001 1.8772C14.6862 1.8772 14.3765 1.95706 14.101 2.1093L3.78848 7.75423C3.49397 7.91536 3.24813 8.15262 3.07662 8.44121C2.90512 8.7298 2.81424 9.05914 2.81348 9.39485V20.6027C2.81424 20.9384 2.90512 21.2677 3.07662 21.5563C3.24813 21.8449 3.49397 22.0821 3.78848 22.2433L14.101 27.8882C14.3765 28.0405 14.6862 28.1203 15.001 28.1203C15.3158 28.1203 15.6254 28.0405 15.901 27.8882L26.2135 22.2433C26.508 22.0821 26.7538 21.8449 26.9253 21.5563C27.0968 21.2677 27.1877 20.9384 27.1885 20.6027V9.39602C27.1883 9.05972 27.0978 8.72964 26.9262 8.44038C26.7547 8.15111 26.5085 7.91331 26.2135 7.75188ZM15.001 3.74993L24.4158 8.90618L20.9271 10.8163L11.5111 5.66009L15.001 3.74993ZM15.001 14.0624L5.58613 8.90618L9.55879 6.73118L18.9736 11.8874L15.001 14.0624ZM4.68848 10.5468L14.0635 15.6773V25.7308L4.68848 20.6038V10.5468ZM25.3135 20.5991L15.9385 25.7308V15.682L19.6885 13.63V17.8124C19.6885 18.0611 19.7872 18.2995 19.9631 18.4753C20.1389 18.6512 20.3773 18.7499 20.626 18.7499C20.8746 18.7499 21.1131 18.6512 21.2889 18.4753C21.4647 18.2995 21.5635 18.0611 21.5635 17.8124V12.6034L25.3135 10.5468V20.598V20.5991Z"
                                        fill="#FEFEFD" />
                                </svg>
                            </div>
                            <div class="total_product__content row">
                                <p class="total_product__content--title">Sản phẩm đã bán</p>
                                <div class="total_product__content--qty"><?=$soldProduct[0]['sold_product']?></div>
                                <p class="total_product__content--desc">Tăng 40% trong tháng</p>
                            </div>
                        </section>
                        <section class="total_product row">
                            <div class="total_product__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <rect x="0.000976562" width="30" height="30" rx="6" fill="#B2C2FC" />
                                    <path
                                        d="M26.2135 7.75188L15.901 2.1093C15.6254 1.95706 15.3158 1.8772 15.001 1.8772C14.6862 1.8772 14.3765 1.95706 14.101 2.1093L3.78848 7.75423C3.49397 7.91536 3.24813 8.15262 3.07662 8.44121C2.90512 8.7298 2.81424 9.05914 2.81348 9.39485V20.6027C2.81424 20.9384 2.90512 21.2677 3.07662 21.5563C3.24813 21.8449 3.49397 22.0821 3.78848 22.2433L14.101 27.8882C14.3765 28.0405 14.6862 28.1203 15.001 28.1203C15.3158 28.1203 15.6254 28.0405 15.901 27.8882L26.2135 22.2433C26.508 22.0821 26.7538 21.8449 26.9253 21.5563C27.0968 21.2677 27.1877 20.9384 27.1885 20.6027V9.39602C27.1883 9.05972 27.0978 8.72964 26.9262 8.44038C26.7547 8.15111 26.5085 7.91331 26.2135 7.75188ZM15.001 3.74993L24.4158 8.90618L20.9271 10.8163L11.5111 5.66009L15.001 3.74993ZM15.001 14.0624L5.58613 8.90618L9.55879 6.73118L18.9736 11.8874L15.001 14.0624ZM4.68848 10.5468L14.0635 15.6773V25.7308L4.68848 20.6038V10.5468ZM25.3135 20.5991L15.9385 25.7308V15.682L19.6885 13.63V17.8124C19.6885 18.0611 19.7872 18.2995 19.9631 18.4753C20.1389 18.6512 20.3773 18.7499 20.626 18.7499C20.8746 18.7499 21.1131 18.6512 21.2889 18.4753C21.4647 18.2995 21.5635 18.0611 21.5635 17.8124V12.6034L25.3135 10.5468V20.598V20.5991Z"
                                        fill="#FEFEFD" />
                                </svg>
                            </div>
                            <div class="total_product__content row">
                                <p class="total_product__content--title">Hàng tồn kho</p>
                                <div class="total_product__content--qty"><?= $inventoryProduct[0]['total_qty']?></div>
                                <p class="total_product__content--desc">Tăng 15% trong tháng</p>
                            </div>
                        </section>
                    </article>
                    <!-- code table loai hang o day -->
                    <article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title row">
                                <h4>Loại hàng mới</h4>
                            </div>
    
                            <select class="revenue__top--hendel">
                                <option value="1">Sắp xếp</option>
                                <option value="2">Tăng dần</option>
                                <option value="3">Giảm dần</option>
                            </select>
                        </div>
                        <!-- form  -->
                        <form action="index.php?page=addProduct" method="post" enctype="multipart/form-data">
                            <div class="form_group ">
                                <div class="form_group__box-input">
                                    <div class="form_group__input-file--product">
                                        <label for="input-file">
                                            <img src="../assets/img/img_main/<?=$listProductID[0]['album_image']?>.png" class="form_group__product-svg--PNG" alt="">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="68" height="76" viewBox="0 0 68 76" fill="none" class="form_group__product-svg--PNG">
                                            <path d="M62.9327 27.3549H61.136V18.6868C61.1346 18.6326 61.1293 18.5785 61.1201 18.5251C61.123 18.1765 60.9997 17.8386 60.773 17.5738L46.349 1.09871L46.3384 1.08811C46.252 0.994818 46.154 0.912894 46.0469 0.844314L45.9515 0.786014C45.8599 0.735076 45.7631 0.694204 45.6626 0.664114L45.5832 0.637614C45.4731 0.610163 45.3601 0.59593 45.2466 0.595215H9.79755C8.1784 0.595215 6.864 1.91226 6.864 3.52876V27.3523H5.0673C2.7512 27.3523 0.875 29.2285 0.875 31.5446V53.3488C0.875 55.6622 2.7512 57.5411 5.0673 57.5411H6.864V72.4659C6.864 74.0824 8.1784 75.3994 9.79755 75.3994H58.2024C59.819 75.3994 61.136 74.0824 61.136 72.4659V57.5411H62.9327C65.2488 57.5411 67.125 55.6649 67.125 53.3488V31.5446C67.125 29.2311 65.2461 27.3549 62.9327 27.3549ZM9.79755 3.53141H43.7785V18.541C43.7785 19.3519 44.4357 20.0091 45.2466 20.0091H58.2051V27.3576H9.79755V3.53141ZM27.7672 47.3571V53.8099H23.3205V32.3873H28.9783L31.4136 36.6882L33.425 40.2392C34.6943 42.497 35.9345 45.1629 36.9203 47.5824H36.9813C36.6977 44.7548 36.5997 41.861 36.5997 38.6201V32.3899H41.049V53.8125H35.9663L34.0451 50.3437L31.411 45.5896L31.3897 45.5498C30.1204 43.2284 28.6868 40.4963 27.6718 37.9841H27.5446C27.7036 40.8408 27.7672 43.8618 27.7672 47.3571ZM9.64385 46.1169V53.8072H4.8447V32.6735C6.33665 32.4191 8.4328 32.2283 11.3902 32.2283C14.3794 32.2283 16.51 32.8007 17.9384 33.9773C19.3376 35.024 20.228 36.8048 20.228 38.901C20.228 41.0316 19.5602 42.8124 18.2564 43.9863C16.6054 45.5127 14.1568 46.2441 11.2974 46.2441C10.7434 46.2583 10.1893 46.2157 9.64385 46.1169ZM58.2024 71.6762H9.79755V57.5437H58.2024V71.6762ZM63.1553 52.8241C61.6607 53.3329 58.8332 54.0325 56.0056 54.0325C52.0942 54.0325 49.2667 53.0467 47.2977 51.1731C45.3579 49.2969 44.2767 46.4985 44.2767 43.353C44.3085 36.2324 49.4893 32.1647 56.5118 32.1647C59.2784 32.1647 61.4063 32.7053 62.4557 33.1823L61.4381 37.0937C60.2615 36.5531 58.8332 36.1715 56.4799 36.1715C52.444 36.1715 49.3594 38.4584 49.3594 43.0986C49.3594 47.5506 52.1578 50.1211 56.1301 50.1211C57.2087 50.1211 58.0991 49.9939 58.4834 49.8375V45.3246H55.1762V41.5404H63.1553V52.8241Z" fill="#ABABAB"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none" class="form_group__product-svg--logout">
                                            <rect y="30" width="30" height="30" rx="15" transform="rotate(-90 0 30)" fill="#181D19" />   
                                            <path d="M11.25 11.6875H9.625C9.19402 11.6875 8.7807 11.8587 8.47595 12.1635C8.1712 12.4682 8 12.8815 8 13.3125V19C8 19.431 8.1712 19.8443 8.47595 20.149C8.7807 20.4538 9.19402 20.625 9.625 20.625H19.375C19.806 20.625 20.2193 20.4538 20.524 20.149C20.8288 19.8443 21 19.431 21 19V13.3125C21 12.8815 20.8288 12.4682 20.524 12.1635C20.2193 11.8587 19.806 11.6875 19.375 11.6875H17.75" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M14.5 15.75V6M14.5 6L12.0625 8.4375M14.5 6L16.9375 8.4375" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg> -->
                                        </label>
                                        <input type="file" class="form_group__input-file" name="imgProduct" id="input-file" value="">
                                    </div>
                                </div>
                                
                                <div class="form_group__box--add_product">
                                    <div class="form_group__add_product--item_input">
                                        <label for="add_product--input" class="form_group__item_input--text">Tên sản phẩm</label> <br>
                                        <input type="text" class="form_group__item_input--input" name="nameProduct" id="add_product--input" value="<?=$listProductID[0]['product_name']?>" >
                                    </div>
                                    <div class="form_group__add_product--item_input">
                                        <label for="add_product--input" class="form_group__item_input--text">Giá sản phẩm</label> <br>
                                        <input type="text" class="form_group__item_input--input" name="priceProduct" id="add_product--input" value="<?=$listProductID[0]['product_price']?>">
                                    </div>
                                    
                                    <div class="form_group__add_product--item_select">
                                        <label for="add_product--select" class="form_group__item_input--text">Phân loại</label> <br>

                                       
                                        <input type="text" class="form_group__item_input--input" name="qtyProduct" id="add_product--input"  value="<?=$listProductID[0]['product_type']?>">
                                    </div>
                                    <div class="form_group__add_product--item_input">
                                        <label for="add_product--input" class="form_group__item_input--text">Số lượng sản phâm</label> <br>
                                        <input type="text" class="form_group__item_input--input" name="qtyProduct" id="add_product--input"  value="<?=$listProductID[0]['product_qty']?>">
                                    </div>
                                    <div class="form_group__add_product--item_select">
                                        <label for="add_product--select" class="form_group__item_input--text">Thuộc loại</label> <br>

                                       <select name="selectCatalog" id="add_product--select" class="form_group__item_select--option">
                                        <?php

                                         if(isset($listProductID)){
                                            $kqDM="";
                                            $idPRESENT=$listProductID[0]['id_catalog'];
                                            foreach ($listCatalog as $item) {
                                                    extract($item);
                                                if($idPRESENT == $id_catalog) {
                                                    $kqDM.= '<option value="'. $idPRESENT.'" selected>'.$name_catalog.'</option>';
                                                }else {
                                                    $kqDM.= '<option value="'.$id_catalog.'">'.$name_catalog.'</option>';
                                                }
                                            }
                                            echo $kqDM;
                                        }
                                        ?>
                                      
                                       </select>
                                    </div>
                                    <div class="form_group__add_product--item_submit">
                                        <input type="submit" class="form_group__item_input--cancle" name="" id="" value="Canle">
                                        <input type="submit" class="form_group__item_input--them" name="btnAddPro" id="" value="Thêm">

                                    </div>
                                    
                                </div>
                                <span class="form-mes">
                                    
                                </span>
                            </div>
                        </form>
                       
                    </article>
                </div>
             