<?php
require_once '../insert/header.php';
?>
<?php
require_once '../insert/footer.php';
?>



<?php
if (isset($_POST['gadget'])){
    if ($_POST['gadget'] == 'pods'){
        ?>
        <form action="addprodFunc.php" method="POST" class="container mt-1">
            <lable>Enter Brand:</lable>
            <input type="text" name="podsBrand" id="podsBrand" placeholder="Enter pods brand" class="form-control">
            <br>
            <lable>Enter model:</lable>
            <input type="text" name="podsModel" id="podsModel" placeholder="Enter pods model" class="form-control">
            <br>
            <lable>Enter price:</lable>
            <input type="text" name="podsPrice" id="podsPrice" placeholder="Enter pods price" class="form-control">
            <br>
            <input type="submit" value="Confirm" class="btn btn-success"><br>
        </form>
        <?php
    } else{
        ?>
        <form action="addprodFunc.php" method="POST" class="container mt-1">
            <lable>Enter Brand:</lable>
            <input type="text" name="Brand" id="brand" placeholder="Enter brand" class="form-control">
            <br>
            <lable>Enter model:</lable>
            <input type="text" name="Model" id="model" placeholder="Enter model" class="form-control">
            <br>
            <lable>Enter the amount of RAM:</lable>
            <select name="ram">
                <option value="0" selected = "selected"></option>
                <option value="2gb">2gb</option>
                <option value="4gb">4gb</option>
                <option value="8gb">8gb</option>
                <option value="16gb">16gb</option>
                <option value="32gb">32gb</option>
                <option value="64gb">64gb</option>
            </select>
            <br><br>
            <lable>Enter processor name:</lable>
            <input type="text" name="pcProcessor" id="processor" placeholder="Enter processor name" class="form-control">
            <br>
            <lable>Enter screen size:</lable>
            <input type="text" name="Screen" id="screen" placeholder="Enter screen size" class="form-control">
            <br>
            <lable>Enter price:</lable>
            <input type="text" name="Price" id="price" placeholder="Enter price" class="form-control">
            <br>
            <input type="submit" value="Confirm" class="btn btn-success"><br>
        </form>
        <?php
    }}
?>




