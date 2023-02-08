<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Bài 3: Bài toán tính tiền taxi với số km <br>
        • 1km đầu giá = 15000 đ <br>
        • từ 1km đến 5km giá = 12000 đ <br>
        • từ 6km trở đi giá = 9000 đ <br>
        • từ 140km trở đi được giảm 12 % tổng tiền <br>
        <br> <br>
        <table>
            <tr>
                <td>Nhập số km: </td>
                <td><input type="text" name="nhapkm"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    $km = 0;
    if(isset($_POST["nhapkm"])){
        $km = $_POST["nhapkm"];
    }
    function tinhtien($n){
        $sum = 0;
        if($n > 6){
            $sum += ($n - 6) * 9000;
            $n = 6;
        }
        if($n > 1){
            $sum += ($n - 1) * 12000;
            $n = 1;
        }
        if($n <= 1){
            $sum += $n * 15000;
        }
        return $sum;
    }
    echo "Tiền taxi: " . tinhtien($km);
    ?>
</body>
</html>