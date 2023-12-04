    
    <div class="main-content">
        <div class="main-hero">
            <img src="./assets/icons/main-banner.png" alt="" class="main-banner">
            <figure class="banner-rigth row">
                <img src="./assets/icons/banner-right1.png" alt="">
                <img src="./assets/icons/banner-right2.png" alt="">
            </figure>
        </div>
    </div>


    <section class="banner__bottom">
        <figure class="main-content">
            <a href=""><img src="./assets/icons/baorebaongon.png" alt=""></a>
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

        <figure class="banner__ngaoso main-content row">
            <img src="./assets/icons/banner-ngaosoochen.png" alt="">
        </figure>

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
                    <?= showProduct($listItemLimitSale)?>
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
                    <?= showProduct($listItemLimitSpecialty)?>
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