<?php
require_once '../insert/header.php';
$link = mysqli_connect('cobra_database','root','','TechTovar') ;

$gadgetType = $_POST['type'];
$gadgetBrand = $_POST['brand'];
$gadgetModel = $_POST['model'];
$gadgetRam = $_POST['ram'];
$gadgetModel = $_POST['processor'];
$gadgetVideoCard = $_POST['videoCard'];
$gadgetScreen = $_POST['screen'];
$gadgetPrice = $_POST['price'];
$gadgetAmount = $_POST['amount'];

if ($_POST['type'] == 'pc') {
    $insertPc = "INSERT INTO pc(pcBrand, pcModel, pcRam, pcProcessor, pcVideocard, pcPrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '" . $_POST['ram'] . "', '" . $_POST['processor'] . "', '" . $_POST['videoCard'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "') ";
    if ($link->query($insertPc) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertPc . "<br>" . $link->error;
    }
}if ($_POST['type'] == 'laptop'){
    $insertLaptop = "INSERT INTO laptop(laptopBrand, laptopModel, laptopRam, laptopProcessor, laptopScreen, laptopVideocard, laptopPrice, type) 
VALUES ('".$_POST['brand']."', '".$_POST['model']."', '".$_POST['ram']."', '".$_POST['processor']."', '".$_POST['screen']."', '".$_POST['videoCard']."', '".$_POST['price']."', '".$_POST['type']."' ) ";
    if ($link->query($insertLaptop) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertLaptop . "<br>" . $link->error;
    }
}if ($_POST['type'] == 'phone') {
    $insertPhone = "INSERT INTO phone(phoneBrand, phoneModel, phoneRam, phoneProcessor, phoneScreen, phonePrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '".$_POST['ram']."', '" . $_POST['processor'] . "', '" . $_POST['screen'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "' ) ";
    if ($link->query($insertPhone) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertPhone . "<br>" . $link->error;
    }
}if ($_POST['type'] == 'ipad'){
    $insertIpad = "INSERT INTO ipad(ipadBrand, ipadModel, ipadRam, ipadProcessor, ipadScreen, ipadPrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '".$_POST['ram']."', '" . $_POST['processor'] . "', '" . $_POST['screen'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "') ";
    if ($link->query($insertIpad) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertIpad . "<br>" . $link->error;
    }
}if ($_POST['type'] == 'watch'){
    $insertWatch = "INSERT INTO watch(watchBrand, watchModel, watchRam, watchProcessor, watchScreen, watchPrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '".$_POST['ram']."', '" . $_POST['processor'] . "', '" . $_POST['screen'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "' ) ";
    if ($link->query($insertWatch) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertWatch . "<br>" . $link->error;
    }
}if ($_POST['type'] == 'pods'){
    $insertPods = "INSERT INTO pods(podsBrand, podsModel, podsPrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "') ";
    if ($link->query($insertPods) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertPods . "<br>" . $link->error;
    }}

$insertWarehouse = "INSERT INTO warehouse (productType, productAmount) VALUES ('" . $_POST['type'] . "','" . $_POST['amount'] . "')";

if ($link->query($insertWarehouse) === TRUE) {
?>
<div class="form-control" >
    <h1>Product added successfully</h1><br>

    <a href="http://tech.item/public/index.php">Back to home page</a><br>
    <a href="http://tech.item/public/addprod.php">Add new product</a>
</div>

<?php
}
$link->close();

?>