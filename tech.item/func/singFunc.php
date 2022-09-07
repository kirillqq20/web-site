<?php
session_start();
require_once '../insert/header.php';

unset($_SESSION['err_name']);
unset($_SESSION['err_lastname']);
unset($_SESSION['err_phone']);
unset($_SESSION['err_email']);
unset($_SESSION['err_pass']);


$name = htmlspecialchars($_POST['name']);
$lastname = htmlspecialchars($_POST['lastname']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['password']);
$repPass = htmlspecialchars($_POST['reppassword']);

$link = mysqli_connect('cobra_database','root','','TechTovar') ;



    if (strlen($name) < 4){
        $_SESSION['err_name'] = 'Input correct name';

    }elseif (strlen($lastname) < 4){
        $_SESSION['err_lastname'] = 'Input correct lastname';

    }elseif (strlen($phone) ==! 10){
        $_SESSION['err_phone'] = 'Input correct phone';

    }elseif (strlen($email) <6 || strpos($email, "@")==false){
        $_SESSION['err_email'] = 'Input correct email';

    }elseif ($pass ==! $repPass){
        $_SESSION['err_pass'] = 'Input correct password';

    }else{
       $name = trim($name);
        $lastname = trim($lastname);
        $phone = trim($phone);
        $email = trim($email);
        $pass = trim($pass);
        $insertUser ="INSERT INTO registration (nameUser, lastnameUser, phoneUser, emailUser, passwordUser)
                    VALUES ( '" . $name . "', '" . $lastname . "','" . $phone . "','" . $email . "','" . $pass . "')";

        if ($link->query($insertUser) === TRUE){
            ?>
            <div class="form-control" >
                <div class="container" >
                    <h1>Product added successfully</h1><br>
                   <p><a class="blockquote-footer" href="../public/index.php">Back to home page</a></p>
                    <p><a class="blockquote-footer" href="../public/product.php">Products</a></p>
                    <p><a class="blockquote-footer" href="../public/addprod.php">Add new product</a></p>
                    <p><a class="blockquote-footer" href="../public/warehouse.php">Warehouse</a></p>
                </div>
            </div>

            <?php
        } else {
            echo "Error: " . $insertUser . "<br>" . $link->error;
        }
        $link->close();


}
?>

