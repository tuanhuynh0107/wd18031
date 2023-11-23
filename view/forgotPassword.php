<?php
  
?>
<main class="main--login" >
        <article class="login">
            <div class="main-content">
                <div class="main-login row">
                    <img src="../assets/img/logo_sign.png" alt="">

                    <form action="index.php?page=resetPassword" method="post" class="form__login row">
                        <div class="form__group">
                            <h2 class="form__group--title">Khôi phục tài khoản</h2>
                        </div>
                        <div class="form__group">
                            <input type="text" placeholder="Nhập số điện thoại hoặc Email của bạn" class="full-name" name="phone">
                        </div>
                        <div class="form__group">
                            <input type="submit" name="forgotPass" value="Gửi Yêu Cầu" class="btn push__login">
                            <?php
                                
                                    // if(isset($check_pass)&& $check_pass == "") {
                                    //     echo '<p class="notification" style="color:#15101d;">  </p>';
                                    // }else {
                                    //     echo ' Mật khẩu của bạn là: <p class="notification"> '. $check_pass.'</p>';
                                    // }
                                    
                                  
                               ?>          
                        </div>
                        <div class="form__group">
                            <ul class="form__group--1">
                                <?php
                                    if((isset($check_pass))){
                                ?>
                                <li class="form__desc">
                                    Hãy dùng mật khẩu này <span class="notification"><?=$check_pass?></span> để đăng nhập vào tài khoản của bạn 
                                    <a href="index.php?page=login" class="form__desc--hosline">Đăng nhập</a>
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