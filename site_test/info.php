<?php
$campainName = "kpi-fb-ug-m-students_gachi_in_kpi-22.09.2021-1v";

$name_code_array = [];

$campainName = explode("-", $campainName);

//$name_code_array = array_combine($data, $campainName);


$compaineStructure = [
    0 => 'siteName',
    1 => 'socialNetworkName',
    2 => 'countryName',
    3 => 'deviceName',
    4 => 'creativeContent',
    5 => 'creationDate',
    6 => 'creativeContent'
    ];

foreach ($campainName as $key => $value) {
    if ($compaineStructure[$key] == 'creativeContent') {
        $campaigns[$compaineStructure[$key]][] = $value;
    } else {
        $campaigns[$compaineStructure[$key]] = $value;
    }
}

$campaigns['creativeContent'] = implode('-', $campaigns['creativeContent']);
$campaigns['creationDate'] = date("d.m.Y", strtotime($campaigns['creationDate']));

$ttt = fn($x) => fn($t) => $x * $t;
echo $ttt(2)(3). "<br>";


 $i = 1;
 while ( $i < 10 ){
     echo "$i - number" . "<br>";
     ++$i;
 }
 $j=1;
 do {
     echo "$j - znachenie " . "<br>";
     ++$j;
 }
 while ($j < 5);










$link = mysqli_connect('cobra_database','root','','test_db') ;
$searchName = $_POST['Search'];

if (isset($_POST['Search'])){
    if(trim($searchName) == "")
        echo "Enter name";
    else {
        $selectSearch = "SELECT id,companyName,budget,bid,control,siteName,socialNetworkName,countryName,deviceName,creativeContent,creationDate FROM dataCompany d JOIN campaigns c ON
d.id = c.idcompaigns WHERE companyName LIKE '%" . $searchName . "%'";
        $resultSearch = $link->query($selectSearch);
        if ($resultSearch->num_rows > 0) {

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
                    . "</td><td>"
                    . "<a href='updateDashboard.php?companyid=".$row["id"]."'>Edit</a></td></tr>";
            }

            echo "</tbody>";

        } else {
            echo "0 results";
        }
        $link->close();
    }

}

$sel = "SELECT id,companyName,budget,bid,control,siteName,socialNetworkName,countryName,deviceName,creativeContent,creationDate FROM dataCompany d JOIN campaigns c ON
d.id = c.idcompaigns ORDER BY creationDate DESC";
$result = $link -> query($sel);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

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
            . "</td><td>"
            . "<a href='updateDashboard.php?companyid=".$row["id"]."'>Edit</a></td></tr>";
    }

    echo "</tbody>";

} else { echo "0 results"; }
$link->close();







/*<h1 class="container mt-1">Change company details</h1><br>
<form action="updateDashboard.php.php" method="POST" class="container mt-1">

    <input type="text" name="campaign_name" value="<?= isset($_GET['companyid']) ? $resultSearchId['id'] : ''; ?>" placeholder="Enter your company name" class="form-control">
    <br>
    <input type="text" name="budget" value="<?= isset($_GET['companyid']) ? $resultSearchId['budget'] : ''; ?>" placeholder="Enter budget" class="form-control">
    <br>
    <input type="text" name="bid" value="<?= isset($_GET['companyid']) ? $resultSearchId['bid'] : ''; ?>"placeholder="Enter BID" class="form-control">
    <br>
    <input type="checkbox" name="control" value="<?= isset($_GET['companyid']) ? $resultSearchId['control'] : ''; ?>"> <label>Enable/Disable</label>
    <br>
    <input type="text" name="siteName" value="<?= isset($_GET['companyid']) ? $resultSearchId['siteName'] : ''; ?>"placeholder="Enter your site name" class="form-control">
    <br>
    <input type="text" name="socialNetworkName" value="<?= isset($_GET['companyid']) ? $resultSearchId['socialNetworkName'] : ''; ?>" placeholder="Enter your social network name" class="form-control">
    <br>
    <input type="text" name="countryName" value="<?= isset($_GET['companyid']) ? $resultSearchId['countryName'] : ''; ?>" placeholder="Enter your country name" class="form-control">
    <br>
    <input type="text" name="deviceName" value="<?= isset($_GET['companyid']) ? $resultSearchId['deviceName'] : ''; ?>" placeholder="Enter your device name" class="form-control">
    <br>
    <input type="text" name="creativeContent" value="<?= isset($_GET['companyid']) ? $resultSearchId['creativeContent'] : ''; ?>" placeholder="Enter your creative content" class="form-control">
    <br>
    <input type="text" name="creationDate" value="<?= isset($_GET['companyid']) ? $resultSearchId['creationDate'] : ''; ?>" placeholder="Enter your creation date" class="form-control">
    <br>
    <input type="submit" value="Update" class="btn btn-success">
    <input type="submit" value="Cancel" class="btn btn-danger">
    <br>
</form>*/