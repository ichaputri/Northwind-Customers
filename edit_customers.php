<?php
require "connect.php";

$CustomerID = $_GET['CustomerID'];

$sql = "select * from customers where CustomerID = '$CustomerID' "; //query menampilkan satu data sesuai customer id
$result = $conn->query($sql); //menjalankan query $sql

//menampilkan satu data di dalam form
if ($result->num_rows > 0) {

?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Data Provinsi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">Update Data Customer</div>
            <div class="card-body">
                <form method="post" action="action_update.php">
                        <?php
                            while ($row = $result->fetch_assoc()) {
                        ?>
                    <div class="form-group">
                        <label for="id_customer">ID Customer</label>
                        <input type="text" class="form-control" name="id_customer" value="<?php echo $row['CustomerID'] ?>"readonly>
                    </div>
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control" name="company_name" value="<?php echo $row['CompanyName'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="contact_name">Contact Name</label>
                        <input type="text" class="form-control" name="contact_name" value="<?php echo $row['ContactName'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="contact_tittle">Contact Title</label>
                        <input type="text" class="form-control" name="contact_title" value="<?php echo $row['ContactTitle'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $row['Address'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" value="<?php echo $row['City'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="region">Region</label>
                        <input type="text" class="form-control" name="region" value="<?php echo $row['Region'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code" value="<?php echo $row['PostalCode'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" value="<?php echo $row['Country'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $row['Phone'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="fax">Fax</label>
                        <input type="text" class="form-control" name="fax" value="<?php echo $row['Fax'] ?>">
                    </div>
                    <input type="submit" name = "update" value="Submit" class='btn btn-primary stretched-link'/>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
                            }
    }else{
        echo "Maaf, data tidak ada";
    }
        $conn->close();
?>
