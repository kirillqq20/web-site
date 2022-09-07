<?php

require_once '../insert/header.php';

$link = mysqli_connect('cobra_database', 'root', '', 'krypto_db');
?>
    <br>
 <div class="container">
        <h1 class="pb-2 border-bottom">Sale of coins</h1>
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="container">
                    <img src="../image/blochain.gif" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <form action="" method="POST" class="container">
<lable>Select the coin you want to sell :</lable>
<div>
      <select class="form-select" name="coinName">
      <option value="0">-- Enter coin name --</option>
<?php
$sql = "SELECT coinName FROM buyCoin";
$resultSearch = $link->query($sql);
if ($resultSearch->num_rows > 0) {
    while ($row = $resultSearch->fetch_assoc()) {
        echo "<option value=' " . $row['coinName'] . " '>" . $row['coinName'] . "</option>";
    }
    echo "</select><br>";
}
?>
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
        </div>

<?php
if (isset($_POST['coinName'])) {
    $coin = htmlspecialchars($_POST['coinName']);
    $amount = htmlspecialchars($_POST['amount']);
    $price = htmlspecialchars($_POST['price']);
    $currency = htmlspecialchars($_POST['currency']);
    $date = htmlspecialchars($_POST['date']);

    $total = $amount * $price;

    $insertSellCoin = "INSERT INTO sellCoin (coinName, coinAmount, coinPrice, coinTotalCoast, coinCurrency, coinDate) VALUES ('" . $coin . "', '" . $amount . "', '" . $price . "', '" . $total . "', '" . $currency . "', '" . $date . "')";
    if ($link ->query($insertSellCoin) === true) {
        echo 'New record created successfully';
    } else {
        echo "Error:" . $insertSellCoin . '<br>' . $link->error;
    }
    $link -> close();
}

require_once '../insert/footer.php';
