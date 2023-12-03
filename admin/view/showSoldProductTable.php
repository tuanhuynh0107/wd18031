<?php
    // print_r($newUsersBlackList);
?>
<main class="main row">
                <div class="main-content row">
                    <article class="box-total row">
                        
                    </article>
                    <!-- code table don hang o day -->
                    <article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title row">
                                <h4>Sản phẩm đã bán</h4>
                                <button class="btn btn-ml"><a href="add_sanpham_admin.html">Thêm </a></button>
                            </div>
                            
                            <select class="revenue__top--hendel">
                                <option value="1">Cá hồi</option>
                                <option value="2">Cua</option>
                                <option value="3">Ghẹ</option>
                            </select>
                        </div>
                        <table class="table__packgeNew">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Số lượng bán ra</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach( $showSoldPro as $item){
                                        extract($item);
                                        echo 
                                        '  <tr>
                                                <td>'.$idProduct.'</td>
                                                <td>'.$nameProduct.'</td>
                                                <td>'.$qtysold.'</td>
                                            </tr>
                                        
                                        ';
                                    }
                                ?>
                                <a href="index.php?page=statisticalProduct&id=5">
                                    <input type="submit" class="form_group__submit--them input-submit__loaihang" name="addCatalog" value="Xem biểu đồ">
                                </a>
                             
                            </tbody>
                        </table>
                    </article>
                </div>

            