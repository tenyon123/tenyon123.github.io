<?php

 

$title = $_POST['title'];

$content = $_POST["content"];

 

file_put_contents("data.txt",$title.",".$content."\n",FILE_APPEND);

 

echo "<a href='test.html'>继续添加</a>";

echo "<a href='show.php'>查看</a>";

 

?>
