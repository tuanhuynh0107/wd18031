<?php
//  echo print_r($loadUser);
 if(isset($loadUser)){
    extract($loadUser);
 }
 if(isset($_SESSION['user_info'])){
    extract($_SESSION['user_info']);
}
print_r($_SESSION['user_info']);
 
?>
<main>
    <article class="heading-cart">
        <div class="main-content">
            <div class="heading-cart__content row ">
            <svg xmlns="http://www.w3.org/2000/svg" width="211" height="15" viewBox="0 0 211 15" fill="none">
                <path d="M0 0.113517L0.025855 14.5929H6.34978V9.53904C6.34978 7.60527 10.0314 7.627 10.0314 9.5825V14.5929H16.3553V0.113517H10.0056L10.0314 5.8062C8.52153 5.42814 6.74794 6.33636 6.69623 7.87469H6.34978C6.34978 5.29343 6.32393 2.69478 6.32393 0.113517H0ZM22.1725 14.5712H33.5587V6.0061C33.5587 2.11248 30.7768 0.113517 26.1489 0.113517H19.1579L19.1321 5.96265C19.1321 5.96265 25.3009 6.58841 25.3785 3.0685C25.3785 2.24719 25.063 1.64316 24.5563 1.22164L24.7476 1.00001C26.092 1.5997 26.9711 2.69478 26.909 4.55903V6.67532H22.7827C16.0089 6.67532 15.559 14.5712 22.1725 14.5712ZM26.9711 7.31846V11.2121C27.6795 11.3207 28.2121 11.8335 28.2121 12.4549C28.2121 13.1459 27.5502 13.7021 26.728 13.7021C25.063 13.7021 24.3443 11.5684 24.3701 10.5255C24.396 9.05234 25.456 7.80951 26.9711 7.31846ZM35.141 0.09179V14.5495H42.0492V0.09179H35.141ZM49.2729 0.09179C46.4703 0.09179 43.373 0.422052 43.2127 3.42484C42.9489 8.05286 51.6049 7.11857 51.8997 11.5902C51.8118 13.5717 50.2036 13.9454 48.1611 13.9932L48.0836 13.7455C49.035 13.3023 49.6762 12.6809 49.6503 11.3859C49.5883 7.60527 43.6108 8.27449 43.6108 8.27449L43.6367 14.5495H53.5647C56.6879 14.5495 57.9857 12.9242 58.3011 11.3207C58.6683 9.45213 57.5307 8.07459 55.0952 6.9404C53.301 6.09301 49.9658 5.02835 50.0433 2.91641C50.095 1.06954 52.2151 0.487236 54.1179 0.578493L54.1697 0.82619C53.2492 1.24771 52.5305 1.80394 52.5564 3.0685C52.6081 6.65359 58.2753 6.0061 58.2753 6.0061L58.2494 0.09179H49.2729ZM63.8029 14.5712H75.1891V6.0061C75.1891 2.11248 72.402 0.113517 67.7741 0.113517H60.7831L60.7573 5.96265C60.7573 5.96265 66.9313 6.58841 67.0088 3.0685C67.0088 2.24719 66.6882 1.64316 66.1867 1.22164L66.3728 1.00001C67.7172 1.5997 68.5963 2.69478 68.5394 4.55903V6.67532H64.4079C57.6393 6.67532 57.1843 14.5712 63.8029 14.5712ZM68.5963 7.31846V11.2121C69.3099 11.3207 69.8373 11.8335 69.8373 12.4549C69.8373 13.1459 69.1806 13.7021 68.3584 13.7021C66.6882 13.7021 65.9747 11.5684 66.0005 10.5255C66.0264 9.05234 67.0864 7.80951 68.5963 7.31846ZM83.2246 14.5712V7.4271C83.2246 5.38034 86.2443 5.40207 86.2443 7.47056V14.5712H92.7079V5.44987C92.7079 2.62091 91.9891 0.113517 88.1007 0.0439885C84.6879 -0.0211949 83.6279 2.62091 83.5762 5.18044H83.2246V0.113517H76.6369V14.5712H83.2246ZM100.78 14.5495V7.40537C100.78 5.35861 103.794 5.35861 103.794 7.4271V14.5495H110.253V7.22721C110.253 5.44987 113.19 5.33688 113.19 7.22721V14.5495H119.648V6.18427C119.648 3.5552 119.482 0.09179 115.067 0.000533177C111.628 -0.042923 110.594 2.57745 110.516 5.13699H110.253C110.149 2.73824 109.508 0.09179 105.645 0.000533177C102.233 -0.042923 101.173 2.57745 101.121 5.13699H100.78V0.09179H94.1867V14.5495H100.78ZM121.256 0.09179V14.5495H128.164V0.09179H121.256ZM143.966 6.36244L143.992 0.09179H134.328C129.038 0.09179 128.216 6.0061 133.03 7.24893C128.087 8.49611 128.35 14.5495 134.328 14.5495H143.966L143.992 8.23103C142.663 8.23103 138.015 8.00941 138.066 11.3859C138.066 12.5201 138.62 13.2545 139.416 13.7238L139.282 13.9672C137.399 13.6152 136.21 11.9682 136.236 10.3864C136.288 8.53957 138.247 7.51836 140.445 7.47056V7.02731C137.746 6.96213 136.184 5.09353 136.314 3.38138C136.396 2.09075 137.534 0.913101 139.256 0.665404L139.39 0.913101C138.594 1.37808 138.041 2.11248 138.066 3.24667C138.118 7.02731 143.966 6.36244 143.966 6.36244ZM151.769 14.5712V7.4271C151.769 5.38034 154.789 5.40207 154.789 7.47056V14.5712H161.247V5.44987C161.247 2.62091 160.534 0.113517 156.64 0.0439885C153.227 -0.0211949 152.172 2.62091 152.121 5.18044H151.769V0.113517H145.176V14.5712H151.769ZM166.139 6.38417L166.165 14.5712H172.68L172.654 6.09301H175.7V0.113517H162.669V6.11909C163.89 6.11909 168.549 6.33636 168.497 3.15976C168.471 1.96038 167.809 1.42153 166.935 1.00001L167.039 0.752315C171.858 1.3998 170.56 6.18427 166.139 6.38417ZM181.145 14.5712H192.531V6.0061C192.531 2.11248 189.744 0.113517 185.121 0.113517H178.125L178.099 5.96265C178.099 5.96265 184.273 6.58841 184.351 3.0685C184.351 2.24719 184.035 1.64316 183.528 1.22164L183.715 1.00001C185.059 1.5997 185.938 2.69478 185.881 4.55903V6.67532H181.75C174.981 6.67532 174.526 14.5712 181.145 14.5712ZM185.938 7.31846V11.2121C186.652 11.3207 187.179 11.8335 187.179 12.4549C187.179 13.1459 186.522 13.7021 185.7 13.7021C184.035 13.7021 183.316 11.5684 183.342 10.5255C183.368 9.05234 184.428 7.80951 185.938 7.31846ZM199.486 8.18323C199.062 8.53957 198.772 9.00889 198.772 9.72156V14.5712H205.391V10.6341C205.391 7.58354 210.256 7.83124 210.256 4.51557V0.113517H203.798V4.27222C203.798 6.09301 202.878 7.00558 201.182 7.49228C200.122 7.80951 198.875 7.56181 198.824 6.47108C198.772 5.78448 199.511 5.24997 200.328 5.2717L200.303 0.113517H193.953V4.51557C193.953 7.07511 196.869 8.23103 199.486 8.18323Z" fill="white"/>
            </svg>  
                <span class="heading-cart__line">|</span>
                <h2 class="heading-cart__title">Tài khoản</h2>
            </div>
        </div>
    </article>
    <article class="proFile" >
        <div class="main-content main__content--forfile">
            <div class="proFile__sidebar">
                <div class="sidebar--top row">
                    <figure class="sidebar--top__left row ">
                        <?php
                            if($_SESSION['user_info']['img']==""){
                                echo ' 
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 30 30" fill="none">
                                    <rect width="30" height="30" rx="15" fill="white"/>
                                    <path d="M15.0601 25.2C9.42011 25.2 4.86011 20.64 4.86011 15C4.86011 9.36005 9.42011 4.80005 15.0601 4.80005C20.7001 4.80005 25.2601 9.36005 25.2601 15C25.2601 20.64 20.6401 25.2 15.0601 25.2ZM15.0601 6.00005C10.0801 6.00005 6.06011 10.02 6.06011 15C6.06011 19.98 10.0801 24 15.0601 24C20.0401 24 24.0601 19.98 24.0601 15C24.0601 10.02 19.9801 6.00005 15.0601 6.00005Z" fill="#333333"/>
                                    <path d="M9.1801 22.38L8.1001 21.9C8.4001 21.18 9.3601 20.76 10.3801 20.28C11.4001 19.8 12.6601 19.26 12.6601 18.6V17.7C12.3001 17.4 11.7001 16.74 11.5801 15.78C11.2801 15.48 10.8001 14.94 10.8001 14.22C10.8001 13.8 10.9801 13.44 11.1001 13.2C10.9801 12.72 10.8601 11.82 10.8601 11.1C10.8601 8.75995 12.4801 7.19995 15.0601 7.19995C15.7801 7.19995 16.6801 7.37995 17.1601 7.91995C18.3001 8.15995 19.2601 9.47995 19.2601 11.1C19.2601 12.12 19.0801 12.96 18.9601 13.38C19.0801 13.56 19.2001 13.86 19.2001 14.22C19.2001 15 18.7801 15.54 18.4201 15.78C18.3001 16.74 17.7601 17.34 17.4001 17.64V18.6C17.4001 19.14 18.4801 19.56 19.4401 19.92C20.5801 20.34 21.7801 20.82 22.2001 21.78L21.0601 22.2C20.8801 21.72 19.9201 21.36 19.0201 21.06C17.7001 20.58 16.2001 20.04 16.2001 18.66V17.1L16.5001 16.92C16.5001 16.92 17.2201 16.44 17.2201 15.48V15.06L17.5801 14.88C17.6401 14.88 17.9401 14.7 17.9401 14.22C17.9401 14.1 17.8201 13.92 17.7601 13.86L17.5201 13.62L17.6401 13.32C17.6401 13.32 17.9401 12.36 17.9401 11.16C17.9401 10.02 17.2801 9.17995 16.7401 9.17995H16.3801L16.2001 8.87995C16.2001 8.63995 15.7801 8.39995 15.0601 8.39995C13.2001 8.39995 12.0601 9.41995 12.0601 11.1C12.0601 11.88 12.3601 13.2 12.3601 13.2L12.4201 13.5L12.1801 13.8C12.1201 13.8 12.0001 13.98 12.0001 14.22C12.0001 14.52 12.3601 14.88 12.5401 15L12.7801 15.18V15.48C12.7801 16.38 13.5601 16.86 13.5601 16.92L13.8601 17.1V18.66C13.8601 20.1 12.3001 20.82 10.8601 21.42C10.2001 21.66 9.3001 22.08 9.1801 22.38Z" fill="#333333"/>
                                </svg>';
                            }else{
                                echo '<img src="./assets/user/'.$_SESSION['user_info']['img'].'"
                                    alt="user" class="sidebar--top__left--img">';
                            }
                        ?>
                        
                        <figcaption class="sidebar--top__left--id">ID:<?=$id_user?></figcaption>
                        <div class="sidebar--edit__proFile">
                            <a href="index.php?page=changeProfile"> thay đổi</a>
                        </div>
                    </figure>
                    <div class="sidebar--top__right row">
                        <div class="sidebar--top__right--content"><?=$username?></div>
                        <div class="sidebar--top__right--content"><?=$dob?></div>
                        <div class="sidebar--top__right--content">
                            <?php
                                if($gender==1){
                                    echo 'Nam';
                                }else{
                                    if($gender==2){
                                        echo 'Nữ';
                                    }else{
                                        echo 'Khác';
                                    }
                                }
                            ?>
                        </div>
                        <div class="sidebar--top__right--content"><?=$address?></div>
                    </div>
                </div>

                    <div class="sidebar--bottom row">
                        <ul class="nav_sidebar row">
                            <li class="nav_sidebar--li">
                                <a href="index.php?page=yourCard&id_user=<?=$id_user?>" class="nav_sidebar--li__a">Lịch sử đơn hàng</a>
                            </li>
                            <li class="nav_sidebar--li">
                                <a href="index.php?page=yourProduct&id_user=<?=$id_user?>" class="nav_sidebar--li__a">Sản phẩm đã mua</a>
                            </li>
                            <li class="nav_sidebar--li">
                                <a href="index.php?page=resetPassWord&id_user=<?=$id_user?>" class="nav_sidebar--li__a">Đổi mật khẩu</a>
                            </li>
                            <li class="nav_sidebar--li" >
                                <a href="index.php?page=logOut" class="nav_sidebar--li__a">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>

            </div>

            <div class="proFile__change">
                <div class="row change__header">
                    <h4 class="header__title">Thông tin khách hàng</h4>
                    |
                    <h4 class="header__title">Quản lý thông tin</h4>
                </div>
                <div class="change__main">
                    <!-- Thay đổi ảnh User -->
                    <form action="index.php?page=changeImgUser" method="post" enctype="multipart/form-data">
                        <div class="form__group change__group">
                           
                        <?php
                            if($_SESSION['user_info']['img']==""){
                                echo ' 
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 30 30" fill="none">
                                    <rect width="30" height="30" rx="15" fill="white"/>
                                    <path d="M15.0601 25.2C9.42011 25.2 4.86011 20.64 4.86011 15C4.86011 9.36005 9.42011 4.80005 15.0601 4.80005C20.7001 4.80005 25.2601 9.36005 25.2601 15C25.2601 20.64 20.6401 25.2 15.0601 25.2ZM15.0601 6.00005C10.0801 6.00005 6.06011 10.02 6.06011 15C6.06011 19.98 10.0801 24 15.0601 24C20.0401 24 24.0601 19.98 24.0601 15C24.0601 10.02 19.9801 6.00005 15.0601 6.00005Z" fill="#333333"/>
                                    <path d="M9.1801 22.38L8.1001 21.9C8.4001 21.18 9.3601 20.76 10.3801 20.28C11.4001 19.8 12.6601 19.26 12.6601 18.6V17.7C12.3001 17.4 11.7001 16.74 11.5801 15.78C11.2801 15.48 10.8001 14.94 10.8001 14.22C10.8001 13.8 10.9801 13.44 11.1001 13.2C10.9801 12.72 10.8601 11.82 10.8601 11.1C10.8601 8.75995 12.4801 7.19995 15.0601 7.19995C15.7801 7.19995 16.6801 7.37995 17.1601 7.91995C18.3001 8.15995 19.2601 9.47995 19.2601 11.1C19.2601 12.12 19.0801 12.96 18.9601 13.38C19.0801 13.56 19.2001 13.86 19.2001 14.22C19.2001 15 18.7801 15.54 18.4201 15.78C18.3001 16.74 17.7601 17.34 17.4001 17.64V18.6C17.4001 19.14 18.4801 19.56 19.4401 19.92C20.5801 20.34 21.7801 20.82 22.2001 21.78L21.0601 22.2C20.8801 21.72 19.9201 21.36 19.0201 21.06C17.7001 20.58 16.2001 20.04 16.2001 18.66V17.1L16.5001 16.92C16.5001 16.92 17.2201 16.44 17.2201 15.48V15.06L17.5801 14.88C17.6401 14.88 17.9401 14.7 17.9401 14.22C17.9401 14.1 17.8201 13.92 17.7601 13.86L17.5201 13.62L17.6401 13.32C17.6401 13.32 17.9401 12.36 17.9401 11.16C17.9401 10.02 17.2801 9.17995 16.7401 9.17995H16.3801L16.2001 8.87995C16.2001 8.63995 15.7801 8.39995 15.0601 8.39995C13.2001 8.39995 12.0601 9.41995 12.0601 11.1C12.0601 11.88 12.3601 13.2 12.3601 13.2L12.4201 13.5L12.1801 13.8C12.1201 13.8 12.0001 13.98 12.0001 14.22C12.0001 14.52 12.3601 14.88 12.5401 15L12.7801 15.18V15.48C12.7801 16.38 13.5601 16.86 13.5601 16.92L13.8601 17.1V18.66C13.8601 20.1 12.3001 20.82 10.8601 21.42C10.2001 21.66 9.3001 22.08 9.1801 22.38Z" fill="#333333"/>
                                </svg>';
                            }else{
                                echo '<img src="./assets/user/'.$_SESSION['user_info']['img'].'"
                                    alt="user" class="sidebar--top__left--img">';
                            }
                        ?>
                            <input type="file" name="imgUser">
                            <input type="hidden" name="idImgUser" value="<?=$id_user?>">
                            <input type="submit" name="change" value="Thay đổi" class="change__btn--img">
                        </div>
                    </form>
                    <div class="change__proFile--full row">
                        <form action="index.php?page=changeProfile" method="post" class="form-change">
                            <div class="change__proFile">
                                <div class="form__group">
                                    <label for="fistName" class="label__icon" data-animal-type="Họ và tên">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6668 4.8266C14.6673 4.73886 14.6505 4.65188 14.6174 4.57066C14.5842 4.48943 14.5353 4.41556 14.4735 4.35326L11.6468 1.5266C11.5845 1.46481 11.5107 1.41593 11.4294 1.38275C11.3482 1.34957 11.2612 1.33276 11.1735 1.33326C11.0858 1.33276 10.9988 1.34957 10.9176 1.38275C10.8363 1.41593 10.7625 1.46481 10.7002 1.5266L8.81351 3.41326L1.52684 10.6999C1.46505 10.7622 1.41617 10.8361 1.38299 10.9173C1.34982 10.9985 1.333 11.0855 1.33351 11.1733V13.9999C1.33351 14.1767 1.40375 14.3463 1.52877 14.4713C1.65379 14.5964 1.82336 14.6666 2.00017 14.6666H4.82684C4.92013 14.6717 5.01344 14.6571 5.10072 14.6238C5.188 14.5905 5.26731 14.5392 5.33351 14.4733L12.5802 7.1866L14.4735 5.33326C14.5344 5.26865 14.5839 5.19428 14.6202 5.11326C14.6266 5.06012 14.6266 5.0064 14.6202 4.95326C14.6233 4.92223 14.6233 4.89096 14.6202 4.85993L14.6668 4.8266ZM4.55351 13.3333H2.66684V11.4466L9.28684 4.8266L11.1735 6.71326L4.55351 13.3333ZM12.1135 5.77326L10.2268 3.8866L11.1735 2.9466L13.0535 4.8266L12.1135 5.77326Z" fill="#999999" fill-opacity="0.5"/>
                                        </svg>
                                    </label>
                                    <input type="text" id="fistName" name="name_user" value="<?=$username?>" class="change__fullName">
                                </div>
                                <div class="form__group">
                                    <label for="lastName" class="label__icon" data-animal-type="Email">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6668 4.8266C14.6673 4.73886 14.6505 4.65188 14.6174 4.57066C14.5842 4.48943 14.5353 4.41556 14.4735 4.35326L11.6468 1.5266C11.5845 1.46481 11.5107 1.41593 11.4294 1.38275C11.3482 1.34957 11.2612 1.33276 11.1735 1.33326C11.0858 1.33276 10.9988 1.34957 10.9176 1.38275C10.8363 1.41593 10.7625 1.46481 10.7002 1.5266L8.81351 3.41326L1.52684 10.6999C1.46505 10.7622 1.41617 10.8361 1.38299 10.9173C1.34982 10.9985 1.333 11.0855 1.33351 11.1733V13.9999C1.33351 14.1767 1.40375 14.3463 1.52877 14.4713C1.65379 14.5964 1.82336 14.6666 2.00017 14.6666H4.82684C4.92013 14.6717 5.01344 14.6571 5.10072 14.6238C5.188 14.5905 5.26731 14.5392 5.33351 14.4733L12.5802 7.1866L14.4735 5.33326C14.5344 5.26865 14.5839 5.19428 14.6202 5.11326C14.6266 5.06012 14.6266 5.0064 14.6202 4.95326C14.6233 4.92223 14.6233 4.89096 14.6202 4.85993L14.6668 4.8266ZM4.55351 13.3333H2.66684V11.4466L9.28684 4.8266L11.1735 6.71326L4.55351 13.3333ZM12.1135 5.77326L10.2268 3.8866L11.1735 2.9466L13.0535 4.8266L12.1135 5.77326Z" fill="#999999" fill-opacity="0.5"/>
                                        </svg>
                                    </label>
                                    <input type="text" id="lastName" name="email_user" value="<?=$email?>" class="change__fullName">
                                </div>
                                <div class="form__group">
                                    <label for="fullName" class="label__icon" data-animal-type="Giới tính ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="opacity: 0;">
                                                <path d="M14.6668 4.8266C14.6673 4.73886 14.6505 4.65188 14.6174 4.57066C14.5842 4.48943 14.5353 4.41556 14.4735 4.35326L11.6468 1.5266C11.5845 1.46481 11.5107 1.41593 11.4294 1.38275C11.3482 1.34957 11.2612 1.33276 11.1735 1.33326C11.0858 1.33276 10.9988 1.34957 10.9176 1.38275C10.8363 1.41593 10.7625 1.46481 10.7002 1.5266L8.81351 3.41326L1.52684 10.6999C1.46505 10.7622 1.41617 10.8361 1.38299 10.9173C1.34982 10.9985 1.333 11.0855 1.33351 11.1733V13.9999C1.33351 14.1767 1.40375 14.3463 1.52877 14.4713C1.65379 14.5964 1.82336 14.6666 2.00017 14.6666H4.82684C4.92013 14.6717 5.01344 14.6571 5.10072 14.6238C5.188 14.5905 5.26731 14.5392 5.33351 14.4733L12.5802 7.1866L14.4735 5.33326C14.5344 5.26865 14.5839 5.19428 14.6202 5.11326C14.6266 5.06012 14.6266 5.0064 14.6202 4.95326C14.6233 4.92223 14.6233 4.89096 14.6202 4.85993L14.6668 4.8266ZM4.55351 13.3333H2.66684V11.4466L9.28684 4.8266L11.1735 6.71326L4.55351 13.3333ZM12.1135 5.77326L10.2268 3.8866L11.1735 2.9466L13.0535 4.8266L12.1135 5.77326Z" fill="#999999" fill-opacity="0.5"/>
                                        </svg>
                                    </label>
                                    <select name="gender_user" id="" class="change__fullName">
                                        <?php
                                            if($gender==1){
                                                    echo '<option value="1">Nam</option>
                                                            <option value="2">Nữ</option>
                                                            <option value="3">Khác</option>';
                                                }else{
                                                    if($gender==2){
                                                        echo '<option value="2">Nữ</option>
                                                            <option value="1">Nam</option>
                                                            <option value="3">Khác</option>';
                                                    }else{
                                                        echo '<option value="3">Khác</option>
                                                            <option value="1">Nam</option>
                                                            <option value="2">Nữ</option>';
                                                    }
                                                }
                                            ?>
                                    </select>
                                </div>
                                <div class="form__group">
                                    <label for="fullName" class="label__icon" data-animal-type="Ngày Sinh " >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" style="opacity: 0;">
                                            <path d="M14.6668 4.8266C14.6673 4.73886 14.6505 4.65188 14.6174 4.57066C14.5842 4.48943 14.5353 4.41556 14.4735 4.35326L11.6468 1.5266C11.5845 1.46481 11.5107 1.41593 11.4294 1.38275C11.3482 1.34957 11.2612 1.33276 11.1735 1.33326C11.0858 1.33276 10.9988 1.34957 10.9176 1.38275C10.8363 1.41593 10.7625 1.46481 10.7002 1.5266L8.81351 3.41326L1.52684 10.6999C1.46505 10.7622 1.41617 10.8361 1.38299 10.9173C1.34982 10.9985 1.333 11.0855 1.33351 11.1733V13.9999C1.33351 14.1767 1.40375 14.3463 1.52877 14.4713C1.65379 14.5964 1.82336 14.6666 2.00017 14.6666H4.82684C4.92013 14.6717 5.01344 14.6571 5.10072 14.6238C5.188 14.5905 5.26731 14.5392 5.33351 14.4733L12.5802 7.1866L14.4735 5.33326C14.5344 5.26865 14.5839 5.19428 14.6202 5.11326C14.6266 5.06012 14.6266 5.0064 14.6202 4.95326C14.6233 4.92223 14.6233 4.89096 14.6202 4.85993L14.6668 4.8266ZM4.55351 13.3333H2.66684V11.4466L9.28684 4.8266L11.1735 6.71326L4.55351 13.3333ZM12.1135 5.77326L10.2268 3.8866L11.1735 2.9466L13.0535 4.8266L12.1135 5.77326Z" fill="#999999" fill-opacity="0.5"/>
                                        </svg>
                                    </label>
                                    <input type="date" id="fullName" name="dob_user" value="<?=$dob?>" class="change__fullName">
                                </div>
                                <div class="form__group">
                                    <label for="fullName" class="label__icon" data-animal-type="Số điện thoại ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6668 4.8266C14.6673 4.73886 14.6505 4.65188 14.6174 4.57066C14.5842 4.48943 14.5353 4.41556 14.4735 4.35326L11.6468 1.5266C11.5845 1.46481 11.5107 1.41593 11.4294 1.38275C11.3482 1.34957 11.2612 1.33276 11.1735 1.33326C11.0858 1.33276 10.9988 1.34957 10.9176 1.38275C10.8363 1.41593 10.7625 1.46481 10.7002 1.5266L8.81351 3.41326L1.52684 10.6999C1.46505 10.7622 1.41617 10.8361 1.38299 10.9173C1.34982 10.9985 1.333 11.0855 1.33351 11.1733V13.9999C1.33351 14.1767 1.40375 14.3463 1.52877 14.4713C1.65379 14.5964 1.82336 14.6666 2.00017 14.6666H4.82684C4.92013 14.6717 5.01344 14.6571 5.10072 14.6238C5.188 14.5905 5.26731 14.5392 5.33351 14.4733L12.5802 7.1866L14.4735 5.33326C14.5344 5.26865 14.5839 5.19428 14.6202 5.11326C14.6266 5.06012 14.6266 5.0064 14.6202 4.95326C14.6233 4.92223 14.6233 4.89096 14.6202 4.85993L14.6668 4.8266ZM4.55351 13.3333H2.66684V11.4466L9.28684 4.8266L11.1735 6.71326L4.55351 13.3333ZM12.1135 5.77326L10.2268 3.8866L11.1735 2.9466L13.0535 4.8266L12.1135 5.77326Z" fill="#999999" fill-opacity="0.5"/>
                                        </svg>
                                    </label>
                                    <input type="text" id="fullName" name="phone_user" value="<?=$phone?>" class="change__fullName">
                                </div>
                                <div class="form__group">
                                    <label for="fullName" class="label__icon" data-animal-type="Địa chỉ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6668 4.8266C14.6673 4.73886 14.6505 4.65188 14.6174 4.57066C14.5842 4.48943 14.5353 4.41556 14.4735 4.35326L11.6468 1.5266C11.5845 1.46481 11.5107 1.41593 11.4294 1.38275C11.3482 1.34957 11.2612 1.33276 11.1735 1.33326C11.0858 1.33276 10.9988 1.34957 10.9176 1.38275C10.8363 1.41593 10.7625 1.46481 10.7002 1.5266L8.81351 3.41326L1.52684 10.6999C1.46505 10.7622 1.41617 10.8361 1.38299 10.9173C1.34982 10.9985 1.333 11.0855 1.33351 11.1733V13.9999C1.33351 14.1767 1.40375 14.3463 1.52877 14.4713C1.65379 14.5964 1.82336 14.6666 2.00017 14.6666H4.82684C4.92013 14.6717 5.01344 14.6571 5.10072 14.6238C5.188 14.5905 5.26731 14.5392 5.33351 14.4733L12.5802 7.1866L14.4735 5.33326C14.5344 5.26865 14.5839 5.19428 14.6202 5.11326C14.6266 5.06012 14.6266 5.0064 14.6202 4.95326C14.6233 4.92223 14.6233 4.89096 14.6202 4.85993L14.6668 4.8266ZM4.55351 13.3333H2.66684V11.4466L9.28684 4.8266L11.1735 6.71326L4.55351 13.3333ZM12.1135 5.77326L10.2268 3.8866L11.1735 2.9466L13.0535 4.8266L12.1135 5.77326Z" fill="#999999" fill-opacity="0.5"/>
                                        </svg>
                                    </label>
                                    <input type="text" id="fullName" name="adress_user" value="<?=$address?>" class="change__fullName">
                                </div>
                            </div>
                                <input type="hidden" name="id_user" value="<?=$id_user?>">
                                <input type="submit" name="saveUser" value="Lưu" class="change__btn--full">
                                <!-- biến thông báo khi bấm thay đổi thành công -->
                                <?=$thongbao?>
                        </form>

                        <div class="line_change">

                        </div>
                        <div class="change__link row">
                            <a href="#!" class="change__link--act row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"  class="icon_change--link">
                                    <path d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z" fill="black"/>
                                </svg>
                                    <h4 class="change--link__title">Liên kết với Facebook </h4>
                            </a>
                            <a href="#!" class="change__link--act row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M17.0502 20.28C16.0702 21.23 15.0002 21.08 13.9702 20.63C12.8802 20.17 11.8802 20.15 10.7302 20.63C9.29016 21.25 8.53016 21.07 7.67016 20.28C2.79016 15.25 3.51016 7.59 9.05016 7.31C10.4002 7.38 11.3402 8.05 12.1302 8.11C13.3102 7.87 14.4402 7.18 15.7002 7.27C17.2102 7.39 18.3502 7.99 19.1002 9.07C15.9802 10.94 16.7202 15.05 19.5802 16.2C19.0102 17.7 18.2702 19.19 17.0402 20.29L17.0502 20.28ZM12.0302 7.25C11.8802 5.02 13.6902 3.18 15.7702 3C16.0602 5.58 13.4302 7.5 12.0302 7.25Z" fill="black"/>
                            </svg>
                                    <h4 class="change--link__title">Liên kết với Facebook </h4>
                            </a>
                            <a href="#!" class="change__link--act row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21.32 13.1H12.15V15.83H18.66C18.33 19.64 15.16 21.27 12.16 21.27C8.33 21.27 4.97 18.25 4.97 14C4.97 9.9 8.17 6.73 12.17 6.73C15.26 6.73 17.07 8.7 17.07 8.7L18.97 6.72C18.97 6.72 16.53 4 12.07 4C6.39 4 2 8.8 2 14C2 19.05 6.13 24 12.22 24C17.57 24 21.47 20.33 21.47 14.91C21.47 13.76 21.32 13.1 21.32 13.1Z" fill="black"/>
                            </svg>
                                    <h4 class="change--link__title">Liên kết với Facebook </h4>
                            </a>
                        </div>



                    </div>
                    
                </div>
            </div>

            
        </div>

    </article>

</main>