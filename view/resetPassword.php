<?php
    if(isset($loadOneResetPass) ){
        extract($loadOneResetPass);
    }
    // print_r($updatePass);
?>
<main class="main--login" >
        <article class="login">
            <div class="main-content">
                <div class="main-login row">
                    <img src="../assets/img/logo_sign.png" alt="">

                    <form action="index.php?page=reserPass" method="post" class="form__login row">
                        <div class="form__group">
                            <h2 class="form__group--title">Đặt lại mật khẩu</h2>
                        </div>
                        <div class="form__group">
                            <input type="password" placeholder="Nhập mật khẩu cũ" class="full-name" name="oldPass">
                        </div>
                        <div class="form__group">
                            <input type="password" placeholder="Nhập mật khẩu mới" class="full-name" name="newPass">
                        </div>
                        <div class="form__group">
                            <input type="password" placeholder="Xác nhận mật khẩu mới" class="full-name" name="comfrimNewPass">
                        </div>
                        <div class="form__group">
                            <input type="hidden" name="idUser" value="<?=$id_user?>">
                            <input type="submit" name="resetpass" value="Thay đổi" class="btn push__login">
                            <?php
                                    // if(isset($thongbao) && $thongbao == "") {
                                    //     echo '<p class="notification" style="color:#15101d;">Nhập mật khẩu mới của bạn</p>';
                                    // }else {
                                    //     echo '<p class="notification">'.$thongbao.'</p>';
                                    // }
                               ?>          
                        </div>
                        <div class="form__group">
                            <ul class="form__group--1">
                            <?php
                                    if((isset($updatePass))){
                                ?>
                                <li class="form__desc">
                                  <span class="notification"><?=$updatePass?></span> 
                                    
                                </li>
                                <?php }?>
                                <li class="form__desc">Liên hệ <a href="0907578881" class="form__desc--hosline">Tổng đải</a> để được hỗ trợ nếu không nhận được tin nhắn</li>
                            </ul>
                        </div>
                    </form>

                </div>
            </div>   
        </article>
       <img src="./assets/icons/logo_main--login.png" alt="" class="logo-main--login" >                             
    </main>