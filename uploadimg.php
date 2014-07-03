<html>
<head>
    <title>Welcome </title>
    <link rel="stylesheet" href="indexstyle.css" type="text/css">
</head>
<body>
<?php

session_start();

$username = "gokul";
$password = "stein238";
$host = "localhost";

$db = mysql_connect($host,$username,$password)
        or die("Database Connection Failed");

$tab = mysql_select_db("dtw2",$db)
        or die("Unexpected Problem. Please try again.");

$pic    = $_FILES['pic'];
$user   = $_SESSION['user'];
$picname = $_FILES['pic']['name'];
$picpath = "C:/xampp/htdocs/".$user.".png";

if(is_uploaded_file($_FILES['pic']['tmp_name']))
{
    move_uploaded_file($_FILES['pic']['tmp_name'], $picpath);
    echo("<h1> Your image has been successfully uploaded </h1>");
    echo("<h1> Go to <a href=\"./login.php\">Welcome</a> page</h1> ");

}
else
{
    $picpath ="C:/xampp/htdocs/def.png";
}


$query = "INSERT INTO pics VALUES
            ('$user',
             '$picpath')";

$sql = mysql_query($query);

if($sql)
{
    echo("Added to database");
}

else
{
    echo("Something is wrong, please try again.");
}
?>


</body>
</html>
