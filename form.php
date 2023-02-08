<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.error {
    color: #FF0000;
}
</style>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Khai bao mang error de chua loi
        $nameErr = $emailErr = $mkErr = $cfErr = "";
        $fullname = $email = $matKhau = $cf = "";
        //validate Ho ten
        if (empty($_POST['hoTen'])) {
            $nameErr = 'Họ tên không được để trống';
        } else {
            $fullname = test_input($_POST["hoTen"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
                $nameErr = 'Họ tên chỉ chập nhận chữ';
            }
        }
        //validate matkhau
        //validate email
        if (empty($_POST['matKhau'])) {
            $mkErr = 'Mật khẩu không được để trống';
        } else {
            $matKhau = test_input($_POST['matKhau']);
            if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/", $matKhau)) {
                $mkErr = 'Mật khẩu không đúng định dạng';
            }
        }
        //validate confirm mk
        if (empty($_POST['cf'])) {
            $cfErr = 'Nhập lại mật khẩu không được để trống';
        } else {
            $cf = test_input($_POST['cf']);
            if ($matKhau !== $cf) {
                $cfErr = 'Không giống mật khẩu';
            }
        }
        //validate email
        if (empty($_POST['email'])) {
            $emailErr = 'Email không được để trống';
        } else {
            $email = test_input($_POST['email']);
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr = 'Email không đúng định dạng';
            }
        }

        // echo '<pre>';
        // print_r($error);
        // echo '<pre>';
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        Name: <input type="text" name="hoTen">
        <span class="error">*
            <?php echo $nameErr; ?>
        </span>
        <br><br>
        Mật khẩu:<input type="text" name="matKhau">
        <span class="error">*
            <?php echo $mkErr; ?>
        </span>
        <br><br>
        Nhập lại mật khẩu: <input type="text" name="cf">
        <span class="error">*
            <?php echo $cfErr; ?>
        </span>
        <br><br>
        Email:<input type="text" name="email">
        <span class="error">*
            <?php echo $emailErr; ?>
        </span>
        <br><br>
        Ngày sinh:<input type="text" name="ngaySinh">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    echo "<h2>Thông tin bạn đã cung cấp:</h2>";
    echo $fullname;
    echo "<br>";

    echo $matKhau;
    echo "<br>";

    echo $cf;
    echo "<br>";

    echo $email;
    echo "<br>";
    ?>
</body>

</html>