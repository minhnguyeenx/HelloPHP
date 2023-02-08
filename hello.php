<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Minh minh page</h1>
    <?php
    // $color = "red";
    // $x = 5 + /*15*/10;
    // // echo "My color is " . $color . " :vvv" . "<br>";
    // // echo "Hello world";
    // echo $x;
    $txt = "W3Schools.com";
    echo "I love $txt!" . "<br>";

    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    print "//print";
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";

    print "<br>";
    $xx = 5985;
    var_dump($xx);

    //array
    $cars = array("car1", "car2", "car3");
    

    //strlen
    echo "<br>";
    echo strlen("minh minh");

    //str_word_count
    echo "<br>";
    echo str_word_count("minh minh 2 minh");

    //strrev
    echo "<br>";
    echo strrev("minh minh 2 minh");

    //strpos
    echo "<br>";
    echo strpos("minh", "kjk minh 22 minh");
    echo strpos("dsaklsaldj", "kjk minh 22 minh");

    //strrepalace
    echo "<br>";
    echo str_replace("abc", "xyz", "abc abc ab");

    //float ->int
    echo "<br>";
    $x1 = 1.566666;
    $x11 = intval($x1);
    echo $x11;

    //math
    echo "<br>";
    echo pi();
    echo "<br>";
    echo min(10, 20, -10);
    echo "<br>";
    echo abs(-1);
    echo "<br>";
    echo sqrt(64);
    echo "<br>";
    echo round(0.5);
    echo "<br>";
    echo rand(9, 10);

    //loop
    //foreach
    echo "<br>";
    $color1 = array("red", "blue", "green");
    foreach($color1 as $val){
        echo "$val <br>";
    }

    $age1 = array("minh" => "12", "minh2" => 13, "minh3" => "15");
    foreach($age1 as $ten => $tuoi){
        echo "$ten = $tuoi <br>";
    }

    //func
    function writeHello(){
        echo "hello world";
    }
    function writeBr(){
        echo "<br>";
    }
    writeBr();
    writeHello();

    //array
    $cars = array("Volvo", "BMW", "Toyota");
    writeBr();
    echo count($cars);
    writeBr();
    echo "I like " . $cars[0] . ", " . $cars[1];

    writeBr();
    $arrlen = count($cars);
    for($i = 0; $i < $arrlen; $i++){
        echo $cars[$i];
        writeBr();
    }

    writeBr();
    //$age1 = array("minh" => "12", "minh2" => 13, "minh3" => "15");
    foreach($age1 as $ten => $tuoi){
        echo "Ten: " . $ten . " ,Tuoi: " . $tuoi;
        writeBr();
    }

    //Sắp xếp tăng dần
    //giảm dần rsort()
    sort($cars);
    for($i = 0; $i < $arrlen; $i++){
        echo $cars[$i];
        writeBr();
    }

    ?>
</body>
</html>