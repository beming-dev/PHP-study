<?php 
file_put_contents('./data/'.$_POST['title'], $_POST['description']);
// redirection : 다른 페이지로 보내기
header('Location:./index.php?id='.$_POST['title']);
?>