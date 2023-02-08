<html>

<head>
  <title>Tìm kiếm xâu ký tự</title>
</head>

<body>
  <?php

  $text = "Xin chào, tôi tên là OpenAI";
  if (isset($_POST["sub"])) {
    $str = $_POST["search_text"];
    // Tìm vị trí xuất hiện của xâu ký tự cần tìm
    $pos = strpos($text, $str);
    echo "<br>";
    // Nếu tìm thấy xâu ký tự
    if ($pos !== false) {
      // Bôi vàng ký tự tìm được
      $text = substr_replace($text, "<mark>" . $str . "</mark>", $pos, strlen($str));
      // In ra kết quả
      // echo $highlighted;
    } else {
      echo "Không tìm thấy xâu ký tự.";
    }
  }
  ?>

  <p><?php echo $text; ?></p>
  <form action="" method="post">
    Nhập vào xâu ký tự: <input type="text" name="search_text"><br><br>
    <input type="submit" value="Tìm kiếm" name="sub">
  </form>
</body>

</html>