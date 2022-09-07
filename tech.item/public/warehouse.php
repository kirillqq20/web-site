<?php
require_once '../insert/header.php';
require_once '../func/addprodFunc.php';

?>
<div class="container">
    <h1>Product database</h1> <br>

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
                <input type="submit" value="Search" class="btn btn-success">
                <input type="submit" value="Back" class="btn btn-danger">
        </form>
</div>
</div><br>

<?php
$link = mysqli_connect('cobra_database','root','','TechTovar') ;
if (isset($_POST['gadget'])){
    if ($_POST['gadget'] == 'pc'){
?>
<div class="table-responsive">
    <table class="table table-striped" id="dataTable" >
        <thead>
        <tr>
            <th>id</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Ram</th>
            <th>Processor</th>
            <th>Video card</th>
            <th>Price</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Actions</th>
        </tr>
        </thead>

<?php
        $selectPc = "SELECT idPc, pcBrand, pcModel, pcRam, pcProcessor, pcVideocard, pcPrice, type, productAmount FROM pc p JOIN warehouse w ON
p.type = w.productType WHERE type LIKE '%" . $_POST['gadget'] . "%'";
        $resultSearchPc = $link->query($selectPc);
        if ($resultSearchPc->num_rows > 0) {

            while ($row = $resultSearchPc->fetch_assoc()) {

                echo "<tr><td>" . $row['idPc']
                    . "</td><td>" . $row['pcBrand']
                    . "</td><td>" . $row['pcModel']
                    . "</td><td>" . $row['pcRam']
                    . "</td><td>" . $row['pcProcessor']
                    . "</td><td>" . $row['pcVideocard']
                    . "</td><td>" . $row['pcPrice']
                    . "</td><td>" . $row['type']
                    . "</td><td>" . $row['productAmount']
                    . "</td><td>";
            }

            echo "</tbody>";

        } else {
            echo "0 results";
        }
$link->close();
}elseif ($_POST['gadget'] == 'laptop'){
?>
        <div class="table-responsive">
            <table class="table table-striped" id="dataTable" >
                <thead>
                <tr>
                    <th>id</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Ram</th>
                    <th>Processor</th>
                    <th>Screen</th>
                    <th>Video card</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
                </thead>

 <?php
        $selectLaptop = "SELECT idLaptop, laptopBrand, laptopModel, laptopRam, laptopProcessor, laptopScreen, laptopVideocard, laptopPrice, type, productAmount FROM laptop l JOIN warehouse w ON
l.type = w.productType WHERE type LIKE '%" . $_POST['gadget'] . "%'";
        $resultSearchLaptop = $link->query($selectLaptop);
        if ($resultSearchLaptop->num_rows > 0) {

            while ($row = $resultSearchLaptop->fetch_assoc()) {

                echo "<tr><td>" . $row['idLaptop']
                    . "</td><td>" . $row['laptopBrand']
                    . "</td><td>" . $row['laptopModel']
                    . "</td><td>" . $row['laptopRam']
                    . "</td><td>" . $row['laptopProcessor']
                    . "</td><td>" . $row['laptopVideocard']
                    . "</td><td>" . $row['laptopPrice']
                    . "</td><td>" . $row['laptopScreen']
                    . "</td><td>" . $row['type']
                    . "</td><td>" . $row['productAmount']
                    . "</td><td>";
            }

            echo "</tbody>";

        } else {
            echo "0 results";
        }
 $link->close();
}elseif ($_POST['gadget'] == 'phone'){
?>
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" >
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Ram</th>
                            <th>Processor</th>
                            <th>Screen</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <?php
        $selectPhone = "SELECT idPhone, phoneBrand, phoneModel, phoneRam, phoneProcessor, phoneScreen, phonePrice, type, productAmount FROM phone p JOIN warehouse w ON
p.type = w.productType WHERE type LIKE '%" . $_POST['gadget'] . "%'";
        $resultSearchPhone = $link->query($selectPhone);
        if ($resultSearchPhone->num_rows > 0) {

            while ($row = $resultSearchPhone->fetch_assoc()) {

                echo "<tr><td>" . $row['idPhone']
                    . "</td><td>" . $row['phoneBrand']
                    . "</td><td>" . $row['phoneModel']
                    . "</td><td>" . $row['phoneRam']
                    . "</td><td>" . $row['phoneProcessor']
                    . "</td><td>" . $row['phonePrice']
                    . "</td><td>" . $row['phoneScreen']
                    . "</td><td>" . $row['type']
                    . "</td><td>" . $row['productAmount']
                    . "</td><td>";
            }

            echo "</tbody>";

        } else {
            echo "0 results";
        }
        $link->close();
}elseif ($_POST['gadget'] == 'ipad'){
?>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" >
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Ram</th>
                                    <th>Processor</th>
                                    <th>Screen</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

 <?php
$selectIpad = "SELECT idIpad, ipadBrand, ipadModel, ipadRam, ipadProcessor, ipadScreen, ipadPrice, type, productAmount FROM ipad i JOIN warehouse w ON
i.type = w.productType WHERE type LIKE '%" . $_POST['gadget'] . "%'";
                                $resultSearchIpad = $link->query($selectIpad);
                                if ($resultSearchIpad->num_rows > 0) {

                                    while ($row = $resultSearchIpad->fetch_assoc()) {

                                        echo "<tr><td>" . $row['idIpad']
                                            . "</td><td>" . $row['ipadBrand']
                                            . "</td><td>" . $row['ipadModel']
                                            . "</td><td>" . $row['ipadRam']
                                            . "</td><td>" . $row['ipadProcessor']
                                            . "</td><td>" . $row['ipadPrice']
                                            . "</td><td>" . $row['ipadScreen']
                                            . "</td><td>" . $row['type']
                                            . "</td><td>" . $row['productAmount']
                                            . "</td><td>";
                                    }

                                    echo "</tbody>";

                                } else {
                                    echo "0 results";
                                }
                                $link->close();
 }elseif ($_POST['gadget'] == 'watch'){

?>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="dataTable" >
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Ram</th>
                                            <th>Processor</th>
                                            <th>Screen</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>

<?php
$selectWatch = "SELECT idWatch, watchBrand, watchModel, watchRam, watchProcessor, watchScreen, watchPrice, type, productAmount FROM watch wa JOIN warehouse w ON
wa.type = w.productType WHERE type LIKE '%" . $_POST['gadget'] . "%'";
                                        $resultSearchWatch = $link->query($selectWatch);
                                        if ($resultSearchWatch->num_rows > 0) {

                                            while ($row = $resultSearchWatch->fetch_assoc()) {

                                                echo "<tr><td>" . $row['idWatch']
                                                    . "</td><td>" . $row['watchBrand']
                                                    . "</td><td>" . $row['watchModel']
                                                    . "</td><td>" . $row['watchRam']
                                                    . "</td><td>" . $row['watchProcessor']
                                                    . "</td><td>" . $row['watchPrice']
                                                    . "</td><td>" . $row['watchScreen']
                                                    . "</td><td>" . $row['type']
                                                    . "</td><td>" . $row['productAmount']
                                                    . "</td><td>";
                                            }

                                            echo "</tbody>";

                                        } else {
                                            echo "0 results";
                                        }
                                        $link->close();
}elseif ($_POST['gadget'] == 'pods'){
?>
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="dataTable" >
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Brand</th>
                                                    <th>Model</th>
                                                    <th>Price</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>

<?php
$selectPods = "SELECT idPods, podsBrand, podsModel, podsPrice, type, productAmount FROM pods p JOIN warehouse w ON
p.type = w.productType WHERE type LIKE '%" . $_POST['gadget'] . "%'";
                                                $resultSearchPods = $link->query($selectPods);
                                                if ($resultSearchPods->num_rows > 0) {

                                                    while ($row = $resultSearchPods->fetch_assoc()) {

                                                        echo "<tr><td>" . $row['idPods']
                                                            . "</td><td>" . $row['podsBrand']
                                                            . "</td><td>" . $row['podsModel']
                                                            . "</td><td>" . $row['podsPrice']
                                                            . "</td><td>" . $row['type']
                                                            . "</td><td>" . $row['productAmount']
                                                            . "</td><td>";
                                                    }

                                                    echo "</tbody>";

                                                } else {
                                                    echo "0 results";
                                                }
                                                $link->close();
}}

?>














