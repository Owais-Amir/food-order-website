<?php
include '../Components/header.php';


if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profilePicture = $_FILES['ProfilePicture'];
    $profilePictureName =  $profilePicture['name'];
    $profilePictureTmpName =  $profilePicture['tmp_name'];
    $query2 = "SELECT * FROM tblUsers WHERE email = '$email'";
    $connection = mysqli_connect("localhost", "root", "", "project");

    // Rest of your code using $connection
    
    $query2 = "SELECT * FROM tblUsers WHERE email = '$email'";
    $result2 = mysqli_query($connection, $query2);

    if (mysqli_num_rows($result2) > 0) {
?>
        <script>
            alert("This Email Is Already Taken");
        </script>
<?php
    }



       move_uploaded_file($profilePictureTmpName, '../Image/' . $profilePictureName);

    $connection =  mysqli_connect("localhost", "root", "", "project");

    $query = "INSERT INTO tblusers (name , email , passwords ,profilePicture) VALUES ('$name' , '$email' , '$password' , '$profilePictureName')";

    $result = mysqli_query($connection , $query);

    if ($result == true) {
        header("Location: Loginout.php");
    } else {
        echo "Account Not Created";
    
    }

}


?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
        <span class="text-danger d-none" id="nameErrorMsg">Name is Required</span>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
        <span class="text-danger d-none" id="emailErrorMsg">Email is Required</span>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
        <span class="text-danger d-none" id="passwordErrorMsg">Password is Required</span>
    </div>
    <div class="mb-3">
        <label for="cPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="cPassword" placeholder="Confirm Password" name="cPassword" required>
        <span class="text-danger d-none" id="cPasswordErrorMsg">Confirm Password is Required</span>
        <span class="text-danger d-none" id="cPasswordErrorMsg2">Confirm Password and Password Must Be Same</span>
    </div>
    <div class="mb-3">
        <label for="ProfilePicture" class="form-label">Profile Picture</label>
        <input type="file" class="form-control" id="ProfilePicture" name="ProfilePicture" required>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="SignUp" name="SignUp">
    </div>

</form>


<script>
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const cPassword = document.getElementById('cPassword');
    const ProfilePicture = document.getElementById('ProfilePicture');

    const nameErrorMsg = document.getElementById('nameErrorMsg');
    const emailErrorMsg = document.getElementById('emailErrorMsg');
    const passwordErrorMsg = document.getElementById('passwordErrorMsg');
    const cPasswordErrorMsg = document.getElementById('cPasswordErrorMsg');
    const cPasswordErrorMsg2 = document.getElementById('cPasswordErrorMsg2');

    name.addEventListener('blur', () => {
        if (name.value == "") {
            nameErrorMsg.classList.remove("d-none")
            name.classList.add("is-invalid")

        } else {

            nameErrorMsg.classList.add("d-none")
            name.classList.remove("is-invalid")
        }
    });
    email.addEventListener('blur', () => {
        if (email.value == "") {
            emailErrorMsg.classList.remove("d-none")
            email.classList.add("is-invalid")
        } else {

            emailErrorMsg.classList.add("d-none")
            email.classList.remove("is-invalid")
        }
    });
    password.addEventListener('blur', () => {
        if (password.value == "") {
            passwordErrorMsg.classList.remove("d-none")
            password.classList.add("is-invalid")
        } else {
            passwordErrorMsg.classList.add("d-none")
            password.classList.remove("is-invalid")
            if (password.value != cPassword.value) {
                cPasswordErrorMsg2.classList.remove("d-none")
            } else {
                cPasswordErrorMsg2.classList.add("d-none")

            }
        }
    });
    cPassword.addEventListener('blur', () => {
        if (cPassword.value == "") {
            cPasswordErrorMsg.classList.remove("d-none")
            cPassword.classList.add("is-invalid")
        } else {
            cPasswordErrorMsg.classList.add("d-none")
            cPassword.classList.remove("is-invalid")
            if (password.value != cPassword.value) {
                cPasswordErrorMsg2.classList.remove("d-none")
            } else {
                cPasswordErrorMsg2.classList.add("d-none")

            }
        }
    });
</script>

<p>Already Have An Account <a href="login.php">Login</a></p>