<?php
$lang=$_POST['language'];
$array=["php","javascript","HTML"];
if(in_array($lang,$array))
    echo "Your favorite language is: ".$lang;

?>