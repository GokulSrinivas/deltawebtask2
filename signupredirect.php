<?php

$option = $_POST['checker'];

if($option == 'done')
{
    header('Location: ./newuser.php');
}

else
{
    header('Location: ./index.html');
}

?>
