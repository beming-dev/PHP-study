<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum, dolor sit amet
    consectetur adipisicing elit. Optio,";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php 
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>

    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
    function basic(){
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
    }

    for($i=0; $i<3; $i++){
        basic();
    }
    ?>

    <h2>parameter &amp; argument</h2>
    <?php 
    function sum($left, $right){
        print($left + $right);
        print("<br>");
    }
    sum(2, 4);
    ?>

    <h2>return</h2>
    <?php 
    function sum2($left, $right){
        return $left + $right;
    }
    print(sum2(2, 4));
    file_put_contents('result.txt', sum2(2, 4))
    ?>

</body>
</html>