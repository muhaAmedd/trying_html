<?php
$name=$_POST['name'];
$gender=$_POST['gender'];

if($gender=="male"){
    echo "Welcome Mr. $name";
}
else{
    echo "Welcome Ms. $name";
}


?>