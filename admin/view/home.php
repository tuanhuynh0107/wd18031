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
                                <p class="total_product__content--title">Khách hàng</p>
                                <div class="total_product__content--qty"><?=$loadAllUser[0]['allUser']?></div>
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
                                <p class="total_product__content--title">Khách hàng mới</p>
                                <div class="total_product__content--qty">200,000</div>
                                <p class="total_product__content--desc">Tăng 15% trong tháng</p>
                            </div>
                        </section>
                    </article>
                    <!-- code table don hang o day -->
                    <article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title">
                                <h4>Doanh thu</h4>
                            </div>

                            <select class="revenue__top--hendel">
                                <option value="1">Năm 2023</option>
                                <option value="2">Năm 2024</option>
                                <option value="3">Năm 2025</option>
                            </select>
                        </div>
                        <div class="revenue__content">
                            <div class="revenue__content--chart">
                                <div class="revenue--chart__line"></div>
                                <div class="revenue--chart__line"></div>
                                <div class="revenue--chart__line"></div>
                                <div class="revenue--chart__line"></div>
                                <div class="revenue__content--columns row">
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Jan</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Feb</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Mar</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Apr</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">May</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Jan</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">July</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Aug</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Sep</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Oct</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Nov</div>
                                    </div>
                                    <div class="revenue__content--column">
                                        <div class="revenue--column_desc">Dec</div>
                                    </div>
                                </div>
                            </div>

                            <div class="revenue__content--price row">
                                <p class="price">80tr</p>
                                <p class="price">60tr</p>
                                <p class="price">40tr</p>
                                <p class="price">20tr</p>
                            </div>


                        </div>
                    </article>

                    <article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title">
                                <h4>Đơn hàng mới</h4>
                            </div>
                            <div class="revenue__status row">
                                <a href="index.php?page=loadCartStatus&status=1" class="revenue__top--satus">Chờ xác nhận</a>
                                <a href="index.php?page=loadCartStatus&status=2" class="revenue__top--satus">Đang vận chuyển</a>
                                <a href="index.php?page=loadCartStatus&status=3" class="revenue__top--satus">Giao hàng thành công</a>
                                <a href="index.php?page=loadCartStatus&status=4" class="revenue__top--satus">Thất bại</a>
                                <a href="index.php?page=loadCartStatus&status=5" class="revenue__top--satus">Đã hủy</a>
                            </div>
                        </div>
                        <table class="table__packgeNew">
                            <thead>
                                <tr>
                                    <td>Mã đơn hàng</td>
                                    <td>Khách hàng</td>
                                    <td>Thời gian</td>
                                    <td>Trạng thái</td>
                                    <td>Thao tác</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($loadNewCart as $cart){
                                        extract($cart);
                                        $statusShow="";
                                        if($status==1) {
                                            $statusShow .= '
                                                <select name="indStatus" class="revenue__top--hendel yourCard__status">
                                                    <option value="1">Chờ xác nhận</option>
                                                    <option value="2">Đang vận chuyển</option>
                                                    <option value="3">Giao hàng thành công</option>
                                                    <option value="4">Hủy</option>
                                                </select>
                                            ';
                                        }elseif($status==2) {
                                            $statusShow .= '
                                                <select name="indStatus" class="revenue__top--hendel yourCard__status">
                                                    <option value="2">Đang vận chuyển</option>
                                                    <option value="3">Giao hàng thành công</option>
                                                    <option value="4">Thất bại</option>
                                                </select>
                                            ';
                                        }elseif($status==3) {
                                            $statusShow .= '
                                                <select name="indStatus" class="revenue__top--hendel yourCard__status">
                                                    <option value="3">Giao hàng thành công</option>
                                                </select>
                                                ';
                                        }
                                        elseif($status==4) {
                                            $statusShow .= '
                                                <select name="indStatus" class="revenue__top--hendel yourCard__status">
                                                    <option value="4">Thất bại</option>
                                                </select>
                                                ';
                                        }
                                        elseif($status==5) {
                                            $statusShow .= '
                                                <select name="indStatus" class="revenue__top--hendel yourCard__status">
                                                    <option value="5">Đã hủy</option>
                                                    <option value="2">Đang vận chuyển</option>
                                                    <option value="3">Giao hàng thành công</option>
                                                    <option value="4">Thất bại</option>
                                                    <option value="1">Chờ xác nhận</option>
                                                </select>
                                                ';
                                        }
                                        echo 
                                        '
                                        <form action="index.php?page=updateStatus&idPackage='.$id_package.'" method="post">
                                            <tr>
                                                <td><a href="index.php?page=detailPackage&idPackage='.$id_package.'" class="id__cart">'.$id_package.'</a></td>
                                                <td>'.$name.'</td>
                                                <td>'.$time.'</td>
                                                <td> 
                                                    '. $statusShow.'
                                                </td>
                                                <td>
                                                    <input type="hidden" name="id_package" value="'.$id_package.'">
                                                    <input type="submit" value="Thay đổi" name="updateStatus" class="hendel-update-act">
                                                </td>
                                            </tr>
                                        </form>
                                        ';
                                    }
                                ?>
                                
                                
                            </tbody>
                        </table>
                    </article>
                </div>
                