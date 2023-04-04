<?php

$content = file_get_contents("data.txt");

 

//echo $content;

echo str_replace("\n", "<br>", $content);

?>
