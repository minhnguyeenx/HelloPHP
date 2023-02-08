<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form get</title>
</head>
<body>
    <form name="nhap" action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>: <?php echo $_POST["fullname"] ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>: <?php echo $_POST["gender"] ?></td>
            </tr>
        </table>
    </form>
</body>
</html>