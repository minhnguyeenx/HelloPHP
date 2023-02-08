<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    // $ht = $mk = $xnmk = $ns = $email = "";
    $htEr = $mkEr = $xnmkEr = $nsEr = $emailEr = "";

    if (isset($_POST["sub"]))
    {
        $chk_str = '/[A-Za-z]/';
        $chk_pass = '/^(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[0-9a-zA-Z!@#$%^&*]{6,}$/';
        if (!preg_match($chk_str, $_POST['ht'])) {
            $htEr = "Họ tên phải là chữ";
        }
        if (!preg_match($chk_pass, $_POST['mk'])) {
            $mkEr = "Mật khẩu phải có tính đầy đủ";
        }
        if ($_POST['mk'] != $_POST['xnmk']) {
            $xnmkEr = 'Nhập sai mật khẩu';
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailEr = 'Email chưa đúng định dạng';
        }
    }
    ?>
    <form action="" method="post">
       <table>
        <tr>
            <td>Họ và tên: </td>
            <td><input type="text" name="ht"></td>
            <td><span><?php echo $htEr ?></span></td>
        </tr>
        <tr>
            <td>Mật khẩu: </td>
            <td><input type="text" name="mk"></td>
            <td><span><?php echo $mkEr ?></span></td>
        </tr>
        <tr>
            <td>Xác nhận mật khẩu: </td>
            <td><input type="text" name="xnmk"></td>
            <td><span><?php echo $xnmkEr ?></span></td>
        </tr>
        <tr>
            <td>Năm sinh:</td>
            <td><input type="date" name="ns"></td>
            <td><span><?php echo $nsEr ?></span></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="email"></td>
            <td><span><?php echo $emailEr ?></span></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit" name="sub">
            </td>
        </tr>
       </table>
    </form>
   
</body>
</html>