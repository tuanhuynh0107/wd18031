<?php
    // print_r($_SESSION['user_info']);
    if(isset($loadUser)){
        extract($loadUser);
    }
?>


<main>
        <!-- heading-cart -->
        <article class="heading-cart">
            <div class="main-content">
                <div class="heading-cart__content row ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="214" height="19" viewBox="0 0 214 19" fill="none">
                        <path
                            d="M1 1.13606L1.02604 18.4902H7.39584V12.4329C7.39584 10.1152 11.1042 10.1413 11.1042 12.485V18.4902H17.474V1.13606H11.0781L11.1042 7.95897C9.58334 7.50585 7.79688 8.59439 7.74479 10.4381H7.39584C7.39584 7.34439 7.36979 4.22981 7.36979 1.13606H1ZM23.3333 18.4642H34.8021V8.19856C34.8021 3.53189 32 1.13606 27.3385 1.13606H20.2969L20.2708 8.14647C20.2708 8.14647 26.4844 8.89647 26.5625 4.67772C26.5625 3.69335 26.2448 2.96939 25.7344 2.46418L25.9271 2.19856C27.2813 2.91731 28.1667 4.2298 28.1042 6.46418V9.00064H23.9479C17.125 9.00064 16.6719 18.4642 23.3333 18.4642ZM28.1667 9.77147V14.4381C28.8802 14.5683 29.4167 15.1829 29.4167 15.9277C29.4167 16.7558 28.75 17.4225 27.9219 17.4225C26.2448 17.4225 25.5208 14.8652 25.5469 13.6152C25.5729 11.8496 26.6406 10.36 28.1667 9.77147ZM36.3958 1.11001V18.4381H43.3542V1.11001H36.3958ZM50.6302 1.11001C47.8073 1.11001 44.6875 1.50585 44.526 5.10481C44.2604 10.6517 52.9792 9.53189 53.276 14.8913C53.1875 17.2663 51.5677 17.7142 49.5104 17.7715L49.4323 17.4746C50.3906 16.9433 51.0365 16.1986 51.0104 14.6465C50.9479 10.1152 44.9271 10.9173 44.9271 10.9173L44.9531 18.4381H54.9531C58.099 18.4381 59.4063 16.4902 59.724 14.5683C60.0938 12.3288 58.9479 10.6777 56.4948 9.31835C54.6875 8.30272 51.3281 7.02668 51.4063 4.49543C51.4583 2.28189 53.5938 1.58397 55.5104 1.69335L55.5625 1.99022C54.6354 2.49543 53.9115 3.1621 53.9375 4.67772C53.9896 8.9746 59.6979 8.19856 59.6979 8.19856L59.6719 1.11001H50.6302ZM65.2656 18.4642H76.7344V8.19856C76.7344 3.53189 73.9271 1.13606 69.2656 1.13606H62.224L62.1979 8.14647C62.1979 8.14647 68.4167 8.89647 68.4948 4.67772C68.4948 3.69335 68.1719 2.96939 67.6667 2.46418L67.8542 2.19856C69.2083 2.91731 70.0938 4.2298 70.0365 6.46418V9.00064H65.875C59.0573 9.00064 58.599 18.4642 65.2656 18.4642ZM70.0938 9.77147V14.4381C70.8125 14.5683 71.3438 15.1829 71.3438 15.9277C71.3438 16.7558 70.6823 17.4225 69.8542 17.4225C68.1719 17.4225 67.4531 14.8652 67.4792 13.6152C67.5052 11.8496 68.5729 10.36 70.0938 9.77147ZM84.8281 18.4642V9.90168C84.8281 7.44856 87.8698 7.4746 87.8698 9.95376V18.4642H94.3802V7.53189C94.3802 4.14126 93.6563 1.13606 89.7396 1.05272C86.3021 0.974597 85.2344 4.14126 85.1823 7.20897H84.8281V1.13606H78.1927V18.4642H84.8281ZM102.51 18.4381V9.87564C102.51 7.42251 105.547 7.42251 105.547 9.90168V18.4381H112.052V9.6621C112.052 7.53189 115.01 7.39647 115.01 9.6621V18.4381H121.516V8.4121C121.516 5.26106 121.349 1.11001 116.901 1.00064C113.438 0.948555 112.396 4.08918 112.318 7.15689H112.052C111.948 4.28189 111.302 1.11001 107.411 1.00064C103.974 0.948555 102.906 4.08918 102.854 7.15689H102.51V1.11001H95.8698V18.4381H102.51ZM123.135 1.11001V18.4381H130.094V1.11001H123.135ZM146.01 8.62564L146.036 1.11001H136.302C130.974 1.11001 130.146 8.19856 134.995 9.68814C130.016 11.1829 130.281 18.4381 136.302 18.4381H146.01L146.036 10.8652C144.698 10.8652 140.016 10.5996 140.068 14.6465C140.068 16.0058 140.625 16.8861 141.427 17.4486L141.292 17.7402C139.396 17.3183 138.198 15.3444 138.224 13.4486C138.276 11.235 140.25 10.0111 142.464 9.95376V9.42251C139.745 9.34439 138.172 7.10481 138.302 5.05272C138.385 3.50585 139.531 2.09439 141.266 1.79751L141.401 2.09439C140.599 2.65168 140.042 3.53189 140.068 4.89126C140.12 9.42251 146.01 8.62564 146.01 8.62564ZM153.87 18.4642V9.90168C153.87 7.44856 156.911 7.4746 156.911 9.95376V18.4642H163.417V7.53189C163.417 4.14126 162.698 1.13606 158.776 1.05272C155.339 0.974597 154.276 4.14126 154.224 7.20897H153.87V1.13606H147.229V18.4642H153.87ZM168.344 8.65168L168.37 18.4642H174.932L174.906 8.30272H177.974V1.13606H164.849V8.33397C166.078 8.33397 170.771 8.59439 170.719 4.7871C170.693 3.3496 170.026 2.70376 169.146 2.19856L169.25 1.90168C174.104 2.67772 172.797 8.4121 168.344 8.65168ZM183.458 18.4642H194.927V8.19856C194.927 3.53189 192.12 1.13606 187.464 1.13606H180.417L180.391 8.14647C180.391 8.14647 186.609 8.89647 186.688 4.67772C186.688 3.69335 186.37 2.96939 185.859 2.46418L186.047 2.19856C187.401 2.91731 188.287 4.2298 188.229 6.46418V9.00064H184.068C177.25 9.00064 176.792 18.4642 183.458 18.4642ZM188.286 9.77147V14.4381C189.005 14.5683 189.536 15.1829 189.536 15.9277C189.536 16.7558 188.875 17.4225 188.047 17.4225C186.37 17.4225 185.646 14.8652 185.672 13.6152C185.698 11.8496 186.766 10.36 188.286 9.77147ZM201.932 10.8079C201.505 11.235 201.214 11.7975 201.214 12.6517V18.4642H207.88V13.7454C207.88 10.0892 212.781 10.3861 212.781 6.4121V1.13606H206.276V6.12043C206.276 8.30272 205.349 9.39647 203.641 9.97981C202.573 10.36 201.318 10.0631 201.266 8.75585C201.214 7.93293 201.958 7.29231 202.781 7.31835L202.755 1.13606H196.359V6.4121C196.359 9.47981 199.297 10.8652 201.932 10.8079Z"
                            stroke="#F4E869" />
                    </svg>
                    <span class="heading-cart__line">|</span>
                    <h2 class="heading-cart__title">Thanh toán</h2>
                </div>
            </div>
        </article>
        <form action="index.php?page=bill" method="post">
            <section class="pay">
                <div class="main-content">
                    <div class="pay__address">
                        <div class="pay__address--top row">
                            <div class="pay__address--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30"
                                    fill="none">
                                    <path
                                        d="M15.7816 22.5L10.1316 14.4375C9.2068 13.3341 8.61124 11.988 8.41429 10.5558C8.21734 9.12359 8.4271 7.66433 9.01914 6.34796C9.61118 5.03158 10.5611 3.91227 11.7584 3.12037C12.9556 2.32847 14.3508 1.89658 15.7816 1.875C17.7649 1.8948 19.6596 2.70806 21.0507 4.13664C22.4418 5.56522 23.216 7.49268 23.2036 9.49688C23.2044 11.2453 22.6153 12.9417 21.5336 14.3063L15.7816 22.5ZM15.7816 3.75C14.2896 3.76731 12.8655 4.38223 11.8218 5.45972C10.7781 6.53722 10.2002 7.98921 10.2151 9.49688C10.2213 10.873 10.7112 12.202 11.5974 13.2469L15.7816 19.2375L20.0771 13.125C20.8936 12.0951 21.3415 10.8165 21.3481 9.49688C21.3629 7.98921 20.7851 6.53722 19.7414 5.45972C18.6977 4.38223 17.2736 3.76731 15.7816 3.75Z"
                                        fill="#F24E1E" />
                                    <path
                                        d="M15.7816 10.3125C16.8064 10.3125 17.6371 9.47303 17.6371 8.4375C17.6371 7.40197 16.8064 6.5625 15.7816 6.5625C14.7569 6.5625 13.9261 7.40197 13.9261 8.4375C13.9261 9.47303 14.7569 10.3125 15.7816 10.3125Z"
                                        fill="#F24E1E" />
                                    <path
                                        d="M26.9147 11.25H25.0592V13.125H26.9147V26.25H4.64865V13.125H6.50415V11.25H4.64865C4.15654 11.25 3.68459 11.4475 3.33662 11.7992C2.98864 12.1508 2.79315 12.6277 2.79315 13.125V26.25C2.79315 26.7473 2.98864 27.2242 3.33662 27.5758C3.68459 27.9275 4.15654 28.125 4.64865 28.125H26.9147C27.4068 28.125 27.8787 27.9275 28.2267 27.5758C28.5747 27.2242 28.7702 26.7473 28.7702 26.25V13.125C28.7702 12.6277 28.5747 12.1508 28.2267 11.7992C27.8787 11.4475 27.4068 11.25 26.9147 11.25Z"
                                        fill="#F24E1E" />
                                </svg>
                            </div>
                            <div class="pay__address--title">
                                <h4>Địa chỉ nhận hàng</h4>
                            </div>
                        </div>
                        <div class="pay__address--bottom row">
                            <h4 class="pay__address--bottom__heading"><?php if(isset($username)&&($username!="")) {echo $username;}else{echo 'bạn chưa có Tên';}?> (<?php if(isset($phone)&&($phone)!="") {echo $phone;}else{echo 'Bạn chưa có số điện thoại';}?>)</h4>
                            <div class="pay__address--desc"><?php if(isset($address)&&($address!="")) {echo $address;}else{echo 'bạn chưa có Địa chỉ';}?>
                                <span>(mặc định)</span>
                            </div>
                            
                            <div class="pay__address--btn"><a href="index.php?page=changeProfile">Thay đổi</a></div>
                        </div>
                    </div>

                    <table class="pay-ment" style="text-align: center; height: auto;">
                        <thead class="pay-ment__head">
                            <tr>
                                <th colspan="2" class="pay-ment__heading">Sản phẩm</th>
                                <th colspan="2"></th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                               
                            </tr>
                        </thead>

                        <tbody class="pay-ment__body">
                            <?php
                                // $listCarts=$_SESSION['cart'];  
                                if(isset($_SESSION['cart'])&&is_array($_SESSION['cart']))  {
                                    $ship=25000;
                                    $idCart= 0;
                                    $total_qty=0;
                                    $quantyty = 0;
                                    $total_Pro=0;
                                    $total_All=0;
                                    // $qty=1;
                                    // echo print_r($_SESSION['cart']);    
                                    foreach ($_SESSION['cart'] as $item) {
                                        extract($item);
                                        
                                        $total = $pricePro * $qtyPro;
                                        $total_Pro+=$total;
                                        $total_All=$total_Pro+$ship;
                                        echo 
                                        '
                                        <tr>
                                            <td colspan="2" class="pay-ment__bod--img"><img style="width: 130px;height: 130px;"
                                                src="./assets/img/img_main/'.$imgPro.'.png" >
                                            </td>
                                            <td class="pay-ment__bod--title">'.$namePro.'</td>
                                            <td class="pay-ment__bod--title">Loại: '.$typePro.'</td>
                                            <td class="pay-ment__bod--pice">'.number_format($pricePro,0,",",".").'</td>
                                            <td class="pay-ment__bod--qty"><input type="text" value="'.$qtyPro.'" name="" id=""></td>
                                            <td class="pay-ment__bod--total">'.number_format($total,0,",",".").'đ</td>
                                        </tr>
                                        ';
                                    }
                                    }
                            ?>
                        </tbody>
                    </table>
                    <div class="note row">
                        <div class="note__sms-Shop row">
                            <label for="note">Lời nhắn:</label>
                            <input type="text" name="note" id="note" placeholder="gửi lời nhắn cho Hải sản miền tây">
                        </div>
                        <div class="note__express row">
                            <div class="note__express--top row">Đơn vị vận chuyển: JHN Exxpress
                                <div class="pay__address--btn">
                                    <select name="Exxpress" id="">
                                        <option value="">Thay đổi</option>
                                        <option value="1">Grab</option>
                                        <option value="2">Bee</option>
                                        <option value="3">Ahamove</option>
                                        <option value="4">Sv xanh</option>
                                    </select>
                                </div>

                                <p class="note__express--time-Ship">Nhanh dự kiến giao trong vòng 24h</p>
                            </div>

                            <div class="note__express--bottom row">
                                Được phép đồng điểm
                            </div>
                        </div>
                        <div class="note__pice-Ship"><?php if(isset($total)){echo number_format($ship,0,",",".");}else{echo $ship=0;} ?>đ</div>
                    </div>

                    <div class="delivery ">
                        <div class="delivery__pay row">
                            <div class="delivery__pay--title">Phương thức thanh toán</div>
                            <div class="delivery__pay--desc">
                                <div class="delivery__pay--desc__title">Thanh toán khi nhận hàng</div>
                                
                                <select class="pay__address--btn " name="pttt">
                                    <option value="">Thay đổi</option>
                                    <option value="1" >Thanh toán khi nhận hàng</option>
                                    <option value="2" >Chuyển Khoản</option>
                                    <option value="3"  >Chuyển Momo</option>
                                </select>
                            </div>
                        </div>

                        <div class="delivery__total-qty row">
                            <p class="delivery__total-qty--desc">Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo
                                <a href="#!" class="delivery__total-qty--desc__action">Điều khoản</a> của Hải Sản Miền Tây
                            </p>
                            <div class="delivery__total-qty--main">
                                <div class="delivery__total-qty--main__row row">
                                    <span>Tổng tiền sản phẩm</span>
                                    <span><?php if(isset($total_Pro)){echo number_format($total_Pro,0,",",".");}else{echo $total_Pro=0;} ?>đ</span>
                                </div>
                                <div class="delivery__total-qty--main__row row">
                                    <span>Vận chuyển</span>
                                    <span><?php if(isset($total)){echo number_format($ship,0,",",".");}else{echo $ship=0;} ?>đ</span>
                                </div>
                                <div class="delivery__total-qty--main__row row">
                                    <span style="font-size: 20px; font-weight: 600;">Thành tiền</span>
                                    <span style="font-weight: 600;"><?php if($total_Pro>0 && $ship>0){ echo number_format($total_All,0,",",".");}else{ echo $total_All=0;} ?>đ</span>
                                </div>
                                    <input type="hidden" name="name" value="<?=$username?>">
                                    <input type="hidden" name="address" value="<?=$address?>">
                                    <input type="hidden" name="phone" value="<?=$phone?>">
                                    <input type="hidden" name="total_All" value="<?=$total_All?>">
                                    <input type="hidden" name="total" value="<?=$total?>">
                                    <input type="hidden" name="idUser" value="<?=$id_user?>">

                                    <input type="submit" name="order" value="Đặt hàng" class="main-product__content--btn btn" style="width: 326px; border: 0px;">
                                
                                <?=$thongbao?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>