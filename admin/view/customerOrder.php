<?php
    // print_r($loadUserCartAdmin);
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
                            <a href="index.php?page=showUser">
                                <div class="total_product__content row">
                                    <p class="total_product__content--title">Số lượng Khách hàng</p>
                                    <div class="total_product__content--qty"><?=$totalAllUser[0]['total_user']?></div>
                                    <p class="total_product__content--desc">Tất cả khách hàng bao gồm cả admin</p>
                                </div>
                            </a>
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
                            <a href="index.php?page=userBlack">
                                <div class="total_product__content row">
                                    <p class="total_product__content--title"> Danh sách đen</p>
                                    <div class="total_product__content--qty"><?=$newUsersBlackList[0]['total_customers']?></div>
                                    <p class="total_product__content--desc">Tăng 40% trong tháng</p>
                                </div>
                            </a>
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
                            <a href="index.php?page=userVip">
                                <div class="total_product__content row">
                                    <p class="total_product__content--title">Khách hàng Ưu tiên</p>
                                    <div class="total_product__content--qty"><?=$vipUser[0]['total_customers']?></div>
                                    <p class="total_product__content--desc">Tăng 15% trong tháng</p>
                                </div>
                            </a>
                        </section>
                    </article>
                    <!-- code table don hang o day -->
                    <article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title row">
                                <h4>Đơn hàng của khách hàng</h4>
                            </div>
                            
                            <!-- <select class="revenue__top--hendel">
                                <option value="1">Cá hồi</option>
                                <option value="2">Cua</option>
                                <option value="3">Ghẹ</option>
                            </select> -->
                        </div>
                        <table class="table__packgeNew">
                            <thead>
                                <tr >
                                    <td>Mã đơn hàng</td>
                                    <td>Tổng đơn</td>
                                    <td>Trạng thái</td>
                                    <td>Thời gian đặt hàng</td>
                                    <td>Ghi chú khách hàng</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($loadUserCartAdmin as $item){
                                        extract($item);
                                        $statusShow="";
                                        if($status==1){
                                            $statusShow="Chờ xác nhận";
                                        }else if($status==2){
                                            $statusShow="Đang vận chuyển";
                                        }else if($status==3){
                                             $statusShow="Giao hàng thành công";
                                        }else if($status==4){
                                            $statusShow="Giao hàng thất bại";
                                        }else if($status==5){
                                            $statusShow="Đã hủy";
                                        }
                                        echo 
                                        '
                                        <tr>
                                            <td>#ĐH'.$id_package.'</td>
                                            <td>'.number_format($total,0,",",".").'đ</td>
                                            <td>'.$statusShow.'</td>
                                            <td>'.$time.'</td>
                                            <td>'.$note.'</td>
                                        </tr>
                                        ';
                                    }
                                
                                ?>
                                <!-- <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> -->
                            </tbody>
                        </table>    
                    </article>
                </div>

            