<?php
    // print_r($loadstatistics);
?>
<form action="" method="post"></form>
<main class="main row">
                <div class="main-content row">
                    <article class="box-total row">
                        
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
                                <a href="index.php?page=statisticalCatalog&id=4">Thống kê loại hàng</a>
                                <a href="index.php?page=statisticalProduct&id=5">Thống kê sản phẩm bán ra nhiều nhất</a>
                            </div>
                        </div>
                        <?php
                    // Dữ liệu mẫu về doanh số bán hàng theo tháng
                    $dataPoints = [];
                    foreach ($loadstatisticsProduct as $data) {
                        $dataPoints[] = [
                            'nameProduct' => $data['nameProduct'],
                            'qtysold' => $data['qtysold'],
                            
                        ];
                    }

                    // Chuyển định dạng dữ liệu sang JSON để truyền vào JavaScript
                    $salesDataJSON = json_encode($dataPoints);
                    ?>
                    <canvas id="myLineChart" width="400" height="200"></canvas>

                    <script>
                    // Sử dụng dữ liệu PHP đã chuyển định dạng sang JSON
                    var dataPoints = <?php echo $salesDataJSON; ?>;

                    // Tạo biểu đồ đường bằng Chart.js
                    var ctx = document.getElementById('myLineChart').getContext('2d');
                    var myLineChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: dataPoints.map(item => item.nameProduct),
                            datasets: [{
                                label: 'sản phẩm đã bán ra',
                                data: dataPoints.map(item => item.qtysold),
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1,
                                fill: false
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
                    </article>
                </div>
               