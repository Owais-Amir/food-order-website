<?php
include '../Components/header.php';
include '../Components/Connection.php';


if (!isset($_SESSION['name'])) {
    header("Location: Login.php");
}

if (isset($_POST['description'])) {

    $description = $_POST['description'];
    $userId = $_SESSION['userId'];

    $query = "INSERT into tblContactUs (description , userId) VALUES ('$description' , $userId);";

    $result = mysqli_query($connection, $query);


    if ($result == true) {

        header("Location: Home.php");
    } else {
        echo "Some Error!";
    }
}

?>
<h1 class="text-center">Contact Us</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="description" class="form-label">Contact Us</label>
        <textarea name="description" class="form-control" placeholder="Contact Us" id="description" cols="30" rows="10"></textarea>
    </div>

    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Submit" name="contactUs">
    </div>

</form>


<?php
include '../Components/footer.php';
?>