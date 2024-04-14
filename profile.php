<?php
require 'user/config.php';
if (isset($_POST['save'])) {
    $petname = $_POST['petname'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $sex = $_POST['sex'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $result = mysqli_query($conn, "SELECT * FROM user_tbl WHERE  email = '$email'");
    $row = mysqli_fetch_assoc($result);

    
    $query = "INSERT INTO pet_tbl VALUES ('','$petname','$species','$breed','$sex','$birthdate','$address')";
    mysqli_query($conn,$query);
    echo
    "<script> alert('Registration successful')</script>";
        header("Location: index.php");
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>

    <!--Side Panel-->
    <div class="sidebar">
        <div class="hero">
            <img src="img/logo1.jpg" alt="">
            <hr class="underline">
        </div>
        <div class="logo">
            <ul class="menu">
                <li>
                    <a href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="profile.php">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.php">
                        <i class="fa-solid fa-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="store.php">
                        <i class="fa-solid fa-shop"></i>
                        <span>Store</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-paw"></i>
                        <span>Pets</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="user/index.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <!--<span>Primary</span>-->
                <h2>Profile</h2>
            </div>

            <div class="user-info">
                <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
                </div>
                <img src="img/img.jpg" alt="">
            </div>
        </div>
 

        <div class="card-container">
            <link rel="stylesheet" href="css/profile.css">
            <h3 class="main-title">Registration for Pet</h3>
            <div class="form-content">
                <form action="#" method="post" autocomplete="off">
                    <div class="field input-field">
                        <div class="input-group">
                            <label for="nameofpet">Name of Pet:</label>
                            <input type="text" placeholder="Name Of Pet" class="pet" name="petname" required>
                            <label for="species">Species:</label>
                            <input type="text" placeholder="Species" class="spec" name="species" required>
                            <label for="breed">Breed:</label>
                            <input type="text" placeholder="Breed" class="breed" name="breed" required>
                            <label for="Address">Address:</label>
                            <input type="text" placeholder="Address" class="address" name="address" required>
                        </div>
                        <div class="input-group">
                            <label for="gender">Sex:</label>
                            <select name="gender" id="gender" class="input" required>
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label for="date">Date:</label>
                            <input type="date" placeholder="Date of Birth" class="input" name="birthdate" required>
                            <div class="button">
                                <button type="submit" name="save">Save</button>
                            </div>
                        </div>
                        <a href="">+ Add more</a>


                    </div>
                </form>
            </div>


        </div>

        
        </div>
    </div>
</body>
</html>