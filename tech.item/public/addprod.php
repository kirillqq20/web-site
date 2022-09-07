<?php
ini_set('display_errors', 'Off');
require_once '../insert/header.php';
require_once '../func/addprodFunc.php';
?>

<div class="container" >
    <h1>Here you can add a product to sell</h1> <br>
</div>
<div class="container">
    <form  method="POST">
        <lable>Select device type :</lable>
        <div class="input-group">
            <select class="form-select" name="gadget">
                <option value="0" selected = "selected"></option>
                <option value="pc">pc</option>
                <option value="laptop">laptop</option>
                <option value="phone">phone</option>
                <option value="ipad">ipad</option>
                <option value="watch">watch</option>
                <option value="pods">pods</option>
            </select>
            <button  class="btn btn-outline-secondary"  type="submit">Add</button>
    </form>
</div><br>

<?php
$gadgetType = $_POST['gadget'];
if ($_POST['gadget'] == 'pc'){
    ?>
    <form action="../func/addprodFunc.php" method="POST" class="container mt-1">
        <lable>Enter Brand:</lable>
        <select name="brand">
            <option value="0" selected = "selected"></option>
            <option value="Apple">Apple</option>
            <option value="HP">HP</option>
            <option value="Huawei">Huawei</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="Asus">Asus</option>
            <option value="LG">LG</option>
            <option value="Aser">Aser</option>
        </select>
        <br><br>
        <lable>Enter model:</lable>
        <input type="text" name="model" id="model" placeholder="Enter model" class="form-control" >
        <br>
        <lable>Enter type:</lable>
        <input type="text" name="type" id="type" value="<?php echo $gadgetType; ?>" placeholder="Enter type" class="form-control" >
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
        <select name="processor">
            <option value="0" selected = "selected"></option>
            <option value="Intel core i3">Intel core i3</option>
            <option value="Intel core i5">Intel core i5</option>
            <option value="Intel core i7">Intel core i7</option>
            <option value="AMD Ryzen">AMD Ryzen</option>
            <option value="Apple M1">Apple M1</option>
        </select>
        <br><br>
        <lable>Enter video card:</lable>
        <select name="videoCard">
            <option value="0" selected = "selected"></option>
            <option value="Intel HD Graphics">Intel HD Graphics</option>
            <option value="Nvidia Geforce">Nvidia Geforce</option>
            <option value="Radeon Vega">Radeon Vega</option>
            <option value="Apple M1">Apple M1</option>
        </select>
        <br><br>
        <lable>Enter amount:</lable>
        <input type="text" name="amount" id="amount" placeholder="Enter pc amount" class="form-control">
        <br>
        <lable>Enter price:</lable>
        <input type="text" name="price" id="price" placeholder="Enter price" class="form-control">
        <br>
        <input type="submit" value="Confirm" class="btn btn-success"><br>
    </form>
    <?php
} elseif ($_POST['gadget'] == 'laptop'){
    ?>
    <form action="../func/addprodFunc.php" method="POST" class="container mt-1">
        <lable>Enter Brand:</lable>
        <select name="brand">
            <option value="0" selected = "selected"></option>
            <option value="Apple">Apple</option>
            <option value="HP">HP</option>
            <option value="Huawei">Huawei</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="Asus">Asus</option>
            <option value="LG">LG</option>
            <option value="Aser">Aser</option>
            <option value="Sony">Sony</option>
        </select>
        <br><br>
        <lable>Enter model:</lable>
        <input type="text" name="model" id="model" placeholder="Enter model" class="form-control">
        <br>
        <lable>Enter type:</lable>
        <input type="text" name="type" id="type" value="<?php echo $gadgetType; ?>" placeholder="Enter type" class="form-control" >
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
        <select name="processor">
            <option value="0" selected = "selected"></option>
            <option value="Intel core i3">Intel core i3</option>
            <option value="Intel core i5">Intel core i5</option>
            <option value="Intel core i7">Intel core i7</option>
            <option value="AMD Ryzen">AMD Ryzen</option>
            <option value="Apple M1">Apple M1</option>
        </select>
        <br> <br>
        <lable>Enter screen size:</lable>
        <select name="screen">
            <option value="0" selected = "selected"></option>
            <option value="13.3 inches">13.3 inches</option>
            <option value="14 inches">14 inches</option>
            <option value="15.6 inches">15.6 inches</option>
            <option value="17 inches">17 inches</option>
            <option value="19 inches">19 inches</option>
        </select>
        <br><br>
        <lable>Enter video card:</lable>
        <select name="videoCard">
            <option value="0" selected = "selected"></option>
            <option value="Intel HD Graphics">Intel HD Graphics</option>
            <option value="Nvidia Geforce">Nvidia Geforce</option>
            <option value="Radeon Vega">Radeon Vega</option>
            <option value="Apple M1">Apple M1</option>
        </select>
        <br><br>
        <lable>Enter amount:</lable>
        <input type="text" name="amount" id="amount" placeholder="Enter laptop amount" class="form-control">
        <br>
        <lable>Enter price:</lable>
        <input type="text" name="price" id="price" placeholder="Enter price" class="form-control">
        <br>
        <input type="submit" value="Confirm" class="btn btn-success"><br>
    </form>
    <?php
}elseif ($_POST['gadget'] == 'phone'){
    ?>
    <form action="../func/addprodFunc.php" method="POST" class="container mt-1">
        <lable>Enter Brand:</lable>
        <select name="brand">
            <option value="0" selected = "selected"></option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="Huawei">Huawei</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="Nokia">Nokia</option>
            <option value="LG">LG</option>
            <option value="OPPO">OPPO</option>
            <option value="Sony">Sony</option>
        </select>
        <br><br>
        <lable>Enter model:</lable>
        <input type="text" name="model" id="model" placeholder="Enter model" class="form-control">
        <br>
        <lable>Enter type:</lable>
        <input type="text" name="type" id="type" value="<?php echo $gadgetType; ?>" placeholder="Enter type" class="form-control" >
        <br>
        <lable>Enter the amount of RAM:</lable>
        <select name="ram">
            <option value="0" selected = "selected"></option>
            <option value="2gb">2gb</option>
            <option value="3gb">3gb</option>
            <option value="4gb">4gb</option>
            <option value="6gb">6gb</option>
            <option value="8gb">8gb</option>
        </select>
        <br><br>
        <lable>Enter processor name:</lable>
        <select name="processor">
            <option value="0" selected = "selected"></option>
            <option value="Google Tensor">Google Tensor</option>
            <option value="Exynos">Exynos</option>
            <option value="Snapdragon">Snapdragon</option>
            <option value="Dimensity">Dimensity 9000</option>
            <option value="Apple Bionic">Apple Bionic</option>
            <option value="Kirin">Kirin</option>
        </select>
        <br> <br>
        <lable>Enter screen size:</lable>
        <select name="screen">
            <option value="0" selected = "selected"></option>
            <option value="4.7 inches">4.7 inches</option>
            <option value="5 inches">5 inches</option>
            <option value="5.3 inches">5.3 inches</option>
            <option value="5.5 inches">5.5 inches</option>
            <option value="5.7 inches">5.7 inches</option>
            <option value="6 inches">6 inches</option>
            <option value="6.5 inches">6.5 inches</option>
        </select>
        <br><br>
        <lable>Enter amount:</lable>
        <input type="text" name="amount" id="amount" placeholder="Enter phone amount" class="form-control">
        <br>
        <lable>Enter price:</lable>
        <input type="text" name="price" id="price" placeholder="Enter price" class="form-control">
        <br>
        <input type="submit" value="Confirm" class="btn btn-success"><br>
    </form>
    <?php
}elseif ($_POST['gadget'] == 'ipad'){
    ?>
    <form action="../func/addprodFunc.php" method="POST" class="container mt-1">
        <lable>Enter Brand:</lable>
        <select name="brand">
            <option value="0" selected = "selected"></option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="Huawei">Huawei</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="LG">LG</option>
            <option value="OPPO">OPPO</option>
            <option value="Lenovo">Lenovo</option>
            <option value="Dell">Dell</option>
            <option value="Cube">Cube</option>
            <option value="Bravis">Bravis</option>
        </select>
        <br><br>
        <lable>Enter model:</lable>
        <input type="text" name="model" id="model" placeholder="Enter model" class="form-control">
        <br>
        <lable>Enter type:</lable>
        <input type="text" name="type" id="type" value="<?php echo $gadgetType; ?>" placeholder="Enter type" class="form-control" >
        <br>
        <lable>Enter the amount of RAM:</lable>
        <select name="ram">
            <option value="0" selected = "selected"></option>
            <option value="2gb">2gb</option>
            <option value="3gb">3gb</option>
            <option value="4gb">4gb</option>
            <option value="6gb">6gb</option>
            <option value="8gb">8gb</option>
            <option value="16gb">16gb</option>
            <option value="32gb">32gb</option>
        </select>
        <br><br>
        <lable>Enter processor name:</lable>
        <select name="processor">
            <option value="0" selected = "selected"></option>
            <option value="Google Tensor">Google Tensor</option>
            <option value="Exynos">Exynos</option>
            <option value="Snapdragon">Snapdragon</option>
            <option value="Dimensity">Dimensity 9000</option>
            <option value="Apple Bionic">Apple Bionic</option>
            <option value="Kirin">Kirin</option>
        </select>
        <br> <br>
        <lable>Enter screen size:</lable>
        <select name="screen">
            <option value="0" selected = "selected"></option>
            <option value="8 inches">8 inches</option>
            <option value="9 inches">9 inches</option>
            <option value="11 inches">11 inches</option>
            <option value="13.3 inches">13.3 inches</option>
            <option value="14 inches">14 inches</option>
        </select>
        <br><br>
        <lable>Enter amount:</lable>
        <input type="text" name="amount" id="amount" placeholder="Enter ipad amount" class="form-control">
        <br>
        <lable>Enter price:</lable>
        <input type="text" name="price" id="price" placeholder="Enter price" class="form-control">
        <br>
        <input type="submit" value="Confirm" class="btn btn-success"><br>
    </form>
    <?php
}elseif ($_POST['gadget'] == 'watch'){
    ?>
    <form action="../func/addprodFunc.php" method="POST" class="container mt-1">
        <lable>Enter Brand:</lable>
        <select name="brand">
            <option value="0" selected = "selected"></option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="Huawei">Huawei</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="LG">LG</option>
        </select>
        <br><br>
        <lable>Enter model:</lable>
        <input type="text" name="model" id="model" placeholder="Enter model" class="form-control">
        <br>
        <lable>Enter type:</lable>
        <input type="text" name="type" id="type" value="<?php echo $gadgetType; ?>" placeholder="Enter type" class="form-control" >
        <br>
        <lable>Enter the amount of RAM:</lable>
        <select name="ram">
            <option value="0" selected = "selected"></option>
            <option value="1gb">1gb</option>
            <option value="2gb">2gb</option>
            <option value="3gb">3gb</option>
            <option value="4gb">4gb</option>
        </select>
        <br><br>
        <lable>Enter processor name:</lable>
        <select name="processor">
            <option value="0" selected = "selected"></option>
            <option value="Google Tensor">Google Tensor</option>
            <option value="Exynos">Exynos</option>
            <option value="Snapdragon">Snapdragon</option>
            <option value="Dimensity">Dimensity 9000</option>
            <option value="Apple Bionic">Apple Bionic</option>
            <option value="Kirin">Kirin</option>
        </select>
        <br> <br>
        <lable>Enter screen size:</lable>
        <select name="screen">
            <option value="0" selected = "selected"></option>
            <option value="1 inches">1 inches</option>
            <option value="1.2 inches">1.2 inches</option>
            <option value="1.4 inches">1.4 inches</option>
            <option value="1.5 inches">1.5 inches</option>
        </select>
        <br><br>
        <lable>Enter amount:</lable>
        <input type="text" name="amount" id="amount" placeholder="Enter watch amount" class="form-control">
        <br>
        <lable>Enter price:</lable>
        <input type="text" name="price" id="price" placeholder="Enter price" class="form-control">
        <br>
        <input type="submit" value="Confirm" class="btn btn-success"><br>
    </form>
    <?php
}elseif ($_POST['gadget'] == 'pods'){
    ?>
    <form action="../func/addprodFunc.php" method="POST" class="container mt-1">
        <lable>Enter Brand:</lable>
        <select name="brand">
            <option value="0" selected = "selected"></option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="Huawei">Huawei</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="LG">LG</option>
            <option value="OPPO">OPPO</option>
        </select>
        <br><br>
        <lable>Enter model:</lable>
        <input type="text" name="model" id="model" placeholder="Enter pods model" class="form-control">
        <br>
        <lable>Enter type:</lable>
        <input type="text" name="type" id="type" value="<?php echo $gadgetType; ?>" placeholder="Enter type" class="form-control" >
        <br>
        <lable>Enter amount:</lable>
        <input type="text" name="amount" id="amount" placeholder="Enter pods amount" class="form-control">
        <br>
        <lable>Enter price:</lable>
        <input type="text" name="price" id="price" placeholder="Enter pods price" class="form-control">
        <br>
        <input type="submit" value="Confirm" class="btn btn-success"><br>
    </form>
    <?php
}
?>






