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
        Kiểm tra một số có phải là số nguyên tố hay không
        <br> <br>
        <table>
            <tr>
                <td>Nhập số nguyên tố: </td>
                <td><input type="text" name="nhapn"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
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
    function ngto($n){
        for($i = 2; $i*$i <= $n; $i++){
            if ($n % $i == 0)
                return false;
        }
        return true;
    }
    if($n <= 1){
        echo "$n không phải là số nguyên tố";
    }
    else{
        if(ngto($n)){
            echo "$n là số nguyên tố";
        }
        else{
            echo "$n không phải là số nguyên tố";
        }
    }
    ?>
</body>
</html>