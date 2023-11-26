<article class="revenue">
                        <div class="revenue__top row">
                            <div class="revenue__top--title row">
                                <h4>Khách hàng</h4>
                                <button class="btn btn-ml"><a href="#">Thêm </a></button>
                            </div>
                            
                            <select class="revenue__top--hendel">
                                <option value="1">Sắp xếp</option>
                                <option value="2">Tăng dần</option>
                                <option value="3">Giảm dần</option>
                            </select>
                        </div>
                        <table class="table__packgeNew">
                            <thead>
                                <tr>
                                    <td>Mã khách hàng</td>
                                    <td>Tên</td>
                                    <td>Số điện thoại</td>
                                    <td>Địa chỉ</td>
                                    <td>Vai trò</td>
                                    <td>Thao tác</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listUser as $list) {
                                    extract($list);
                                    echo '
                                    <tr>
                                    <td><a href="">'.$id_user.'</a></td>
                                    <td>'.$username.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$role_user.'</td>
                                    <td>
                                        <a href="" class="hendel-delete-act">Xóa</a>
                                    </td>
                                </tr>
                                    ';
                                }
                                ?>
                                
                                
                               
                            </tbody>
                        </table>
                    </article>