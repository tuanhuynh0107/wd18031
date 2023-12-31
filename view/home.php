    
    <div class="main-content">
    <div class="main-hero">
            <div class="main-banner">
                <div class="slider">
        
                    <!-- Ảnh 1 -->
                    <div class="slide slide-feature1"></div>
                    <!-- END Ảnh 1 -->
                    <!-- Ảnh 2 -->
                    <div class="slide slide-feature2"></div>
                    <!-- END Ảnh 2 -->
                    <!-- Ảnh 3 -->
                    <div class="slide slide-feature3"></div>
                    <!-- END Ảnh 3 -->
                    
                </div>
            
                <div class="slider-nav">
                    <a  class="arrow-prev"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
  <path d="M10.0378 13.4662C10.2136 13.2904 10.3123 13.052 10.3123 12.8034C10.3123 12.5548 10.2136 12.3164 10.0378 12.1406L5.3972 7.49999L10.0378 2.85936C10.2086 2.68255 10.3031 2.44573 10.301 2.19992C10.2988 1.95411 10.2002 1.71897 10.0264 1.54515C9.85259 1.37133 9.61745 1.27274 9.37164 1.2706C9.12583 1.26847 8.88902 1.36296 8.7122 1.53374L3.40876 6.83717C3.23301 7.01298 3.13428 7.25139 3.13428 7.49999C3.13428 7.74858 3.23301 7.98699 3.40876 8.1628L8.7122 13.4662C8.88801 13.642 9.12642 13.7407 9.37501 13.7407C9.62361 13.7407 9.86202 13.642 10.0378 13.4662Z" fill="black"/>
</svg></a>
                    <ul class="slider-dots">
                        <li class="dot active-dot">&bull;</li>
                        <li class="dot">&bull;</li>
                        <li class="dot">&bull;</li>
                    </ul>
                    <a  class="arrow-next"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
  <path d="M4.96217 1.53376C4.78642 1.70957 4.68769 1.94799 4.68769 2.19658C4.68769 2.44517 4.78642 2.68358 4.96217 2.85939L9.6028 7.50001L4.96217 12.1406C4.7914 12.3175 4.69691 12.5543 4.69904 12.8001C4.70118 13.0459 4.79977 13.281 4.97359 13.4548C5.14741 13.6287 5.38255 13.7273 5.62836 13.7294C5.87417 13.7315 6.11098 13.637 6.2878 13.4663L11.5912 8.16283C11.767 7.98702 11.8657 7.74861 11.8657 7.50001C11.8657 7.25142 11.767 7.01301 11.5912 6.8372L6.2878 1.53376C6.11199 1.35801 5.87358 1.25928 5.62499 1.25928C5.37639 1.25928 5.13798 1.35801 4.96217 1.53376Z" fill="black"/>
</svg></a>
                </div>
            
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
                <script src="https://fonts.googleapis.com/css?family=Oswald:400,300'rel='stylesheet"></script>
            
               
                <script type="text/javascript">
                    var main = function () {
                        $('.dropdown-toggle').click(function () {
                            $('.dropdown-menu').toggle();
                        });
            
                        $('.arrow-next').click(function () {
                            //creating the variables so that we can target them in jQuery
                            var currentSlide = $('.active-slide');
                            var nextSlide = currentSlide.next();
                            var currentDot = $('.active-dot');
                            var nextDot = currentDot.next()
                            //if the current slide is the last, make the next slide the first one
                            if (nextSlide.length == 0) {
                                nextSlide = $('.slide').first();
                            }
                            //if the next dot is the last, make the next dot the first one
                            if (nextDot.length == 0) {
                                nextDot = $('.dot').first()
                            }
                            //when the arrow is clicked, fade out the current img and fade in the next one 
                            currentSlide.fadeOut(600).removeClass('active-slide');
                            nextSlide.fadeIn(600).addClass('active-slide');
                            //when the arrow is clicked, remove the active class from the current dot and add it to the next one
                            currentDot.removeClass('active-dot')
                            nextDot.addClass('active-dot')
                        });
                        $('.arrow-prev').click(function () {
                            //creating the variables so that we can target them in jQuery
                            var currentSlide = $('.active-slide')
                            var prevSlide = currentSlide.prev()
                            var currentDot = $('.active-dot')
                            var prevDot = currentDot.prev()
                            //if the current slide is the last, make the prev slide the last one
                            if (prevSlide.length == 0) {
                                prevSlide = $('.slide').last();
                            }
                            //if the current dot is the last, make the prev dot the last one
                            if (prevDot.length == 0) {
                                prevDot = $('.dot').last();
                            }
                            //fade out the current img and fade in the prev one when the arrow is clicked
                            currentSlide.fadeOut(600).removeClass('active-slide')
                            prevSlide.fadeIn(600).addClass('active-slide')
                            //when the arrow is clicked, remove the active class from the current dot and add it to the next one
                            currentDot.removeClass('active-dot')
                            prevDot.addClass('active-dot')
                        });
                    }
            
                    $(document).ready(main);
                    
                </script>
            </div>

            <figure class="banner-rigth">
                <img src="./assets/icons/banner-right1.png" alt="">
                <img src="./assets/icons/banner-right2.png" alt="">
            </figure>
        </div>
    </div>


    <section class="banner__bottom">
        <figure class="main-content">
            <a href="">
                <img src="./assets/icons/banner-bottom1.png" alt="">
            </a>
            <a href="">
                <img src="./assets/icons/banner-bottom2.png" alt="">
            </a>
        </figure>
    </section>
    
  
    <main>
        <div class="popular">
            <div class="main-content">
                <div class="popular-top">
                    <div class="info">
                        <h2 class="heading lv2">Hải sản tươi sống mỗi ngày</h2>
                        <p class="desc">
                            Cùng mua Hải sản với giá sốc nào.
                        </p>
                    </div>
                    <div class="controls">
                        <button class="control-btn">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="control-btn">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="course-list">
                    <?= showProduct($listItemLimit)?>
                </div>
            </div>
        </div>
        <!-- Features 1 -->
        <div class="features">
            <div class="main-content">
                <div class="body">
                    <div class="images">
                        <img class="lower" src="./assets/img/combo1.png"
                            alt="Learner outcomes through our awesome platform" />
                        <img src="./assets/img/combo2.png" alt="Learner outcomes through our awesome platform" />
                    </div>
                    <div class="content">
                        <h2 class="heading lv2">
                            Combo hot nhất tháng 10 được nhiều khách hàng săn đón nhất. </h2>
                        <p class="desc">
                            Cùng săn các cb hot nhất tháng 10 trong hôm nay nhanh tay kẻo lỡ với các voucher giảm giá
                            cực khủng </p>
                        <p class="desc">Combo siêu hot (2023)</p>
                        <a href="#!" class="btn cta-btn">Săn ngay</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- line -->

        <!-- Popular / Gợi ý cho bạn -->
        <div class="popular">
            <div class="main-content">
                <div class="popular-top">
                    <div class="info">
                        <h2 class="heading lv2">Gợi ý cho bạn</h2>
                        <p class="desc">
                            Cùng mua Hải sản với giá sốc nào.
                        </p>
                    </div>
                    <div class="controls">
                        <button class="control-btn">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="control-btn">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="course-list">
                    <!-- Course item 1 -->
                    <?= showProduct($listItemLimitRanDom)?>
                </div>
            </div>
        </div>
        </div>
        <!-- line -->
        <!-- Feedback -->
        <div class="feedback">
            <div class="main-content">
                <div class="feedback-list">
                    <!-- Feedback item 1 -->
                    <div class="feedback-item">
                        <div class="info">
                            <img src="./assets/img/feedback-avatar-1.jpg" alt="Peter Moor" class="avatar" />
                            <p class="title">Peter Moor</p>
                            <p class="desc">Student of Web Design</p>
                            <div class="dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="./assets/icons/open-quotes.svg" alt="" class="open-quotes" />
                            <blockquote>
                                Hải sản là nguồn thực phẩm vô cùng phong phú và giàu giá trị dinh dưỡng cho cơ thể. Tuy
                                nhiên, việc chọn lựa và ăn hải sản không đúng cách có thể để lại những hậu quả nghiêm
                                trọng cho sức khỏe của bạn!
                            </blockquote>
                        </div>
                    </div>

                    <!-- Feedback item 2 -->
                    <div class="feedback-item">
                        <div class="info">
                            <img src="./assets/img/feedback-avatar-2.jpg" alt="Peter Moor" class="avatar" />
                            <p class="title">Peter Moor</p>
                            <p class="desc">Student of Web Design</p>
                            <div class="dots">
                                <span class="dot"></span>
                                <span class="dot active"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="./assets/icons/open-quotes.svg" alt="" class="open-quotes" />
                            <blockquote>
                                Not only does my resume look
                                impressive—filled with the names and logos
                                of world-class institutions—but these
                                certificates also bring me closer to my
                                career goals by validating the skills I've
                                learned."
                            </blockquote>
                        </div>
                    </div>

                    <!-- Feedback item 3 -->
                    <div class="feedback-item">
                        <div class="info">
                            <img src="./assets/img/feedback-avatar-3.jpg" alt="Peter Moor" class="avatar" />
                            <p class="title">Peter Moor</p>
                            <p class="desc">Student of Web Design</p>
                            <div class="dots">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot active"></span>
                            </div>
                        </div>
                        <div class="content">
                            <img src="./assets/icons/open-quotes.svg" alt="" class="open-quotes" />
                            <blockquote>
                                Not only does my resume look
                                impressive—filled with the names and logos
                                of world-class institutions—but these
                                certificates also bring me closer to my
                                career goals by validating the skills I've
                                learned."
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- popular / đang giảm -->
        <div class="popular">
            <div class="main-content">
                <div class="popular-top">
                    <div class="info">
                        <h2 class="heading lv2">Đang giảm giá</h2>
                        <p class="desc">
                            Cùng mua Hải sản với giá sốc nào.
                        </p>
                    </div>
                    <div class="controls">
                        <button class="control-btn">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="control-btn">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="course-list">
                    <!-- Course item 1 -->
                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span><span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>

                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span><span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>
                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span><span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>
                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span><span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>
                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span> <span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>
                </div>
            </div>
        </div>
        <!-- line -->


        <!-- Features 2 -->
        <div class="features features-2nd">
            <div class="main-content">
                <div class="body">
                    <div class="images">
                        <img src="././assets/img/feature-3.png"
                            alt="Take the next step toward your personal and professional goals with Lesson." />
                    </div>
                    <div class="content">
                        <h2 class="heading lv2">
                            Ăn hải sản như thế nào là đúng? Cùng với chuyển gia của SeaFood khám phá ngay.
                        </h2>
                        <p class="desc">
                            Khám phá cách ăn hải sản đúng cách nhất cùng với chuyen gia.
                        </p>
                        <a href="#!" class="btn cta-btn">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- line -->


        <!-- popular / Đặc sản Miền Tây -->
        <div class="popular">
            <div class="main-content">
                <div class="popular-top">
                    <div class="info">
                        <h2 class="heading lv2">Đặc sản Miền Tây</h2>
                        <p class="desc">
                            Cùng mua Hải sản với giá sốc nào.
                        </p>
                    </div>
                    <div class="controls">
                        <button class="control-btn">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="control-btn">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="course-list">
                    <!-- Course item 1 -->
                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span><span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>

                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span><span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>
                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span><span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>
                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span><span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>
                    <div class="course-item">
                        <a href="product.html">
                            <img src="./assets/img/course-1.jpg" alt="Basic web design" class="thumb" />
                        </a>
                        <div class="info row">

                            <div class="body row">
                                <h3 class="title">
                                    <a href="#!" class="line-clamp break-all">
                                        Combo Miệt Vườn
                                    </a>
                                </h3>

                                <div class="add__to-Cart">
                                    <form action="#!" method="post">
                                        <label for="add__Cart" class="icon__addCart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                                viewBox="0 0 19 19" fill="none">
                                                <path
                                                    d="M5 2.5C5 1.25 5.9375 0 7.5 0H11.25C12.8125 0 13.75 1.25 13.75 2.5V5.625H17.5C17.8315 5.625 18.1495 5.7567 18.3839 5.99112C18.6183 6.22554 18.75 6.54348 18.75 6.875V8.75C18.7501 9.07076 18.6269 9.37927 18.4058 9.6117C18.1848 9.84414 17.8829 9.98271 17.5625 9.99875L15.6844 16.335C15.5313 16.8519 15.2152 17.3055 14.7832 17.6281C14.3513 17.9506 13.8266 18.125 13.2875 18.125H5.4475C4.91285 18.125 4.39228 17.9535 3.96224 17.6359C3.53219 17.3182 3.21531 16.871 3.05813 16.36L1.09813 9.99125C0.79508 9.95415 0.516089 9.80743 0.31379 9.57877C0.111492 9.3501 -0.000124631 9.05531 1.04435e-07 8.75V6.875C1.04435e-07 6.54348 0.131696 6.22554 0.366117 5.99112C0.600537 5.7567 0.91848 5.625 1.25 5.625H5V2.5ZM6.25 5.625H12.5V2.5C12.5 0.9375 11.5625 0.625 10.625 0.625H8.125C7.1875 0.625 6.25 0.9375 6.25 2.5V5.625ZM12.5 6.875H1.25V8.75H17.5V6.875H13.75V7.5C13.75 7.66576 13.6842 7.82473 13.5669 7.94194C13.4497 8.05915 13.2908 8.125 13.125 8.125C12.9592 8.125 12.8003 8.05915 12.6831 7.94194C12.5658 7.82473 12.5 7.66576 12.5 7.5V6.875ZM15.1962 10L15.765 10.5688L16.2262 10.1075L16.2575 10H15.1962ZM13.1131 10.5688L13.6819 10H12.5444L13.1131 10.5688ZM9.89375 10L10.4625 10.5688L11.0312 10H9.89375ZM7.81063 10.5688L8.37937 10H7.24187L7.81063 10.5688ZM5.15875 10.5688L5.7275 10H4.59L5.15875 10.5688ZM2.40875 10L2.565 10.51L3.075 10H2.40875ZM3.01062 11.9569L3.18938 12.5375L3.39062 12.3363L3.01062 11.9569ZM15.8131 11.5006L15.765 11.4525L14.8812 12.3363L15.4094 12.8644L15.8131 11.5006ZM15.1094 13.8756L15.2069 13.5462L14.4387 12.7781L13.555 13.6625L14.4387 14.5463L15.1094 13.8756ZM14.6012 15.5919L14.4387 15.43L13.555 16.3137L13.935 16.6937C14.195 16.5369 14.395 16.2863 14.4862 15.98L14.6012 15.5919ZM13.2325 16.875L13.1138 16.7563L12.9944 16.875H13.2319H13.2325ZM12.11 16.875L12.6713 16.3137L11.7875 15.43L10.9037 16.3137L11.4644 16.875H12.11ZM10.3425 16.875H10.5806L10.4619 16.7563L10.3425 16.875ZM9.45875 16.875L10.0194 16.3137L9.13562 15.43L8.25187 16.3137L8.81312 16.875H9.45875ZM7.69063 16.875H7.92875L7.81 16.7563L7.69063 16.875ZM6.80687 16.875L7.36812 16.3137L6.48375 15.43L5.6 16.3137L6.16125 16.875H6.80687ZM5.26375 16.8612L5.15812 16.7556L5.09063 16.8231C5.14688 16.84 5.205 16.8525 5.26375 16.8612ZM4.5425 16.4875L4.71625 16.3137L4.18937 15.7869L4.2525 15.9931C4.31125 16.1825 4.41187 16.3506 4.5425 16.4875ZM3.79625 14.5106L3.8325 14.5463L4.71625 13.6625L3.8325 12.7781L3.3975 13.2131L3.79625 14.5106ZM3.8325 10.1269L2.94875 11.0106L3.8325 11.8944L4.71625 11.0106L3.8325 10.1269ZM5.15812 11.4525L4.275 12.3363L5.15875 13.2206L6.0425 12.3363L5.15812 11.4525ZM6.48375 12.7781L5.6 13.6625L6.48375 14.5463L7.36812 13.6625L6.48375 12.7781ZM6.92625 12.3363L7.81 13.2206L8.69375 12.3363L7.81 11.4525L6.92625 12.3363ZM7.81 14.1044L6.92625 14.9881L7.81 15.8719L8.69375 14.9881L7.81 14.1044ZM9.13562 14.5463L10.0194 13.6625L9.13562 12.7781L8.25187 13.6625L9.13562 14.5463ZM6.48375 11.8944L7.36812 11.0106L6.48375 10.1269L5.6 11.0106L6.48375 11.8944ZM12.2294 14.9881L13.1131 15.8719L13.9969 14.9881L13.1131 14.1044L12.2294 14.9881ZM13.9969 12.3363L13.1131 11.4525L12.2294 12.3363L13.1131 13.2206L13.9969 12.3363ZM10.4613 15.8719L11.3456 14.9881L10.4613 14.1044L9.5775 14.9881L10.4613 15.8719ZM10.9037 11.0106L11.7875 11.8944L12.6713 11.0106L11.7875 10.1269L10.9037 11.0106ZM10.0194 11.0106L9.13562 10.1269L8.25187 11.0106L9.13562 11.8944L10.0194 11.0106ZM14.4394 11.8944L15.3231 11.0106L14.4387 10.1269L13.555 11.0106L14.4394 11.8944ZM9.5775 12.3363L10.4613 13.2206L11.3456 12.3363L10.4613 11.4525L9.5775 12.3363ZM5.15875 15.8719L6.04187 14.9881L5.15812 14.1044L4.275 14.9875L5.15875 15.8712V15.8719ZM10.9037 13.6625L11.7875 14.5463L12.6713 13.6625L11.7875 12.7781L10.9037 13.6625Z"
                                                    fill="black" />
                                            </svg>
                                        </label>
                                        <input type="submit" value="" class="none" id="add__Cart">
                                    </form>
                                </div>
                            </div>
                            <div class="foot row">
                                <span class="price">1,500,000đ</span> <span class="type">/ combo</span>
                                <del class="price-del">1,500,000đ</del>
                                <div class="rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="58" viewBox="0 0 51 58"
                                        fill="none" class="star">
                                        <path
                                            d="M0.35632 40.4668L17.8046 22.1564L36.1653 0.162407L32.5 14.5L51.0002 4.06794L43.2676 13.3237L34.9549 22.7713L14.3835 45.7439L3.61541 57.9998L12.5 37.5L0.35632 40.4668Z"
                                            fill="#FCE75F" />
                                    </svg>
                                    <span class="value">Hot</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Mua ngay" class="btn book-btn">
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog -->
        <div class="blog">
            <div class="main-content">
                <div class="blog-top">
                    <h2 class="heading lv2">Bí kiếp nội trợ</h2>
                    <p class="desc">
                        Cùng xem qua những công thức chế biến hải sản của các chuyên gia ẩm thực
                    </p>
                </div>
                <div class="blog-list">
                    <!-- Blog item 1 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-1.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2023</span>
                            <h3 class="title">
                                <a href="#!">
                                    Hội sao Việt mê nấu ăn. Cùng sao Việt vào bếp?
                                </a>
                            </h3>
                            <a href="#!" class="btn">Xem ngay</a>
                        </div>
                    </div>

                    <!-- Blog item 2 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-2.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2023</span>
                            <h3 class="title">
                                <a href="#!">
                                    Giáo sư sử học Lê Văn Lan chia sẻ chuyện bếp núc xưa và nay.
                                </a>
                            </h3>
                            <a href="#!" class="btn">Xem ngay</a>
                        </div>
                    </div>

                    <!-- Blog item 3 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-3.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2023</span>
                            <h3 class="title">
                                <a href="#!">
                                    15 mẹo hay trong bếp cho người nội trợ (Phần 1)
                                </a>
                            </h3>
                            <a href="#!" class="btn">Xem ngay</a>
                        </div>
                    </div>
                    <!-- Blog item 4 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-1.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2021</span>
                            <h3 class="title">
                                <a href="#!">
                                    How to become a pro web designer in 2022
                                    and get remot job?
                                </a>
                            </h3>
                            <a href="#!" class="btn">Read More</a>
                        </div>
                    </div>

                    <!-- Blog item 5 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-2.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2021</span>
                            <h3 class="title">
                                <a href="#!">
                                    How to become a pro web designer in 2022
                                    and get remot job?
                                </a>
                            </h3>
                            <a href="#!" class="btn">Read More</a>
                        </div>
                    </div>

                    <!-- Blog item 6 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-3.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2021</span>
                            <h3 class="title">
                                <a href="#!">
                                    How to become a pro web designer in 2022
                                    and get remot job?
                                </a>
                            </h3>
                            <a href="#!" class="btn">Read More</a>
                        </div>
                    </div>
                    <!-- Blog item 7 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-1.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2021</span>
                            <h3 class="title">
                                <a href="#!">
                                    How to become a pro web designer in 2022
                                    and get remot job?
                                </a>
                            </h3>
                            <a href="#!" class="btn btn__blog">Read More</a>
                        </div>
                    </div>

                    <!-- Blog item 8 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-2.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2021</span>
                            <h3 class="title">
                                <a href="#!">
                                    How to become a pro web designer in 2022
                                    and get remot job?
                                </a>
                            </h3>
                            <a href="#!" class="btn btn__blog">Read More</a>
                        </div>
                    </div>

                    <!-- Blog item 9 -->
                    <div class="item">
                        <a href="#!">
                            <img src="./assets/img/blog-3.jpg" alt="How to become a pro web designer in 2022 and
                                get remot job?" class="thumb" />
                        </a>
                        <div class="info">
                            <span class="date">21 November 2021</span>
                            <h3 class="title">
                                <a href="#!">
                                    How to become a pro web designer in 2022
                                    and get remot job?
                                </a>
                            </h3>
                            <a href="#!" class="btn btn__blog">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="dots">
                    <span class="dot"></span>
                    <span class="dot active"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>
    </main>