<?php
    session_start();

    // Nhúng file functions.php
    function upDataQty($index, $qty,$total) {
        if (isset($_SESSION['cart'][$index]) && isset($_SESSION['cart'][$index]["qtyPro"])) {
            $_SESSION['cart'][$index]["qtyPro"] = $qty;
            $_SESSION['cart'][$index]["total"] = $total;
            // Trả về dữ liệu nếu cần
            echo "Cập nhật thành công";
        } else {
            echo "Lỗi: Không tìm thấy sản phẩm hoặc qtyPro trong giỏ hàng";
        }
    }

    // Xử lý dữ liệu được gửi từ client-side
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["index"]) && isset($_POST["qtyPro"])) {
            $index = $_POST["index"];
            $qty = $_POST["qtyPro"];
            $total = $_POST["total"];
    
            // Gọi hàm upDataQty từ functions.php
            upDataQty($index, $qty,$total);
        } else {
            echo "Lỗi: Thiếu thông tin gửi từ phía client-side";
        }
    }

    
 ?>
