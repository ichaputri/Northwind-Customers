<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
include "connect.php";

if($_POST['submit'] == "Submit"){
    //Membaca inputan yang diketik didalam form
    $id_customer = $_POST['id_customer']; 
    $company_name = $_POST['company_name'];
    $contact_name = $_POST['contact_name'];
    $contact_title = $_POST['contact_title'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $postal_code = $_POST['postal_code'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];
    
    //membuat query sql
    $sql = "INSERT INTO customers (CustomerID,CompanyName,ContactName,ContactTitle,Address,City,Region,PostalCode,Country,Phone,Fax) VALUES ('$id_customer','$company_name','$contact_name','$contact_title','$address','$city','$region','$postal_code','$country','$phone','$fax')";

    //Jalankan query
    if($conn->query($sql)===TRUE){
        echo "Data berhasil ditambahkan!<br/>";
        echo "<a href='view.php' class='btn btn-primary stretched-link'>Tampilkan Data</a>";
    }else{
        echo "Error :".$sql. "<br/>" .$conn->error;
        echo "<a href='view.php' class='btn btn-primary stretched-link'>Tampilkan Data</a>";
    }

    $conn->close();
}
