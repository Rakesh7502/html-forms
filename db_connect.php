<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$server="localhost";
$username="root";
$password="";
$db="student";
$conn = mysquli_connect($server,$username,$password,$db);
if(!conn)
{
    echo "unsucessfull connection";
}
else{
    echo "connected sucessfully";

}
?>
    
</body>
</html>
