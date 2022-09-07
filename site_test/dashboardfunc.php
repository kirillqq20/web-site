<?php
require_once 'header.php';
?>
<h1 class="jumbotron-fluid">Dashboard</h1><br>
<form action="dashboard.php" method="POST" id="searchform" class="form-inline">
    <div class="form-group">
        <input type="text" name="Search" id="Search" placeholder="Company name" class="form-control">
        <input type="submit" value="Search" class="btn btn-success"><br></form>
        <input type="submit" value="Clear" class="btn btn-danger">
</div>
<br>
<div class="table-responsive">
    <table class="table table-striped" id="dataTable" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Name of company</th>
            <th>Budget</th>
            <th>BID</th>
            <th>Control</th>
            <th>Name of site</th>
            <th>Social network name</th>
            <th>Name of Country</th>
            <th>Name of device</th>
            <th>Creative content</th>
            <th>Creation date</th>

        </tr>
        </thead>
        <?php
$link = mysqli_connect('cobra_database','root','','test_db') ;

$searchName = $_POST['Search'];
if(trim($searchName) == "")
    echo "Enter name";
else {
    $selectSearch = "SELECT id,companyName,budget,bid,control,siteName,socialNetworkName,countryName,deviceName,creativeContent,creationDate FROM dataCompany d JOIN campaigns c ON
d.id = c.idcompaigns WHERE companyName LIKE '%" . $searchName . "%'";
    $resultSearch = $link->query($selectSearch);
    if ($resultSearch->num_rows > 0) {

        // output data of each row
        while ($row = $resultSearch->fetch_assoc()) {

            echo "<tr><td>" . $row["id"]
                . "</td><td>" . $row["companyName"]
                . "</td><td>" . $row["budget"]
                . "</td><td>" . $row["bid"]
                . "</td><td>" . $row["control"]
                . "</td><td>" . $row["siteName"]
                . "</td><td>" . $row["socialNetworkName"]
                . "</td><td>" . $row["countryName"]
                . "</td><td>" . $row["deviceName"]
                . "</td><td>" . $row["creativeContent"]
                . "</td><td>" . $row["creationDate"]
                . "</td></tr>";
        }

        echo "</tbody>";

    } else {
        echo "0 results";
    }
    $link->close();
}

        require_once 'footer.php';

        ?>


