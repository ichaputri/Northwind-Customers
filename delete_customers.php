<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php

require "connect.php";

$CustomerID = $_GET['CustomerID'];

$sql = "DELETE from customers WHERE CustomerID = '$CustomerID'";

$result = $conn->query($sql);

if($conn->query($sql)===TRUE){
    echo "Data berhasil dihapus!<br/>";
    echo "<a href='view.php' class='btn btn-primary stretched-link'>Tampilkan Data</a>";
}else{
    echo "Error :".$sql. "<br/>" .$conn->error;
    echo "<a href='view.php' class='btn btn-primary stretched-link'>Tampilkan Data</a>";
}

$conn->close();


?>