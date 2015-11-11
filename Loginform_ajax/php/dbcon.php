<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
// mo ket noi 
$servername = "localhost";
$username = "root";
$password="";
$dbname="giang";
// ket noi
$conn = new mysqli($servername,$username,$password,$dbname);
// kiem tra ket noi
if($conn->connect_error){
   die("connect faild".$conn->connect_error);
}

