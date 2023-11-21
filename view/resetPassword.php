<?php
?>
<main class="main--login" >
        <article class="login">
            <div class="main-content">
                <div class="main-login row">
                    <img src="../assets/img/logo_sign.png" alt="">

                    <form action="index.php?page=loginUser" method="post" class="form__login row">
                        <div class="form__group">
                            <h2 class="form__group--title">Đặt lại mât khẩu</h2>
                        </div>
                        <div class="form__group">
                            <input type="text" placeholder="Nhập mật khẩu mới" class="full-name" name="phone">
                        </div>
                        <div class="form__group">
                            <input type="text" placeholder="Xác nhận mật khẩu" class="full-name" name="phone">
                        </div>
                        <div class="form__group">
                            <input type="submit" name="loginUser" value="Thay đổi" class="btn push__login">
                            <?php
                                    if(isset($thongbao) && $thongbao == "") {
                                        echo '<p class="notification" style="color:#15101d;">Nhập mật khẩu mới của bạn</p>';
                                    }else {
                                        echo '<p class="notification">'.$thongbao.'</p>';
                                    }
                               ?>          
                        </div>
                        <div class="form__group">
                            <ul class="form__group--1">
                                <li class="form__desc">Hệ thống sẽ gửi email khôi phục tài khoản qua Email hoặc số điện thoại của bạn.</li>
                                <li class="form__desc">Liên hệ <a href="0907578881" class="form__desc--hosline">Tổng đải</a> để được hỗ trợ nếu không nhận được tin nhắn</li>
                            </ul>
                        </div>
                    </form>

                </div>
            </div>   
        </article>
       <img src="./assets/icons/logo_main--login.png" alt="" class="logo-main--login" >                             
    </main>