<?php
    extract($itemDetailProduct);
    extract($itemAlbum);
    // hàm này sử dụng được
    extract($itemProduct);
    $linkByNow='index.php?page=byNow&idProduct='.$id;
    $sameType=sameTypeProducts($id);
    // print_r($itemDetailProduct);
    // echo '<br>----------------------<br>';
    // print_r($itemProduct);
    // echo '<br>----------------------<br>';
    // echo "test key: ".$type;
    ;
?> 
<style>
    .header.fixed{
        position: unset;
    }
</style> 
<!-- CSS Slider -->
<style>
    .slick-list,.slick-slider,.slick-track{position:relative;display:block}.slick-loading .slick-slide,.slick-loading .slick-track{visibility:hidden}.slick-slider{-moz-box-sizing:border-box;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{top:0;left:0}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-slide{display:none;float:left;min-height:1px}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}
  </style>
  <style>
    .slick-dots,.slick-next,.slick-prev{position:absolute;display:block;padding:0}.slick-dots li button:before,.slick-next:before,.slick-prev:before{font-family:slick;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.slick-loading .slick-list{background:url(ajax-loader.gif) center center no-repeat #fff}@font-face{font-family:slick;font-weight:400;font-style:normal;src:url(fonts/slick.eot);src:url(fonts/slick.eot?#iefix) format('embedded-opentype'),url(fonts/slick.woff) format('woff'),url(fonts/slick.ttf) format('truetype'),url(fonts/slick.svg#slick) format('svg')}.slick-next,.slick-prev{font-size:0;line-height:0;top:50%;width:20px;height:20px;margin-top:-10px\9;-webkit-transform:translate(0,-50%);-ms-transform:translate(0,-50%);transform:translate(0,-50%);cursor:pointer;color:transparent;border:none;outline:0;background:0 0}.slick-next:focus,.slick-next:hover,.slick-prev:focus,.slick-prev:hover{color:transparent;outline:0;background:0 0}.slick-next:focus:before,.slick-next:hover:before,.slick-prev:focus:before,.slick-prev:hover:before{opacity:1}.slick-next.slick-disabled:before,.slick-prev.slick-disabled:before{opacity:.25}.slick-next:before,.slick-prev:before{font-size:20px;line-height:1;opacity:.75;color:#fff}.slick-prev{left:-25px}[dir=rtl] .slick-prev{right:-25px;left:auto}.slick-prev:before{content:'←'}.slick-next:before,[dir=rtl] .slick-prev:before{content:'→'}.slick-next{right:-25px}[dir=rtl] .slick-next{right:auto;left:-25px}[dir=rtl] .slick-next:before{content:'←'}.slick-slider{margin-bottom:30px}.slick-dots{bottom:-45px;width:100%;list-style:none;text-align:center}.slick-dots li{position:relative;display:inline-block;width:20px;height:20px;margin:0 5px;padding:0;cursor:pointer}.slick-dots li button{font-size:0;line-height:0;display:block;width:20px;height:20px;padding:5px;cursor:pointer;color:transparent;border:0;outline:0;background:0 0}.slick-dots li button:focus,.slick-dots li button:hover{outline:0}.slick-dots li button:focus:before,.slick-dots li button:hover:before{opacity:1}.slick-dots li button:before{font-size:6px;line-height:20px;position:absolute;top:0;left:0;width:20px;height:20px;content:'•';text-align:center;opacity:.25;color:#000}.slick-dots li.slick-active button:before{opacity:.75;color:#000}
  </style>
  <style>
        .h3 {
    background: #fff;
    color: #3498db;
    font-size: 36px;
    line-height: 100px;
    margin: 10px;
    padding: 2%;
    position: relative;
    text-align: center;
}
.h3 img{
    width: 100%;
    /* height: 100%; */
    object-fit: fill;
}

  </style>
<!-- END CSS Slider -->
<main>
      <section class="main-product">
          <div class="main-content">
              <div class="main-product--row">
                  <div class="main-product__img">
                      <div class="main-product__img--top">
                          <div class="slider slider-for h3">
                              <img src="./assets/img/img_main/<?=$img_main?>.png"
                                  alt="" class="main-product__img--top-img">
                              <img src="./assets/img/img_main/<?=$img2?>.png"
                                  alt="" class="main-product__img--top-img">
                              <img src="./assets/img/img_main/<?=$img3?>.png"
                                  alt="" class="main-product__img--top-img">
                              <img src="./assets/img/img_main/<?=$img4?>.png"
                                  alt="" class="main-product__img--top-img">
                              <img src="./assets/img/img_main/<?=$img5?>.png"
                                  alt="" class="main-product__img--top-img">
                            </div>
                      </div>
                      <div class="main-product__img--bottom">
                          <figure class="slider slider-nav h3">
                          <img src="./assets/img/img_main/<?=$img_main?>.png"
                                  alt="" >
                              <img src="./assets/img/img_main/<?=$img2?>.png"
                                  alt="" >
                              <img src="./assets/img/img_main/<?=$img3?>.png"
                                  alt="" >
                              <img src="./assets/img/img_main/<?=$img4?>.png"
                                  alt="" >
                              <img src="./assets/img/img_main/<?=$img5?>.png"
                                  alt="" >
                          </figure>
                      </div>
                  </div>
                  <!-- JS Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
   $('.slider-for').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
 slidesToShow: 3,
 slidesToScroll: 1,
 asNavFor: '.slider-for',
 dots: true,
 focusOnSelect: true
});

$('a[data-slide]').click(function(e) {
 e.preventDefault();
 var slideno = $(this).data('slide');
 $('.slider-nav').slick('slickGoTo', slideno - 1);
});
</script>
<!-- END JS Slider -->
                  <div class="main-product__content">
                      <div class="main-product__content--type row">
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
                          <div class="main-product__content--pice__cost"><?=$price?>đ</div>
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
                          <a href="#!" class="btn btn__add--Cart">Thêm vào giỏ hàng </a>
                          <a href="#!" class="btn btn__advisory">Tiếp tục mua hàng</a>
                      </div>

                      <div class="main-product__together">
                          <div class="main-product__together--heading">
                              Thường được mua cùng:
                          </div>
                          <div class="main-product__together--content">
                              <div class="together--content__box row">
                                  <div class="content__box--1 row">
                                      <div class="together--content__box--checked">
                                          <input type="checkbox" name="" id="check">
                                      </div>
                                      <div class="together--content__box--img">
                                          <img src="./assets/img/muoi-ot-do.png" alt="">
                                      </div>
                                      <div class="together--content__box--title">Muối ớt đỏ (DH-food)</div>
                                  </div>
                                  <div class="content__box--2 row">
                                      <div class="together--content__box--checked">
                                          <input type="checkbox" name="" id="check">
                                      </div>
                                      <div class="together--content__box--img">
                                          <img src="./assets/img/muoi-ot-xanh.png" alt="">
                                      </div>
                                      <div class="together--content__box--title">Muối ớt xanh (DH-food)</div>
                                  </div>
                              </div>
                              <div class="together--content__box row">
                                  <div class="content__box--1 row">
                                      <div class="together--content__box--checked">
                                          <input type="checkbox" name="" id="check">
                                      </div>
                                      <div class="together--content__box--img">
                                          <img src="./assets/img/nuoc-tuong0hq.png" alt="">
                                      </div>
                                      <div class="together--content__box--title">Nước tương HQ</div>
                                  </div>
                                  <div class="content__box--2 row">
                                      <div class="together--content__box--checked">
                                          <input type="checkbox" name="" id="check">
                                      </div>
                                      <div class="together--content__box--img">
                                          <img src="./assets/img/wasabi.png" alt="">
                                      </div>
                                      <div class="together--content__box--title">Wasabi Nhật Bản</div>
                                  </div>
                              </div>
                              <div class="together--content__box row">
                                  <div class="content__box--1 row">
                                      <div class="together--content__box--checked">
                                          <input type="checkbox" name="" id="check">
                                      </div>
                                      <div class="together--content__box--img">
                                          <img src="./assets/img/bo-dung-cu-an-HS.png" alt="">
                                      </div>
                                      <div class="together--content__box--title">Bộ dụng cụ ăn HS</div>
                                  </div>
                                  <div class="content__box--2 row">
                                      <div class="together--content__box--checked">
                                          <input type="checkbox" name="" id="check">
                                      </div>
                                      <div class="together--content__box--img">
                                          <img src="./assets/img/bo-kep-cua.png" alt="">
                                      </div>
                                      <div class="together--content__box--title">Bộ Kẹp Cua</div>
                                  </div>
                              </div>
                          </div>
                          <div class="main-product__together--btn  row">
                              <a href="" class="btn">
                                  Thêm N vào sọt
                              </a>
                          </div>
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
                      <a href="" class="description__btn--act">Mô tả chi tiết</a>
                  </div>
                  <div class="description__btn--btn btn">
                      <a href="" class="description__btn--act">
                          Hỏi đáp về sản phẩm
                      </a>
                  </div>
              </div>



              <div class="description__content main-content">
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
          </div>
      </section>
      <!-- feedback-product -->
      <section class="feedback-product">
            <div class="main-content">
                <div class="feedback__heading row">
                    <h2 class="feedback__heading--title">
                        Phản hồi từ Khách Hàng về Combo Miệt Vườn
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
                <?php
                if($sameType  === []) {
                    echo "khong rong";
                }else {
                    echo "rong";
                }
                ?>
              </div>
          </div>
      </div>
  </main>