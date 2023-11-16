
            <figure class="main-content">
            <?=showBannerCatalog($banner)?>
              <!-- banner ở đây
             -->
            </figure>

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
                    <?= showProduct($listCatalog)?>
                    <!--  -->
                </div>
            </div>
        </div>
        <!-- show các sản phẩm lên dây -->
        
    </main>