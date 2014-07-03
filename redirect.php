
<?php

$option = $_POST['opt'];

if($option == 'Log In')
{
    session_start();

    $user = $_POST['user'];
    $sis = $_POST['pass'];

    $_SESSION['user'] = $user;
    $_SESSION['pass'] = $sis;

    header('Location: ./login.php');

}
else if( $option == 'Sign Up')
{
    header('Location: ./signup.php');
}
else
{
    header('Location: ./index.html');
}


?>

</body>
</html>
