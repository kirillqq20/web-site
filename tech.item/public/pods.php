<?php
require_once '../insert/header.php';
?>
<?php
require_once '../insert/footer.php';
?>

<?php
if ($_POST['type'] == 'pc'){
    $insertPc = "INSERT INTO pc (pcBrand, pcModel, pcRam, pcProcessor, pcVideocard, pcPrice, type) 
VALUES ('".$_POST['brand']."', '".$_POST['model']."', '".$_POST['ram']."', '".$_POST['processor']."', '".$_POST['videoCard']."', '".$_POST['price']."', '".$_POST['type']."') ";

}elseif ($_POST['type'] == 'laptop'){
    $insertLaptop = "INSERT INTO laptop (laptopBrand, laptopModel, laptopRam, laptopProcessor, laptopScreen, laptopVideocard, laptopPrice, type) 
VALUES ('".$_POST['brand']."', '".$_POST['model']."', '".$_POST['ram']."', '".$_POST['processor']."', '".$_POST['screen']."', '".$_POST['videoCard']."', '".$_POST['price']."', '".$_POST['type']."' ) ";

}elseif ($_POST['type'] == 'phone') {
    $insertPhone = "INSERT INTO phone (phoneBrand, phoneModel, phoneRam, phoneProcessor, phoneScreen, phonePrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '".$_POST['ram']."', '" . $_POST['processor'] . "', '" . $_POST['screen'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "' ) ";

}elseif ($_POST['type'] == 'ipad'){
    $insertIpad = "INSERT INTO ipad (ipadBrand, ipadModel, ipadRam, ipadProcessor, ipadScreen, ipadPrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '".$_POST['ram']."', '" . $_POST['processor'] . "', '" . $_POST['screen'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "') ";

}elseif ($_POST['type'] == 'watch'){
    $insertWatch = "INSERT INTO watch (watchBrand, watchModel, watchRam, watchProcessor, watchScreen, watchPrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '".$_POST['ram']."', '" . $_POST['processor'] . "', '" . $_POST['screen'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "' ) ";

}elseif ($_POST['type'] == 'pods'){
    $insertPods = "INSERT INTO pods (podsBrand, podsModel, podsPrice, type) 
VALUES ('" . $_POST['brand'] . "', '" . $_POST['model'] . "', '" . $_POST['price'] . "', '" . $_POST['type'] . "') ";
}
$insertWarehouse = "INSERT INTO warehouse (productType, productAmount) VALUES ('" . $_POST['type'] . "','" . $_POST['amount'] . "')";


?>

<?php
if ($link->query($insertWarehouse) === TRUE) {
    ?>
    <div class="container" >
        <h1>Product added successfully</h1> <br>
        <a href="http://index.php">Back to home page</a>
        <lable>        </lable>
        <a href="http://addprod.php">Add new product</a>
    </div>

    <?php
}
$link->close();

?>
