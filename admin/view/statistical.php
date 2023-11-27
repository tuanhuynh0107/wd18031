<?php
    print_r($loadstatistics);
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
                                <a href="index.php?page=statisticalCatalog&id=4">Thống kê loại hàng</a>
                                <a href="index.php?page=statisticalProduct&id=5">Thống kê sản phẩm bán ra nhiều nhất</a>
                            </div>
                        </div>
                        <?php
                        if(isset($loadstatistics)){

                       
                    // Dữ liệu mẫu về doanh số bán hàng theo tháng
                    $dataPoints = [];
                    foreach ($loadstatistics as $data) {
                        $dataPoints[] = [
                            'name' => $data['name'],
                            'phone' => $data['phone'],
                            'total_status_3' => $data['total_status_3'],
                            'total_status_4' => $data['total_status_4'],
                            'total_status_5' => $data['total_status_5']
                        ];
                    }

                    // Chuyển định dạng dữ liệu sang JSON để truyền vào JavaScript
                    $salesDataJSON = json_encode($dataPoints);
                }
                    ?>
                    <canvas id="myComparisonChart" width="400" height="200"></canvas>

                    <script>
                    // Sử dụng dữ liệu PHP đã chuyển định dạng sang JSON
                    var comparisonData = <?php echo $salesDataJSON; ?>;

                    // Tạo biểu đồ cột so sánh bằng Chart.js
                    var ctx = document.getElementById('myComparisonChart').getContext('2d');
                    var myComparisonChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: comparisonData.map(item => `${item.name} - ${item.phone}`),
                            datasets: [
                                {
                                    label: 'Đơn hàng thành công',
                                    data: comparisonData.map(item => item.total_status_3),
                                    backgroundColor: 'rgba(255, 99, 132, 0.7)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'Đơn hàng thất bại',
                                    data: comparisonData.map(item => item.total_status_4),
                                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'Đơn hàng bị hủy',
                                    data: comparisonData.map(item => item.total_status_5),
                                    backgroundColor: 'rgba(255, 206, 86, 0.7)',
                                    borderColor: 'rgba(255, 206, 86, 1)',
                                    borderWidth: 1
                                }
                            ]
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
               