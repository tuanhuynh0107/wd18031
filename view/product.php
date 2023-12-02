<?php
    
    extract($itemDetailProduct);
    extract($itemAlbum);
    extract($itemProduct);
    // hàm này sử dụng được
    extract($itemProduct);
    $linkByNow='index.php?page=byNow&idProduct='.$id;
    $sameType=sameTypeProducts($id);
    // $loadComment=getUserComment(0);
    print_r($itemProduct);
?>  
<main>
      
      
      <section class="main-product">
          <div class="main-content">
              <div class="main-product--row">
                    <div class="main-product__img">
                      <div class="main-product__img--top">
                        <a href="#!" class="main-product__icon--left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" fill="none">
                                <rect x="59.5" y="0.5" width="59" height="59" rx="29.5" transform="rotate(90 59.5 0.5)" fill="white"/>
                                <rect x="59.5" y="0.5" width="59" height="59" rx="29.5" transform="rotate(90 59.5 0.5)" stroke="black"/>
                                <path d="M26.6354 30L40 43.2228L36.1823 47L19 30L36.1823 13L40 16.7799L26.6354 30.0027V30Z" fill="#ABABAB"/>
                            </svg>
                        </a>
                          <figure>
                              <img src="./assets/img/img_main/<?=$img_main?>.png"
                                  alt="haisanmientay" class="main-product__img--top-img">
                          </figure>
                        <a href="#!" class="main-product__icon--right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" fill="none">
                            <rect x="59.5" y="0.5" width="59" height="59" rx="29.5" transform="rotate(90 59.5 0.5)" fill="white"/>
                            <rect x="59.5" y="0.5" width="59" height="59" rx="29.5" transform="rotate(90 59.5 0.5)" stroke="black"/>
                            <path d="M32.3646 30L19 16.7772L22.8177 13L40 30L22.8177 47L19 43.2201L32.3646 29.9973V30Z" fill="#ABABAB"/>
                        </svg>
                        </a>
                      </div>
                      <div class="main-product__img--bottom">
                          <figure>
                              <img src="./assets/img/img_main/<?=$img1?>.png"
                                  alt="haisanmientay">
                              <img src="./assets/img/img_main/<?=$img2?>.png"
                                  alt="haisanmientay">
                              <img src="./assets/img/img_main/<?=$img3?>.png"
                                  alt="haisanmientay">
                              <img src="./assets/img/img_main/<?=$img4?>.png"
                                  alt="haisanmientay">
                            <img src="./assets/img/img_main/<?=$img_main?>.png"
                            alt="haisanmientay" class="main-product__img--top-img">
                          </figure>
                      </div>
                    </div>
                  <div class="main-product__content">
                      <div class="main-product__content--type row">
                        <strong class="content__strong">Đóng gói:</strong>
                          <div class="content--type"><?= $type?></div>
                      </div>
                      <div class="main-product__content--desc  row">
                          <strong class="content__strong">Xuất xứ:</strong>
                          <p class="content__desc line-clamp"><?=$production?></p>
                      </div>
                      <div class="main-product__content--desc row ">
                          <strong class="content__strong">Tình trạng:</strong>
                          <p class="content__desc line-clamp">Giao sống oxi hoặc đóng thùng kèm đá</p>
                      </div>
                      <div class="main-product__content--desc row ">
                          <strongc class="content__strong"> Cam kết:</strongc>
                          <p class="content__desc line-clamp">1 đổi 1 nếu sản phẩm kém chất lương</p>
                      </div>
                      <div class="main-product__content--desc row ">
                          <strong class="content__strong">Món ngon:</strong>
                          <p class="content__desc line-clamp">sốt me, sốt bơ tỏi, sốt trứng muối hoặc nấu bánh canh
                          </p>
                      </div>

                      <div class="main-product__content--pice row">
                          <div class="main-product__content--pice__cost"><?=number_format($price,0,",",".")?>đ</div>
                          <div class="main-product__content--pice__del-cost">255,000đ</div>
                          <div class="main-product__content--pice__sale"><?=$sale?>%</div>

                      </div>

                      <div class="main-product__content--title row"><?=$name_prd?></div>
                      <div class="main-product__content--btn row ">
                        <form action="<?=$linkByNow?>" method="post">
                                <input type="hidden" name="idPro" value="<?=$id?>">
                                <input type="hidden" name="imgPro" value="<?=$img1?>">
                                <input type="hidden" name="namePro" value="<?=$name?>">
                                <input type="hidden" name="pricePro" value="<?=$price?>">
                                <input type="hidden" name="typePro" value="'<?=$type?>">
                                <input type="hidden" name="qtyPro" value="1">
                                <!-- <input type="hidden" name="nameCata" value="<?=$category_name?>"> -->
                                <input type="submit" value="Mua ngay" class="btn btn__act--Product" name="byNow">
                        </form>
                      </div>
                      <div class="main-product__content--btn-2 row">
                      <form action="index.php?page=addCart&idProduct=<?=$id_DP?>" method="post">
                            <input type="hidden" name="idPro" value="'<?=$id_DP?>">
                            <input type="hidden" name="imgPro" value="<?=$img1?>">
                            <input type="hidden" name="namePro" value="<?=$name_prd?>">
                            <input type="hidden" name="pricePro" value="<?=$price?>">
                            <input type="hidden" name="typePro" value="<?=$price?>">
                            <input type="hidden" name="qtyPro" value="1">
                            <input type="hidden" name="qty" value="<?=$qty?>">
                            <input type="hidden" name="nameCata" value="'.$category_name.'">

                            <input type="submit" name="addCart"  class="btn btn__add--Cart"  value="Thêm vào giỏ hàng ">
                            <!-- <a href="#!" name="addCart"></a> -->
                        </form>
                        <a href="index.php" class="btn btn__advisory">Tiếp tục mua hàng</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- popular / hải sản tươi sống mỗi ngày -->

      <!-- detailed description  && phản hồi -->
      <section class="description">
          <div class="main-content">
            <div class="description__btn row">
                <div class="description__btn--btn btn">
                    <a href="#!" class="description__btn--act" id="btn_mota">Mô tả chi tiết</a>
                </div>
                <div class="description__btn--btn btn">
                    <a href="#!" class="description__btn--act" id="btn_comment">
                        Hỏi đáp về sản phẩm
                    </a>
                </div>
            </div>
        <div class="description__content main-content" id="mota">
                <figure class="description__content--item row">
                    <img src="./assets/img/combo1.png" alt="" class="description__content-img">
                    <figcaption class="description__content--desc">
                        <h4 class="description__content--hd">Combo Hải Sản 1.5 tr</h4>
                        Được nhiều khách hàng lựa chọn vì sự tiện lợi, tiết kiệm được lên đến 25% so với giá
                        gốc. Thành phần của combo kết hợp đa dạng giữa hải sản nhập khẩu: 2 con tôm Alaska size
                        nhỏ ~500g/con, các loại hải sản nội địa hấp dẫn như: 500g ốc hương, 1 con cua thịt
                        ~350g, 10 con hàu sữa giống Pháp, đặc biệt còn được tặng thêm 1 chai muối ớt xanh công
                        thức độc quyền nhà Đảo Hải Sản giúp bữa tiệc hải sản thêm trọn vẹn. Tất cả các loại hải
                        sản sẽ được giao sống đến tận tay của khách hàng.
                    </figcaption>
                </figure>
                <figure class="description__content--item row">
                    <img src="./assets/img/combo1.png" alt="" class="description__content-img">
                    <figcaption class="description__content--desc">

                        <ul class="description__content--desc__list">
                            <li>Quy cách : 450 - 550g/con</li>
                            <li>Tình trạng : Giao sống</li>
                            <li>Xuất xứ : Nhập khẩu từ Mỹ/Canada</li>
                            <li> Món ngon : Hấp, nướng, nấu cháo, sashimi, ....</li>
                        </ul>
                        Đặc biệt, trong Combo Hải Sản 1,5 Triệu còn có sự xuất hiện 02 sản phẩm đặc sản vùng Cà Mau
                        đất mũi và Cam Ranh, nơi nổi tiếng với các loại hải sản nội địa: 01 con cua Cà Mau ~350g +
                        500g Ốc Hương
                    </figcaption>
                </figure>
                <figure class="description__content--item row">
                    <img src="./assets/img/combo1.png" alt="" class="description__content-img" s>
                    <figcaption class="description__content--desc">
                        Tình trạng : Giao sống
                        Xuất xứ : Cua thịt - Cà Mau; Ốc hương - Cam Ranh
                        Món ngon : Hấp, nướng, sốt trứng muối, sốt bơ tỏi, ...
                        10 con hàu sữa giống Pháp, đầy thịt. Giúp khách hàng có thể chiến biến đa dạng món trong
                        combo như sashimi; nấu cháo, nướng, ...
                    </figcaption>
                </figure>
            </div>

            <!-- comment -->

            <div class="description__content main-content comment__product row" id="comment">
                <h4 class="comment__product__title">Hỏi đáp từ khách hàng về <?=$name_prd?></h4>
                <!-- <form action="" method="post">
                    <label for="content__comment" >Nhập nội dung</label>
                    <textarea name="content__comment" id="content__comment" class="content__comment" cols="100%" rows="5" placeholder="Nội dung..."></textarea>
                    <input type="submit" value="Gửi" name="sendComment" class="comment__send" id="comment__send">
                    <label for="comment__send" class="comment__send--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M27.1875 2.8125L2.8125 14.0625L14.0625 16.4062M27.1875 2.8125L17.8125 27.1875L14.0625 16.4062M27.1875 2.8125L14.0625 16.4062" stroke="black" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </label>
                </form> -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#history__comment--box").load("view/comment.php", {idpro: <?=$id?>});
                    });
                </script>
                <div class="history__comment row" >
                    <?php
                        if(!isset($_SESSION['user_info'])){
                            echo 'Bạn cần đăng nhập để thực hiện chức năng này <a href="index.php?page=login">Đăng nhập tại đây</a>';
                        }else{
                            echo "";
                        }
                    ?>
                    <div class="history__comment--box row" id="history__comment--box">
                    
                      
                    </div>
                   
                </div>
                
            </div>
          </div>
      </section>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Mặc định hiển thị nội dung của id="mota"
            document.getElementById("mota").style.display = "block";
            document.getElementById("comment").style.display = "none";

            // Bắt sự kiện khi bấm nút id="btn_mota"
            document.getElementById("btn_mota").addEventListener("click", function () {
                document.getElementById("mota").style.display = "block";
                document.getElementById("comment").style.display = "none";
            });

            // Bắt sự kiện khi bấm nút id="btn_comment"
            document.getElementById("btn_comment").addEventListener("click", function () {
                document.getElementById("mota").style.display = "none";
                document.getElementById("comment").style.display = "block";
            });
            var thumbnailImages = document.querySelectorAll('.main-product__img--bottom img');
            var mainImage = document.querySelector('.main-product__img--top-img');
            var leftButton = document.querySelector('.main-product__img--top a:first-child');
            var rightButton = document.querySelector('.main-product__img--top a:last-child');
            var currentIndex = 0;

            leftButton.addEventListener('click', function () {
                currentIndex = (currentIndex - 1 + thumbnailImages.length) % thumbnailImages.length;
                mainImage.style.opacity = 0;
                setTimeout(function () {
                    mainImage.src = thumbnailImages[currentIndex].src;
                    mainImage.style.opacity = 1;
                }, 500); // Chờ transition kết thúc trước khi thay đổi src
            });

            rightButton.addEventListener('click', function () {
                currentIndex = (currentIndex + 1) % thumbnailImages.length;
                mainImage.style.opacity = 0;
                setTimeout(function () {
                    mainImage.src = thumbnailImages[currentIndex].src;
                    mainImage.style.opacity = 1;
                }, 500);
            });

            thumbnailImages.forEach(function (thumbnail, index) {
                thumbnail.addEventListener('click', function () {
                    mainImage.style.opacity = 0;
                    setTimeout(function () {
                        mainImage.src = thumbnail.src;
                        mainImage.style.opacity = 1;
                    }, 500);
                    currentIndex = index;
                });
            });
            // Mặc định hiển thị nội dung của id="mota"
        });
       
    </script>
     <script>
            function toggleReply(clickedElement) {
                // Mở chỉ box trả lời tương ứng với nút được bấm
                var parentComment = clickedElement.closest('.comment__operation');
                var replyBox = parentComment.nextElementSibling;

                // Chuyển đổi giữa "Trả lời" và "Ẩn"
                clickedElement.innerText = (clickedElement.innerText === "Trả lời") ? "Ẩn" : "Trả lời";

                // Ẩn box__reply khi chuyển đổi sang trạng thái "Ẩn"
                if (clickedElement.innerText === "Ẩn") {
                    replyBox.style.display = "block";
                } else {
                    replyBox.style.display = "none";
                }
            }

    </script>

      <!-- feedback-product -->
      <section class="feedback-product">
            <div class="main-content">
                <div class="feedback__heading row">
                    <h2 class="feedback__heading--title">
                        Phản hồi từ Khách Hàng về <?=$name_prd?>
                    </h2>
                </div>
                <div class="feedback-content row">
                    <div class="feedback-content__item row">
                        <div class="feedback-content__item--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                        </div>
                        <div class="feedback-content__item--title">
                            “Hải sản giao đến tay tươi sống hoàn toàn. Rất tin
                            tưởng mua hàng bên này . Nhân viên nhiệt tình, tư vấn cụ thể dể hiểu”
                        </div>

                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80"
                            alt="" class="feedback-content__item--user">
                    </div>
                    <div class="feedback-content__item row">
                        <div class="feedback-content__item--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                        </div>
                        <div class="feedback-content__item--title">
                            “Hải sản giao đến tay tươi sống hoàn toàn. Rất tin
                            tưởng mua hàng bên này . Nhân viên nhiệt tình, tư vấn cụ thể dể hiểu”
                        </div>

                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80"
                            alt="" class="feedback-content__item--user">
                    </div>
                    <div class="feedback-content__item row">
                        <div class="feedback-content__item--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                fill="none">
                                <path
                                    d="M12.7244 0.684006C12.8082 0.481537 12.9503 0.308487 13.1325 0.186735C13.3147 0.0649841 13.529 0 13.7481 0C13.9673 0 14.1815 0.0649841 14.3637 0.186735C14.5459 0.308487 14.688 0.481537 14.7719 0.684006L17.7437 7.82776C17.7765 7.90742 17.8306 7.97651 17.9 8.02745C17.9695 8.07839 18.0517 8.1092 18.1375 8.11651L25.8512 8.73526C26.0696 8.75248 26.2779 8.83402 26.4499 8.96957C26.6219 9.10512 26.7499 9.2886 26.8177 9.49684C26.8855 9.70509 26.8901 9.92876 26.8309 10.1396C26.7717 10.3505 26.6513 10.539 26.485 10.6815L20.6069 15.714C20.5418 15.7701 20.4935 15.8429 20.467 15.9246C20.4406 16.0062 20.4371 16.0936 20.4569 16.1771L22.2512 23.7053C22.3018 23.9181 22.2882 24.1412 22.2122 24.3464C22.1362 24.5515 22.0012 24.7296 21.8241 24.8581C21.647 24.9867 21.4359 25.0599 21.2173 25.0686C20.9986 25.0774 20.7823 25.0212 20.5956 24.9071L13.9919 20.8759C13.9184 20.8312 13.8341 20.8075 13.7481 20.8075C13.6621 20.8075 13.5778 20.8312 13.5044 20.8759L6.90061 24.9071C6.71387 25.0212 6.49757 25.0774 6.27894 25.0686C6.06032 25.0599 5.84918 24.9867 5.67212 24.8581C5.49506 24.7296 5.36001 24.5515 5.284 24.3464C5.20799 24.1412 5.19441 23.9181 5.24498 23.7053L7.03936 16.1771C7.05916 16.0936 7.05564 16.0062 7.02919 15.9246C7.00274 15.8429 6.95437 15.7701 6.88936 15.714L1.01123 10.6815C0.844908 10.539 0.724534 10.3505 0.66531 10.1396C0.606086 9.92876 0.610668 9.70509 0.678478 9.49684C0.746288 9.2886 0.874285 9.10512 1.0463 8.96957C1.21832 8.83402 1.42665 8.75248 1.64498 8.73526L9.35686 8.11651C9.44281 8.1097 9.52521 8.07932 9.59501 8.0287C9.66481 7.97809 9.7193 7.90921 9.75248 7.82963L12.7244 0.685881V0.684006Z"
                                    fill="#FFD233" />
                            </svg>
                        </div>
                        <div class="feedback-content__item--title">
                            “Hải sản giao đến tay tươi sống hoàn toàn. Rất tin
                            tưởng mua hàng bên này . Nhân viên nhiệt tình, tư vấn cụ thể dể hiểu”
                        </div>

                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80"
                            alt="" class="feedback-content__item--user">
                    </div>
                </div>
            </div>
      </section>
      <div class=" popular">
          <div class="main-content">
              <div class="popular-top">
                  <div class="info">
                      <h2 class="heading lv2">Sản phẩm cùng loại</h2>
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
                  <?= showProduct($listItemCatalog)?>
              </div>
          </div>
      </div>

      <section class="partner">
          <div class="main-content">
              <div class="partner__heading row">
                  <h2 class="partner__heading--title">
                      Đối tác vận chuyển
                  </h2>
              </div>
              <figure class="partner__list-img row">

                  <img src="./assets/icons/xanhSV.png" alt="">
                  <img src="./assets/icons/bee.png" alt="">
                  <img src="./assets/icons/grab.png" alt="">
                  <img src="./assets/icons/ahamov.png" alt="">
                  <img src="./assets/icons/gojeck.png" alt="">
              </figure>
          </div>
      </section>
      
  </main>