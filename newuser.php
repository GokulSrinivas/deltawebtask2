<html>
<head>
    <title>Welcome </title>
    <link rel="stylesheet" href="indexstyle.css" type="text/css">
</head>
<body>

<?php

$checker = $_POST['checker'];

if($checker != 'done')
{
    echo("not done");
    //header('Location: ./index.html');
}

$username = "gokul";
$password = "stein238";
$host = "localhost";

$db = mysql_connect($host,$username,$password)
        or die("Database Connection Failed");

$tab = mysql_select_db("dtw2",$db)
        or die("Unexpected Problem. Please try again.");

$fname  = $_POST['fname'];
$sname  = $_POST['sname'];
$user   = $_POST['user'];
$pass   = $_POST['pass1'];
$bday   = $_POST['bday'];
$sex    = $_POST['sex'];
$dept   = $_POST['dept'];

//last time verififcation

$query = "SELECT * FROM user where user='$user'";
$result = mysql_query($query);

if(mysql_num_rows($result)!=0)
{
    echo("Please Enter a Different Username");
    exit;
}

//adding the stuff
$query = "INSERT INTO user VALUES
            ('$fname',
             '$sname',
             '$user',
             '$pass',
             '$bday',
             '$sex',
             '$dept')";

$sql = mysql_query($query);

if($sql)
{
    echo("<h1>User successfully Created!! Please <a href=\"./index.html\">Login</a></h1>");
}
else
{
    echo("Something is wrong!! Please try Again :/");
}
?>

</body>
</html>
