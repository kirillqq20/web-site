<?php
require_once "header.php";
$link = mysqli_connect('cobra_database','root','','test_db') ;

if (isset($_GET['companyid'])) {
    $selectid = "SELECT id,companyName,budget,bid,control,siteName,socialNetworkName,countryName,deviceName,creativeContent,creationDate FROM dataCompany d JOIN campaigns c ON
d.id = c.idcompaigns WHERE id LIKE '%" . $_GET['companyid'] . "%'";
    $resultSearchId = mysqli_query($link, $selectid);
}
while ($row = $resultSearchId->fetch_assoc()) {
?>
<body>
<div class="container mt-1" >
    <form action="" method="POST" class="form-inline">
    <table  >
<h1 class="container mt-1">Change company details from <?php echo $row['companyName']; ?> </h1><br>
            <tr>

                <th> <p>Enter your company name</p></th>
                <td><input type="text" name="name" value="<?php echo $row['companyName']; ?>" placeholder="Enter your company name" class="form-control"></td>
            </tr>
            <tr>
                <th> <p>Enter budget</p></th>
                <td>
                    <input type="text" name="budget" value="<?php echo $row['budget']; ?>" class="form-control">
                </td>
            </tr>
            <tr>
                <th> <p>Enter BID</p></th>
                <td>
                    <input type="text" name="bid" value="<?php echo $row['bid']; ?>"  class="form-control" >
                </td>
            </tr>

            <tr>
                <th> <p>Enter if you want to control</p></th>
                <td>
                    <input type="text" name="control" value="<?php echo $row['control']; ?>"><label>Enable/Disable</label>
                </td>
            </tr>

            <tr>
                <th> <p> Enter your site name</p></th>
                <td>
                    <input type="text" name="siteName" value="<?php echo $row['siteName']; ?>" class="form-control">
                </td>
            </tr>

            <tr>
                <th> <p>Enter your social network name</p></th>
                <td>
                    <input type="text" name="socialNetworkName" value="<?php echo $row['socialNetworkName']; ?>" class="form-control" >
                </td>
            </tr>

            <tr>
                <th> <p>Enter your country name</p></th>
                <td>
                    <input type="text" name="countryName" value="<?php echo $row['countryName']; ?>" class="form-control">
                </td>
            </tr>

            <tr>
                <th> <p>Enter your device name</p></th>
                <td>
                    <input type="text" name="deviceName" value="<?php echo $row['deviceName']; ?>" class="form-control">
                </td>
            </tr>

            <tr>
                <th> <p>Enter your creative Content</p></th>
                <td>
                    <input type="text" name="creativeContent" value="<?php echo $row['creativeContent']; ?>" placeholder="Enter your creative Content" class="form-control">
                </td>
            </tr>

            <tr>
                <th> <p>Enter your creation date</p></th>
                <td>
                    <input type="text" name="creativeContent" value="<?php echo $row['creationDate']; ?>" class="form-control">
                </td>
            </tr>


    </table>

        <br>
          <input type="submit" value="Update" class="btn btn-success">
          <a href="dashboard.php"  type="submit" value="Back" class="btn btn-danger">Back</a>
        <br>
</div>
</form>
</body>


<?php

}

if (isset($_GET['companyid'])){
    if (isset($_POST['name'])){

        $updateData= "UPDATE dataCompany SET companyName = ('".$_POST['name']."'),
            budget = ('".$_POST['budget']."'),        
            bid =('".$_POST['bid']."'),
            control = ('".$_POST['control']."') WHERE id IN ('".$_GET['companyid']."') ";

        if ($link->query($updateData) === TRUE) {
        } else {
            echo "Error: " . $updateData . "<br>" . $link->error;
        }

        $updateCampaigns= "UPDATE campaigns SET siteName = ('".$_POST['siteName']."'),
                                                socialNetworkName = ('".$_POST['socialNetworkName']."'),
                                                countryName = ('". $_POST['countryName']."'),
                                                deviceName = ('".$_POST['deviceName']."'),
                                                creativeContent = ('".$_POST['creativeContent']."'),
                                                creationDate = ('".$_POST['creationDate']."') 
                                                WHERE idcompaigns IN ('".$_GET['companyid']."') ";

        if ($link->query($updateCampaigns) === TRUE) {
        } else {
            echo "Error: " . $updateCampaigns . "<br>" . $link->error;
        }

        $link->close();

    }
}


require_once 'footer.php';


