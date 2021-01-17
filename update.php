<?php
require_once('lib/print.php');
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
    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?php
    print_list();
    ?>
    </ol>
    <a href="create.php">create</a>
    <?php 
    if(isset($_GET['id'])){
        echo "<a href=\"update.php?id=".$_GET['id']."\">update</a>";
    }
    ?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
    print_description();
    ?>

    <form action="update_process.php" method = "post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
            <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
        </p>
        <p>
            <textarea name="description" placeholder="Description" cols="30" rows="10"><?php print_description() ?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>

</body>
</html>