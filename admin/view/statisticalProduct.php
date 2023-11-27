<?php
    // print_r($loadstatistics);
?>
<input type="submit" value="">
<form action="" method="post"></form>
<main class="main row">
                <div class="main-content row">
                    <article class="box-total row">
                        <section class="total_product row">
                            
                        </section>
                        <section class="total_product row">
                            
                        </section>
                        <section class="total_product row">
                            
                        </section>
                    </article>
                    <!-- code table don hang o day -->
                    <article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title">
                                <h4>Thống kê</h4>
                            </div>
                            <div class="revenue__status row">
                                <a href="index.php?page=statistical&id=1">Thống kê tuần</a>
                                <a href="index.php?page=statistical&id=2">Thống kê tháng</a>
                                <a href="index.php?page=statistical&id=3">Thống kê năm</a>
                                <a href="index.php?page=statisticalProduct&id=4">Thống kê loại hàng</a>
                                <a href="index.php?page=statisticalProduct&id=5">Thống kê sản phẩm bán ra nhiều nhất</a>
                            </div>
                        </div>
                        <?php
                    // Dữ liệu mẫu về doanh số bán hàng theo tháng
                    $dataPoints = [];
                    foreach ($loadstatisticsProduct as $data) {
                        $dataPoints[] = [
                            'namePro' => $data['namePro'],
                            'qty' => $data['qty'],
                            
                        ];
                    }

                    // Chuyển định dạng dữ liệu sang JSON để truyền vào JavaScript
                    $salesDataJSON = json_encode($dataPoints);
                    ?>
                    <div style="width: 50%;">
                        <canvas id="productChart"></canvas>
                    </div>

                    <script>
                    // Sử dụng dữ liệu PHP đã chuyển định dạng sang JSON
                    var productData = <?php echo  $salesDataJSON; ?>;

                    // Tạo biểu đồ hình tròn bằng Chart.js
                    var ctx = document.getElementById('productChart').getContext('2d');
                    var productChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: productData.map(item => item.namePro),
                            datasets: [{
                                data: productData.map(item => item.qty),
                                backgroundColor: [
                                    'rgba(75, 192, 192, 0.7)', // Màu cho Type A
                                    'rgba(255, 99, 132, 0.7)', // Màu cho Type B
                                    'rgba(255, 255, 102, 0.7)' // Màu cho Type C
                                    // Thêm màu cho các loại hàng khác nếu cần
                                ],
                                borderColor: [
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 255, 102, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false
                        }
                    });
                    </script>
                    </article>
                </div>
               