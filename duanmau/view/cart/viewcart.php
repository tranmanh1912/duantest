<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản Phẩm</th>
                        <th>Đơn Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Thao Tác</th>
                    </tr>
                    <?php
                    $tong=0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh=$img_path.$cart[2];
                        $ttien=$cart[3]*$cart[4];
                        $tong+=$ttien;
                        echo '<tr>
                                <td><img src="'.$hinh.'" alt="" height="80px"></td>
                                <td>'.$cart[1].'</td>
                                <td>'.$cart[3].'</td>
                                <td>'.$cart[4].'</td>
                                <td>'.$ttien.'</td>
                                <td><input type="button" value="Xóa"></td>
                            </tr>';
                    }
                    echo '
                        <tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>'.$tong.'</td>
                        </tr>
                        ';
                    ?>
                </table>
    
    
            </div>
        </div>
     <div class="row mb bill">
        <input type="submit" name="Đồng Ý Đặt Hàng" id=""><a href="index.php?act=delcart"><input type="button" value="Xóa Khỏi Giỏ Hàng"></a>
    </div>   
    </div>
    



    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>