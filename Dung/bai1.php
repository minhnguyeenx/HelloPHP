<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" method="post">
        <table>
            <tr>
                <td>Nhap so nguyen n: </td>
                <td><input type="text" name="n"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <?php
        $n=0;
        if(isset($_POST['n'])){
            $n = $_POST['n'];
        }
        function giaiThua($a){
            $gt=1;
            for($i=1;$i<=$a;$i++){
                $gt*=$i;
            }
            return $gt;
        }
        
        function total($n){
            $total = 0;
            for($i=1;$i<=$n;$i++){
                $total+=giaiThua($i);
            }
            return $total;
        }
        echo "Tong giai thua: ".total($n)
    ?>
</body>
</html>