<?php
$servername = "127.0.0.1";
$username = "your_username";
$password = "your_password";
$dbname = "duan1_haisanmientay";
// Duy
// Tao ket noi
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiem tra ket noi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Truy vấn ví dụ để hiển thị danh mục
$sql = "SELECT * FROM catalog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Xuat dữ liệu từng hàng
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_catalog"]. " - Name: " . $row["name_catalog"]. " - Quantity: " . $row["qty_catalog"]. "<br>";
    }
} else {
    echo "0 results";
}

// Đóng Kết Nối
$conn->close();
?>