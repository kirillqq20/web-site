<?php
require_once 'header.php';
?>

    <link rel="stylesheet" href=<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="mt-6">
        <div class="container">

            <form action="login.php" method="post">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <br>
                <input type="submit" value="Login" class="w-100 btn btn-lg btn-primary">
            </form>

        </div>
    </div>

<?php
$link = mysqli_connect('cobra_database','root','','TechTovar') ;
if (isset($_POST['email'])) {
    $validation = "SELECT emailUser, passwordUser FROM registration WHERE emailUser LIKE '%" . $_POST['email'] . "%'";
    $result = $link->query($validation);
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            if ($row['emailUser'] === $_POST['email'] && $row['passwordUser'] === $_POST['password']){
                ?>
                <div class="form-control">
                    <div class="container">
                        <h1>You have successfully logged in</h1><br>
                        <p><a class="blockquote-footer" href="../public/index.php">Back to home page</a></p>
                        <p><a class="blockquote-footer" href="../public/product.php">Products</a></p>
                        <p><a class="blockquote-footer" href="../public/addprod.php">Add new product</a></p>
                        <p><a class="blockquote-footer" href="../public/warehouse.php">Warehouse</a></p>
                    </div>
                </div>

<?php
            }
    $link->close();
}
    }
}

require_once 'footer.php';
?>