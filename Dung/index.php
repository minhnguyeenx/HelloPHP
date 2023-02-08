<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>

  <?php
  $nameErr = $passErr = $passConErr = $mailErr = "";
  $error = true;
  if (isset($_POST['sub'])) {
    $checkString = '/[A-Za-z]/';
    $checkPassword = '/^(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[0-9a-zA-Z!@#$%^&*]{6,}$/';
    $checkEmail = '/^\\S+@\\S+\\.\\S+$/';

    if (preg_match($checkString, $_POST["hoten"]) == false) {
      $nameErr =  "Họ tên phải là chữ";
       $error = false;
    } 
    if (preg_match($checkPassword, $_POST["password"]) == false) {
      $passErr = "Mật khẩu phải gồm chữ cái, chữ số, ký tự đặc biệt và tối thiểu 6 ký tự";
      $error = false;

    } 
    if ($_POST["password"] != $_POST["passwordConfirm"]) {
      $passConErr = "Mật khẩu và xác nhận mật khẩu phải giống nhau";
      $error = false;

    } 
    if (preg_match($checkEmail, $_POST["email"]) == false) {
      $mailErr = "Email phải đúng định dạng";
      $error = false;
    }
    function alert($msg)
    {
      echo "<script type='text/javascript'>alert('$msg');</script>";
    }
   if($error==true) {
    header('Location: demo.php?hoten='.$_POST["hoten"].'&pass='. $_POST["password"] . '&email=' . $_POST["email"]
          . '&date=' . $_POST["date"]
    ); 
    }
  }
  ?>

  <form action="" method="POST">
    <table>
      <tr>
        <td>Họ tên: </td>
        <td><input type="text" name="hoten"></td>
        <td> <span class="error"> <?php echo $nameErr; ?></span></td>
      </tr>
      <tr>
        <td>Mật khẩu: </td>
        <td><input type="text" name="password"></td>
        <td> <span class="error"> <?php echo $passErr; ?></span></td>
      </tr>
      <tr>
        <td>Xác nhận lại mật khẩu: </td>
        <td><input type="text" name="passwordConfirm"></td>
        <td> <span class="error"> <?php echo $passConErr; ?></span></td>
      </tr>
      <tr>
        <td>Ngày sinh: </td>
        <td><input type="date" name="date"></td>
      </tr>
      <tr>
        <td>Email: </td>
        <td><input type="text" name="email"></td>
        <td> <span class="error"> <?php echo $mailErr; ?></span></td>
      </tr>
      <tr>
        <td colspan="2">
          <input style="margin-left: 100px; margin-top: 20px" type="submit" value="Kiểm tra" name="sub">
        </td>
      </tr>
    </table>
  </form>


</body>

</html>