<?php
include '../Components/header.php';
include '../Components/Connection.php';

if (!isset($_SESSION['name'])) {
    header("Location: Login.php");
}

$postId = $_GET['postId'];

$query = "SELECT A.id AS postId, B.id AS userId ,  caption ,description , postPicture , name AS userName , postCreatedAt FROM tblposts AS A LEFT JOIN tblusers AS B ON A.userId = B.id WHERE A.id = $postId";

$result = mysqli_query($connection, $query);

?>


<div class="row">
    <?php
    while ($data = mysqli_fetch_assoc($result)) {
    ?>

        <h1><?php echo $data['caption'] ?></h1>
        <img height="500px" src="../Images/Posts/<?php echo $data['postPicture'] ?>" alt="">
        <p><?php echo $data['description'] ?></p>
        <p>Post By <b><?php echo $data['userName'] ?></b></p>
        <p>Posted on <b><?php echo $data['postCreatedAt'] ?></b></p>

        <?php

        if ($_SESSION['userId'] == $data['userId'] || $_SESSION['userType'] == 1) {
        ?>
            <div class="d-flex">
                <a href="Editpost.php?id=<?php echo $data['postId'] ?>" class="btn btn-warning mx-1">Edit</a>
                <a href="DeletePost.php?id=<?php echo $data['postId'] ?>" class="btn btn-danger mx-1">Delete</a>
            </div>
        <?php
        }
        ?>



    <?php
    }

    ?>
</div>
<?php

include '../Components/footer.php'
?>