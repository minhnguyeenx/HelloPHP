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
    $text1 = 'The dialogue format makes it possible for ChatGPT to answer followup questions, admit its mistakes, challenge incorrect premises, and reject inappropriate requests. ChatGPT is a sibling model to InstructGPT, which is trained to follow an instruction in a prompt and provide a detailed response';
    if(isset($_POST['sub'])){
        $rep = $_POST['findWord'];
        $text1 = str_replace($rep, "<mark>" .$rep. "</mark>", $text1);
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nhập từ cần tìm: </td>
                <td><input type="text" name="findWord"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit" name="sub">
                </td>
            </tr>
        </table>
    </form>
    <p><?php echo $text1; ?></p>
</body>
</html>