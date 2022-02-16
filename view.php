<title>Table Customers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php

require_once "connect.php"; //menggunakan file connect.php

$sql = "select * from customers"; //query menampilkan all data dari tabel provinces
$result = $conn->query($sql); //menjalankan query $sql

//menampilkan data
if ($result->num_rows > 0) {

    //menampilkan data dalam format tabel

    echo '<h2 class="text-center"> Table Customer </h2> </br>';
    echo '<div class = "container-fluid">';
    echo "<a href='input.php' class='btn btn-primary stretched-link'>+Tambah Data</a>";
    echo '<br/> <br/>' ;
    echo '<table class = "table table-striped table-bordered" width="100%">';
    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th scope="col">Customer ID</th>';
    echo '<th scope="col">Company Name</th>';
    echo '<th scope="col">Contact Name</th>';
    echo '<th scope="col">Contact Tittle</th>';
    echo '<th scope="col">Address</th>';
    echo '<th scope="col">City</th>';
    echo '<th scope="col">Region</th>';
    echo '<th scope="col">Postal Code</th>';
    echo '<th scope="col">Country</th>';
    echo '<th scope="col">Phone</th>';
    echo '<th scope="col">Fax</th>';
    echo '<th scope="col">Action</th>';
    echo '</tr>';
    echo '</thead>';
    

    while ($row = $result->fetch_assoc()) {

        echo '<tbody>';
        echo '<tr>';
        echo "<td>" . $row['CustomerID'] . "</td>";
        echo "<td>" . $row['CompanyName'] . "</td>";
        echo "<td>" . $row['ContactName'] . "</td>";
        echo "<td>" . $row['ContactTitle'] . "</td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo "<td>" . $row['Region'] . "</td>";
        echo "<td>" . $row['PostalCode'] . "</td>";
        echo "<td>" . $row['Country'] . "</td>";
        echo "<td>" . $row['Phone'] . "</td>";
        echo "<td>" . $row['Fax'] . "</td>";
        ?>
        <td>
            <a href="edit_customers.php?CustomerID=<?php echo $row['CustomerID'];?>">Edit </a>
        </td>

        <?php
        echo '</tr>';
        echo '</tbody>';
    }
    echo '</table>';
    echo '</div>';
} else {
    echo "0 results";
}

$conn->close();
