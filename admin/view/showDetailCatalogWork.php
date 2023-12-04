<?php
    // print_r($showCatalogWork);
?>
<main class="main row">
                <div class="main-content row">
                    <article class="box-total row">
                        
                    </article>
                    <!-- code table don hang o day -->
                    <article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title row">
                                <h4>Loại hàng đang hoạt động</h4>
                            </div>
                            
                       
                        </div>
                        <table class="table__packgeNew">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Tên tên sản phẩm</td>                     
                                    <td>Thuộc loại</td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach( $listDetailCatalog as $item){
                                        extract($item);
                                
                                        echo 
                                        '
                                        <tr>
                                            <td>'.$product_id.'</td>
                                            <td>'.$product_name.'</td>                     
                                            <td>'.$catalog_name.'</td>
                                        </tr>
                                        ';
                                    }

                                ?>
                              
                                
                             
                            </tbody>
                        </table>
                    </article>
                </div>

            