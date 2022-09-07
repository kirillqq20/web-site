<?php
ini_set('display_errors', 'Off');
require_once'header.php';
require_once 'chek.php';

?>
<h1 class="container mt-1">Fill out the calculation form</h1><br>
<link rel="stylesheet" href=<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="mt-6">
    <div class="container">

        <form action="chek.php" method="POST" class="container" >
            <div class="form-floating">
                <input type="text" class="form-control" name="campaign_name" placeholder="Enter your company name">
                <label for="floatingInput">Enter your company name</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput"  name="budget" placeholder="Enter budget">
                <label for="floatingInput">Enter budget</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="phone" class="form-control" id="floatingInput" name="bid" placeholder="Enter BID">
                <label for="floatingInput">Enter BID</label>
            </div>
            <br>
            <div >
                <input type="checkbox" name="control" id="control" value="1"  > <label>Enable/Disable</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword"  name="kod" placeholder="Enter your company code">
                <label for="floatingPassword">Enter your company code</label>
            </div>
            <br>
            <input type="submit" value="Confirm" class="w-100 btn btn-lg btn-primary">

        </form>

    </div>
</div>
<?php
require_once 'footer.php';
?>