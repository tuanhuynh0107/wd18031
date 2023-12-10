<?php
        // echo '<pre>';
        // print_r( $loadCommentNew );
        // echo '</pre>';
?>
                <section class="notify row">
                    <!-- POST -->
                    <!-- <div class="notify__post ">
                        <div class="notify__post--heading row ">
                            <div class="notify--heading__title">
                                Bình luận mới nhất
                            </div>
                            <div class="notify--heading__time">
                                5 phút trước
                            </div>
                        </div>

                        <div class="notify__post--content row">
                            <div class="notify--content__title">
                                Trường Giang trực tiếp nấu ăn bồi bổ cho vợ sau sinh
                            </div>
                            <div class="notify--content__desc">
                                Trường Giang mua Hải Sản Tẩm cho Vợ Khi Vợ vừa hạ sinh cậu con trai quý tử
                            </div>
                        </div>

                        <div class="notify__btn">
                            <input type="button" value="Sửa tin" class="notify__btn--update">
                        </div>
                    </div> -->
                    <!-- COMMENT -->
                    
                    <div class="notify__comment">
                        <?php
                            foreach($loadCommentNew as $itemNewComment){
                                extract($itemNewComment);
                                $dateString = $time;

                                // Tạo một đối tượng DateTime từ chuỗi ngày tháng năm
                                $date = new DateTime($dateString);

                                // Định dạng ngày tháng năm mới
                                $newDateFormat = $date->format('d-m-Y H:i:s');
                                echo 
                                '<div class="notify__post--heading row ">
                           
                                <div class="notify--heading__title">
                                    Bình luận mới nhất
                                </div>
                                <div class="notify--heading__time">
                                    '. $newDateFormat.'
                                </div>
                            </div>
    
                            <div class="notify__post--content row">
                                <div class="notify--content__title">
                                    '.$text.'
                                </div>
                            </div>
                                
                                ';
                            }
                        
                        ?>
                        
                        <div class="notify__btn">
                            <a href="index.php?page=noComment">
                                <input type="button" value="Trả lời ngay" class="notify__btn--update">
                            </a>
                        </div>
                    </div>

                    <div class="notify__revenue">
                        <div class="revenue__heading">
                            <h3 class="revenue__heading--title">
                                Doanh thu trong tuần
                            </h3>
                        </div>
                        <div class="revenue__chart row ">
                            <div class="chart__content row">

                            <?php
                    // Dữ liệu mẫu về doanh số bán hàng theo tháng
                    $dataPoints = [];
                    foreach ($loadStatisticalDay as $data) {
                        $dataPoints[] = [
                            'day_of_week' => $data['day_of_week'],
                            'daily_sales' => $data['daily_sales']
                        ];
                    }

                    // Chuyển định dạng dữ liệu sang JSON để truyền vào JavaScript
                    $salesDataJSON = json_encode($dataPoints);
                    ?>
                    <canvas id="chart" class="revenue__chart"></canvas>

                    <script>
                    // Dữ liệu từ PHP
                    var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;

                    // Tạo biểu đồ Bar Chart
                    var ctx = document.getElementById('chart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: dataPoints.map(item => 'Tuần ' + item.day_of_week),
                            datasets: [{
                                label: 'Doanh số bán hàng',
                                data: dataPoints.map(item => item.daily_sales),
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
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
                                
                            </div>
                        </div>

                    </div>

                </section>

            </main>

        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>