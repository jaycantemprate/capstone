<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user_tbl WHERE  email = '$email'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0) {
        if($password == $row['password']) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            header("Location: ../index.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> aler('User Not Registered'); </script>";
    }
}

if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $duplicate = mysqli_query($conn, "SELECT * FROM user_tbl WHERE email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Email already taken'); </script>";
    }
    else{
        if($password == $confirmpassword) {
            $query = "INSERT INTO user_tbl VALUES ('','$firstname','$lastname','$contact','$email','$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Registration successful')</script>";
        }
        else{
            echo
            "<script> alert('Password does not match')</script>";
        }
    }
}
?>




<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="#" method="post" autocomplete="off">

                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" name="email" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="password" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button type="submit" name="submit">Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>

              

              

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="#" method="post" autocomplete="off">
                        <div class="field input-field">
                            <input type="text" placeholder="First Name" class="input" name="firstname" required>
                        </div>
                        <div class="field input-field">
                            <input type="text" placeholder="Last Name" class="input" name="lastname" required>
                        </div>

                        <div class="field input-field">
                            <input type="text" placeholder="Contact" class="input" name="contact" required>
                        </div>

                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" name="email" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" class="password" name="password" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password" name="confirmpassword" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button type="submit" name="submit">Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="form" class="link login-link">Login</a></span>
                    </div>
                </div>

    

               

            </div>
        </section>

        <!-- JavaScript -->
        <script src="script.js"></script>
    </body>
</html>