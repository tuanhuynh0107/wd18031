
<?php 
    extract($item);
        $idPRESENT = $id_catalog;
        
?>
          
        <div class="category">
                    <figure class="heading-main">
                        <img src="../assets/img/newZone/danh_muc.svg" alt="Sản phẩm" style="margin-top: 12px;" width="215"
                            height="41">
                    </figure>
                    <h4>Cập nhật danh mục</h4>
                    <form action="index.php?page=updataProduct" method="POST" class="form" id="form-4" move_uploaded_file >
                                <input type="hidden" name="id" value="<?=$id?>">
                                <div class="form-group">
                                    <label for="fullName" class="from-label">Tên sản phẩm:</label>
                                    <input id="user" name="name" type="text"  value="<?=$name?>" placeholder="Tên sản phẩm">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="pass" class="from-label">Hình sản phẩm</label>
                                    <input id="pass" name="img" type="text" value="<?=$img?>"  placeholder="Hình sản phẩm">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="passNL" class="from-label">Giá</label>
                                    <input id="passNL" name="pice" type="text" value="<?=$pice?>"  placeholder="Giá">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <select name="loaiHang"  id="">
                                           <?php 
                                           
                                           if(isset($listItem)){
                                            $kqDM = "";
                                            foreach ($listItem as $item) {
                                                extract($item);
                                                if($idPRESENT == $id) {
                                                    $kqDM.= '
                                                        <option value="'. $idPRESENT.'" selected>'.$name.'</option>
                                                    ';
                                                }else {
                                                    $kqDM.= '
                                                        <option value="'.$id.'">'.$name.'</option>
                                                    ';
                                                }
                                            };
                                            echo $kqDM;
                                            
                                        }        
                                           ?>
                                    </select>
                                    
                                    <span class="form-message"></span>
                                </div>
                                <input type="submit" value="Cập nhật" class="btn-sign" name="btnUpPro">
                            </form>
        </div>