<?php
session_start();
require_once 'header.php';
require_once '../func/singFunc.php';
?>

<link rel="stylesheet" href=<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="mt-6">
    <div class="container">

                <form action="../func/singFunc.php" method="POST" class="container" >
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" value = "<?=$_SESSION['err_name']?>" id="floatingInput" name="name" placeholder="Name">
                        <label for="floatingInput">First name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" value = "<?=$_SESSION['err_lastname']?>" name="lastname" placeholder="Last name">
                        <label for="floatingInput">Last name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="phone" class="form-control" id="floatingInput" value = "<?=$_SESSION['err_phone']?>" name="phone" placeholder="Phone">
                        <label for="floatingInput">Phone number</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" value = "<?=$_SESSION['err_email']?>" name="email" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" value = "<?=$_SESSION['err_pass']?>" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword"  name="reppassword" placeholder="Repeat Password">
                        <label for="floatingPassword">Repeat Password</label>
                    </div>
                    <br>
                    <input type="submit" value="Confirm" class="w-100 btn btn-lg btn-primary">

                </form>

    </div>
</div>

<?php
require_once 'footer.php';
?>