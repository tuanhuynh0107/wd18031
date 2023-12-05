<?php
    // print_r($LoadAllVipUser);
?>
<main class="main row">
                <div class="main-content row">
                    <article class="box-total row">
                        
                    </article>
                    <!-- code table don hang o day -->
                    <article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title row">
                                <h4>khách hàng ưu tiên</h4>
                            </div>
                            
                        </div>
                        <table class="table__packgeNew">
                            <thead>
                                <tr>
                                    <td>Mã khách hàng</td>
                                    <td>Tên khách hàng</td>
                                    <td>Số điện thoại</td>
                                    <td>Gmail</td>
                                    <td>Số lượng đơn hàng</td>
                                    <td>Giá đơn hàng</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($LoadAllVipUser as $itemUser){
                                        extract($itemUser);
                                        echo 
                                        '
                                        <tr>
                                            <td>'.$id_user.'</td>
                                            <td>'.$customer_name.'</td>
                                            <td>'.$phone.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$total_orders.' đơn hàng</td>
                                            <td>'.number_format($total_order_amount,0,",",".").'đ</td>
                                        </tr>
                                        ';
                                    }

                                ?>
                               
                            </tbody>
                        </table>
                    </article>
                </div>

            