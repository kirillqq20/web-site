<?php
require_once '../insert/header.php';
?>

    <br>
    <div class="container">
        <h1 class="pb-2 border-bottom">Enter the coin you added to your wallet</h1>
    </div> <br>
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST" class="container">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="coin" placeholder="Enter coin name">
                        <label for="floatingInput">Enter coin name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="amount" placeholder="Enter the amount of coins">
                        <label for="floatingInput">Enter the amount of coins</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="price" placeholder="Enter the price of one coin">
                        <label for="floatingInput">Enter the price of one coin</label>
                    </div>
                    <br>

                    <div class="input-group">
                        <select class="form-select" name="currency">
                            <option value="0">-- Enter currency --</option>
                            <option value="USDT">USDT</option>
                            <option value="UAH">UAH</option>
                            <option value="EUR">EUR</option>
                            <option value="USDC">USDC</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="date" class="form-control" id="floatingInput" name="date" placeholder="Enter date of purchase">
                        <label for="floatingInput">Enter date of purchase</label>
                    </div>
                    <br>
                    <center>
                        <input type="submit" value="Confirm" class="btn btn-primary">
                    </center>

                </form>
            </div>

            <div class="col-md-5">
                <div class="container">
                    <img src="../image/eth.gif" alt="">
                </div>

            </div>
        </div>
<?php
$link = mysqli_connect('cobra_database', 'root', '', 'krypto_db');
if (isset($_POST['coin'])) {
    $coin = htmlspecialchars($_POST['coin']);
    $amount = htmlspecialchars($_POST['amount']);
    $price = htmlspecialchars($_POST['price']);
    $currency = htmlspecialchars($_POST['currency']);
    $date = htmlspecialchars($_POST['date']);

    $total = $amount * $price;

    $insertBuyCoin = "INSERT INTO buyCoin (coinName, coinAmount, coinPrice, coinTotalCoast, coinCurrency, coinDate) VALUES ('" . $coin . "', '" . $amount . "', '" . $price . "', '" . $total . "', '" . $currency . "', '" . $date . "')";
    if ($link ->query($insertBuyCoin) === true) {
        echo 'New record created successfully';
    } else {
        echo "Error:" . $insertBuyCoin . '<br>' . $link->error;
    }
    $link -> close();
}




require_once '../insert/footer.php';
?>