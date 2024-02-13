<?php
include '../Components/header.php';


if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $password = $_POST['passwords'];

    $connection =  mysqli_connect("localhost", "root", "", "myproject");

    $query = "SELECT * FROM tblusers WHERE email = '$email' && passwords = '$password'";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        header("Location: Home.php");
    } else {

        header("Location: Login.php");
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Login" name="login">
    </div>

</form>


<p>Dont Have An Account <a href="SignUp.php">Sign Up</a></p>