<?php
require_once'header.php';

$link = mysqli_connect('cobra_database','root','','test_db') ;

$campaign_name = $_POST['campaign_name'];
$budget = $_POST['budget'];
$bid = $_POST['bid'];
$control = $_POST['control'];
$kod = $_POST['kod'];
if (isset($_POST['Confirm'])){

if(trim($campaign_name) == "")
    echo "Enter name";

elseif(trim($budget) == "")
    echo "Enter name";

elseif(trim($bid) == "")
    echo "Enter name";

elseif(trim($kod) == "")
    echo "Enter name";
else {

 $dataCompany = [
     'companyName' => $campaign_name,
     'budget' => $budget,
     'bid' => $bid,
     'control' => $control,
 ];

    $kodName = explode("-", $kod);
    $compaineStructure = [
        0 => 'siteName',
        1 => 'socialNetworkName',
        2 => 'countryName',
        3 => 'deviceName',
        4 => 'creativeContent',
        5 => 'creationDate',
        6 => 'creativeContent'
    ];

    foreach ($kodName as $key => $value) {
        if ($compaineStructure[$key] == 'creativeContent') {
            $campaigns[$compaineStructure[$key]][] = $value;
        } else {
            $campaigns[$compaineStructure[$key]] = $value;
        }
    }

    $campaigns['creativeContent'] = implode('-', $campaigns['creativeContent']);
    $campaigns['creationDate'] = date("d.m.Y", strtotime($campaigns['creationDate']));

    $insertCompaigns= "INSERT INTO campaigns(siteName,socialNetworkName,countryName,deviceName,creativeContent,creationDate) 
        VALUES ('".$campaigns['siteName']."', '".$campaigns['socialNetworkName']."', '".$campaigns['countryName']."',
         '".$campaigns['deviceName']."', '".$campaigns['creativeContent']."', '".$campaigns['creationDate']."')";

    if ($link->query($insertCompaigns) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertCompaigns . "<br>" . $link->error;
    }

    $insertData = "INSERT INTO dataCompany (companyName, budget, bid, control) VALUES ('".$dataCompany['companyName']."', '".$dataCompany['budget']."', '".$dataCompany['bid']."', '".$dataCompany['control']."')";

    if ($link->query($insertData) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertData . "<br>" . $link->error;
    }

    $link->close();
}
}



