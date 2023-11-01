<?php 
    $kqDM = "";
        foreach ($listItem as $item) {
            extract($item);
            $kqDM.= '
                <option value="'.$id.'">'.$name.'</option>
            ';
        };
?>


<div class="category">
                    <figure class="heading-main">
                        <img src="../assets/img/newZone/danh_muc.svg" alt="" style="margin-top: 12px;" width="215"
                            height="41">
                    </figure>
                    <h4>Thêm sản phẩm</h4>
                    <form action="index.php?page=addProduct" method="POST" class="form" id="form-4" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="fullName" class="from-label">Tên sản phẩm:</label>
                                    <input id="user" name="name" type="text" placeholder="Tên sản phẩm">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="pass" class="from-label">Hình sản phẩm</label>
                                    <input id="pass"  type="file" name="img" placeholder="Hình sản phẩm">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="passNL" class="from-label">Giá</label>
                                    <input id="passNL" name="pice" type="text" placeholder="Giá">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <select name="loaiHang"  id="">
                                        <?=$kqDM?>
                                    </select>
                                    <span class="form-message"></span>
                                </div>
                                <input type="submit" value="Thêm" class="btn-sign" name="addProduct">
                    </form>
</div>