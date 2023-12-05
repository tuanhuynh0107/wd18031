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
                            </div>
                            
                            <a href="index.php?page=statisticalProduct&id=5">
                                    <input type="submit" class="form_group__submit--them input-submit__loaihang" name="addCatalog" value="Xem biểu đồ">
                            </a>
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
                               
                             
                            </tbody>
                        </table>
                    </article>
                </div>

            