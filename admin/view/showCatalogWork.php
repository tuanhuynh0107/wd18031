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
                                    <td>Mã loại</td>
                                    <td>Tên loại hàng</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach(  $showCatalogWork as $item){
                                        extract($item);
                                        $linkDetailCatalog="index.php?page=showDetailCatalogWork&id=".$id_catalog;
                                        echo 
                                        '
                                        <tr>
                                            <td>
                                                <a href="'. $linkDetailCatalog.'">
                                                    '.$id_catalog.'
                                                </a>
                                            </td>
                                            <td>'.$name_catalog.'</td>
                                        </tr>
                                        ';
                                    }

                                ?>
                              
                                
                             
                            </tbody>
                        </table>
                    </article>
                </div>

            