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
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $website = $comment = "";

    // $name = test_input($_POST["name"]);
    // $email = test_input($_POST["email"]);
    // $gender = test_input($_POST["gender"]);
    // $website = test_input($_POST["website"]);
    // $comment = test_input($_POST["comment"]);
    $error = true;
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $error = false;
      } else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters and white space allowed";
            $error = false;
        }
      }
      
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $error = false;
      } else {
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email fomat";
            $error = false;
        }
      }
        
      if (empty($_POST["website"])) {
        $website = "";
        $error = false;
      } else {
        $website = test_input($_POST["website"]);
      }
    
      if (empty($_POST["comment"])) {
        $comment = "";
        $error = false;
      } else {
        $comment = test_input($_POST["comment"]);
      }
    
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
        $error = false;
      } else {
        $gender = test_input($_POST["gender"]);
      }
    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($error == true){
        header('Location: thu.php?name= ' . $_POST["name"]);
        // header('Location: demo.php?hoten='.$_POST["hoten"].'&pass='. $_POST["password"] . '&email=' . $_POST["email"]
        //   . '&date=' . $_POST["date"]
        
    }
    ?>


    <form action="" method="post">
        Name: <input type="text" name="name">
        <span class="error"> * <?php echo $nameErr; ?></span> <br> <br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span> <br> <br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span> <br> <br>
        Comment: <input type="text" name="comment"> <br> <br>
        Gender :
        <input type="radio" name="gender" value="female" checked=true> Female
        <input type="radio" name="gender" value="female"> Male
        <input type="radio" name="gender" value="female"> Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br>
        <input type="submit" name="submit" value="Submit">

    </form>
    <?php
    /*
    echo "<h2>Your input</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    */
    ?>
</body>
</html>