<?php
    print_r($loadUser);
    if(isset($loadUser) && is_array($loadUser)){
        extract($loadUser);
    }

?>
<div class="main-content">
    <div class="notifi--container">
            <h1>Cảm ơn bạn đã mua hàng</h1>
            <div class="buttons">
                <a href="index.php">
                    <button id="continue-shopping-btn" class="buttons__Cart">Tiếp tục mua hàng</button>
                </a>
                <a href="index.php?page=yourCard&id_user=<?=$id_user?>">
                    <button id="order-history-btn" class="buttons__Cart">Xem lịch sử đơn hàng</button>
                </a>
            </div>
        </div>

        <div id="notification-modal" class="modal">
            <div class="modal-content">
                <p class="notification-message">Bạn đã mua hàng thành công!</p>
            </div>
        </div>
        <div class=" popular">
            <div class="main-content">
                <div class="popular-top">
                    <div class="info">
                        <h2 class="heading lv2">Sản phẩm mới</h2>
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
                    <?=showProduct($listItemLimitRanDom)?>
                    
                </div>
            </div>
        </div>