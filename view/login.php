<?php
    $thongbao="";
?>
<main>
        <article class="login">
            <div class="main-content">
                <div class="main-login row">
                    <img src="../assets/img/logo_sign.png" alt="">

                    <form action="index.php?page=loginUser" method="post" class="form__login row">
                        <div class="form__group">
                            <h2 class="form__group--title">Đăng nhập</h2>
                            <div class="form__group--desc">
                                <span class="form__desc--one">Hải sản</span><span class="form__desc--tow"> Miền
                                    Tây</span> xin chào,
                                để phục vụ bạn tốt hơn cùng với
                                những
                                ưu đãi riêng, hãy
                                đăng nhập trước khi mua hàng nhé.
                            </div>
                        </div>
                        <div class="form__group">
                            <input type="text" placeholder="Nhập số điện thoại" class="full-name" name="phone">
                        </div>
                        <div class="form__group">
                            <input type="password" placeholder="Nhập mật khẩu" class="pass" name="pass">

                        </div>
                        <div class="form__group">
                            <input type="submit" name="dangNhap" value="Đăng nhập" class="btn push__login">
                            <?=$thongbao?>                        
                        </div>

                        <div class="form__group">
                            <div class="form__group--desc">Bạn chưa có tài khoản?
                                <a href="index.php?page=register" class="form__group--register">Đăng ký</a> tại đây
                                <a href="" class="forgot__Pass">Quên mật khẩu</a>
                            </div>
                            <div class="line" style="width: 80%; margin-left: auto; margin-right: auto; border-bottom: 1px solid;
                            height: 1px; margin-top: 22px;margin-bottom: 28px;"></div>
                            <div class="form__group--desc">Hoặc đăng nhập bằng</div>

                            <div class="with__login row">
                                <a href="#!" class="icon__with">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"
                                        fill="none">
                                        <g clip-path="url(#clip0_1261_12367)">
                                            <path
                                                d="M13.9344 2.27161C9.93774 3.65808 6.49106 6.28963 4.10058 9.77974C1.7101 13.2699 0.501831 17.4346 0.65324 21.6621C0.804649 25.8897 2.30776 29.9573 4.94179 33.2675C7.57581 36.5776 11.2019 38.9559 15.2875 40.0529C18.5997 40.9075 22.07 40.9451 25.4 40.1622C28.4166 39.4846 31.2055 38.0353 33.4937 35.956C35.8752 33.7258 37.6038 30.8887 38.4937 27.7497C39.4607 24.3361 39.6328 20.7464 38.9969 17.256H20.3969V24.9716H31.1687C30.9534 26.2022 30.4921 27.3767 29.8123 28.4248C29.1325 29.473 28.2483 30.3732 27.2125 31.0716C25.8973 31.942 24.4144 32.5275 22.8594 32.7904C21.2998 33.0804 19.7002 33.0804 18.1406 32.7904C16.5598 32.4639 15.0645 31.8115 13.75 30.8747C11.6379 29.3797 10.0521 27.2558 9.21873 24.806C8.37151 22.3103 8.37151 19.6048 9.21873 17.1091C9.81194 15.3598 10.7926 13.767 12.0875 12.4497C13.5693 10.9146 15.4454 9.81723 17.5098 9.2781C19.5743 8.73897 21.7474 8.7789 23.7906 9.39349C25.3869 9.88325 26.8465 10.7394 28.0531 11.8935C29.2677 10.6852 30.4802 9.4737 31.6906 8.25911C32.3156 7.60599 32.9969 6.98411 33.6125 6.31536C31.7704 4.60136 29.6083 3.26756 27.25 2.39036C22.9553 0.830956 18.2562 0.789048 13.9344 2.27161Z"
                                                fill="white" />
                                            <path
                                                d="M13.9344 2.27167C18.2558 0.788095 22.955 0.828899 27.25 2.38729C29.6087 3.27045 31.7698 4.61067 33.6094 6.33104C32.9844 6.99979 32.325 7.62479 31.6875 8.27479C30.475 9.48521 29.2635 10.6915 28.0531 11.8935C26.8465 10.7394 25.3869 9.8833 23.7906 9.39354C21.748 8.77679 19.575 8.73457 17.51 9.27149C15.4451 9.80841 13.5678 10.9037 12.0844 12.4373C10.7895 13.7546 9.80882 15.3473 9.21561 17.0967L2.73749 12.081C5.05626 7.4828 9.07108 3.96549 13.9344 2.27167Z"
                                                fill="#E33629" />
                                            <path
                                                d="M1.01878 17.0498C1.36671 15.3241 1.9448 13.6529 2.73753 12.0811L9.21565 17.1092C8.36843 19.6049 8.36843 22.3104 9.21565 24.8061C7.05732 26.4727 4.89794 28.1477 2.73753 29.8311C0.753624 25.882 0.148567 21.3826 1.01878 17.0498Z"
                                                fill="#F8BD00" />
                                            <path
                                                d="M20.3969 17.2529H38.9969C39.6328 20.7434 39.4607 24.3331 38.4938 27.7467C37.6039 30.8857 35.8753 33.7228 33.4938 35.9529C31.4031 34.3217 29.3031 32.7029 27.2125 31.0717C28.249 30.3726 29.1337 29.4714 29.8135 28.4221C30.4933 27.3728 30.9543 26.1971 31.1688 24.9654H20.3969C20.3938 22.3967 20.3969 19.8248 20.3969 17.2529Z"
                                                fill="#587DBD" />
                                            <path
                                                d="M2.73438 29.8312C4.89479 28.1645 7.05417 26.4895 9.2125 24.8062C10.0475 27.2568 11.6356 29.3808 13.75 30.8749C15.0686 31.8073 16.5672 32.4544 18.15 32.7749C19.7095 33.065 21.3092 33.065 22.8687 32.7749C24.4238 32.512 25.9067 31.9266 27.2219 31.0562C29.3125 32.6874 31.4125 34.3062 33.5031 35.9374C31.2153 38.0178 28.4263 39.4683 25.4094 40.1468C22.0794 40.9296 18.6091 40.8921 15.2969 40.0374C12.6772 39.3379 10.2302 38.1049 8.10938 36.4155C5.86477 34.6331 4.03136 32.3872 2.73438 29.8312Z"
                                                fill="#319F43" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1261_12367">
                                                <rect width="40" height="40" fill="white"
                                                    transform="translate(0 0.956055)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="#!" class="icon__with">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"
                                        fill="none">
                                        <g clip-path="url(#clip0_1261_12373)">
                                            <path
                                                d="M40 20.9561C40 9.91043 31.0456 0.956055 20 0.956055C8.95437 0.956055 0 9.91027 0 20.9561C0 30.9386 7.31375 39.2128 16.875 40.7131V26.7373H11.7969V20.9561H16.875V16.5498C16.875 11.5373 19.8609 8.76856 24.4292 8.76856C26.6175 8.76856 28.9062 9.15918 28.9062 9.15918V14.0811H26.3844C23.8997 14.0811 23.125 15.6228 23.125 17.2045V20.9561H28.6719L27.7852 26.7373H23.125V40.7131C32.6862 39.2128 40 30.9387 40 20.9561Z"
                                                fill="#1877F2" />
                                            <path
                                                d="M27.7852 26.7373L28.6719 20.9561H23.125V17.2045C23.125 15.6226 23.8998 14.0811 26.3844 14.0811H28.9062V9.15918C28.9062 9.15918 26.6175 8.76855 24.4292 8.76855C19.8609 8.76855 16.875 11.5373 16.875 16.5498V20.9561H11.7969V26.7373H16.875V40.7131C17.9088 40.8751 18.9536 40.9563 20 40.9561C21.0464 40.9564 22.0912 40.8751 23.125 40.7131V26.7373H27.7852Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1261_12373">
                                                <rect width="40" height="40" fill="white"
                                                    transform="translate(0 0.956055)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="#!" class="icon__with">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"
                                        fill="none">
                                        <g clip-path="url(#clip0_1261_12376)">
                                            <path
                                                d="M27.955 0.976072C27.87 0.881072 24.8075 1.01357 22.1425 3.90607C19.4775 6.79607 19.8875 10.1111 19.9475 10.1961C20.0075 10.2811 23.7475 10.4136 26.135 7.05107C28.5225 3.68857 28.04 1.07357 27.955 0.976072ZM36.24 30.3086C36.12 30.0686 30.4275 27.2236 30.9575 21.7536C31.4875 16.2811 35.145 14.7811 35.2025 14.6186C35.26 14.4561 33.71 12.6436 32.0675 11.7261C30.8615 11.0792 29.5268 10.7086 28.16 10.6411C27.89 10.6336 26.9525 10.4036 25.025 10.9311C23.755 11.2786 20.8925 12.4036 20.105 12.4486C19.315 12.4936 16.965 11.1436 14.4375 10.7861C12.82 10.4736 11.105 11.1136 9.8775 11.6061C8.6525 12.0961 6.3225 13.4911 4.6925 17.1986C3.0625 20.9036 3.915 26.7736 4.525 28.5986C5.135 30.4211 6.0875 33.4086 7.7075 35.5886C9.1475 38.0486 11.0575 39.7561 11.855 40.3361C12.6525 40.9161 14.9025 41.3011 16.4625 40.5036C17.7175 39.7336 19.9825 39.2911 20.8775 39.3236C21.77 39.3561 23.53 39.7086 25.3325 40.6711C26.76 41.1636 28.11 40.9586 29.4625 40.4086C30.815 39.8561 32.7725 37.7611 35.0575 33.5136C35.925 31.5386 36.32 30.4711 36.24 30.3086Z"
                                                fill="black" />
                                            <path
                                                d="M27.955 0.976072C27.87 0.881072 24.8075 1.01357 22.1425 3.90607C19.4775 6.79607 19.8875 10.1111 19.9475 10.1961C20.0075 10.2811 23.7475 10.4136 26.135 7.05107C28.5225 3.68857 28.04 1.07357 27.955 0.976072ZM36.24 30.3086C36.12 30.0686 30.4275 27.2236 30.9575 21.7536C31.4875 16.2811 35.145 14.7811 35.2025 14.6186C35.26 14.4561 33.71 12.6436 32.0675 11.7261C30.8615 11.0792 29.5268 10.7086 28.16 10.6411C27.89 10.6336 26.9525 10.4036 25.025 10.9311C23.755 11.2786 20.8925 12.4036 20.105 12.4486C19.315 12.4936 16.965 11.1436 14.4375 10.7861C12.82 10.4736 11.105 11.1136 9.8775 11.6061C8.6525 12.0961 6.3225 13.4911 4.6925 17.1986C3.0625 20.9036 3.915 26.7736 4.525 28.5986C5.135 30.4211 6.0875 33.4086 7.7075 35.5886C9.1475 38.0486 11.0575 39.7561 11.855 40.3361C12.6525 40.9161 14.9025 41.3011 16.4625 40.5036C17.7175 39.7336 19.9825 39.2911 20.8775 39.3236C21.77 39.3561 23.53 39.7086 25.3325 40.6711C26.76 41.1636 28.11 40.9586 29.4625 40.4086C30.815 39.8561 32.7725 37.7611 35.0575 33.5136C35.925 31.5386 36.32 30.4711 36.24 30.3086Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1261_12376">
                                                <rect width="40" height="40" fill="white"
                                                    transform="translate(0 0.956055)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </article>

    </main>