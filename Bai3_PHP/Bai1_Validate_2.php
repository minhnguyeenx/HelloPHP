<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $password = $confirm = $email = $date ='';
    $nameError = $passwordError = $confirmError = $emailError = $dateError = "";
    if(isset($_POST['sub'])){
        $checkName = '/[a-zA-Z]/';
        $checkPassword = '/^(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[0-9a-zA-Z!@#$%^&*]{6,}$/';
        // if(!preg_match($checkName, $_POST['name'])){
        //     $nameError = "Họ tên chỉ bao gồm chữ cái";
        // }
        // if(!preg_match($checkPassword, $_POST['password'])){
        //     $passwordError = "Mật khẩu phải có tính đầy đủ (gồm chữ cái, chữ số, ký tự đặc biệt và tối thiểu 6 ký tự)";
        // }
        // if($_POST['password'] != $_POST['confirm']){
        //     $confirmError = "Nhập sai mật khẩu";
        // }
        // if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        //     $emailError = "Nhập sai định dạng email";
        // }

        if(empty($_POST['name'])){
            $nameError = "Vui lòng nhập tên";
        } else{
            if(!preg_match($checkName, $_POST['name'])){
                $nameError = "Họ tên chỉ bao gồm chữ cái";
            }
        }
        if(empty($_POST['password'])){
            $passwordError = "Vui lòng nhập mật khẩu";
        } else{
            if(!preg_match($checkPassword, $_POST['password'])){
                $passwordError = "Mật khẩu phải có tính đầy đủ (gồm chữ cái, chữ số, ký tự đặc biệt và tối thiểu 6 ký tự)";
            }
        }
        if(empty($_POST['confirm'])){
            $confirmError = "Vui lòng nhập lại mật khẩu";
        } else{
            if($_POST['password'] != $_POST['confirm']){
                $confirmError = "Nhập sai mật khẩu";
            }
        }
        if(empty($_POST['email'])){
            $emailError = "Vui lòng nhập email";
        } else{
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $emailError = "Nhập sai định dạng email";
            }
        }
        if(empty($_POST['date'])){
            $dateError = "Vui lòng chọn ngày";
        }else{
            $date = $_POST['date'];
        }
        
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name="name"></td>
                <td><span><?php echo $nameError ?></span></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="text" name="password"></td>
                <td><span><?php echo $passwordError ?></span></td>
            </tr>
            <tr>
                <td>Xác nhận mật khẩu</td>
                <td><input type="text" name="confirm"></td>
                <td><span><?php echo $confirmError ?></span></td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="date" name="date"></td>
                <td><span><?php echo $dateError ?></span></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
                <td><span><?php echo $emailError ?></span></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="sub" value="Submit">
                </td>
            </tr>
        </table>

    </form>
    <?php 
    echo '<br>';
    echo '<h1>Thông tin vừa nhập</h1>';
    echo $date;
    ?>
</body>
</html>