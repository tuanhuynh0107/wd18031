<?php
//  echo print_r($loadUser);
    if(isset($loadUser)){
        extract($loadUser);
    }
//   print_r( $idPackageDel);
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
                            <img src="./assets/uploads/<?=$img?>"
                                alt="user" class="sidebar--top__left--img">
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
                        <h4 class="header__title">Đơn hàng của bạn</h4>
                    </div>

                  <table class="yourCard">
                       
                        <thead class="yourCard__header">
                            <tr >
                                <td>Mã đơn hàng</td>
                                <td>thời gian đặt hàng</td>
                                <td>Số tiền</td>
                                <td>Phương thức thanh toán</td>
                                <td>Trạng thái</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                
                                foreach($listCart as $yourCart){
                                    extract($yourCart);
                                    $linkCartDetail = "index.php?page=chitietdonhang&idPackage=".$id_package;
                                    $statusShow="";
                                    $pay="";
                                    if($pay_ms==1){
                                        $pay.= "Thanh toán tiền mặt";
                                    }else{
                                        if($pay_ms==2){
                                            $pay.= "Chuyển khoản";
                                        }else{
                                            if($pay_ms==3){
                                                $pay.= "Thanh toán online";
                                            }
                                        }
                                        
                                    }

                                    if($status==1) {
                                        $statusShow .= '
                                           <span class="yourCard__status"> Chờ xác nhận </span> | <a href="index.php?page=delpackage&idPackage='.$id_package.'&id_user='.$id_user.'&status=5 " class="">Hủy</a>
                                        ';
                                    }elseif($status==2) {
                                        $statusShow .= '
                                        <span class="yourCard__status">Đang vận chuyển</span>
                                        ';
                                    }elseif($status==3) {
                                        if($status_feadback==1){
                                            $statusShow .= '
                                            <span class="yourCard__status"> Giao hàng thành công </span>
                                            <span class="yourCard__status"> Đã phản hồi </span>
                                            ';
                                        }else if($status_feadback==0){
                                            $statusShow .= '
                                            <span class="yourCard__status"> Giao hàng thành công </span>
                                            <span class="boxFeadBack row">
                                                <button type="submit" onclick="toggleForm(this)" class="toggleForm">Phản hồi </button>
                                                <form action="index.php?page=userFeadBack" method="post" id="feedbackForm">
                                                    <input type="hidden" name="idPackage" value="'.$id_package.'">
                                                    <input type="hidden" name="idUser" value="'.$id_User.'"> 
        
                                                    <textarea name="comment"  id="" cols="40" rows="10"></textarea>
                                                    <input type="hidden" name="statusfb" value="1" >
                        
                                                    <button type="submit"name="btnComment" class="toggleFormSend">
                                                        <div class="svg-wrapper-1">
                                                            <div class="svg-wrapper">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24"
                                                                width="15"
                                                                height="15"
                                                            >
                                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                                <path
                                                                fill="currentColor"
                                                                d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                                                                ></path>
                                                            </svg>
                                                            </div>
                                                        </div>
                                                        <span>Gửi</span>
                                                    </button>
                                                </form>
                                            </span>';                                        }
                                       
                                    }
                                    elseif($status==4) {
                                        $statusShow .= '
                                        <span class="yourCard__status">Thất bại </span>
                                            ';
                                    } elseif($status==5) {
                                        $statusShow .= '
                                        <span class="yourCard__status">Đã hủy </span>
                                            ';
                                    }
                                    echo 
                                    '
                                        <tr class="yourCard__header--content">
                                            <td><a href="'.$linkCartDetail.'">#DH'.$id_package.' </a></td>
                                            <td>'.$time.'</td>
                                            <td>'.number_format($total,0,",",".").' đ</td>
                                            <td>'.$pay.'</td>
                                            <td class="status">
                                            '.$statusShow.'
                                            </td>
                                        </tr>
                                    ';
                                     
                                }
                              
                            ?>
                        </tbody>

                        
                         
                  </table>
                  <div class="tfoot row">
                            <div class="note__yourCard"></div>
                        
                            <!-- <div class="rounds" rowspan="4">
                                <div class="round">
                                    <div class="status-round"></div>
                                    <span class="desc-round">Thành Công</span>
                                </div>
                                <div class="round">
                                    <div class="status-round"></div>
                                    <span class="desc-round">Đang vận chuyện</span>
                                </div>
                                <div class="round">
                                    <div class="status-round"></div>
                                    <span class="desc-round">Thất bại</span>
                                </div>
                            </div> -->
                        </div>
                </div>

                
            </div>

        </article>

    </main>