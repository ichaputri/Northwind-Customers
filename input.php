<!DOCTYPE html>
<html>

<head>
    <title>Input Data Provinsi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">Input Data Customer</div>
            <div class="card-body">
                <form method="post" action="action_input.php">
                    <div class="form-group">
                        <label for="id_customer">ID Customer</label>
                        <input type="text" class="form-control" name="id_customer">
                    </div>
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control" name="company_name">
                    </div>
                    <div class="form-group">
                        <label for="contact_name">Contact Name</label>
                        <input type="text" class="form-control" name="contact_name">
                    </div>
                    <div class="form-group">
                        <label for="contact_tittle">Contact Title</label>
                        <input type="text" class="form-control" name="contact_title">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city">
                    </div>
                    <div class="form-group">
                        <label for="region">Region</label>
                        <input type="text" class="form-control" name="region">
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code">
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="fax">Fax</label>
                        <input type="text" class="form-control" name="fax">
                    </div>
                    <input type="submit" name = "submit" value="Submit" class='btn btn-primary stretched-link'/>
                </form>
            </div>
        </div>
    </div>
</body>

</html>