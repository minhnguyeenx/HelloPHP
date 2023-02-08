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
        Bài 1:Tính tổng : S = 1 + 1*2 + 1*2*3 + 1*2*3*4 + ... + 1*2*3*4*...*n
        <table>
            <tr>
                <td>Nhập n</td>
                <td><input type="text" name="nhapn"></td>
            </tr>
            <tr>
                <td colspan="2" >
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    $n = 0;
    if(isset($_POST["nhapn"])){
        $n = $_POST["nhapn"];
    }
    function gthua($x){
        $gt = 1;
        for($i = 1; $i <= $x; $i++){
            $gt *= $i;
        }
        return $gt;
    }
    function sum($x){
        $s = 0;
        for($i = 1; $i <= $x; $i++){
            $s += gthua($i);
        }
        return $s;
    }
    echo "Tong giai thua: " . sum($n);
    ?>
</body>
</html>