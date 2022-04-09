<!DOCTYPE html>
<html>
<head>
<title>addform</title>
<style>
body{
	background-color:blue;
}
h4{
	text-align:center;
}
</style>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Yummyfoods";
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn-> connect_error)
{
die("connection failed" .$conn->connect_error);
}
echo "connected successfully";
//close the connection
//$conn->close();
/*
//create databases
$sql = "create database Yummyfoods";
if($conn->query($sql)===TRUE){
echo "database created successfully";
}
else{
	echo "error creating database:".$conn->error;
}

//CREATING TABLES
$sql="create table contacts(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
mobile varchar(50),
message VARCHAR(50)
 )";

if($conn->query($sql)===TRUE){
	echo "table created successfully";
}
else{
echo "error creating table".$conn->error;
}

if($conn->query($sql)===TRUE){
echo "data inserted";
}
else{
echo"error inserting data";
}
*/
//Insert values into the database

mysqli_select_db($conn,"Yummyfoods");
$sql = "INSERT INTO contacts(name,email,mobile,message) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[message]')";
if(!mysqli_query($conn,$sql))
{
    die("error".mysqli_error($conn));
  
}
else
{
	 echo "<div style='margin:20% 30%;'><h4>we will get back to you soon</h4></div>";
        header('Refresh:2; URL=home.php');
}

?>
</body>
</html>