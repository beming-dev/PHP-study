<?php
function print_title(){
    if(isset($_GET['id'])){
        echo $_GET['id'];
    }else{
        echo 'WELCOME';
    }
}

function print_description(){
    if(isset($_GET['id'])){
        echo file_get_contents("./data/".$_GET['id']);   
    }else{
        echo "Hello PHP";
    }
}

function print_list(){
    $list = scandir('./data');
    $i=0;
    while($i<count($list)){
        if($list[$i] != '.' && $list[$i] != '..'){
            echo "<li><a href=\"PHP-study/index.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
        $i = $i + 1;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>
<body>
    <h1><a href="./index.php"></a>WEB</h1>
    <ol>
    <?php
    print_list();
    ?>
    </ol>
    <a href="create.php">create</a>
    <form action="create_process.php" method = "post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="Description" cols="30" rows="10"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>