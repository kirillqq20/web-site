<?php
require_once '../insert/header.php';
?>
<div class="container">
    <h1 class="pb-2 border-bottom">Write down how much you replenished the balance of the wallet</h1>
</div> <br>
<div class="container ">
    <div class="row">
        <div class="col-md-4">
            <br><br><br><br>
            <form action="" method="POST" class="container">
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
        <input type="text" class="form-control" id="floatingInput"  name="amount" placeholder="Enter the replenishment amount">
        <label for="floatingInput">Enter the replenishment amount</label>
    </div>
    <br>
    <div class="form-floating">
        <input type="date" class="form-control" id="floatingInput" name="date" placeholder="Enter date">
        <label for="floatingInput">Enter date</label>
    </div>
    <br>

                <center>
                    <input type="submit" value="Confirm" class="btn btn-primary">
                </center>
            </form>

</div>

        <div class="col-md-6">

            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div id="tradingview_e2ed5"></div>
                <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/symbols/USDTUAH/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">График USDTUAH</span></a> от TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget(
                        {
                            "width": 980,
                            "height": 610,
                            "symbol": "BINANCE:USDTUAH",
                            "interval": "240",
                            "timezone": "Europe/Riga",
                            "theme": "light",
                            "style": "1",
                            "locale": "ru",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "container_id": "tradingview_e2ed5"
                        }
                    );
                </script>
            </div>
            <!-- TradingView Widget END -->

        </div>
    </div>
</div>

<?php
$link = mysqli_connect('cobra_database','root','','krypto_db') ;

if (isset($_POST['currency'])) {
    $currency = htmlspecialchars($_POST['currency']);
    $amount = htmlspecialchars($_POST['amount']);
    $date = htmlspecialchars($_POST['date']);


    $insertDep = "INSERT INTO refill (refillCurrency, refillAmount, refillDate) VALUES ('" . $currency . "', '" . $amount . "', '" . $date . "')";
    if ($link->query($insertDep) === true) {
        echo 'New record created successfully';
    } else {
        echo "Error:" . $insertDep . '<br>' . $link->error;
    }
    $link->close();
}
require_once '../insert/footer.php';
?>










