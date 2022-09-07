<?php
require_once '../insert/header.php';
?>

    <div class="row">
        <div class="col-md-2">
            <form action="" method="post">
                <nav class="sidebar-nav">
                    <div class="p-1 bg-danger text-white"> <center> <header class="nav-link h4 px-3 text-dark">Dashboard menu</header></center></div>
                    <nav class="sidebar-nav">
                        <div class="p-2 bg-danger text-white"><center><button type="submit" aria-pressed="true" name="inputFunds" class="btn btn-danger">Account replenishment data</button></center></div>
                        <div class="p-2 bg-danger text-white"><center><button type="submit" aria-pressed="true" name="outputFunds" class="btn btn-danger">Account withdrawal details</button></center></div>
                        <div class="p-2 bg-danger text-white"><center><button type="submit" aria-pressed="true" name="buyCoin" class="btn btn-danger">Coin Purchase Data</button></center></div>
                        <div class="p-2 bg-danger text-white"><center><button type="submit" aria-pressed="true" name="sellCoin" class="btn btn-danger">Coin sales data</button></center></div>
                        <div class="p-2 bg-danger text-white"><center><button type="submit" aria-pressed="true" name="ok" class="btn btn-danger">Account replenishment data</button></center></div>

                    </nav>
            </form>
        </div>
<?php
$link = mysqli_connect('cobra_database', 'root', '', 'krypto_db');
if (isset($_POST['inputFunds'])) {
    echo '<div class="col-md-8"> 
<div><center><h1>Summary of funds invested in the wallet</h1></center></div>
    <div class="table-responsive">
       <table class="table table-striped" id="dataTable" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Currency</th>
                <th>Amount refill</th>
                <th>Date refill</th>
            </tr>
            </thead>';
    $selectInputFunds = "SELECT refillId, refillCurrency,refillAmount,refillDate FROM refill ORDER BY refillDate DESC";
    $resultSelectInputFunds = $link ->query($selectInputFunds);
    if ($resultSelectInputFunds -> num_rows > 0) {
        while ($row = $resultSelectInputFunds -> fetch_assoc()) {
            echo "<tr><td>" . $row['refillId']
                    . "</td><td>" . $row['refillCurrency']
                    . "</td><td>" . $row['refillAmount']
                    . "</td><td>" . $row['refillDate']
                    . "</td></tr>";
        }
    }
} elseif (isset($_POST['outputFunds'])) {
    echo '<div class="col-md-8"> 
<div><center><h1>Summary of funds withdrawn from the wallet</h1></center></div>
    <div class="table-responsive">
       <table class="table table-striped" id="dataTable" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Currency</th>
                <th>Amount withdrawal</th>
                <th>Date withdrawal</th>
            </tr>
            </thead>';

    $selectOutputFunds = "SELECT withdrawalId, withdrawalCurrency,withdrawalAmount,withdrawalDate FROM withdrawal ORDER BY withdrawalDate DESC";
    $resultSelectOutputFunds = $link ->query($selectOutputFunds);
    if ($resultSelectOutputFunds -> num_rows > 0) {
        while ($row = $resultSelectOutputFunds -> fetch_assoc()) {
            echo "<tr><td>" . $row['withdrawalId']
            . "</td><td>" . $row['withdrawalCurrency']
            . "</td><td>" . $row['withdrawalAmount']
            . "</td><td>" . $row['withdrawalDate']
            . "</td></tr>";
        }
    }
    $link->close();
} elseif (isset($_POST['buyCoin'])) {
    echo '<div class="col-md-8"> 
<div><center><h1>Summary of purchased coins on the exchange in the wallet</h1></center></div>
    <div class="table-responsive">
       <table class="table table-striped" id="dataTable" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Coin name</th>
                <th>Coin amount</th>
                <th>Coin price</th>
                <th>Coin total coast</th>
                <th>Coin currency</th>
                <th>Coin buy date</th>
            </tr>
            </thead>';

    $selectBuyCoin = "SELECT coinId, coinName, coinAmount, coinPrice, coinTotalCoast, coinCurrency, coinDate FROM buyCoin ORDER BY coinDate DESC";
    $resultSelectBuyCoin = $link ->query($selectBuyCoin);
    if ($resultSelectBuyCoin -> num_rows > 0) {
        while ($row = $resultSelectBuyCoin -> fetch_assoc()) {
            echo "<tr><td>" . $row['coinId']
                . "</td><td>" . $row['coinName']
                . "</td><td>" . $row['coinAmount']
                . "</td><td>" . $row['coinPrice']
                . "</td><td>" . $row['coinTotalCoast']
                . "</td><td>" . $row['coinCurrency']
                . "</td><td>" . $row['coinDate']
                . "</td></tr>";
        }
    }
} elseif (isset($_POST['sellCoin'])) {
    echo '<div class="col-md-8"> 
<div><center><h1>Summary of sold coins from own wallet on the exchange</h1></center></div>
    <div class="table-responsive">
       <table class="table table-striped" id="dataTable" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Coin name</th>
                <th>Coin amount</th>
                <th>Coin price</th>
                <th>Coin total coast</th>
                <th>Coin currency</th>
                <th>Coin buy date</th>
            </tr>
            </thead>';

    $selectSellCoin = "SELECT coinId, coinName, coinAmount, coinPrice, coinTotalCoast, coinCurrency, coinDate FROM sellCoin ORDER BY coinDate DESC";
    $resultSelectSellCoin = $link ->query($selectSellCoin);
    if ($resultSelectSellCoin -> num_rows > 0) {
        while ($row = $resultSelectSellCoin -> fetch_assoc()) {
            echo "<tr><td>" . $row['coinId']
                . "</td><td>" . $row['coinName']
                . "</td><td>" . $row['coinAmount']
                . "</td><td>" . $row['coinPrice']
                . "</td><td>" . $row['coinTotalCoast']
                . "</td><td>" . $row['coinCurrency']
                . "</td><td>" . $row['coinDate']
                . "</td></tr>";
        }
    }
    $link->close();
}
    echo "</div>
    </div>";




?>

