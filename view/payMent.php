<?php
    // print_r($_SESSION['user_info']);
    if(isset($loadUser)){
        extract($loadUser);
    }
    // print_r($_SESSION['cart']);
?>


<main>
        <!-- heading-cart -->
        <article class="heading-cart">
            <div class="main-content">
                <div class="heading-cart__content row ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="211" height="15" viewBox="0 0 211 15" fill="none">
                        <path d="M0 0.113517L0.025855 14.5929H6.34978V9.53904C6.34978 7.60527 10.0314 7.627 10.0314 9.5825V14.5929H16.3553V0.113517H10.0056L10.0314 5.8062C8.52153 5.42814 6.74794 6.33636 6.69623 7.87469H6.34978C6.34978 5.29343 6.32393 2.69478 6.32393 0.113517H0ZM22.1725 14.5712H33.5587V6.0061C33.5587 2.11248 30.7768 0.113517 26.1489 0.113517H19.1579L19.1321 5.96265C19.1321 5.96265 25.3009 6.58841 25.3785 3.0685C25.3785 2.24719 25.063 1.64316 24.5563 1.22164L24.7476 1.00001C26.092 1.5997 26.9711 2.69478 26.909 4.55903V6.67532H22.7827C16.0089 6.67532 15.559 14.5712 22.1725 14.5712ZM26.9711 7.31846V11.2121C27.6795 11.3207 28.2121 11.8335 28.2121 12.4549C28.2121 13.1459 27.5502 13.7021 26.728 13.7021C25.063 13.7021 24.3443 11.5684 24.3701 10.5255C24.396 9.05234 25.456 7.80951 26.9711 7.31846ZM35.141 0.09179V14.5495H42.0492V0.09179H35.141ZM49.2729 0.09179C46.4703 0.09179 43.373 0.422052 43.2127 3.42484C42.9489 8.05286 51.6049 7.11857 51.8997 11.5902C51.8118 13.5717 50.2036 13.9454 48.1611 13.9932L48.0836 13.7455C49.035 13.3023 49.6762 12.6809 49.6503 11.3859C49.5883 7.60527 43.6108 8.27449 43.6108 8.27449L43.6367 14.5495H53.5647C56.6879 14.5495 57.9857 12.9242 58.3011 11.3207C58.6683 9.45213 57.5307 8.07459 55.0952 6.9404C53.301 6.09301 49.9658 5.02835 50.0433 2.91641C50.095 1.06954 52.2151 0.487236 54.1179 0.578493L54.1697 0.82619C53.2492 1.24771 52.5305 1.80394 52.5564 3.0685C52.6081 6.65359 58.2753 6.0061 58.2753 6.0061L58.2494 0.09179H49.2729ZM63.8029 14.5712H75.1891V6.0061C75.1891 2.11248 72.402 0.113517 67.7741 0.113517H60.7831L60.7573 5.96265C60.7573 5.96265 66.9313 6.58841 67.0088 3.0685C67.0088 2.24719 66.6882 1.64316 66.1867 1.22164L66.3728 1.00001C67.7172 1.5997 68.5963 2.69478 68.5394 4.55903V6.67532H64.4079C57.6393 6.67532 57.1843 14.5712 63.8029 14.5712ZM68.5963 7.31846V11.2121C69.3099 11.3207 69.8373 11.8335 69.8373 12.4549C69.8373 13.1459 69.1806 13.7021 68.3584 13.7021C66.6882 13.7021 65.9747 11.5684 66.0005 10.5255C66.0264 9.05234 67.0864 7.80951 68.5963 7.31846ZM83.2246 14.5712V7.4271C83.2246 5.38034 86.2443 5.40207 86.2443 7.47056V14.5712H92.7079V5.44987C92.7079 2.62091 91.9891 0.113517 88.1007 0.0439885C84.6879 -0.0211949 83.6279 2.62091 83.5762 5.18044H83.2246V0.113517H76.6369V14.5712H83.2246ZM100.78 14.5495V7.40537C100.78 5.35861 103.794 5.35861 103.794 7.4271V14.5495H110.253V7.22721C110.253 5.44987 113.19 5.33688 113.19 7.22721V14.5495H119.648V6.18427C119.648 3.5552 119.482 0.09179 115.067 0.000533177C111.628 -0.042923 110.594 2.57745 110.516 5.13699H110.253C110.149 2.73824 109.508 0.09179 105.645 0.000533177C102.233 -0.042923 101.173 2.57745 101.121 5.13699H100.78V0.09179H94.1867V14.5495H100.78ZM121.256 0.09179V14.5495H128.164V0.09179H121.256ZM143.966 6.36244L143.992 0.09179H134.328C129.038 0.09179 128.216 6.0061 133.03 7.24893C128.087 8.49611 128.35 14.5495 134.328 14.5495H143.966L143.992 8.23103C142.663 8.23103 138.015 8.00941 138.066 11.3859C138.066 12.5201 138.62 13.2545 139.416 13.7238L139.282 13.9672C137.399 13.6152 136.21 11.9682 136.236 10.3864C136.288 8.53957 138.247 7.51836 140.445 7.47056V7.02731C137.746 6.96213 136.184 5.09353 136.314 3.38138C136.396 2.09075 137.534 0.913101 139.256 0.665404L139.39 0.913101C138.594 1.37808 138.041 2.11248 138.066 3.24667C138.118 7.02731 143.966 6.36244 143.966 6.36244ZM151.769 14.5712V7.4271C151.769 5.38034 154.789 5.40207 154.789 7.47056V14.5712H161.247V5.44987C161.247 2.62091 160.534 0.113517 156.64 0.0439885C153.227 -0.0211949 152.172 2.62091 152.121 5.18044H151.769V0.113517H145.176V14.5712H151.769ZM166.139 6.38417L166.165 14.5712H172.68L172.654 6.09301H175.7V0.113517H162.669V6.11909C163.89 6.11909 168.549 6.33636 168.497 3.15976C168.471 1.96038 167.809 1.42153 166.935 1.00001L167.039 0.752315C171.858 1.3998 170.56 6.18427 166.139 6.38417ZM181.145 14.5712H192.531V6.0061C192.531 2.11248 189.744 0.113517 185.121 0.113517H178.125L178.099 5.96265C178.099 5.96265 184.273 6.58841 184.351 3.0685C184.351 2.24719 184.035 1.64316 183.528 1.22164L183.715 1.00001C185.059 1.5997 185.938 2.69478 185.881 4.55903V6.67532H181.75C174.981 6.67532 174.526 14.5712 181.145 14.5712ZM185.938 7.31846V11.2121C186.652 11.3207 187.179 11.8335 187.179 12.4549C187.179 13.1459 186.522 13.7021 185.7 13.7021C184.035 13.7021 183.316 11.5684 183.342 10.5255C183.368 9.05234 184.428 7.80951 185.938 7.31846ZM199.486 8.18323C199.062 8.53957 198.772 9.00889 198.772 9.72156V14.5712H205.391V10.6341C205.391 7.58354 210.256 7.83124 210.256 4.51557V0.113517H203.798V4.27222C203.798 6.09301 202.878 7.00558 201.182 7.49228C200.122 7.80951 198.875 7.56181 198.824 6.47108C198.772 5.78448 199.511 5.24997 200.328 5.2717L200.303 0.113517H193.953V4.51557C193.953 7.07511 196.869 8.23103 199.486 8.18323Z" fill="white"/>
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
                            <?php 
                                if(isset($_SESSION['user_info'])){
                                    echo '<div class="pay__address--btn"><a href="index.php?page=changeProfile">Thay đổi</a></div>
                                    ';
                               }else{
                                    echo '<div class="pay__address--btn"><a href="index.php?page=login">Thay đổi</a> | Bạn cần đăng nhập</div>';
                               }
                            ?>
                               
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
                                    $idCart= 0;
                                    $total_qty=0;
                                    $quantyty = 0;
                                    $total_Pro=0;
                                    $total_All=0;
                                    $ship=0;
                                    // $qty=1;
                                    // echo print_r($_SESSION['cart']);    
                                    foreach ($_SESSION['cart'] as $item) {
                                        extract($item);
                                        $linkProduct = 'index.php?page=product&idProduct='.$idProduct;
                                        $total = $pricePro * $qtyPro;
                                        $total_Pro+=$total;
                                        
                                        echo 
                                        '
                                        <tr>
                                            <td colspan="2" class="pay-ment__bod--img">
                                                <a href="'.$linkProduct.'">
                                                    <img style="width: 80px;height: 80px;"
                                                    src="./assets/img/img_main/'.$imgPro.'" >
                                                </a<
                                            </td>
                                            <td class="pay-ment__bod--title">'.$namePro.'</td>
                                            <td class="pay-ment__bod--title">Loại: '.$typePro.'</td>
                                            <td class="pay-ment__bod--pice">'.number_format($pricePro,0,",",".").' đ</td>
                                            <td class="pay-ment__bod--qty">'.$qtyPro.'</td>
                                            <td class="pay-ment__bod--total">'.number_format($total,0,",",".").' đ</td>
                                        </tr>
                                        ';
                                    }

                                    if($total_Pro>500000) {
                                        $ship = 0;
                                    }else {
                                        $ship=35000;
                                    }
                                    $total_All=$total_Pro+$ship;
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
                            <div class="note__express--top row">
                                Đơn vị vận chuyển: <span id="transportName">JHN Exxpress</span>
                                    <div class="pay__address--btn">
                                        <select name="Exxpress" id="transportSelect" class="option" onchange="changeTransport()">
                                            <option value="">Thay đổi</option>
                                            <option value="1">Grab</option>
                                            <option value="2">Bee</option>
                                            <option value="3">Ahamove</option>
                                            <option value="4">Sv xanh</option>
                                        </select>
                                    </div>

                                Dịch vụ: <span id="transportName">Nhanh</span>
                                <div class="pay__address--btn">
                                    <select name="Exxpress" id="transportSelect" class="option" onchange="changeTransport()">
                                        <option value="">Thay đổi</option>
                                        <option value="1">Nhanh 2h nội thành(HCM)</option>
                                        <option value="2">4h nội thành(HCM)</option>
                                        <option value="3">Bất kỳ</option>
                                        <option value="4">Càng sớm càng tốt</option>
                                    </select>
                                </div>
                            </div>

                            <div class="note__express--bottom row">
                                Được phép đồng điểm
                            </div>
                        </div>
                        
                    </div>

                    <div class="delivery ">
                        <div class="delivery__pay row">
                            <div class="delivery__pay--title">Phương thức thanh toán</div>
                            <div class="delivery__pay--desc">
                                <div class="delivery__pay--desc__title">Thanh toán khi nhận hàng</div>
                                
                                <select class="option" name="pttt" >
                                    <option value="">Thay đổi</option>
                                    <option value="1" >Thanh toán khi nhận hàng</option>
                                    <!-- <option value="2" >Chuyển Khoản</option>
                                    <option value="3"  >Chuyển Momo</option> -->
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
                                    <span style="font-weight: 600;"><?=number_format($total_All,0,",",".")?>đ</span>
                                </div>
                                    <input type="hidden" name="name" value="<?=$username?>">
                                    <input type="hidden" name="address" value="<?=$address?>">
                                    <input type="hidden" name="phone" value="<?=$phone?>">
                                    <input type="hidden" name="total_All" value="<?=$total_All?>">
                                    <input type="hidden" name="total" value="<?=$total?>">
                                    <input type="hidden" name="idUser" value="<?=$id_user?>">
                                    <input type="hidden" name="idProduct" value="<?=$idProduct?>">

                                    <input type="submit" name="order" value="Đặt hàng" class="main-product__content--btn btn" style="width: 326px; border: 0px;">
                                
                                <?=$thongbao?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>